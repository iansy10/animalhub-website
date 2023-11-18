<style>
    #uni_modal .modal-content>.modal-footer,#uni_modal .modal-content>.modal-header{
        display:none;
    }
    .form-group a:hover{
        text-decoration: underline;
    }
    .wrapper,
.buttons button{
  background: #ecf0f3;
  box-shadow: -3px -3px 7px #ffffff,
               3px 3px 5px #ceced1;
}
    .buttons button:hover:before{
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
.buttons button:hover:before{
  z-index: -1;
  border-radius: 25px;
}

.wrapper .buttons{
  display: flex;
  width: 100%;
  justify-content: space-between;
}
.buttons button {
  position: relative;
  width: 100%;
  border: none;
  outline: none;
  padding: 8px 30px;
  text-align: center;
  text-decoration: none;
  color: #000000;
  left: -11px;
  font-size: 17px;
  font-weight: 700;
  border-radius: 25px;
  cursor: pointer;
  z-index: 4;
}
.buttons button:hover{
    color: darkcyan;
}
.buttons button i {
    text-align: center;
    font-size: 18px;
    top: 0.8px;
}
.buttons button:first-child{
  margin-right: 10px;
}
.buttons button:last-child{
  margin-left: 10px;
}
</style>
<div class="container-fluid"style="background: #ecf0f3;padding: 20px;background-size: cover;">
    <form action="" id="registration">
        <div class="row" name="row">
        <label id="alert" class="fw-bold bg-danger text-light w-100 p-1" style="display:none;">
                        </label>
        <h3 class="text-center"><b style="margin-right: -25px;">Register</b>
            <span class="float-right">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </span>
        </h3>
            <hr style="margin-left: -15px;margin-left: -11.6px;background: transparent;">
        </div>
        <div class="row  align-items-center h-100">
            
            <div class="col-lg-5 border-right">
                
                <div class="form-group">
                    <label for="" class="control-label"style="font-size:15px;">First Name <span style="color: red; font-size: 15px;">*</span></label>
                    <input type="text" class="form-control form-control-sm form" name="firstname" placeholder="Enter your Firstname" required style="box-shadow: inset -3px -3px 7px #ffffff,inset 3px 3px 5px #ceced1;
    background: #ecf0f3;border: none;padding: 20px; border-radius: 20px;font-weight: 600;">
                </div>
                <div class="form-group">
                    <label for="" class="control-label" style="font-size:15px;">Last Name <span style="color: red; font-size: 15px;">*</span></label>
                    <input type="text" class="form-control form-control-sm form" name="lastname" placeholder="Enter your Lastname" required style="box-shadow: inset -3px -3px 7px #ffffff,inset 3px 3px 5px #ceced1;
    background: #ecf0f3;border: none;padding: 20px; border-radius: 20px;font-weight: 600;">
                </div>
                <div class="form-group">
                    <label for="" class="control-label" style="font-size:15px;">Mobile Number <span style="color: red; font-size: 15px;">*</span></label>
                    <input type="text" onkeypress="isInputNumber(event)" maxlength="11" class="form-control form-control-sm form" name="contact" placeholder="Enter your Mobilenumber" required style="box-shadow: inset -3px -3px 7px #ffffff,inset 3px 3px 5px #ceced1;
    background: #ecf0f3;border: none;padding: 20px; border-radius: 20px;font-weight: 600;">
                </div>
            </div>
            <div class="col-lg-7">
                <div class="form-group">
                    <label for="" class="control-label" style="font-size:15px;">Email <span style="color: red; font-size: 15px;">*</span></label>
                    <input type="email" class="form-control form-control-sm form" name="email" placeholder="Enter your Email" required style="box-shadow: inset -3px -3px 7px #ffffff,inset 3px 3px 5px #ceced1;
    background: #ecf0f3;border: none;padding: 20px; border-radius: 20px;font-weight: 600;">
                </div>
                <div class="form-group">
                    <label for="" class="control-label" style="font-size:15px;">Password <span style="color: red; font-size: 15px;">*</span></label>
                    <input type="password" class="form-control form-control-sm form" name="password" placeholder="Enter your Password" required style="box-shadow: inset -3px -3px 7px #ffffff,inset 3px 3px 5px #ceced1;
    background: #ecf0f3;border: none;padding: 20px; border-radius: 20px;font-weight: 600;">
    <p style="font-size:15px;color: indianred;">Password must be 8 characters</p>
                </div>
                <div class="form-group d-flex justify-content-between">
                    <p style="font-size: 15px; font-weight: 400;">Already have an account?<a href="javascript:void()" id="login-show" style="font-size: 15px; color: darkcyan;font-weight: 400;">Login Here</a></p>
                    <div class="buttons"><br>
                       <button class="btn">Register
                    </button>
                    </div>
                </div>
            </div>
        </div>
    </form>

</div>
<script>
    $(function(){
        $('#login-show').click(function(){
            uni_modal("","login.php")
        })
        $('#registration').submit(function(e){
            e.preventDefault();
            start_loader()
            if($('.err-msg').length > 0)
                $('.err-msg').remove();
            $.ajax({
                url:_base_url_+"classes/Master.php?f=register",
                method:"POST",
                data:$(this).serialize(),
                dataType:"json",
                error:err=>{
                    console.log(err)
                    alert_toast("Something went wrong!",'error')
                    end_loader()
                },
                success:function(resp){
                    if(typeof resp == 'object' && resp.status == 'success'){
                        alert_toast("Account successfully registered",'success')
                        setTimeout(function(){
                            location.reload()
                        },2000)
                    }else if(resp.status == 'failed' && !!resp.msg){
                        var _err_el = $('<div>')
                            _err_el.addClass("text-center alert alert-danger err-msg").text(resp.msg)
                        $('[name="row"]').after(_err_el)
                        end_loader()
                    }else{
                        console.log(resp)
                        alert_toast("Something went wrong!",'error')
                        end_loader()
                    }
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