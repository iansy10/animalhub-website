<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
</head>
<style>
body{
    font-weight: normal;
    overflow-x: hidden;
}
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    text-decoration: none;
}

.navbar-light .navbar-nav .nav-link {
    position: relative;
    margin-left: 30px;
    padding: 30px 0;
    font-size: 18px;
    font-weight: 700;
    text-transform: uppercase;
    color: darkcyan;
    outline: none;
    transition: .5s;
}

.sticky-top.navbar-light .navbar-nav .nav-link {
    padding: 20px 0;
}

.navbar-light .navbar-nav .nav-link:hover,
.navbar-light .navbar-nav .nav-link.active {
    color: #fff;
}

@media (min-width: 992px) {
    .navbar-light .navbar-nav .nav-link::before {
        position: absolute;
        content: "";
        width: 0;
        height: 7px;
        top: -4px;
        left: 50%;
        background: darkcyan;
        transition: .5s;
    }

    .navbar-light .navbar-nav .nav-link:hover::before,
    .navbar-light .navbar-nav .nav-link.active::before {
        width: 100%;
        left: 0;
    }

    .navbar-light .navbar-nav .nav-link.nav-contact::before {
        width: 100%;
        height: 1px;
        top: -1px;
        left: 0;
    }
}

@media (max-width: 991.98px) {
    .navbar-light .navbar-nav .nav-link  {
        margin-left: 0;
        padding: 10px 0;
    }
}

.hero-header {
    background: url(../img/hero.jpg) top right no-repeat;
    background-size: cover;
}


@keyframes pulse-border {
    0% {
        transform: translateX(-50%) translateY(-50%) translateZ(0) scale(1);
        opacity: 1;
    }

    100% {
        transform: translateX(-50%) translateY(-50%) translateZ(0) scale(2);
        opacity: 0;
    }
}


.leftbord{
    border-left:5px solid darkcyan;
}
.nav .nav-item .nav-link.active{
    background: #ecf0f3;
  box-shadow: -3px -3px 7px #ffffff,
               3px 3px 5px #ceced1;
              color: #000;
}
.nav .nav-item .nav-link:hover{
    background: #ecf0f3;
  box-shadow: inset -3px -3px 7px #ffffff,
              inset 3px 3px 5px #ceced1;
}
.clients{
            padding: 105px 0;
        }

.box {
    display: grid;
    align-items: center;
    justify-items: center;
    width: 60%;
    height: auto;    
    transition: transform .4s ease-in;
    margin: 8px auto;
}

.box img {
    max-width: 100%;
    max-height: 100%;
    width: 100%;
    box-shadow: -1px -1px 2px #ffffff,3px 3px 5px #ceced1;
}

.box:hover {
    transform: scale(1.1);
    cursor: pointer;
}
.rightbord{
    border-left:5px solid darkcyan;
    margin-left: 8px;
    margin-top: 5px;
}

.team .member {
position: relative;
padding: 30px;
background: #ecf0f3;
box-shadow: -3px -3px 7px #ffffff, 3px 3px 5px #ceced1;
border-radius: 10px;
}

.team .member .teampic {
overflow: hidden;
width: 180px;
border-radius: 50%;
border: 2px solid darkcyan;
}

/* .team .member .teampic img {
transition: ease-in-out 0.3s;
} */


.team .member .member-info {
padding-left: 30px;
}

.header {
  margin-bottom: 2rem;
}

.header p {
  font-size: 1.5rem;
  text-align: center;
  font-weight: 900;
}

.header h1 {
  font-size: 2rem;
  font-weight: 900;
  text-align: center;
}



.containers .card h2{
    font-size: 20px;
    margin: 15px;
    color: darkcyan;
    font-weight: 900;
}
.containers .card h4{
    font-size: 15px;
    margin: 15px;
    font-weight: 800;
}

.containers{
    display: flex;
    flex-wrap: wrap;
    align-items: center;
    justify-content: center;
    text-align: center;
}

