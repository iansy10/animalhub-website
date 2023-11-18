<style>
.btn a {
    display: inline-block;
    position: relative;
    z-index: 0;
    border-radius: 0px 5rem 5rem 5rem;
    border: 2px solid darkcyan;
    color: darkcyan;
    font-size: 15px;
    margin-left:422px;
    margin-top: 15px;
    overflow: hidden;
    font-weight: 900;
    padding: 10px 80px;
    transition: 0.2s all;
}

.btn a::before{
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    height: 100%;
    width: 100%;
    background: darkcyan;
    z-index: -1;
    transition: .2s linear;
    clip-path: circle(0% at 0% 5%);
}
.btn a:hover::before{
    clip-path: circle(100%);
}
.btn a:hover{
    color: #fff;
    z-index: 1;
    box-shadow: 0 1px 2px rgba(0, 0, 0, 0.2);
    transform: scale(1.05);
}

.card__header-subtitle {
  display: block;
  font-size: .95rem;
  color: #333;
  text-align: center;
  margin: 0;
  font-weight: 500;
  margin-top: -.15rem;
}

.card__header-title {
  font-size: 22px;
  text-transform: uppercase;
  text-align: center;
  margin-top: 3.5rem;
  -webkit-text-stroke: 1px gray;
  color: darkcyan;
  text-transform: uppercase;
  font-weight: 900;
}

.card__pricing span{
  width: 65%;
  padding: 0.3em 0;
  box-shadow: -3px -3px 7px #ffffff,3px 3px 5px #ceced1;
  background: #ecf0f3;
  color: #ffffff;
  border-radius: 5px 35px 35px 5px;
  position: absolute;
  margin-left: -7.7em;
  font-size: 1.4em;
  text-align: center;
  text-transform: uppercase;
  margin-top: -5px;
  -webkit-text-stroke: 1px #000;
  font-weight: 900;
}

.ribbon button{
  font-size: 1.5em;
  width: 100%;
  padding: 0.3em 20px;
  box-shadow: -3px -3px 7px #ffffff,3px 3px 5px #ceced1;
  background: #ecf0f3;
  border: none;
  color: darkcyan;
  justify-content: center;
  text-align: center;
  align-items: center;
  margin-top: 50px;

  font-weight: 900;
  border-radius:5px;
}
.ribbon .base{
    text-decoration: line-through 1.5px solid rgb(132, 132, 132) ;
    color: rgb(162, 162, 162);
    font-size: 18px;
    font-weight: 500;
    padding-right: 5px;
}
.card-body{
    row-gap: .5rem;
}
/********** Template CSS **********/
.product-item {
    padding: 1.5rem;
    margin: 1rem;
    box-shadow: -3px -3px 7px #ffffff,3px 3px 5px #ceced1;
    background: #ecf0f3;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    height: auto;
    width: 320px;
    display: flex;
    border-radius: 15px;
}
.product-item .btn-action {
    position: absolute;
    width: 100%;
    bottom: -40px;
    left: 0;
    opacity: 0;
    transition: .5s;
}

.product-item:hover .btn-action {
    bottom: -20px;
    opacity: 1;
}

.product-carousel .owl-nav {
    width: 100%;
    text-align: center;
    display: flex;
    justify-content: center;
}

.product-carousel .owl-nav .owl-prev,
.product-carousel .owl-nav .owl-next{
    position: relative;
    margin: 0 5px;
    width: 50px;
    height: 50px;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #fff;
    border-radius: 50%;
    background: darkcyan;
    font-size: 22px;
    transition: .3s;
}

.product-carousel .owl-nav .owl-prev:hover,
.product-carousel .owl-nav .owl-next:hover {
    color: darkcyan;
    background: #fff;
}

.price-carousel::after {
    position: absolute;
    content: "";
    width: 100%;
    height: 50%;
    bottom: 0;
    left: 0;
    background: darkcyan;
    border-radius: 8px 8px 50% 50%;
    z-index: -1;
}

.price-carousel .owl-nav {
    margin-top: 35px;
    width: 100%;
    text-align: center;
    display: flex;
    justify-content: center;
}

.price-carousel .owl-nav .owl-prev,
.price-carousel .owl-nav .owl-next{
    position: relative;
    margin: 0 5px;
    width: 45px;
    height: 45px;
    display: flex;
    align-items: center;
    justify-content: center;
    color: darkcyan;
    background: #FFFFFF;
    font-size: 22px;
    border-radius: 45px;
    transition: .5s;
}

.price-carousel .owl-nav .owl-prev:hover,
.price-carousel .owl-nav .owl-next:hover {
    color:darkcyan;
}

