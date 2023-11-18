<style>
    @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap");

  * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: "Poppins", sans-serif;
}
/********** Template CSS **********/
:root {
    --primary: darkcyan;
    --secondary: #FFD33C;
    --light: #F3F3F3;
    --dark: #212121;
}
.wrapper,
.wrapper .img-area,
.buttons a{
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

.buttons a:hover:before{
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
.buttons a:hover:before{
  z-index: -1;
  border-radius: 25px;
}

.wrapper .buttons{
  display: flex;
  width: 100%;
  justify-content: space-between;
}
.buttons a {
  position: relative;
  width: 100%;
  border: none;
  outline: none;
  padding: 12px 0;
  text-align: center;
  text-decoration: none;
  font-family: 'Poppins', sans-serif;
  color: darkcyan;
  font-size: 17px;
  font-weight: 500;
  border-radius: 25px;
  cursor: pointer;
  z-index: 4;
}
.buttons a:hover{
    color: #000;
    font-weight: 500;
}
.buttons a i {
    text-align: center;
    font-size: 18px;
    top: 0.8px;
}
.buttons a:first-child{
  margin-right: 10px;
}
.buttons a:last-child{
  margin-left: 10px;
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
.leftbord{
    border-left:5px solid var(--primary);
}
@media (max-width: 768px) {
    .wrapper {
        width: 48%;
    }
}
@media (max-width: 576px) {
    .wrapper {
        width: 100%;
    }
}
</style>
<!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">
    <!-- Icon Font Stylesheet -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link href="lib/flaticon/font/flaticon.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

<?php 
$brands = isset($_GET['b']) ? json_decode(urldecode($_GET['b'])) : array();
?>
<!-- Products Start -->
    <div class="container-fluid py-0">
        <div class="container">
            <div class="leftbord ps-5 mb-5" style="max-width: 600px;">
                <h5 class="text-uppercase" style="color: darkcyan; font-weight: 800;"><span><i class="fa-duotone fa-paw-claws" style="--fa-primary-color: #266b6d; --fa-primary-opacity: 20; --fa-secondary-color: #266b6d; --fa-secondary-opacity: 20; font-size: 25px;"></i> Our Product <i class="fa-duotone fa-paw-claws" style="--fa-primary-color: #266b6d; --fa-primary-opacity: 20; --fa-secondary-color: #266b6d; --fa-secondary-opacity: 20; font-size: 25px;"></i></span></h5>
                <h1 class="display-5 text-uppercase mb-0" style="font-weight: 900;text-shadow: 3px 2px 1px #000;color: darkcyan;">Products For Your Pet Friends</h1>
            </div>
            <div class="row gx-4 gx-lg-5 row-cols-1 row-cols-md-3 row-cols-xl-3 justify-content-center">
                 <?php 
                        $where = "";
                        if(count($brands)>0)
                        $where = " and p.brand_id in (".implode(",",$brands).") " ;
                        $products = $conn->query("SELECT p.*,b.name as bname,c.category FROM `products` p inner join brands b on p.brand_id = b.id inner join categories c on p.category_id = c.id where p.status = 1 {$where} order by rand() ");
                        while($row = $products->fetch_assoc()):
                            $upload_path = base_app.'/uploads/product_'.$row['id'];
                            $img = "";
                            if(is_dir($upload_path)){
                                $fileO = scandir($upload_path);
                                if(isset($fileO[2]))
                                    $img = "uploads/product_".$row['id']."/".$fileO[2];
                                // var_dump($fileO);
                            }
                            foreach($row as $k=> $v){
                                $row[$k] = trim(stripslashes($v));
                            }
                            $inventory = $conn->query("SELECT * FROM inventory where product_id = ".$row['id']);
                            $inv = array();
                            while($ir = $inventory->fetch_assoc()){
                                $inv[] = number_format($ir['price']);
                            }
                    ?>
                <div class="pb-5" style="padding: 15px;">
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
    <div class="buttons">
      <a href=".?p=view_product&id=<?php echo md5($row['id']) ?>">View Details <i class="fa-sharp fa-solid fa-arrow-up-right-from-square"></i></a>
    </div>
  </div>
                </div>
                <?php endwhile; ?>
           </div>
        </div>
    </div>
    <!-- Products End -->
    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
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
            1200:{
                items:4
            }
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

    function _filter(){
        var brands = []
            $('.brand-item:checked').each(function(){
                brands.push($(this).val())
            })
        _b = JSON.stringify(brands)
        var checked = $('.brand-item:checked').length
        var total = $('.brand-item').length
        if(checked == total)
            location.href="./?";
        else
            location.href="./?b="+encodeURI(_b);
    }
    function check_filter(){
        var checked = $('.brand-item:checked').length
        var total = $('.brand-item').length
        if(checked == total){
            $('#brandAll').attr('checked',true)
        }else{
            $('#brandAll').attr('checked',false)
        }
        if('<?php echo isset($_GET['b']) ?>' == '')
            $('#brandAll,.brand-item').attr('checked',true)
    }
    $(function(){
        check_filter()
        $('#brandAll').change(function(){
            if($(this).is(':checked') == true){
                $('.brand-item').attr('checked',true)
            }else{
                $('.brand-item').attr('checked',false)
            }
            _filter()
        })
        $('.brand-item').change(function(){
            _filter()
        })
    })

</script>