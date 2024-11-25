<?php

include 'components/connect.php';

session_start();

if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
};

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>About</title>

   <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" /> 

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'components/user_header.php'; ?>

<section class="about">

   <div class="row">

      <div class="image">
         <img src="images/Zen.png" alt="">
      </div>

      <div class="content">
         <h3>Hi! ZenFamily</h3>
         <p>Hey Ujen Tuladhar here! Founder of Zen&Kool and just wanted to say you're awesome and be yourself, be different and potray yourself more through us! Thankyou and congrats on being the zenerations koolest *wink* *wink* .</p>

         <p>I would like to thank <a href="https://www.facebook.com/sxcmaitighar" target="_blank">St. Xaviers College</a> for guiding me through the process and making me able to develop a fun and needed project like this. </p>
         <a href="contact.php" class="btn">Contact Us</a>
      </div>

   </div>

</section>

<section class="reviews">
   
   <h1 class="heading">Client's Reviews.</h1>

   <div class="swiper reviews-slider">

   <div class="swiper-wrapper"> 

      <div class="swiper-slide slide">
         <img src="images/pro.png" alt="">
         <p>These stickers are litteraly the best thankyou!!!💗</p>
         <h3><a href="https://www.instagram.com/yourchickenugget/" target="_blank">Yourchickennugget🖤</a></h3>
      </div>

      <div class="swiper-slide slide">
         <img src="images/pro.png" alt="">
         <p>Thankyou for the best premium stickers.</p>
         <h3><a href="https://www.instagram.com/yam_suryam_/"  target="_blank">Yam_suryam_</a></h3>
      </div>

      <div class="swiper-slide slide">
         <img src="images/pro.png" alt="">
         <p>Thankyou for the stickers they are very cool❤️.</p>
         <h3> <a href="https://www.instagram.com/_dipamp/" target="_blank">Dipam Pradhan</a></h3>
      </div>

      <div class="swiper-slide slide">
         <img src="images/pro.png" alt="">
         <p>Future ma pani contact garchu yekdamai maanparyo❤️❤️.</p>
         <h3><a href="https://www.instagram.com/haileyy1658/" target="_blank">Haileyy1658</a></h3>
      </div>

      <div class="swiper-slide slide">
         <img src="images/pro.png" alt="">
         <p>It is premium and i'd be interested for future references and orders❤️.</p>
         <h3><a href="https://www.instagram.com/mr.prawal/" target="_blank">Prawal Pandey</a></h3>
      </div>


   </div>

   <div class="swiper-pagination"></div>

   </div>

</section>

<?php include 'components/footer.php'; ?>

<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

<script src="js/script.js"></script>

<script>

var swiper = new Swiper(".reviews-slider", {
   loop:true,
   spaceBetween: 20,
   pagination: {
      el: ".swiper-pagination",
      clickable:true,
   },
   breakpoints: {
      0: {
        slidesPerView:1,
      },
      768: {
        slidesPerView: 2,
      },
      991: {
        slidesPerView: 3,
      },
   },
});

</script>

</body>
</html>