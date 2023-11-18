<style>
.wrapper,
.buttonps button{
  background: #ecf0f3;
  box-shadow: -3px -3px 7px #ffffff,
               3px 3px 5px #ceced1;
}
    .buttonps button:hover:before{
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
.buttonps button:hover:before{
  z-index: -1;
  border-radius: 25px;
}

.wrapper .buttonps{
  display: flex;
  width: 100%;
  justify-content: space-between;
}
.buttonps button{
  position: relative;
  width: 100%;
  border: none;
  outline: none;
  padding: 8px 20px;
  text-align: center;
  text-decoration: none;
  color: #000;
  right: 11px;
  font-size: 17px;
  font-weight: 700;
  border-radius: 25px;
  cursor: pointer;
  z-index: 4;
}
.buttonps button:hover{
    color: darkcyan;
}
.buttonps button i {
    text-align: center;
    font-size: 18px;
    top: 0.8px;
}
.buttonps button:first-child{
  margin-right: 10px;
}
.buttonps button:last-child{
  margin-left: 10px;
}

.wrapper,
.buttonxe button{
  background: #ecf0f3;
  box-shadow: -3px -3px 7px #ffffff,
               3px 3px 5px #ceced1;
}

.buttonxe button:hover:before{
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
.buttonxe button:hover:before{
  z-index: -1;
  border-radius: 25px;
}

.wrapper .buttonxe{
  display: flex;
  width: 100%;
  justify-content: space-between;
}
.buttonxe button {
  position: relative;
  width: 100%;
  border: none;
  outline: none;
  padding: 8px 20px;
  text-align: center;
  right: 10px;
  text-decoration: none;
  color: #000;
  font-size: 17px;
  font-weight: 700;
  border-radius: 25px;
  cursor: pointer;
  z-index: 4;
}
.buttonxe button:hover{
  color: darkcyan;
}
.buttonxe button i {
    text-align: center;
    font-size: 18px;
    top: 0.8px;
}
.buttonxe button:first-child{
  margin-right: 10px;
}
.buttonxe button:last-child{
  margin-left: 10px;
}
</style>
<section class="py-0">
    <div class="container">
        <div class="card" style="box-shadow: -3px -3px 7px #ffffff,3px 3px 5px #ceced1; border-radius: 10px;background: #ecf0f3;border: none;">
            <div class="card-body">
                <div class="w-100 justify-content-between d-flex">
                    <h4><b><i class="fa-duotone fa-paw-claws" style="--fa-primary-color: #266b6d; --fa-primary-opacity: 20; --fa-secondary-color: #266b6d; --fa-secondary-opacity: 20; font-size: 25px;"></i> Update Account Details <i class="fa-duotone fa-paw-claws" style="--fa-primary-color: #266b6d; --fa-primary-opacity: 20; --fa-secondary-color: #266b6d; --fa-secondary-opacity: 20; font-size: 25px;"></i></b></h4>
                    <div class="buttonxe">
                            <a href="./?p=homee"><button><i class="fa-solid fa-arrow-left"></i> Back</button></a>
                    </div>
                </div>
                    <hr>
                    <div class="col-md-6" >
                        <form action="" id="update_account">
                        <input type="hidden" name="id" value="<?php echo $_settings->userdata('id') ?>">
                            <div class="form-group">
                                <label for="firstname" class="control-label">Firstname <span style="color: red; font-size: 15px;">*</span></label>
                                <input type="text" name="firstname" class="form-control form" value="<?php echo $_settings->userdata('firstname') ?>" required style="box-shadow: inset -3px -3px 7px #ffffff,inset 3px 3px 5px #ceced1;border: none;background: #ecf0f3; border-radius: 20px;padding: 0px 20px;">
                            </div>
                            <div class="form-group">
                                <label for="lastname" class="control-label">Lastname <span style="color: red; font-size: 15px;">*</span></label>
                                <input type="text" name="lastname" class="form-control form" value="<?php echo $_settings->userdata('lastname') ?>" required style="box-shadow: inset -3px -3px 7px #ffffff,inset 3px 3px 5px #ceced1;border: none;background: #ecf0f3; border-radius: 20px;padding: 0px 20px;">
                            </div>
                            <div class="form-group">
                                <label for="" class="control-label">Mobile Number <span style="color: red; font-size: 15px;">*</span></label>
                                <input type="text" onkeypress="isInputNumber(event)" maxlength="11" class="form-control form-control form" name="contact" value="<?php echo $_settings->userdata('contact') ?>" required style="box-shadow: inset -3px -3px 7px #ffffff,inset 3px 3px 5px #ceced1;
    background: #ecf0f3;background: #ecf0f3;border: none; border-radius: 20px;padding: 0px 20px;">
                            </div>
                            <div class="form-group">
                                <label for="email" class="control-label">Email <span style="color: red; font-size: 15px;">*</span></label>
                                <input type="text" name="email" class="form-control form" value="<?php echo $_settings->userdata('email') ?>" required style="box-shadow: inset -3px -3px 7px #ffffff,inset 3px 3px 5px #ceced1;
    background: #ecf0f3;background: #ecf0f3;border: none; border-radius: 20px;padding: 0px 20px;">
                            </div>
                            <div class="form-group">
                                <label for="password" class="control-label">Password <span style="color: red; font-size: 15px;">*</span></label>
                                <input type="password" name="password" class="form-control form" value="" placeholder="(Enter your Password)" required  style="box-shadow: inset -3px -3px 7px #ffffff,inset 3px 3px 5px #ceced1;
    background: #ecf0f3;background: #ecf0f3;border: none; border-radius: 20px;padding: 0px 20px;">
                            </div>
                            <div class="form-group">
                                <label for="cpassword" class="control-label">Confirm Password <span style="color: red; font-size: 15px;">*</span></label>
                                <input type="password" name="cpassword" class="form-control form" value="" placeholder="(Confirm your Password)" style="box-shadow: inset -3px -3px 7px #ffffff,inset 3px 3px 5px #ceced1;
    background: #ecf0f3;background: #ecf0f3;border: none; border-radius: 20px;padding: 0px 20px;">
                            </div>
                            <div class="form-group d-flex justify-content-end">
                                <div class="buttonps">
                                  <button><i class="fa-solid fa-pencil"></i> Update</button>
                                </div>
                            </div>
                        </form>
                    </div>
            </div>
        </div>
    </div>
</section>
<script>
$(function(){
        $('#update_account [name="password"],#update_account [name="cpassword"]').on('input',function(){
            if($('#update_account [name="password"]').val() != '' || $('#update_account [name="cpassword"]').val() != '')
            $('#update_account [name="password"],#update_account [name="cpassword"]').attr('required',true);
            else
            $('#update_account [name="password"],#update_account [name="cpassword"]').attr('required',false);
        })
        $('#update_account').submit(function(e){
            e.preventDefault();
            start_loader()
            if($('.err-msg').length > 0)
                $('.err-msg').remove();
            $.ajax({
                url:_base_url_+"classes/Master.php?f=update_account",
                method:"POST",
                data:$(this).serialize(),
                dataType:"json",
                error:err=>{
                    console.log(err)
                    alert_toast("an error occured",'error')
                    end_loader()
                },
                success:function(resp){
                    if(typeof resp == 'object' && resp.status == 'success'){
                        alert_toast("Account succesfully updated",'success');
                        $('#update_account [name="password"],#update_account [name="cpassword"]').attr('required',false);
                        $('#update_account [name="password"],#update_account [name="cpassword"]').val('');
                    }else if(resp.status == 'failed' && !!resp.msg){
                        var _err_el = $('<div>')
                            _err_el.addClass("alert alert-danger err-msg").text(resp.msg)
                        $('#update_account').prepend(_err_el)
                        $('body, html').animate({scrollTop:0},'fast')
                        end_loader()
                        
                    }else{
                        console.log(resp)
                        alert_toast("an error occured",'error')
                    }
                    end_loader()
                }
            })
        })
    })
function isInputNumber(evt){
                
                var ch = String.fromCharCode(evt.which);
                
                if(!(/[0-9]/.test(ch))){
                    evt.preventDefault();
                }
                
            }
</script>