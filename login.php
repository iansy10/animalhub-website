<style>
    #uni_modal .modal-content>.modal-footer,#uni_modal .modal-content>.modal-header{
        display:none;
    }
    .form-group a:hover{
        text-decoration: underline;
    }
   .wrapper,
.buttonl button{
  background: #ecf0f3;
  box-shadow: -3px -3px 7px #ffffff,
               3px 3px 5px #ceced1;
}
    .buttonl button:hover:before{
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
.buttonl button:hover:before{
  z-index: -1;
  border-radius: 25px;
}

.wrapper .buttonl{
  display: flex;
  width: 100%;
  justify-content: space-between;
}
.buttonl button {
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
.buttonl button:hover{
    color: darkcyan;
}
.buttonl button i {
    text-align: center;
    font-size: 18px;
    top: 0.8px;
}
.buttonl button:first-child{
  margin-right: 10px;
}
.buttonl button:last-child{
  margin-left: 10px;
}
</style>
<div class="container-fluid" style="background: #ecf0f3;padding: 20px;background-size: cover;">
    <div class="row">
        <span class="float-right">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </span>
        <div class="col-lg-12">
            <h3 class="text-center">Login</h3>
            <hr style="margin-left: 50px; margin-right: 50px;">
            <form action="" id="login-form">
                <div class="form-group">
                    <label for="" class="control-label">Email <span style="color: red; font-size: 15px;">*</span></label>
                    <input type="email" class="form-control form" name="email" placeholder="Enter your Email" required style="box-shadow: inset -3px -3px 7px #ffffff,inset 3px 3px 5px #ceced1;
    background: #ecf0f3;border: none;padding: 20px; border-radius: 20px;font-weight: 600;">
                </div>
                <div class="form-group">
                    <label for="" class="control-label">Password <span style="color: red; font-size: 15px;">*</span></label>
                    <input type="password" class="form-control form" name="password" placeholder="Enter your Password" required style="box-shadow: inset -3px -3px 7px #ffffff,inset 3px 3px 5px #ceced1;
    background: #ecf0f3;border: none;padding: 20px; border-radius: 20px;font-weight: 600;">
                </div>
                <div class="form-group d-flex justify-content-between">
                    <b style="font-size: 15px;font-weight: 400;">You don't have an Account ?<a href="javascript:void()" id="create_account" style="color: darkcyan;font-weight: 400;font-size: 15px;">Register Here</a></b>
                    <div class="buttonl">
                       <button class="btn">Login
                    </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<script>
    $(function(){
        $('#create_account').click(function(){
            uni_modal("","registration.php","mid-large")
        })
        $('#login-form').submit(function(e){
            e.preventDefault();
            start_loader()
            if($('.err-msg').length > 0)
                $('.err-msg').remove();
            $.ajax({
                url:_base_url_+"classes/Login.php?f=login_user",
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
                        alert_toast("Login Successfully",'success')
                        setTimeout(function(){
                            location.reload()
                        },2000)
                    }else if(resp.status == 'incorrect'){
                        var _err_el = $('<div>')
                            _err_el.addClass("text-center alert alert-danger err-msg").text("Incorrect Username or Password.")
                        $('#login-form').prepend(_err_el)
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
</script>