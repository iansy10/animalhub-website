<style>
    .wrapper,
.buttonjy button{
  background: #ecf0f3;
  box-shadow: -3px -3px 7px #ffffff,
               3px 3px 5px #ceced1;
}

.buttonjy button:hover:before{
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
.buttonjy button:hover:before{
  z-index: -1;
  border-radius: 25px;
}

.wrapper .buttonjy{
  display: flex;
  width: 100%;
  justify-content: space-between;
}
.buttonjy button {
  position: relative;
  width: 100%;
  border: none;
  outline: none;
  padding: 8px 12px;
  text-align: center;
  text-decoration: none;
  color: #000;
  left: -9px;
  font-size: 17px;
  font-weight: 800;
  border-radius: 25px;
  cursor: pointer;
  z-index: 4;
}
.buttonjy button:hover{
    color: darkcyan;
}
.buttonjy button i {
    text-align: center;
    font-size: 18px;
    margin-left: 15px;

    top: 0.8px;
}
.buttonjy button:first-child{
  margin-right: 10px;
}
.buttonjy button:last-child{
  margin-left: 10px;
}
</style>
<link
      rel="stylesheet"
      data-purpose="Layout StyleSheet"
      title="Web Awesome"
      href="/css/app-wa-02670e9412103b5852dcbe140d278c49.css?vsn=d"
    >

      <link
        rel="stylesheet"
        href="https://site-assets.fontawesome.com/releases/v6.4.2/css/all.css"
      >

      <link
        rel="stylesheet"
        href="https://site-assets.fontawesome.com/releases/v6.4.2/css/sharp-solid.css"
      >

      <link
        rel="stylesheet"
        href="https://site-assets.fontawesome.com/releases/v6.4.2/css/sharp-regular.css"
      >

      <link
        rel="stylesheet"
        href="https://site-assets.fontawesome.com/releases/v6.4.2/css/sharp-light.css"
      >
<script src="https://www.paypalobjects.com/api/checkout.js"></script>
<?php 
$total = 0;
    $qry = $conn->query("SELECT c.*,p.name,i.price,p.id as pid from `cart` c inner join `inventory` i on i.id=c.inventory_id inner join products p on p.id = i.product_id where c.client_id = ".$_settings->userdata('id'));
    while($row= $qry->fetch_assoc()):
        $total += $row['price'] * $row['quantity'];
    endwhile;
?>
<section class="py-5">
    <div class="container">
        <div class="card" style="box-shadow: -3px -3px 7px #ffffff,3px 3px 5px #ceced1;
    background: #ecf0f3;border: none; border-radius: 10px;">
            <div class="card-body">
            <h3 class="text-center" style="font-weight: 900;text-transform: uppercase;"><b>Check Out</b></h3>
            <hr>
            <form action="" id="place_order">
                <input type="hidden" name="amount" value="<?php echo $total ?>">
                <input type="hidden" name="payment_method" value="cod">
                <input type="hidden" name="paid" value="0">
                <div class="row justify-content-center">
                    <div class="row justify-content-center">
                    <div class="form-group rows justify-content-center" style="text-align: center;">
                        <br>
                    <label for="" class="rows ml-3">Services <i class="fa-duotone fa-bell-concierge"></i></label>
                    <span class="rows ml-4">In-Store PickUp</span>
                    </div>
                    <div class="rows justify-content-center"style="text-align: center;">
                            <span><h4><b>Total:</b> <i class="fa-solid fa-peseta-sign" style="font-size: 21px;"></i><?php echo number_format($total) ?></h4></span>
                    </div>
                    <div class="form-group d-flex pl-2">
                        <div class="custom-control custom-radio">
                          <input class="custom-control-input custom-control-input-primary" type="hidden" id="customRadio4" name="order_type" value="1" checked="">
                        </div>
                        <div class="custom-control custom-radio ml-3">
                          <input class="custom-control-input custom-control-input-primary custom-control-input-outline" type="hidden" id="customRadio5" name="order_type" value="2">
                        </div>
                      </div>
                        <div class="form-group col address-holder">
                            <input type="hidden" id="" cols="30" rows="3" name="delivery_address" class="form-control" style="resize:none">
                        </div>
                        <hr>
                        <div class="col my-3">
                        <h4 class="text-dark" style="text-align: center;">Payment Method</h4>
                            <div class="d-flex justify-content-center">
                                <div class="buttonjy">
                                  <button><i class="fa-solid fa-cash-register"></i> <span style="margin-right:20px;">Pay over the counter</span></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        </div>
    </div>
</section>
<script>
paypal.Button.render({
    env: 'sandbox', // change for production if app is live,
 
        //app's client id's
	client: {
        sandbox:    'ARi2rJK5gQ-4catdPxRnfLOVQRMiCvq-qXMmlbItbjxWZfyq5u51mqE7Ppka7OG_0Bq5l_TIQkm45sUV',
        //production: 'AaBHKJFEej4V6yaArjzSx9cuf-UYesQYKqynQVCdBlKuZKawDDzFyuQdidPOBSGEhWaNQnnvfzuFB9SM'
    },
 
    commit: true, // Show a 'Pay Now' button
 
    style: {
    	color: 'blue',
    	size: 'small'
    },
 
    payment: function(data, actions) {
        return actions.payment.create({
            payment: {
                transactions: [
                    {
                    	//total purchase
                        amount: { 
                        	total: '<?php echo $total; ?>', 
                        	currency: 'PHP' 
                        }
                    }
                ]
            }
        });
    },
 
    onAuthorize: function(data, actions) {
        return actions.payment.execute().then(function(payment) {
    		// //sweetalert for successful transaction
    		// swal('Thank you!', 'Paypal purchase successful.', 'success');
            payment_online()
        });
    },
 
}, '#paypal-button');
function payment_online(){
    $('[name="payment_method"]').val("Online Payment")
    $('[name="paid"]').val(1)
    $('#place_order').submit()
}
$(function(){
    $('[name="order_type"]').change(function(){
        if($(this).val() ==2){
            $('.address-holder').hide('slow')
        }else{
            $('.address-holder').show('slow')
        }
    })
    $('#place_order').submit(function(e){
        e.preventDefault()
        start_loader();
        $.ajax({
            url:'classes/Master.php?f=place_order',
            method:'POST',
            data:$(this).serialize(),
            dataType:"json",
            error:err=>{
                console.log(err)
                alert_toast("an error occured","error")
                end_loader();
            },
            success:function(resp){
                if(!!resp.status && resp.status == 'success'){
                    alert_toast("CheckOut Successfully.","success")
                    setTimeout(function(){
                        location.replace('./')
                    },2000)
                }else{
                    console.log(resp)
                    alert_toast("an error occured","error")
                    end_loader();
                }
            }
        })
    })
})
</script>