.leftbord{
    border-left:5px solid darkcyan;
}
.features li{
  margin-bottom: 10px;
  list-style: none;
  display: flex;
  text-align:left;
}
.features li .list-name{
  font-size: 16px;
  margin-left: 20px;
  font-weight: 400;
}
.features li .icon{
  font-size: 30px;
}
.features li .icon.check{
  color: limegreen;
  margin-top: -8.7px;
}
.features li::selection{
  background: #ffd861;
}


.product-item .img-area {
  background: #ecf0f3;
  margin-left: 210px;
  margin-top: -7px;
  box-shadow: -3px -3px 7px #ffffff,
               3px 3px 5px #ceced1;
}
.product-item .img-area{
  height: 80px;
  width: 80px;
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  box-shadow:inset -3px -3px 7px #ffffff,inset
               3px 3px 5px #ceced1;
}
.img-area .inner-area{
  height: calc(100% - 8px);
  width: calc(100% - 8px);
  border-radius: 50%;
}
.inner-area img{
  height: 100%;
  width: 100%;
  border-radius: 50%;
  object-fit: cover;
}
</style>
<!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">
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
    <!-- Icon Font Stylesheet -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link href="lib/flaticon/font/flaticon.css" rel="stylesheet">
    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
<?php 
$cid = isset($_GET['cids']) ? $_GET['cids'] : 'all';
?>
<!-- Products Start -->
    <div class="container-fluid py-0">
        <div class="container">
            <div class="leftbord ps-5 mb-5" style="max-width: 600px;">
                <h5 class="text-uppercase" style="color: darkcyan; font-weight: 800;"><span><i class="fa-duotone fa-paw-claws" style="--fa-primary-color: #266b6d; --fa-primary-opacity: 20; --fa-secondary-color: #266b6d; --fa-secondary-opacity: 20; font-size: 25px;"></i> Our Services <i class="fa-duotone fa-paw-claws" style="--fa-primary-color: #266b6d; --fa-primary-opacity: 20; --fa-secondary-color: #266b6d; --fa-secondary-opacity: 20; font-size: 25px;"></i></span></h5>
                <h1 class="display-5 text-uppercase mb-0" style="font-weight: 900;text-shadow: 3px 2px 1px #000;color: darkcyan;">OUR EXCELLENT PET CARE SERVICES</h1>
            </div>
            <div class="row gx-4 gx-lg-5 row-cols-1 row-cols-md-3 row-cols-xl-3 justify-content-center">
                <?php 
                $categories = $conn->query("SELECT * FROM `category_list`");
                $cat_arr = array_column($categories->fetch_all(MYSQLI_ASSOC),'name','id');
                $cwhere = "";
                if($cid != 'all'){
                    $cwhere .= " and ";
                    $_cw = "";
                    foreach(explode(',',$cid) as $v){
                        if(!empty($_cw)) $_cw .= " or ";
                        $_cw .= "CONCAT('|',REPLACE(category_ids,',','|,|'),'|') LIKE '%|{$v}|%'";
                    }
                    $cwhere .= "({$_cw})";
                }
                $services = $conn->query("SELECT * FROM `service_list` where delete_flag = 0 {$cwhere}  order by `names`,`name`,`context`,`contest`,`contents`,`contexts`,`contentz` asc");
                while($row = $services->fetch_assoc()):
                    $for = '';
                    foreach(explode(',',$row['category_ids']) as $v){
                        if(isset($cat_arr[$v])){
                            if(!empty($for)) $for .= ", ";
                            $for.= $cat_arr[$v];
                        }
                    }
                    $for = empty($for) ? "N/A" : $for;
            ?>
                <div class="pb-5" style="padding: 15px;display: flex;
  justify-content: center;
  flex-wrap: wrap;">
                    <a href="./?p=appointment" style="color: #000;">
                    <div class="product-item position-relative h-100 d-flex flex-column">   
                    <div class="card__pricing">
                            <span><?= ucwords($row['names']) ?></span>
                    </div>
                    <div class="img-area">
                      <div class="inner-area">
                        <img src="animalhab.png" alt="">
                      </div>
                    </div>
                    <div class="contet" style="margin-top: -15px;">
                        <h1 class="card__header-title"><?= ucwords($row['name']) ?></h1>
                        <hr style="color: darkcyan; border-bottom: 1.5px solid darkcyan;">
                        <span class="card__header-subtitle">Categories: <?= $for ?></span>
                        <hr style="color: darkcyan; border-bottom: 1.5px solid darkcyan;">
                    </div>
                    <div class="card-body" id="service_<?= $row['id'] ?>">
                    <div class="titlee" style=" font-size: 16px;">
                        <!--<p class="mx-3"><?= html_entity_decode($row['description']) ?></p>-->
                        <ul class="features">           
        <li>
            <span class="icon check"><i class='bx bx-check'></i></span>
          <span class="list-name"><?= ucwords($row['contest']) ?></span>
        </li>
        <li>
            <span class="icon check"><i class='bx bx-check'></i></span>
          <span class="list-name"><?= ucwords($row['contents']) ?></span>
        </li>
        <li>
            <span class="icon check"><i class='bx bx-check'></i></span>
          <span class="list-name"><?= ucwords($row['contentz']) ?></span>
        </li>
        <li>
            <span class="icon check"><i class='bx bx-check'></i></span>
          <span class="list-name"><?= ucwords($row['context']) ?></span>
        </li>
        <li>
            <span class="icon check"><i class='bx bx-check'></i></span>
          <span class="list-name"><?= ucwords($row['contexts']) ?></span>
        </li>
        </ul>    
                    </div>
                    </div>
                   <div class="ribbon">
                        <button><span class="base">&#8369;<?= number_format($row['base'],0) ?></span><b style="-webkit-text-stroke: 1px gray;"><i class="fa-solid fa-peseta-sign" style="font-size: 15px;"></i><?= number_format($row['fee'],0) ?></b></button>
                    </div>
                    </div>
                </a>
                </div>
                <?php endwhile; ?>
            <?php ?>
            </div>
        </div>
    </div>
    <!-- Products End -->
