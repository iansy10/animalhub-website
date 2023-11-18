<?php 
if(isset($_GET['id']) && $_GET['id'] > 0){
    $qry = $conn->query("SELECT * from `appointments` where id = '{$_GET['id']}' ");
    if($qry->num_rows > 0){
        foreach($qry->fetch_assoc() as $k => $v){
            $$k=$v;
        }
    }
    $qry2 = $conn->query("SELECT * FROM `patient_meta` where patient_id = '{$patient_id}' ");
    foreach($qry2->fetch_all(MYSQLI_ASSOC) as $row){
        $patient[$row['meta_field']] = $row['meta_value'];
    }
}
?>
<style>
    .fc-event-title-container{
        text-align:center;
    }
    .fc-event-title.fc-sticky{
        font-size:1.5rem;
    }
.column h3 {
  font-size: 20px;
  font-weight: 600;
  color: darkcyan;
  margin: 1.5em 0;
}
.row{
  text-align: center;
}
.column{
  margin: 0 auto;
  padding: 1em 1em;
  display: flex;
  justify-content: center;
  flex-wrap: wrap;
}
.cards {
  width: 100%;
  height: 100%;
  padding: 2em 1.5em;
  background-size: 100% 200%;
  background-position: 0 2.5%;
  border-radius: 5px;
  transition: 0.5s;
  border: none;
  background: #ecf0f3;
box-shadow:-3px -3px 7px #ffffff, 3px 3px 5px #ceced1;
}

@media screen and (min-width: 768px) {
  section {
    padding: 0 2em;
  }
  .column {
    flex: 0 50%;
    max-width: 50%;
    margin: 0 auto;
  }
}
@media screen and (min-width: 992px) {
  section {
    padding: 1em 3em;
  }
  .column {
    flex: 0 0 33.33%;
    max-width: 33.33%;
    margin: 0 auto;
  }
}
.card-img-top {
  height: 60%;
  width: 90%;
  border-radius: 33% 67% 70% 30% / 30% 30% 70% 70%;
  border: 5px solid darkcyan;
}

.leftbord{
    border-left:5px solid darkcyan;
}

