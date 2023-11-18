<style>
    @import url('https://fonts.googleapis.com/css2?family=Nunito:wght@500;600;700;800;900&display=swap');
    *{
        font-weight: 600;
    }
.wrapper,
.buttonky button{
  background: #ecf0f3;
  box-shadow: -3px -3px 7px #ffffff,
               3px 3px 5px #ceced1;
}
    .buttonky button:hover:before{
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
.buttonky button:hover:before{
  z-index: -1;
  border-radius: 25px;
}

.wrapper .buttonky{
  display: flex;
  width: 100%;
  justify-content: space-between;
}
.buttonky button {
  position: relative;
  width: 100%;
  border: none;
  outline: none;
  padding: 6px 20px;
  text-align: center;
  text-decoration: none;
  color: #000000;
  left: -18px;
  top: -14px;
  font-size: 17px;
  font-weight: 700;
  border-radius: 25px;
  cursor: pointer;
  z-index: 4;
}
.buttonky button:hover{
    color: darkcyan;
}
.buttonky button i {
    text-align: center;
    font-size: 18px;
    top: 0.8px;
}
.buttonky button:first-child{
  margin-right: 10px;
}
.buttonky button:last-child{
  margin-left: 10px;
}

    .wrapper,
.buttonk button{
  background: #ecf0f3;
  box-shadow: -3px -3px 7px #ffffff,
               3px 3px 5px #ceced1;
}
    .buttonk button:hover:before{
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
.buttonk button:hover:before{
  z-index: -1;
  border-radius: 25px;
}

.wrapper .buttonk{
  display: flex;
  width: 100%;
  justify-content: space-between;
}
.buttonk button {
  position: relative;
  width: 100%;
  border: none;
  outline: none;
  padding: 6px 20px;
  text-align: center;
  text-decoration: none;
  color: #000000;
  left: -10px;
  bottom: -23.5px;
  font-size: 17px;
  font-weight: 700;
  border-radius: 25px;
  cursor: pointer;
  z-index: 4;
}
.buttonk button:hover{
    color: darkcyan;
}
.buttonk button i {
    text-align: center;
    font-size: 18px;
    top: 0.8px;
}
.buttonk button:first-child{
  margin-right: 10px;
}
.buttonk button:last-child{
  margin-left: 10px;
}

.wrapper,
.buttonks button{
  background: #ecf0f3;
  box-shadow: -3px -3px 7px #ffffff,
               3px 3px 5px #ceced1;
}
    .buttonks button:hover:before{
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
.buttonks button:hover:before{
  z-index: -1;
  border-radius: 25px;
}

.wrapper .buttonks{
  display: flex;
  width: 100%;
  justify-content: space-between;
}
.buttonks button {
  position: relative;
  width: 100%;
  border: none;
  outline: none;
  padding: 6px 20px;
  text-align: center;
  text-decoration: none;
  color: #000000;
  left: -9px;
  font-size: 17px;
  font-weight: 700;
  border-radius: 25px;
  cursor: pointer;
  z-index: 4;
}
.buttonks button:hover{
    color: darkcyan;
}
.buttonks button i {
    text-align: center;
    font-size: 18px;
    top: 0.8px;
}
.buttonks button:first-child{
  margin-right: 10px;
}
.buttonks button:last-child{
  margin-left: 10px;
}

.wrapper,
.buttond button{
  background: #ecf0f3;
  box-shadow: -3px -3px 7px #ffffff,
               3px 3px 5px #ceced1;
}

.buttond button:hover:before{
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
.buttond button:hover:before{
  z-index: -1;
  border-radius: 25px;
}

.wrapper .buttond{
  display: flex;
  width: 100%;
  justify-content: space-between;
}
.buttond button {
  position: relative;
  width: 40px;
  height: 40px;
  border: none;
  outline: none;
  padding: 7px 5px;
  text-align: center;
  text-decoration: none;
  color: darkcyan;
  font-size: 17px;
  font-weight: 800;
  border-radius: 68px;
  cursor: pointer;
  z-index: 4;
}
.buttond button:hover{
    color: #000;
}
.buttond button i {
    text-align: center;
    font-size: 18px;
    top: 0.8px;
}
.buttond button:first-child{
  margin-right: 10px;
}
.buttond button:last-child{
  margin-left: 10px;
}
</style>
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col d-flex justify-content-end">
                <div class="buttonk">
                <button type="button" id="empty_cart"><i class="fa-duotone fa-empty-set" style="--fa-secondary-opacity: 20;"></i> Empty Cart</button>
            </div>
            </div>
        </div>
        <div class="col d-flex justify-content-start">
            <div class="buttonky">
            <a href="./" class="btnn"><button><i class="fa-solid fa-plus"></i> Add</button></a>
            </div>
        </div>
        <div class="card" style="box-shadow: -3px -3px 7px #ffffff,3px 3px 5px #ceced1;
    background: #ecf0f3;border: none; border-radius: 10px;">
            <div class="card-body">
                <h3><b><i class="fa-duotone fa-paw-claws" style="--fa-primary-color: #266b6d; --fa-primary-opacity: 20; --fa-secondary-color: #266b6d; --fa-secondary-opacity: 20; font-size: 25px;"></i> Cart List <i class="fa-duotone fa-paw-claws" style="--fa-primary-color: #266b6d; --fa-primary-opacity: 20; --fa-secondary-color: #266b6d; --fa-secondary-opacity: 20; font-size: 25px;"></i></b></h3>
                <hr class="border-dark">
                <?php 
                $qry = $conn->query("SELECT c.*,p.name,i.price,p.id as pid,cc.category, b.name as `brand` from `cart` c inner join `inventory` i on i.id=c.inventory_id inner join products p on p.id = i.product_id inner join brands b on p.brand_id = b.id inner join categories cc on p.category_id = cc.id where c.client_id = ".$_settings->userdata('id'));
                    while($row= $qry->fetch_assoc()):
                        $upload_path = base_app.'/uploads/product_'.$row['pid'];
                        $img = "";
                        foreach($row as $k=> $v){
                            $row[$k] = trim(stripslashes($v));
                        }
                        if(is_dir($upload_path)){
                            $fileO = scandir($upload_path);
                            if(isset($fileO[2]))
                                $img = "uploads/product_".$row['pid']."/".$fileO[2];
                            // var_dump($fileO);
                        }
                ?>
                    <div class="d-flex w-100 justify-content-between  mb-2 py-2 border-bottom cart-item">
                        <div class="d-flex align-items-center col-8">
                            <div class="buttond">
                            <a href="javascript:void(0)" class="rem_item" data-id="<?php echo $row['id'] ?>"><button><i class="fa fa-trash"></i></button></a>
                            </div>
                            <img src="<?php echo validate_image($img) ?>" loading="lazy" class="cart-prod-img mr-2 mr-sm-2" alt="">
                            <div>
                                <p class="mb-1 mb-sm-1">Product:<b> <?php echo $row['name'] ?></p>
                                <small>Brand:<b> <?php echo ($row['brand']) ?></small><br>
                                <small>Category:<b> <?php echo ($row['category']) ?></small>
                                    <p class="mb-1 mb-sm-1"><small><b>Price: <i class="fa-solid fa-peseta-sign"></i></b> <span class="price"style="font-size:16px;"><?php echo number_format($row['price']) ?></span></small></p>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <button class="btna min-qty" type="button" id="button-addon1"><i class="fa fa-minus"></i></button>
                                    </div>
                                    <input type="number" class="form-control form-control-sm text-center cart-qty" placeholder="" aria-label="Example text with button addon" value="<?php echo $row['quantity'] ?>" aria-describedby="button-addon1" data-id="<?php echo $row['id'] ?>" readonly style="border-radius: 20px;left: 1px;bottom: -7px;">
                                    <div class="input-group-append">
                                        <button class="btna plus-qty" type="button" id="button-addon1"><i class="fa fa-plus"></i></button>
                                    </div>
                                    </div>

                                
                            </div>
                        </div>
                        <div class="col text-right align-items-center d-flex justify-content-end">
                            <h4><b class="total-amount"><?php echo number_format($row['price'] * $row['quantity']) ?></b></h4>
                        </div>
                    </div>
                <?php endwhile; ?>
                <div class="d-flex w-100 justify-content-between mb-2 py-2 border-bottom">
                    <div class="col-8 d-flex justify-content-end"><h4>Total:</h4></div>
                    <div class="col d-flex justify-content-end"><h4 id="grand-total">-</h4></div>
                </div>
            </div>
        </div>
        <div class="d-flex w-100 justify-content-end">
            <div class="buttonks">
            <a href="./?p=checkout" class="btnn"><button><i class="fa-duotone fa-money-check-dollar-pen" style="--fa-secondary-opacity: 20;"></i> Check Out</button></a>
            </div>
        </div>
    </div>
</section>
<script>
    function calc_total(){
        var total  = 0

        $('.total-amount').each(function(){
            amount = $(this).text()
            amount = amount.replace(/\,/g,'')
            amount = parseFloat(amount)
            total += amount
        })
        $('#grand-total').text(parseFloat(total).toLocaleString('en-US'))
    }
    function qty_change($type,_this){
        var qty = _this.closest('.cart-item').find('.cart-qty').val()
        var price = _this.closest('.cart-item').find('.price').text()
            price = price.replace(/,/g,'')
            console.log(price)
        var cart_id = _this.closest('.cart-item').find('.cart-qty').attr('data-id')
        var new_total = 0
        start_loader();

        if($type == 'minus'){
            qty = parseInt(qty) - 1
        }else{
            qty = parseInt(qty) + 1
        }
        price = parseFloat(price)
        // console.log(qty,price)
        new_total = parseFloat(qty * price).toLocaleString('en-US')
        _this.closest('.cart-item').find('.cart-qty').val(qty)
        _this.closest('.cart-item').find('.total-amount').text(new_total)
        calc_total()

        $.ajax({
            url:'classes/Master.php?f=update_cart_qty',
            method:'POST',
            data:{id:cart_id, quantity: qty},
            dataType:'json',
            error:err=>{
                console.log(err)
                alert_toast("an error occured", 'error');
                end_loader()
            },
            success:function(resp){
                if(!!resp.status && resp.status == 'success'){
                    end_loader()
                }else{
                    alert_toast("an error occured", 'error');
                    end_loader()
                }
            }

        })
    }
    function rem_item(id){
        $('.modal').modal('hide')
        var _this = $('.rem_item[data-id="'+id+'"]')
        var id = _this.attr('data-id')
        var item = _this.closest('.cart-item')
        start_loader();
        $.ajax({
            url:'classes/Master.php?f=delete_cart',
            method:'POST',
            data:{id:id},
            dataType:'json',
            error:err=>{
                console.log(err)
                alert_toast("an error occured", 'error');
                end_loader()
            },
            success:function(resp){
                if(!!resp.status && resp.status == 'success'){
                   location.reload()
                }else{
                    alert_toast("an error occured", 'error');
                    end_loader()
                }
            }

        })
    }
    function empty_cart(){
        start_loader();
        $.ajax({
            url:'classes/Master.php?f=empty_cart',
            method:'POST',
            data:{},
            dataType:'json',
            error:err=>{
                console.log(err)
                alert_toast("an error occured", 'error');
                end_loader()
            },
            success:function(resp){
                if(!!resp.status && resp.status == 'success'){
                   location.reload()
                }else{
                    alert_toast("an error occured", 'error');
                    end_loader()
                }
            }

        })
    }
    $(document).ready(function(){
        calc_total()
        $('.min-qty').click(function(){
            i=parseInt($('.cart-qty').val());
            i=i=+2;
            if (i==0) {
                i=0;
            }
            $('.cart-qty').val(i);
            qty_change('minus',$(this))
        })
        $('.plus-qty').click(function(){
            qty_change('plus',$(this))
        })
        $('#empty_cart').click(function(){
            // empty_cart()
            _conf("Are you sure to empty your cart list?",'empty_cart',[])
        })
        $('.rem_item').click(function(){
            _conf("Are you sure to remove the item in cart list?",'rem_item',[$(this).attr('data-id')])
        })
    })
</script>