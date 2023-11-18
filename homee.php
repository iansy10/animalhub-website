<style>
  @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap");

  * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: "Poppins", sans-serif;
}

main{
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  grid-template-rows: repeat(2, min-content);
  grid-gap: 20px;
  position: relative;
  width: 100%;
  margin: 0 auto;
  padding: 20px 15px;
}
.card{
  display: flex;
  flex-direction: column;
  border: none;
  box-shadow: none;
  box-shadow: 0 0 0 1px #f0f0f0;
    background-color: #fff;
    transition: 0.2s all;
  border-radius: 10px;
  padding: 30px 30px;
  width: 140%;
}

.card__detail{
  color: #000;
  line-height: 1.5;
  opacity: 0.7;
  font-size: 15px;
  font-weight: 700;
  text-align: justify;
}
.card__detail .left{
  font-size: 40px;
  display: block;
  text-align: left;
  color: darkcyan;
}
.card__detail .right{
  font-size: 40px;
  display: block;
  text-align: right;
  color: darkcyan;
}
.card-5{
  grid-row: 1/1;
  grid-column: 3/3;
  left: 180px;
  box-shadow: -3px -3px 7px #ffffff,3px 3px 5px #ceced1;
    background: #ecf0f3;
}
.card-6{
  box-shadow: -3px -3px 7px #ffffff,3px 3px 5px #ceced1;
    background: #ecf0f3;
}
.card-7{
  left: 90px;
  box-shadow: -3px -3px 7px #ffffff,3px 3px 5px #ceced1;
    background: #ecf0f3;
}

.containerr {
  position: relative;
  min-height: 100vh;
  max-width: 1200px;
  width: 100%;
  margin: 0 auto;
}

.containerr .images .image-box{
  position: relative;
  height: 350px;
  width: 350px;
  border-radius: 8px;
  overflow: hidden;
}
.images {
  width: 100%;
  display: flex;
  justify-content: center;
  flex-wrap: wrap;
}
.images .image-box {
  margin: 5px;
  box-shadow: -1px -1px 2px #ffffff,3px 3px 5px #ceced1;
}
.images .image-box img {
  height: 100%;
  filter: brightness(60%);
  width: 100%;
  border-radius: 6px;
  cursor: pointer;
  transition: transform 0.2s linear;
}
.image-box:hover img {
  transform: scale(1.05);
}
.image-box h6 {
  position: absolute;
  bottom: 10px;
  left: 10px;
  color: #fff;
  font-size: 17px;
  padding: 20px;
  font-weight: 800;
}
.contact .content p{
    text-align: center;
    font-size: 22px;
    color: #333;
    line-height: 1px;
    font-weight: 500;
}

.btnt a {
    margin-top: 5px;
    display: inline-block;
    position: relative;
    z-index: 0;
    border-radius: 5rem;
    border: 2px solid darkcyan;
    border-top-left-radius: 0;
    color: darkcyan;
    font-size: 17px;
    overflow: hidden;
    padding: 9px 40px;
}