<!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
<script>
    (function ($) {
    "use strict";

    // Sticky Navbar
    $(window).scroll(function () {
        if ($(this).scrollTop() > 40) {
            $('.navbar').addClass('sticky-top');
        } else {
            $('.navbar').removeClass('sticky-top');
        }
    });
    
    // Dropdown on mouse hover
    $(document).ready(function () {
        function toggleNavbarMethod() {
            if ($(window).width() > 992) {
                $('.navbar .dropdown').on('mouseover', function () {
                    $('.dropdown-toggle', this).trigger('click');
                }).on('mouseout', function () {
                    $('.dropdown-toggle', this).trigger('click').blur();
                });
            } else {
                $('.navbar .dropdown').off('mouseover').off('mouseout');
            }
        }
        toggleNavbarMethod();
        $(window).resize(toggleNavbarMethod);
    });


    // Modal Video
    $(document).ready(function () {
        var $videoSrc;
        $('.btn-play').click(function () {
            $videoSrc = $(this).data("src");
        });
        console.log($videoSrc);

        $('#videoModal').on('shown.bs.modal', function (e) {
            $("#video").attr('src', $videoSrc + "?autoplay=1&amp;modestbranding=1&amp;showinfo=0");
        })

        $('#videoModal').on('hide.bs.modal', function (e) {
            $("#video").attr('src', $videoSrc);
        })
    });
    
    
    // Back to top button
    $(window).scroll(function () {
        if ($(this).scrollTop() > 100) {
            $('.back-to-top').fadeIn('slow');
        } else {
            $('.back-to-top').fadeOut('slow');
        }
    });
    $('.back-to-top').click(function () {
        $('html, body').animate({scrollTop: 0}, 1500, 'easeInOutExpo');
        return false;
    });


    // Product carousel
    $(".product-carousel").owlCarousel({
        autoplay: true,
        smartSpeed: 1000,
        margin: 45,
        dots: false,
        loop: true,
        nav : true,
        navText : [
            '<i class="bi bi-arrow-left"></i>',
            '<i class="bi bi-arrow-right"></i>'
        ],
        responsive: {
            0:{
                items:1
            },
            768:{
                items:2
            },
            992:{
                items:3
            },
            
        }
    });


    // Team carousel
    $(".team-carousel").owlCarousel({
        autoplay: true,
        smartSpeed: 1000,
        margin: 45,
        dots: false,
        loop: true,
        nav : true,
        navText : [
            '<i class="bi bi-arrow-left"></i>',
            '<i class="bi bi-arrow-right"></i>'
        ],
        responsive: {
            0:{
                items:1
            },
            768:{
                items:2
            },
            992:{
                items:3
            },
        }
    });


    // Testimonials carousel
    $(".testimonial-carousel").owlCarousel({
        autoplay: true,
        smartSpeed: 1000,
        items: 1,
        dots: false,
        loop: true,
        nav : true,
        navText : [
            '<i class="bi bi-arrow-left"></i>',
            '<i class="bi bi-arrow-right"></i>'
        ],
    });
    
})(jQuery);


</script>