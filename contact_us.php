<style>
/********** Template CSS **********/
:root {
    --primary: darkcyan;
    --secondary: #FFD33C;
    --light: darkcyan;
    --dark: #212121;
}

[class^=flaticon-]:before,
[class*=" flaticon-"]:before,
[class^=flaticon-]:after,
[class*=" flaticon-"]:after {
    font-size: inherit;
    margin-left: 0;
}

.btnz {
    text-transform: uppercase;
    font-weight: 700;
    transition: .5s;
    color: darkcyan;
}
.btn-square {
    width: 36px;
    height: 36px;
}

.btn-sm-square {
    width: 28px;
    height: 28px;
}

.btn-lg-square {
    width: 46px;
    height: 46px;
}

.btn-square,
.btn-sm-square,
.btn-lg-square {
    padding-left: 0;
    padding-right: 0;
    text-align: center;
}

.leftbord{
    border-left:5px solid var(--primary);
}
.wrapper,
.buttonp button{
  background: #ecf0f3;
  box-shadow: -3px -3px 7px #ffffff,
               3px 3px 5px #ceced1;
}
    .buttonp button:hover:before{
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
.buttonp button:hover:before{
  z-index: -1;
  border-radius: 25px;
}

.wrapper .buttonp{
  display: flex;
  width: 100%;
  justify-content: space-between;
}
.buttonp button {
  position: relative;
  width: 100%;
  border: none;
  outline: none;
  padding: 12px 30px;
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
.buttonp button:hover{
    color: darkcyan;
}
.buttonp button i {
    text-align: center;
    font-size: 18px;
    top: 0.8px;
}
.buttonp button:first-child{
  margin-right: 10px;
}
.buttonp button:last-child{
  margin-left: 10px;
}

.wrapper,
.buttonu button{
  background: #ecf0f3;
  box-shadow: -3px -3px 7px #ffffff,
               3px 3px 5px #ceced1;
}

.buttonu button:hover:before{
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
.buttonu button:hover:before{
  z-index: -1;
  border-radius: 25px;
}

.wrapper .buttonu{
  display: flex;
  width: 22%;
  justify-content: space-between;
}
.buttonu button {
  position: relative;
  width: 22%;
  border: none;
  outline: none;
  padding: 10px 0;
  text-align: center;
  text-decoration: none;
  color: #000;
  font-size: 17px;
  font-weight: 700;
  border-radius: 25px;
  cursor: pointer;
  z-index: 4;
}
.buttonu button:hover{
    color: darkcyan;
}
.buttonu button i {
    text-align: center;
    font-size: 18px;
    top: 0.8px;
}
.buttonu button:first-child{
  margin-right: 10px;
}
.buttonu button:last-child{
  margin-left: 10px;
}

.section__container {
  width: 100%;
  max-width: 1200px;
  margin: auto;
  padding: 1rem;
  text-align: center;
  margin-top: 5rem;
}


.footer h4 {
  font-size: 1.5rem;
  font-weight: 900;
  margin-bottom: 1rem;
}

.footer p {
  max-width: 950px;
  margin: auto;
  font-size: 1.2rem;
  line-height: 1.5rem;
  margin-bottom: 2rem;
}

.footer i{
    font-size: 200px;
}

.footer button {
  padding: 15px 70px;
  outline: none;
  border: none;
  font-size: 1rem;
  font-weight: 700;
  color: #000;
  background: #ecf0f3;
  box-shadow: -3px -3px 7px #ffffff,
               3px 3px 5px #ceced1;
  border-radius: 25px;
  cursor: pointer;
}
.footer button:hover{
    background: #ecf0f3;
  box-shadow: inset -3px -3px 7px #ffffff,
              inset 3px 3px 5px #ceced1;
}

@media (width < 900px) {
  .testimonials__grid {
    grid-template-columns: repeat(2, 1fr);
    gap: 1rem;
  }
}

@media (width < 600px) {
  .testimonials__grid {
    grid-template-columns: repeat(1, 1fr);
  }
}

</style>
<!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&family=Roboto:wght@700&display=swap" rel="stylesheet">  

    <!-- Icon Font Stylesheet -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link href="lib/flaticon/font/flaticon.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet"> 

<!-- Contact Start -->
    <div class="container-fluid py-0">
        <div class="container">
            <div class="leftbord ps-5 mb-5" style="max-width: 600px;">
                <h5 class="text-uppercase" style="color: darkcyan; font-weight: 800;"><span><i class="fa-duotone fa-paw-claws" style="--fa-primary-color: #266b6d; --fa-primary-opacity: 20; --fa-secondary-color: #266b6d; --fa-secondary-opacity: 20; font-size: 25px;"></i> Contact Us <i class="fa-duotone fa-paw-claws" style="--fa-primary-color: #266b6d; --fa-primary-opacity: 20; --fa-secondary-color: #266b6d; --fa-secondary-opacity: 20; font-size: 25px;"></i></span></h5>
                <h1 class="display-5 text-uppercase mb-0" style="font-weight: 900;text-shadow: 3px 2px 1px #000;color: darkcyan;">Please Feel Free To Contact With Us</h1>
            </div>
            <div class="row g-9">
                <div class="col-lg-7">
                    <?php if($_settings->chk_flashdata('pop_msg')): ?>
                        <div class="alert alert-success">
                            <i class="fa fa-check mr-2"></i> <?= $_settings->flashdata('pop_msg') ?>
                        </div>
                        <script>
                            $(function(){
                                $('html, body').animate({scrollTop:0})
                            })
                        </script>
                    <?php endif; ?>
                    <form action="" id="message-form">
                        <input type="hidden" name="id">
                        <div class="row g-3">
                            <div class="col-12">
                                <label style="font-size: 16px; font-weight: 600;">Fullname <span style="color: red; font-size: 15px;">*</span></label>
                                <input type="text" class="form-control border-0 px-4" id="fullname" name="fullname" placeholder="Enter your Fullname" required style="height: 55px; box-shadow: inset -3px -3px 7px #ffffff,inset 3px 3px 5px #ceced1;
    background: #ecf0f3; border-radius: 30px;font-weight: 600;">
                                <small class="px-3 text-muted"></small>
                            </div>
                            <div class="col-12" style="margin-top: -8px;">
                                <label style="font-size: 16px; font-weight: 600;">Email <span style="color: red; font-size: 15px;">*</span></label>
                                <input type="email" class="form-control border-0 px-4" id="email" name="email" placeholder="Enter your Email" required style="height: 55px; box-shadow: inset -3px -3px 7px #ffffff,inset 3px 3px 5px #ceced1;
    background: #ecf0f3; border-radius: 30px;font-weight: 600;">
                                <small class="px-3 text-muted"></small>
                            </div>
                            <div class="col-12" style="margin-top: -8px;">
                                <label style="font-size: 16px; font-weight: 600;">Mobile Number <span style="color: red; font-size: 15px;">*</span></label>
                                <input type="text" onkeypress="isInputNumber(event)" maxlength="11" class="form-control border-0 px-4" id="contact" name="contact" placeholder="Enter your Number" required style="height: 55px; box-shadow: inset -3px -3px 7px #ffffff,inset 3px 3px 5px #ceced1;
    background: #ecf0f3; border-radius: 30px;font-weight: 600;">
                                <small class="px-3 text-muted"></small>
                            </div>
                            <div class="col-12" style="margin-top: -15px;">
                                <label style="font-size: 16px; font-weight: 600;">Message <span style="color: red; font-size: 15px;">*</span></label>
                                <textarea name="message" class="form-control border-0 px-4 py-3" id="message" rows="8" placeholder="Message Us" required style="box-shadow: inset -3px -3px 7px #ffffff,inset 3px 3px 5px #ceced1;
    background: #ecf0f3; border-radius: 10px; resize: none;font-weight: 600;"></textarea>
                            </div>
                            <div class="col-12">
                                <div class="buttonp">
                                  <button type="submit">Send Message
                                </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-5">
                    <div class="mb-5 p-5" style="box-shadow: -3px -3px 7px #ffffff, 3px 3px 5px #ceced1;
    background: #ecf0f3; border-radius: 10px;margin-top: 30px;">
                        <div class="d-flex align-items-center mb-2">
                            <i class="bi bi-geo-alt fs-1 me-3" style="color: darkcyan;"></i>
                            <div class="text-start">
                                <h6 class="text-uppercase mb-1" style="color: darkcyan;font-weight: 700;">Location</h6>
                                <span><?= $_settings->info('address') ?></span>
                            </div>
                        </div>
                        <div class="d-flex align-items-center mb-2">
                            <i class="bi bi-envelope-open fs-1 me-3" style="color: darkcyan;"></i>
                            <div class="text-start">
                                <h6 class="text-uppercase mb-1" style="color: darkcyan;font-weight: 700;">Email Us</h6>
                                <span><?= $_settings->info('email') ?></span>
                            </div>
                        </div>
                        <div class="d-flex align-items-center mb-4">
                            <i class="bi bi-phone-vibrate fs-1 me-3" style="color: darkcyan;"></i>
                            <div class="text-start">
                                <h6 class="text-uppercase mb-1" style="color: darkcyan;font-weight: 700;">Call Us</h6>
                                <span><?= $_settings->info('contact') ?></span>
                            </div>
                        </div>
                        <div style="box-shadow: -1px -1px 2px #ffffff,3px 3px 5px #ceced1;">
                                <iframe class="position-relative w-100"
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3928.5250726418144!2d124.47220237416388!3d10.055992572070487!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33a9ff4bca22eaa3%3A0xde3c23600ea779a7!2sAnimal%20Hub%20Veterinary%20Clinic!5e0!3m2!1sen!2sph!4v1694240076101!5m2!1sen!2sph" frameborder="0" style="height: 205px; border:0;" allowfullscreen="" aria-hidden="false"
                                tabindex="0"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->
    <!-- Contact Me section Start -->
    <div class="section__container">
      <div class="footer">
        <i class="fa-duotone fa-messages-question" style="color: darkcyan;text-shadow: 4px 3px 2px #000;margin-bottom: 15px;"></i>
        <h4>Have Any Questions?</h4>
        <p>
          Please, do not hesitate to get in touch.
Please use this form or to get in Chat with us.
If you've got a specific question about our services, You are Welcome to get in touch with us if you have any questions or comments, You can Contact or Chat us.
        </p>
        <a href="messaging/login.php"><button>Let's Chat</button></a>
      </div>
    </div>
<script>
    $(function(){
        $('#message-form').submit(function(e){
            e.preventDefault();
            var _this = $(this)
            $('.pop-msg').remove()
            var el = $('<div>')
                el.addClass("pop-msg alert")
                el.hide()
            start_loader();
            $.ajax({
                url:_base_url_+"classess/Master.php?f=save_message",
				data: new FormData($(this)[0]),
                cache: false,
                contentType: false,
                processData: false,
                method: 'POST',
                type: 'POST',
                dataType: 'json',
				error:err=>{
					console.log(err)
					alert_toast("An error occured",'error');
					end_loader();
				},
                success:function(resp){
                    if(resp.status == 'success'){
                        location.reload();
                    }else if(!!resp.msg){
                        el.addClass("alert-danger")
                        el.text(resp.msg)
                        _this.prepend(el)
                    }else{
                        el.addClass("alert-danger")
                        el.text("An error occurred due to unknown reason.")
                        _this.prepend(el)
                    }
                    el.show('slow')
                    $('html, body').animate({scrollTop:0},'fast')
                    end_loader();
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