.btnt a::before{
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
.btnt a:hover::before{
    clip-path: circle(100%);
}
.btnt a:hover{
    color: #fff;
    box-shadow: rgba(60,64,67,0.3)0px 1px 2px 0,
                  rgba(60,64,67,0.15)0px 2px 6px 2px;
}
.leftbord{
    border-right:5px solid darkcyan;
    margin-left: 484px;
}
.rightbord{
   border-left:5px solid darkcyan;
   margin-left: 17px;
}
.wrapper,
.buttonx button{
  background: #ecf0f3;
  box-shadow: -3px -3px 7px #ffffff,
               3px 3px 5px #ceced1;
}

.buttonx button:hover:before{
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
.buttonx button:hover:before{
  z-index: -1;
  border-radius: 25px;
}

.wrapper .buttonx{
  display: flex;
  width: 100%;
  justify-content: space-between;
}
.buttonx button {
  position: relative;
  width: 50%;
  border: none;
  outline: none;
  padding: 10px 0;
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
.buttonx button:hover{
  color: darkcyan;
}
.buttonx button i {
    text-align: center;
    font-size: 18px;
    top: 0.8px;
}
.buttonx button:first-child{
  margin-right: 10px;
}
.buttonx button:last-child{
  margin-left: 10px;
}

.home {
  position: relative;
  width: 100%;
  min-height: 90vh;
  display: grid;
  grid-template-columns: 0.2fr 1fr 1fr;
  align-items: center;
  gap: 1rem;
}
.home-img {
  order: 3;
}
.home-img img {
  width: 105%;
}
.home-text span {
  font-size: 30px;
  font-weight: 500;
}
.home-text h1 {
  font-size: 40px;
  font-weight: 900;
  text-shadow: 3px 2px 1px #000;
  color: darkcyan;
}
.home-text h2 {
  font-size: 25px;
  font-weight: 400;
}
.home-text p {
  font-size: 18px;
  font-weight: 500;
  margin: 0.7rem 0 1rem;
}
.social {
  display: flex;
  flex-direction: column;
}
.social a {
  margin-bottom: 1rem;
  font-size: 22px;
  color: var(--text-color);
}
.social a:hover {
  color: darkcyan;
}
.btn {
  display: inline-block;
  box-shadow: -3px -3px 4px #ffffff,3px 3px 4px #ceced1;
background-color: #ecf0f3;
  color: #000;
  padding: 0.7rem 1.3rem;
  border-radius: 25px;
}
.btn:hover {
  background-color: #ecf0f3;
  box-shadow:inset -3px -3px 4px #ffffff,inset 3px 3px 4px #ceced1;
}
 :root {
  --main-color: #033a80;
  --bg-color: #fff;
  --text-color: #0f0c27;
  --hover: hsl(260, 100%, 51%);
 
  --big-font: 3.2rem;
  --medium-font: 1.8rem;
  --p-font: 0.941rem;
}
/* Making Responsive */
@media (max-width: 991px) {
  header {
    padding: 18px 4%;
  }
  section {
    padding: 10px 1%;
  }
}
@media (max-width: 881px) {
  :root {
    --big-font: 2.7rem;
    --medium-font: 1.4rem;
  }
}
@media (max-width: 768px) {
  :root {
    --big-font: 2.4rem;
    --medium-font: 1.2rem;
  }
  
  #darkmode {
    position: absolute;
    top: 1.4rem;
    right: 2rem;
  }
  .scroll-down {
    display: none;
  }
  .home {
    grid-template-columns: 0.5fr 3fr;
  }
  .home-text {
    grid-column: 1/3;
    padding-left: 1.4rem;
  }
  .home-img {
    order: initial;
  }
  .about-container {
    grid-template-columns: 1fr;
  }
  .about-img {
    display: flex;
    justify-content: center;
  }
  .skills-container {
    grid-template-columns: 1fr;
  }
  .skills-img img {
    padding-left: 0;
  }
  .skills-img {
    padding-top: 2rem;
    display: flex;
    justify-content: center;
  }
  .contact-form form{
    width: 300px;
  }
  .contact-button{
    margin-left: 25%;
  }
}
@media (max-width: 340px) {
  :root {
    --big-font: 1.7rem;
    --medium-font: 1.1rem;
  }
  .home-text span {
    font-size: 1rem;
  }
  .home-text h2 {
    font-size: 0.9rem;
    font-weight: 500;
  }
  .information .info-box span {
    font-size: 1rem;
  }
  .portfolio-content {
    grid-template-columns: repeat(auto-fit, minmax(200px, auto));
  }
  .contact-form form{
    width: 300px;
  }
  .contact-button{
    margin-left: 25%;
  }
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
.section__container {
  width: 100%;
  max-width: 1200px;
  margin: auto;
  padding: 1rem;
  text-align: center;
  margin-top: 5rem;
}

.testimonials__grid {
  width: 100%;
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 2rem;
  margin-bottom: 2rem;
}

.card {
  padding: 2rem;
  display: grid;
  gap: 1rem;
  width: 100%;
  border-radius: 5px;
  box-shadow: -3px -3px 7px #ffffff, 3px 3px 5px #ceced1;
    background: #ecf0f3;
    border: none;
}

.card i {
  font-size: 2.5rem;
}

.card p {
  font-size: 1rem;
  font-weight: 500;
}
.card .img-area {
  background: #ecf0f3;
  margin: auto;
  margin-top: -7px;
  border-radius: 50%;
  box-shadow: -3px -3px 7px #ffffff,
               3px 3px 5px #ceced1;
}
.card .img-area{
  height: 180px;
  width: 180px;
  display: flex;
  align-items: center;
  justify-content: center;
  box-shadow:inset -3px -3px 7px #ffffff,inset
               3px 3px 5px #ceced1;
}
.img-area .inner-area{
  height: calc(100% - 10px);
  width: calc(100% - 10px);
}
.inner-area img{
  height: 100%;
  border-radius: 50%;
  width: 100%;
}

.card .name {
  font-size: 1.2em;
  font-weight: 400;
  color: darkcyan;
  transition: 0.3s;
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
<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <!-- Home -->
    <section class="home" id="home">
        <div class="social">
            <a href="#"><i class="fa-brands fa-tiktok"></i></a>
            <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
            <a href="#"><i class="fa-brands fa-instagram"></i></a>
        </div>
        <div class="home-img">
            <img src="Home-Header-1.png" alt="">
        </div>
        <div class="home-text">
            <h1>The best care for your Pets and keep your loved Pets healthy</h1>
            <p>We believe your Pets are very valued members of your family and providing exceptional Veterinary care for happy and healthy Pets</p>
            <a href="./?p=services" class="btn">Find Service Now!</a>
        </div>
 
    </section>
    <div class="container-fluid py-5"style="margin-top: 50px;">
            <div class="header">
        <p style="color: darkcyan;"><i class="fa-duotone fa-paw-claws" style="--fa-primary-color: #266b6d; --fa-primary-opacity: 20; --fa-secondary-color: #266b6d; --fa-secondary-opacity: 20; font-size: 25px;"></i> OUR PET CARE TIPS <i class="fa-duotone fa-paw-claws" style="--fa-primary-color: #266b6d; --fa-primary-opacity: 20; --fa-secondary-color: #266b6d; --fa-secondary-opacity: 20; font-size: 25px;"></i></p>
        <h1 style="text-transform: uppercase; font-weight: 900;text-shadow: 3px 2px 1px #000;color: darkcyan;">Get to know more about pets on the latest pet trends!</h1>
      </div>
<div class="containerr">
      <div class="images">
        <div class="image-box">
          <img src="11.jpg" alt="">
          <h6>Keep your Pets Vaccination & Deworming Updated</h6>
        </div>
        <div class="image-box">
          <img src="22.jpg" alt="">
          <h6>Provide monthly Preventatives against Ticks, fleas and Heartworm</h6>
        </div>
        <div class="image-box">
          <img src="33.jpg" alt="">
          <h6>Well balanced & Nutritious Food</h6>
        </div>
        <div class="image-box">
          <img src="44.jpg" alt="">
          <h6>Weekly Bath, Ear cleaning & Nail cutting</h6>
        </div>
        <div class="image-box">
          <img src="55.jpg" alt="">
          <h6>Maintain coat quality by daily Brushing</h6>
        </div>
        <div class="image-box">
          <img src="66.jpg" alt="">
          <h6>Disinfect & Sanitize cage & Surroundings daily</h6>
        </div>
        <div class="image-box">
          <img src="77.jpg" alt="">
          <h6>Provide fresh & clean Water always & readily available</h6>
        </div>
        <div class="image-box">
          <img src="88.jpg" alt="">
          <h6>Enhancing your Pets Mealtime with Pet food toppers</h6>
        </div>
        <div class="image-box">
          <img src="99.jpeg" alt="">
          <h6>Preparing your Pets for Typhoon and Create a safe space during a Typhoon</h6>
        </div>
      </div>
    </div>
</div>
<!-- Contact Me section Start -->
    <div class="section__container">
      <div class="header">
        <p style="color: darkcyan;"><i class="fa-duotone fa-paw-claws" style="--fa-primary-color: #266b6d; --fa-primary-opacity: 20; --fa-secondary-color: #266b6d; --fa-secondary-opacity: 20; font-size: 25px;"></i> TESTIMONIALS <i class="fa-duotone fa-paw-claws" style="--fa-primary-color: #266b6d; --fa-primary-opacity: 20; --fa-secondary-color: #266b6d; --fa-secondary-opacity: 20; font-size: 25px;"></i></p>
        <h1 style="text-transform: uppercase;font-weight: 900;text-shadow: 3px 2px 1px #000;color: darkcyan;">when it comes to your pets, hear it from our happy pet owners!</h1>
      </div>
      <div class="testimonials__grid">
        <div class="card">
          <i class='bx bxs-quote-alt-left text-left'style="color: darkcyan;"></i>
          <p>
            Everyone went above and beyond to help Willow, and I appreciate the vet taking the time to listen to my words and made me feel comforted by keeping continuously informed, and gave me information that is super helpful in to keep in mind for my fosters.
          </p>
          <i class='bx bxs-quote-alt-right text-right'style="color: darkcyan;"></i>
          <div class="img-area">
                      <div class="inner-area">
                        <img src="3.jpg" alt="">
                      </div>
                    </div>
          <p class="name"style="text-align: center;">Allan B.</p>
        </div>
        <div class="card">
          <i class='bx bxs-quote-alt-left text-left'style="color: darkcyan;"></i>
          <p>
            I was able to get in so quickly when I phoned with an emergency that my dog had. The staff were friendly, helpful and knowledgeable. I highly recommend visiting this care centre if you require help for your pet, especially in emergency situations.
          </p>
          <i class='bx bxs-quote-alt-right text-right'style="color: darkcyan;"></i>
          <div class="img-area">
                      <div class="inner-area">
                        <img src="two.jpg" alt="">
                      </div>
                    </div>
          <p class="name"style="text-align: center;">Daniel E.</p>
        </div>
        <div class="card">
          <i class='bx bxs-quote-alt-left text-left'style="color: darkcyan;"></i>
          <p>
            All staff were extremely attentive and caring during our visits, we received our update calls within the time promised and the Drs clearly explained the health concern, answered our questions and were very open and honest. Thank you!!
          </p>
          <i class='bx bxs-quote-alt-right text-right'style="color: darkcyan;"></i>
          <div class="img-area">
                      <div class="inner-area">
                        <img src="1.jpg" alt="">
                      </div>
                    </div>
          <p class="name"style="text-align: center;">Roberta E.</p>
        </div>
      </div>
    </div>
    <script>
        let slides = document.querySelectorAll('.slide-container');
        let index = 0;

        function next(){
            slides[index].classList.remove('active');
            index = (index + 1) % slides.length;
            slides[index].classList.add('active');
        }

        function prev(){
            slides[index].classList.remove('active');
            index = (index - 1 + slides.length) % slides.length;
            slides[index].classList.add('active');
        }

        setInterval(next, 5000);
    </script>
    
