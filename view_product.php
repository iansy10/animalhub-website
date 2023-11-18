<?php 
 $products = $conn->query("SELECT p.*,b.name as bname,c.category FROM `products` p inner join brands b on p.brand_id = b.id inner join categories c on p.category_id = c.id where md5(p.id) = '{$_GET['id']}' ");
 if($products->num_rows > 0){
     foreach($products->fetch_assoc() as $k => $v){
         $$k= stripslashes($v);
     }
    $upload_path = base_app.'/uploads/product_'.$id;
    $img = "";
    if(is_dir($upload_path)){
        $fileO = scandir($upload_path);
        if(isset($fileO[2]))
            $img = "uploads/product_".$id."/".$fileO[2];
        // var_dump($fileO);
    }
    $inventory = $conn->query("SELECT * FROM inventory where product_id = ".$id);
    $inv = array();
    while($ir = $inventory->fetch_assoc()){
        $ir['price'] = number_format($ir['price']);
        $ir['stock'] = $ir['quantity'];
        $sold = $conn->query("SELECT sum(quantity) FROM `order_list` where product_id = '{$ir['id']}' and order_id in (SELECT order_id from `sales`)")->fetch_array()[0];
        $sold = $sold > 0 ? $sold : 0;
        $ir['stock'] = $ir['stock'] - $sold;
        $inv[] = $ir;
    }
 }
?>
<style>
    .wrapper,
.wrapper .img-area,
.buttonj button{
  background: #ecf0f3;
  box-shadow: -3px -3px 7px #ffffff,
               3px 3px 5px #ceced1;
}
.wrapper{
  position: relative;
  width: 350px;
  padding: 30px;
  border-radius: 10px;
  display: flex;
  align-items: center;
  justify-content: center;
  flex-direction: column;
}

.wrapper .img-area{
  height: 250px;
  width: 250px;
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  box-shadow: inset -3px -3px 7px #ffffff,inset 3px 3px 5px #ceced1;
}
.img-area .inner-area{
  height: calc(100% - 20px);
  width: calc(100% - 20px);
  border-radius: 50%;
}
.inner-area img{
  height: 100%;
  width: 100%;
  border-radius: 50%;
  object-fit: cover;
}
.wrapper .name{
  font-size: 23px;
  font-weight: 900;
  text-transform: uppercase;
  -webkit-text-stroke: 1px gray;
  color: darkcyan;
  text-align: center;
  letter-spacing: 1px;
  margin: 10px 0 5px 0;
}
.wrapper .about{
  color: #000000;
  font-weight: 400;
  font-size: 16px;
  margin-bottom: 10px;
}


.buttonj button:hover:before{
  content: "";
  position: absolute;
  top: 0;
  left: 0;
  bottom: 0;
  right: 0;
  border-radius: 50%;
  background: #ecf0f3;
  box-shadow: inset -3px -3px 7px #ffffff,
              inset 3px 3px 5px #ceced1;
}
.buttonj button:hover:before{
  z-index: -1;
  border-radius: 25px;
}

.wrapper .buttonj{
  display: flex;
  width: 100%;
  justify-content: space-between;
}
.buttonj button {
  position: relative;
  width: 100%;
  border: none;
  outline: none;
  padding: 8px 12px;
  text-align: center;
  text-decoration: none;
  color: darkcyan;
  font-size: 17px;
  font-weight: 500;
  border-radius: 25px;
  cursor: pointer;
  z-index: 4;
}
.buttonj button:hover{
    color: #000;
    font-weight: 500;
}
.buttonj button i {
    text-align: center;
    font-size: 18px;
    top: 0.8px;
}
.buttonj button:first-child{
  margin-right: 10px;
}
.buttonj button:last-child{
  margin-left: 10px;
}

.wrapper,
.buttong a{
  background: #ecf0f3;
  box-shadow: -3px -3px 7px #ffffff,
               3px 3px 5px #ceced1;
}
    .buttong a:hover:before{
  content: "";
  position: absolute;
  top: 0;
  left: 0;
  bottom: 0;
  right: 0;
  border-radius: 50%;
  background: #ecf0f3;
  box-shadow: inset -3px -3px 7px #ffffff,
              inset 3px 3px 5px #ceced1;
}
.buttong a:hover:before{
  z-index: -1;
  border-radius: 25px;
}