.containers .card{
    width: 350px;
    height: 350px;
    margin: 10px;
   background: #ecf0f3;
  box-shadow: -3px -3px 7px #ffffff,
               3px 3px 5px #ceced1;
    border-radius: 10px;
    border: none;
    transition: 0.3s;
}

.containers .card .content{
    transition: 0.4s;
    margin: auto;
}

.containers .card .content:hover{
    transform: scale(1.069);
}

.containers .card .img-area {
  background: #ecf0f3;
  justify-content: center;
  display: flex;
  align-items: center;
  margin: auto;
  box-shadow: -3px -3px 7px #ffffff,
               3px 3px 5px #ceced1;
}
.containers .card .img-area{
  height: 150px;
  width: 150px;
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  box-shadow:inset -3px -3px 7px #ffffff,inset
               3px 3px 5px #ceced1;
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
}

.containers .card .detail h2,
.containers .card .detail h4{
    margin: 10px 0;
}

.containers .card .social{
    margin: 15px 0;
    width: 100%;
    display: flex;
    justify-content: center;
}

.containers .card .detail .social a{
    margin: 5px;
    width: 40px;
    height: 40px;
    border-radius: 50%;
    font-size: 21px;
    background: #ecf0f3;
  box-shadow: -3px -3px 7px #ffffff,
               3px 3px 5px #ceced1;
    line-height: 43px;
    text-align: center;
    transition: 0.2s;
    color: #000;
}