.wrapper,
.buttont button{
  background: #ecf0f3;
  box-shadow: -3px -3px 7px #ffffff,
               3px 3px 5px #ceced1;
}
  .buttont button:hover:before{
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
.buttont button:hover:before{
  z-index: -1;
  border-radius: 25px;
}

.wrapper .buttont{
  display: flex;
  width: 50%;
  justify-content: space-between;
}
.buttont button {
  position: relative;
  width: 70%;
  border: none;
  outline: none;
  padding: 12px 10px;
  text-align: center;
  text-decoration: none;
  color: #000000;
  font-size: 17px;
  font-weight: 700;
  border-radius: 25px;
  cursor: pointer;
  z-index: 4;
}
.buttont button:hover{
    color: darkcyan;
}
.buttont button i {
    text-align: center;
    font-size: 18px;
    top: 0.8px;
}
.buttont button:first-child{
  margin-right: 10px;
}
.buttont button:last-child{
  margin-left: 10px;
}
.services, .teams{
    color:#fff;
}
.services .title::before,
.teams .title::before{
    background: #fff;
}
.services .title::after,
.teams .title::after{
    background: #111;
    content: '';
}
.services .serv-content .card{
    width: calc(33% - 20px);
    text-align: center;
    border-radius: 10px;
    border: none;
    box-shadow: -3px -3px 7px #ffffff,3px 3px 5px #ceced1;
    background: #ecf0f3;
    border: none;
    padding: 15px 20px;
}
.services .serv-content .card i{
    font-size: 20px;
    color: darkcyan;
    box-shadow:inset -3px -3px 7px #ffffff,inset 3px 3px 5px #ceced1;
    background: #ecf0f3;
}

.services .serv-content .card .text{
    font-size: 20px;
    font-weight: 500;
    margin: 10px 0 7px 0;
    color: #000000;
}
.services .serv-content .card .test{
font-size: 15px;
}
.header {
  margin-bottom: 2rem;
}

.header p {
  font-size: 1.5rem;
  font-weight: 900;
  text-align: center;
}

.header h1 {
  font-size: 2rem;
  font-weight: 900;
  text-align: center;
}

.card {
  width: 100%;
  height: 100%;
  padding: 2em 1.5em;
  background-size: 100% 200%;
  background-position: 0 2.5%;
  border-radius: 5px;
  transition: 0.5s;
  border: none;
  background: #ecf0f3;
box-shadow:-3px -3px 7px #ffffff, 3px 3px 5px #ceced1;
}
h3 {
  font-size: 20px;
  font-weight: 500;
  text-transform: uppercase;
  margin: 1em 0;
}
p {
  color: #000;
  font-size: 15px;
  line-height: 1.6;
  letter-spacing: 0.03em;
  text-align: center;
}
.icon-wrapper {
  background: #ecf0f3;
  box-shadow:inset -3px -3px 7px #ffffff,inset 3px 3px 5px #ceced1;
  position: relative;
  margin: 0 auto;
  font-size: 30px;
  height: 2.5em;
  width: 2.5em;
  color: darkcyan;
  border-radius: 50%;
  display: grid;
  place-items: center;
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
   <!-- Header-->
<div class="container-fluid py-0">
<div class="container">
            <div class="leftbord ps-5 mb-5" style="max-width: 600px;">
                <h5 class="text-uppercase" style="color: darkcyan; font-weight: 800;"><span><i class="fa-duotone fa-paw-claws" style="--fa-primary-color: #266b6d; --fa-primary-opacity: 20; --fa-secondary-color: #266b6d; --fa-secondary-opacity: 20; font-size: 25px;"></i> Book Appointment <i class="fa-duotone fa-paw-claws" style="--fa-primary-color: #266b6d; --fa-primary-opacity: 20; --fa-secondary-color: #266b6d; --fa-secondary-opacity: 20; font-size: 25px;"></i></span></h5>
                <h1 class="display-6 text-uppercase mb-0" style="font-weight: 900;text-shadow: 3px 2px 1px #000;color: darkcyan;">Unlock the Benefits of Booking your Appointment for your Pets today</h1>
            </div>
    <form id="appointment_form" class="py-2">
    <section>
      <div class="row justify-content-center">
        <div class="column">
          <div class="card">
            <div class="icon-wrapper">
              <i class="fa-light fa-megaphone fa-flip-horizontal"></i>
            </div>
            <h3>Announcement</h3>
            <p>
              <?= $_settings->info('announcement') ?>
            </p>
          </div>
        </div>
        <!--<div class="column">
          <div class="card">
            <div class="icon-wrapper">
              <i class="fa-duotone fa-clock-three" style="--fa-primary-color: #ffffff; --fa-secondary-color: darkcyan; --fa-secondary-opacity: 20;"></i>
            </div>
            <h3>Appointments</h3>
            <p>
              <?= $_settings->info('max_appointment') ?>
            </p>
          </div>
        </div>-->
        <div class="column">
          <div class="card">
            <div class="icon-wrapper">
              <i class="fa-light fa-alarm-clock"></i>
            </div>
            <h3>Office Hours</h3>
            <p>
              <?= $_settings->info('clinic_schedule') ?>
            </p>
          </div>
        </div>
      </div>
    </section>
    <div class="roww" id="appointment">
        <div id="frm-field">
            <input type="hidden" name="id" value="<?php echo isset($id) ? $id : '' ?>">
            <input type="hidden" name="patient_id" value="<?php echo isset($patient_id) ? $patient_id : '' ?>">
                <div class="form-group">
                    <label for="name" class="control-label"></label>
                    <input type="hidden" class="form-control" readonly name="name" value="<?php echo $_settings->userdata('firstname') ?> <?php echo $_settings->userdata('lastname') ?>" required>
                </div>
                <div class="col-12"style="margin: auto;">
                <label for="services" class="control-label" style="font-size: 18px;">Appointment Service</label>
                <select name="services" id="services" class="custom custom-select" required style="box-shadow:inset -3px -3px 7px #ffffff,inset 3px 3px 5px #ceced1;
    background: #ecf0f3; padding: 0px 20px;border: none; border-radius: 20px;cursor: pointer;">
                    <option value="">Select Services</option>
                    <?php 
                    $i = 1;
                        $qry = $conn->query("SELECT * from service_list");
                        while($row = $qry->fetch_assoc()):
                    ?>          
                    <option value="<?php echo $row['name'];?>"><?php echo $row['name'];?></option>
                    <?php endwhile; ?>
                </select>
            </div>
                <div class="form-group">
                    <label for="email" class="control-label"></label>
                    <input type="hidden" class="form-control" readonly name="email" value="<?php echo $_settings->userdata('email') ?>"  required>
                </div>
                <div class="col-12"style="margin: auto;">
                <label for="time_sched" class="control-label" style="font-size: 18px;">Appointment Time</label>
                <input type="time" class="form-control" name="time_sched" value="<?php echo isset($time_sched)? date("TH:i",strtotime($time_sched)) : "" ?>" required style="box-shadow:inset -3px -3px 7px #ffffff,inset 3px 3px 5px #ceced1;
    background: #ecf0f3;border: none; padding: 0px 20px; border-radius: 20px;cursor: pointer;">
            </div>
                <div class="form-group">
                    <label for="contact" class="control-label"></label>
                    <input type="hidden" class="form-control" readonly name="contact" value="<?php echo $_settings->userdata('contact') ?>"  required>
                </div>  
        </div>
        <div class="col-12">
                <?php if($_settings->userdata('id') == 1): ?>
                <div class="form-group">
                    <label for="address" class="control-label">Address</label>
                    <textarea class="form-control" name="address" rows="3" required><?php echo isset($patient['address']) ? $patient['address'] : '' ?></textarea>
                </div>
            <div class="form-group" >
                <label for="ailment" class="control-label">Ailment</label>
                <textarea class="form-control" name="ailment" rows="3" required><?php echo isset($ailment)? $ailment : "" ?></textarea>
            </div>
            <?php else: ?>
                <input type="hidden" name="ailment">
            <?php endif; ?>
            <div class="col-13"style="margin: auto;">
                <label for="date_sched" class="control-label" style="font-size: 18px;">Appointment Date</label>
                <input type="date" id="adate" class="form-control" name="date_sched" value="<?php echo isset($date_sched)? date("Y-m-d",strtotime($date_sched)) : "" ?>" required style="box-shadow:inset -3px -3px 7px #ffffff,inset 3px 3px 5px #ceced1;
    background: #ecf0f3;border: none; padding: 0px 20px; border-radius: 20px;cursor: pointer;">
            </div>
            <?php if($_settings->userdata('id') == 1): ?>
            <div class="form-group">
                <label for="status" class="control-label">Status</label>
                <select name="status" id="status" class="custom custom-select">
                    <option value="1"<?php echo isset($status) && $status == "1" ? "selected": "" ?>>Pending</option>
                    <option value="0"<?php echo isset($status) && $status == "0" ? "selected": "" ?>>Confirmed</option>
                    <option value="2"<?php echo isset($status) && $status == "2" ? "selected": "" ?>>Cancelled</option>
                </select>
            </div>
            <?php else: ?>
                <input type="hidden" name="status">
            <?php endif; ?><br><br>
            <div class="buttont text-center" >
                       <button>Submit Appointment
            </button>
            </div>
        </div>
    </div>
        </form>
    </div>
    </div>
<script>
$(function(){
        $('table').dataTable();

    })
</script>
<div class="container-fluid py-0"style="margin-top: 100px;">
  <div class="container">
        <div class="header">
        <p style="color: darkcyan;"><i class="fa-duotone fa-paw-claws" style="--fa-primary-color: #266b6d; --fa-primary-opacity: 20; --fa-secondary-color: #266b6d; --fa-secondary-opacity: 20; font-size: 25px;"></i> HOW IT WORKS <i class="fa-duotone fa-paw-claws" style="--fa-primary-color: #266b6d; --fa-primary-opacity: 20; --fa-secondary-color: #266b6d; --fa-secondary-opacity: 20; font-size: 25px;"></i></p>
        <h1 style="text-transform: uppercase;font-weight: 900;text-shadow: 3px 2px 1px #000;color: darkcyan;">Arrive on time or a few minutes early for scheduled appointments</h1>
      </div>
      <div class="row justify-content-center">
        <div class="column">
          <div class="cards">
            <img src="convenient.jpg" alt="" class="card-img-top">
            <h3>CONVENIENT HEALTHCARE</h3>
            <p>
              Go to expert vet advice when you need it and when you want it.
            </p>
          </div>
        </div>
        <div class="column">
          <div class="cards">
            <img src="consult.jpg" alt="" class="card-img-top">
            <h3>NO-FUSS CONSULT</h3>
            <p>
              No need to travel and wait in line. You get to talk to the vet immediately.
            </p>
          </div>
        </div>
        <div class="column">
          <div class="cards">
            <img src="vetapp.png" alt="" class="card-img-top">
            <h3>TALK TO LICENSED VETS</h3>
            <p>
              Get expert advice from professionals on how to care for your pet.
            </p>
          </div>
        </div>
      </div>
</div>
</div>
<script>
    $(function(){
    $('#appointment_form').submit(function(e){
        e.preventDefault();
            if('<?= $_settings->userdata('id') > 0 || $_settings->userdata('login_type') == 2 ?>' != '1'){
                uni_modal("","login.php");
                return false;
            }
            var _this = $(this)
             $('.err-msg').remove();
            start_loader();
            $.ajax({
                url:_base_url_+"classesss/Master.php?f=save_appointment",
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
                    end_loader();
                        setTimeout(() => {
                            uni_modal("","success_msg.php?code="+resp.code)
                            
                        }, 750);
                    }else if(resp.status == 'failed' && !!resp.msg){
                        var el = $('<div>')
                            el.addClass("text-center alert alert-danger err-msg").text(resp.msg)
                            _this.prepend(el)
                            el.show('slow')
                            $("html, body").animate({ scrollTop: $('#uni_modal').offset().top }, "fast");
                    }else{
                        el.addClass("alert-danger")
                        el.text("An error occurred due to unknown reason.")
                        _this.prepend(el)
                    }
                    el.show('slow')
                    $('html,body,.modal').animate({scrollTop:0},'fast')
                    end_loader();
                }
            })
    })
})
    $(function(){
    var dtToday = new Date();
    
    var month = dtToday.getMonth() + 1;
    var day = dtToday.getDate();
    var year = dtToday.getFullYear();
    if(month < 10)
        month = '0' + month.toString();
    if(day < 10)
        day = '0' + day.toString();
    
    var maxDate = year + '-' + month + '-' + day;
    $('#adate').attr('min', maxDate);
});
</script>