.wrapper .buttong{
  display: flex;
  width: 100%;
  justify-content: space-between;
}
.buttong a {
  position: relative;
  width: 100%;
  border: none;
  outline: none;
  padding: 12px 30px;
  text-align: center;
  text-decoration: none;
  color: darkcyan;
  font-size: 17px;
  font-weight: 500;
  border-radius: 25px;
  cursor: pointer;
  z-index: 4;
}
.buttong a:hover{
    color: #000;
  font-weight: 500;
}
.buttong a i {
    text-align: center;
    font-size: 18px;
    top: 0.8px;
}
.buttong a:first-child{
  margin-right: 10px;
}
.buttong a:last-child{
  margin-left: 10px;
}
</style>
<section class="py-5">
    <div class="container px-4 px-lg-5 my-5">
        
        <div class="row gx-4 gx-lg-5 align-items-center">
            <div class="col-md-6">
                <img class="card-img-top mb-5 mb-md-0" loading="lazy" id="display-img" src="<?php echo validate_image($img) ?>" alt="..." /style="border-radius: 10px;box-shadow: -1px -1px 2px #ffffff,3px 3px 5px #ceced1;">
                <div class="mt-2 row gx-2 gx-lg-3 row-cols-4 row-cols-md-3 row-cols-xl-4 justify-content-start">
                    <?php 
                        foreach($fileO as $k => $img):
                            if(in_array($img,array('.','..')))
                                continue;
                    ?>
                    <div class="col">
                        <a href="javascript:void(0)" class="card-img-top <?php echo $k == 2 ? "active":'' ?>"><img src="<?php echo validate_image('uploads/product_'.$id.'/'.$img) ?>" loading="lazy"  class="img-thumbnail" alt=""style="border-radius: 10px;box-shadow: -1px -1px 2px #ffffff,3px 3px 5px #ceced1;border: none;"></a>
                    </div><br>
                    <?php endforeach; ?>
                </div>
            </div>
            <div class="col-md-6">
                <!-- <div class="small mb-1">SKU: BST-498</div> -->
                <h1 class="display-5 fw-bolder pb-1" style="border-bottom: 2px solid darkcyan;-webkit-text-stroke: 1px gray;color: darkcyan;letter-spacing: 1px;text-transform: uppercase;"><?php echo $name ?></h1>
                <div class="fs-5 mb-5">
                <i class="fa-solid fa-peseta-sign" style="font-size: 15px;color: darkcyan;"></i> <span id="price"style="font-size: 25px;-webkit-text-stroke: 1px gray;color: darkcyan;letter-spacing: 1px;text-transform: uppercase;font-weight: 900;"><?php echo isset($inv[0]['price']) ?  number_format($inv[0]['price']) : "--" ?>,00</span>
                <br>
                <p class="m-0"><small style="font-size: 18px;">Brand: <?php echo $bname ?></small></p>
                <span><small><span class="text-dark">Available Stock:</span> <span id="avail"><?php echo isset($inv[0]['stock']) ? number_format($inv[0]['stock']) : "--" ?></span></small></span>
                </div>
                <form action="" id="add-cart">
                <div class="d-flex">
                    <input type="hidden" name="price" value="<?php echo $inv[0]['price'] ?>">
                    <input type="hidden" name="inventory_id" value="<?php echo $inv[0]['id'] ?>">
                    <input class="form-control text-center me-3" id="inputQuantity" type="hidden" value="1" style="max-width: 3rem" name="quantity" />
                    <div class="mb-0" style="margin-top: -25px;margin-left: -11px;">
                    <div class="buttonj">
                      <button type="submit"><i class="fa-duotone fa-cart-circle-plus" style="--fa-primary-opacity: 20; --fa-secondary-opacity: 20;"> </i> ADD TO CART
                    </button>
                    </div>
                    </div>
                </div>
                </form>
                <div class="mb-1" style="margin-top: 20px;">
                    <span class="lead" style="font-size: 18px;"><?php echo stripslashes(html_entity_decode($specs)) ?></span>
                    </div>
            </div>
        </div>
    </div>