.containers .card .social a:hover{
    background: #ecf0f3;
    color: darkcyan;
  box-shadow:inset -3px -3px 7px #ffffff,inset
               3px 3px 5px #ceced1;
}
.body{
    width: 100%;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
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
<body>
    <!-- About Start -->
    <div class="container-fluid py-0">
        <div class="container">
            <div class="row gx-5">
                <div class="col-lg-5 mb-5 mb-lg-0">
                    <div class="position-relative h-100">
                        <img class="w-100 h-100" src="image.jpg" style="object-fit: cover; box-shadow: 0 0 0 1px #f0f0f0; border-radius: 10px;">
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="leftbord ps-5 mb-5" style="max-width: 600px;">
                        <h5 class="text-uppercase" style="color: darkcyan; font-weight: 800;"><span><i class="fa-duotone fa-paw-claws" style="--fa-primary-color: #266b6d; --fa-primary-opacity: 20; --fa-secondary-color: #266b6d; --fa-secondary-opacity: 20; font-size: 25px;"></i> About Us <i class="fa-duotone fa-paw-claws" style="--fa-primary-color: #266b6d; --fa-primary-opacity: 20; --fa-secondary-color: #266b6d; --fa-secondary-opacity: 20; font-size: 25px;"></i></span></h5>
                        <h1 class="display-5 text-uppercase mb-0" style="font-weight: 900;text-shadow: 3px 2px 1px #000;color: darkcyan;">We Keep Your Pets Happy All Time</h1>
                    </div>
                    <h4 class="text-body mb-4" style="font-weight: 800;">We make sure that pets live their healthiest and happiest lives.</h4>
                    <div class="p-4" style="border-radius: 10px;box-shadow: -3px -3px 7px #ffffff,3px 3px 5px #ceced1;
    background: #ecf0f3;">
                        <ul class="nav nav-pills justify-content-between mb-3" id="pills-tab" role="tablist">
                            <li class="nav-item w-50" role="presentation">
                                <button class="nav-link text-uppercase w-100 active" id="pills-1-tab" data-bs-toggle="pill" data-bs-target="#pills-1" type="button" role="tab" aria-controls="pills-1"
                                    aria-selected="true" style="border-radius: 0px;color: darkcyan;">Our Mission</button>
                            </li>
                            <li class="nav-item w-50" role="presentation">
                                <button class="nav-link text-uppercase w-100" id="pills-2-tab" data-bs-toggle="pill" data-bs-target="#pills-2" type="button" role="tab" aria-controls="pills-2"
                                    aria-selected="false" style="border-radius: 0px;color: darkcyan;">Our Vision</button>
                            </li>
                        </ul>
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-1" role="tabpanel" aria-labelledby="pills-1-tab">
                                <p class="mb-0" style="text-align: justify;">Our mission we believe that happier pets means a happier world. And happier pets means making sure they are the healthiest they can be. Through our online vet teleconsultations, home vet visits, chat with a vet, health subscriptions, and other services, we can ensure that your furry companies are in the best health possible. </p>
                            </div>
                            <div class="tab-pane fade" id="pills-2" role="tabpanel" aria-labelledby="pills-2-tab">
                                <p class="mb-0" style="text-align: justify;">Our vision is to provide the highest level of pet care through medical innovation, continued education, and advancements in animal healthcare. We will strengthen communication with our clients, and set a precedence of treating them and their pets responsibly, respectfully, and individually in a family environment, all while inspiring a culture of trust and compassion. </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="clients">
        <div class="container">
           <div class="row">
               <div class="col-lg-12">
                   <div class="rightbord ps-5 mb-5" style="max-width: 600px;">
                        <h5 class="text-uppercase" style="color: darkcyan; font-weight: 800;"><span><i class="fa-duotone fa-paw-claws" style="--fa-primary-color: #266b6d; --fa-primary-opacity: 20; --fa-secondary-color: #266b6d; --fa-secondary-opacity: 20; font-size: 25px;"></i> Our Partners <i class="fa-duotone fa-paw-claws" style="--fa-primary-color: #266b6d; --fa-primary-opacity: 20; --fa-secondary-color: #266b6d; --fa-secondary-opacity: 20; font-size: 25px;"></i></span></h5>
                        <h1 class="display-5 text-uppercase mb-0" style="font-weight: 900;text-shadow: 3px 2px 1px #000;color: darkcyan;">In Partnership With</h1>
                    </div>
               </div>
           </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="owl-carousel owl-theme clients-carousel"style="margin-bottom: 140px;">
                        <div class="item box">
                            <img src="kides.png" alt="client logo" class="client-img">
                        </div>
                        <div class="item box">
                            <img src="kiddies.png" alt="client logo" class="client-img">
                        </div>
                        <div class="item box">
                            <img src="papi.png" alt="client logo" class="client-img">
                        </div>
                        <div class="item box">
                            <img src="nutri.png" alt="client logo" class="client-img">
                        </div>
                        <div class="item box">
                            <img src="philvet.png" alt="client logo" class="client-img">
                        </div>
                        <div class="item box">
                            <img src="purrfect.png" alt="client logo" class="client-img">
                        </div>
                        <div class="item box">
                            <img src="housepet.png" alt="client logo" class="client-img">
                        </div>
                        <div class="item box">
                            <img src="keos.png" alt="client logo" class="client-img">
                        </div>
                        <div class="item box">
                            <img src="flippers.png" alt="client logo" class="client-img">
                        </div>
                        <div class="item box">
                            <img src="cache.png" alt="client logo" class="client-img">
                        </div>
                        <div class="item box">
                            <img src="boeh.png" alt="client logo" class="client-img">
                        </div>
                        <div class="item box">
                            <img src="emervet.png" alt="client logo" class="client-img">
                        </div>
                        <div class="item box">
                            <img src="fanfre.png" alt="client logo" class="client-img">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--<section id="team" class="team section-bg"style="margin-top: -30px;">
        <div class="container">
  
          <div class="header">
        <p style="color: darkcyan;"><i class="fa-duotone fa-paw-claws" style="--fa-primary-color: #266b6d; --fa-primary-opacity: 20; --fa-secondary-color: #266b6d; --fa-secondary-opacity: 20; font-size: 25px;"></i> OUR TEAM <i class="fa-duotone fa-paw-claws" style="--fa-primary-color: #266b6d; --fa-primary-opacity: 20; --fa-secondary-color: #266b6d; --fa-secondary-opacity: 20; font-size: 25px;"></i></p>
        <h1 style="text-transform: uppercase;font-weight: 900;text-shadow: 3px 2px 1px #000;color: darkcyan;">Everything runs a lot smoother, more efficiently, and quickly if everyone works together!</h1>
      </div>
  
          <div class="row justify-content-center">
  
            <div class="col-lg-6 mt-4">
              <div class="member d-flex align-items-start" >
                <div class="teampic"><img src="khiann.jpg" class="img-fluid" alt=""></div>
                <div class="member-info">
                  <h4>Khian Emmanuel Abraham</h4>
                  <span>Leader | Programmer</span>
                  <p>“ Programming isn't about what you know it's about what you can figure out. ”</p>
                  <div class="social">
                    <a href=""><i class="fa-brands fa-facebook-f"></i></a>
                    <a href=""><i class="fa-brands fa-instagram"></i></a>
                    <a href=""><i class="fa-regular fa-envelope"></i></a>
                    <a href=""><i class="fa-brands fa-tiktok"></i></a>
                  </div>
                </div>
              </div>
            </div>
  
            <div class="col-lg-6 mt-4">
              <div class="member d-flex align-items-start" >
                <div class="teampic"><img src="jiyane.jpg" class="img-fluid" alt=""></div>
                <div class="member-info">
                  <h4>Joseph Anthony Gabisan</h4>
                  <span>Programmer | Designer</span>
                  <p>“ Sometimes it's better to leave something alone, to pause, and that's very true of programming. ”</p>
                  <div class="social">
                    <a href=""><i class="fa-brands fa-facebook-f"></i></a>
                    <a href=""><i class="fa-brands fa-instagram"></i></a>
                    <a href=""><i class="fa-regular fa-envelope"></i></a>
                    <a href=""><i class="fa-brands fa-tiktok"></i></a>
                  </div>
                </div>
              </div>
            </div>
  
            <div class="col-lg-6 mt-4">
              <div class="member d-flex align-items-start" >
                <div class="teampic"><img src="emay.jpg" class="img-fluid" alt=""></div>
                <div class="member-info">
                  <h4>Emmarie Valmoria</h4>
                  <span>Data | Analysis</span>
                  <p>“ Data are just summaries of thousands of stories those stories to help make the data meaningful. ”</p>
                  <div class="social">
                    <a href=""><i class="fa-brands fa-facebook-f"></i></a>
                    <a href=""><i class="fa-brands fa-instagram"></i></a>
                    <a href=""><i class="fa-regular fa-envelope"></i></a>
                    <a href=""><i class="fa-brands fa-tiktok"></i></a>
                  </div>
                </div>
              </div>
            </div>
  
            <div class="col-lg-6 mt-4">
              <div class="member d-flex align-items-start" >
                <div class="teampic"><img src="irenee.jpg" class="img-fluid" alt=""></div>
                <div class="member-info">
                  <h4>Irene Marcasa</h4>
                  <span>Data | Researcher</span>
                  <p>“ Research means that you don’t know, but are willing to find out. ”</p>
                  <div class="social">
                    <a href=""><i class="fa-brands fa-facebook-f"></i></a>
                    <a href=""><i class="fa-brands fa-instagram"></i></a>
                    <a href=""><i class="fa-regular fa-envelope"></i></a>
                    <a href=""><i class="fa-brands fa-tiktok"></i></a>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-6 mt-4">
              <div class="member d-flex align-items-start" >
                <div class="teampic"><img src="ako.jpg" class="img-fluid" alt=""></div> 
                <div class="member-info">
                  <h4>Joseph Ian Sy</h4>
                  <span>Member</span>
                  <p>“ Testing leads to failure, and failure leads to understanding. ”</p>
                  <div class="social">
                    <a href=""><i class="fa-brands fa-facebook-f"></i></a>
                    <a href=""><i class="fa-brands fa-instagram"></i></a>
                    <a href=""><i class="fa-regular fa-envelope"></i></a>
                    <a href=""><i class="fa-brands fa-tiktok"></i></a>
                  </div>
                </div>
              </div>
            </div>
  
          </div>
  
        </div>
      </section>-->
      <!-- ======= Team Section ======= -->
      <section class="body">
      <div class="header">
        <p style="color: darkcyan;"><i class="fa-duotone fa-paw-claws" style="--fa-primary-color: #266b6d; --fa-primary-opacity: 20; --fa-secondary-color: #266b6d; --fa-secondary-opacity: 20; font-size: 25px;"></i> OUR TEAM <i class="fa-duotone fa-paw-claws" style="--fa-primary-color: #266b6d; --fa-primary-opacity: 20; --fa-secondary-color: #266b6d; --fa-secondary-opacity: 20; font-size: 25px;"></i></p>
        <h1 style="text-transform: uppercase;font-weight: 900;text-shadow: 3px 2px 1px #000;color: darkcyan;">Everything runs a lot smoother, more efficiently, and quickly if everyone works together!</h1>
      </div>
    <div class="containers">
        <div class="card">
            <div class="content">
                <div class="img-area">
                      <div class="inner-area">
                        <img src="khiann.jpg" alt="">
                      </div>
                    </div>
                <div class="detail">
                    <h2>Khian Emmanuel Abraham</h2>
                    <h4>Leader Programmer</h4>
                    <div class="social">
                        <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                        <a href="#"><i class="fa-brands fa-instagram"></i></a>
                        <a href="#"><i class="fa-regular fa-envelope"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="content">
                <div class="img-area">
                      <div class="inner-area">
                        <img src="jiyane.jpg" alt="">
                      </div>
                    </div>
                <div class="detail">
                    <h2>Joseph Anthony Gabisan</h2>
                    <h4>Programmer Designer</h4>
                    <div class="social">
                        <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                        <a href="#"><i class="fa-brands fa-instagram"></i></a>
                        <a href="#"><i class="fa-regular fa-envelope"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="content">
                <div class="img-area">
                      <div class="inner-area">
                        <img src="emay.jpg" alt="">
                      </div>
                    </div>
                <div class="detail">
                    <h2>Emmarie Valmoria</h2>
                    <h4>Data Analysis</h4>
                    <div class="social">
                        <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                        <a href="#"><i class="fa-brands fa-instagram"></i></a>
                        <a href="#"><i class="fa-regular fa-envelope"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="content">
                <div class="img-area">
                      <div class="inner-area">
                        <img src="irene.jpg" alt="">
                      </div>
                    </div>
                <div class="detail">
                    <h2>Irene Marcasa</h2>
                    <h4>Data Researcher</h4>
                    <div class="social">
                        <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                        <a href="#"><i class="fa-brands fa-instagram"></i></a>
                        <a href="#"><i class="fa-regular fa-envelope"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="content">
                <div class="img-area">
                      <div class="inner-area">
                        <img src="ako.jpg" alt="">
                      </div>
                    </div>
                <div class="detail">
                    <h2>Joseph Ian Sy</h2>
                    <h4>Member</h4>
                    <div class="social">
                        <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                        <a href="#"><i class="fa-brands fa-instagram"></i></a>
                        <a href="#"><i class="fa-regular fa-envelope"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
      <!-- End Team Section -->
    <!-- JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script>
        $('.clients-carousel').owlCarousel({
    autoplay: true,
    loop: true,
    margin: 15,
    dots: false,
    slideTransition: 'linear',
    autoplayTimeout: 4500,
    autoplayHoverPause: true,
    autoplaySpeed: 4500,
    responsive: {
      0: {
        items: 2
      },
      500: {
        items: 3
      },
      600: {
        items: 4
      },
      800: {
        items: 4
      },
      1200: {
        items: 4
      }

    }
  });
    </script>
    <!-- Template Javascript -->
    <!-- About End -->
</body>
</html>