</section>
<!-- Related items section-->
<section class="py-6">
        <h2 class="mb-5 justify-content-center" style="text-align: center; text-transform: uppercase;"><i class="fa-duotone fa-paw-claws" style="--fa-primary-color: #266b6d; --fa-primary-opacity: 20; --fa-secondary-color: #266b6d; --fa-secondary-opacity: 20; font-size: 40px;"></i> <span style="text-shadow: 3px 2px 1px #000;color: darkcyan;font-weight: 900;font-size: 40px;">Related products</span> <i class="fa-duotone fa-paw-claws" style="--fa-primary-color: #266b6d; --fa-primary-opacity: 20; --fa-secondary-color: #266b6d; --fa-secondary-opacity: 20; font-size: 40px;"></i></h2>
        <div class="row gx-4 gx-lg-5 row-cols-1 row-cols-md-3 row-cols-xl-3 justify-content-center">
        <?php 
            $products = $conn->query("SELECT p.*,b.name as bname,c.category FROM `products` p inner join brands b on p.brand_id = b.id inner join categories c on p.category_id = c.id where p.status = 1 and (p.category_id = '{$category_id}' or p.sub_category_id = '{$sub_category_id}') and p.id !='{$id}' order by rand() limit 4 ");
            while($row = $products->fetch_assoc()):
                $upload_path = base_app.'/uploads/product_'.$row['id'];
                $img = "";
                if(is_dir($upload_path)){
                    $fileO = scandir($upload_path);
                    if(isset($fileO[2]))
                        $img = "uploads/product_".$row['id']."/".$fileO[2];
                    // var_dump($fileO);
                }
                $inventory = $conn->query("SELECT * FROM inventory where product_id = ".$row['id']);
                $_inv = array();
                foreach($row as $k=> $v){
                    $row[$k] = trim(stripslashes($v));
                }
                $inventory = $conn->query("SELECT * FROM inventory where product_id = ".$row['id']);
                            $inv = array();
                            while($ir = $inventory->fetch_assoc()){
                                $inv[] = number_format($ir['price']);
                            }
        ?>
            <div class="pb-5 justify-content-center"style="display: flex;
  justify-content: center;
  flex-wrap: wrap;">
                <div class="wrapper">
    <div class="img-area">
      <div class="inner-area">
        <img src="<?php echo validate_image($img) ?>" alt="..."/>
      </div>
    </div>
    <div class="name"><?php echo $row['name'] ?></div>
    <?php foreach($inv as $k=> $v): ?>
    <div class="about"><i class="fa-solid fa-peseta-sign" style="font-size: 15px;color: darkcyan;"></i> <b style="font-size: 25px;font-weight: 900;-webkit-text-stroke: 1px gray;color: darkcyan;"><?php echo $v ?>,00</b></div>
    <?php endforeach; ?>
    <div class="about">Brand: <?php echo $row['bname'] ?></div>
    <div class="about">Category: <?php echo $row['category'] ?></div>
    <div class="buttong">
      <a href=".?p=view_product&id=<?php echo md5($row['id']) ?>">View Details <i class="fa-sharp fa-solid fa-arrow-up-right-from-square"></i></a>
    </div>
  </div>
            </div>
            <?php endwhile; ?>
        </div>
</section>
<script>
    var inv = $.parseJSON('<?php echo json_encode($inv) ?>');
    $(function(){
        $('.view-image').click(function(){
            var _img = $(this).find('img').attr('src');
            $('#display-img').attr('src',_img);
            $('.view-image').removeClass("active")
            $(this).addClass("active")
        })
        $('.p-size').click(function(){
            var k = $(this).attr('data-id');
            $('.p-size').removeClass("active")
            $(this).addClass("active")
            if(!!inv[k]){
                $('#price').text(inv[k].price)
                $('[name="price"]').val(inv[k].price)
                $('#avail').text(inv[k].stock)
                $('[name="inventory_id"]').val(inv[k].id)
            }else{
                alert_toast("An error occured",'error')
            }

        })

        $('#add-cart').submit(function(e){
            e.preventDefault();
            if('<?php echo $_settings->userdata('id') ?>' <= 0){
                uni_modal("","login.php");
                return false;
            }
            start_loader();
            $.ajax({
                url:'classes/Master.php?f=add_to_cart',
                data:$(this).serialize(),
                method:'POST',
                dataType:"json",
                error:err=>{
                    console.log(err)
                    alert_toast("an error occured",'error')
                    end_loader()
                },
                success:function(resp){
                    if(typeof resp == 'object' && resp.status=='success'){
                        alert_toast("Product added to cart.",'success')
                        $('#cart-count').text(resp.cart_count)
                    }else{
                        console.log(resp)
                        alert_toast("an error occured",'error')
                    }
                    end_loader();
                }
            })
        })
    })
</script>