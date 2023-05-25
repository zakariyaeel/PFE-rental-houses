<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contactez nous</title>
    @extends('master')
    @yield('head')
    <link rel="stylesheet" href="{{ asset('assets/css/contactus.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/glob.css') }}">
    <!-- <link rel="stylesheet" 
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" 
    integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" 
    crossorigin="anonymous" 
    referrerpolicy="no-referrer" /> -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v6.0.0-beta3/css/all.css">
  </head>
  <body>
    <div class="container">
      <span class="btn-back"><i class="fa-solid fa-angle-left"></i></span>
      <span class="big-circle"></span>
      <img src="{{ asset('assets/img/shape.png') }}" class="square" alt="" />
      <div class="form">
        <div class="contact-info">
          <h3 class="title">Let's get in touch</h3>
          <p class="text">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe
            dolorum adipisci recusandae praesentium dicta!
          </p>

          <div class="info">
            <div class="information">
              <i class="icon fa-sharp fa-solid fa-map-location-dot"></i>
              <p>Al Adarissa, FES 30000</p>
            </div>
            <div class="information">
              <i class="icon fa-regular fa-envelope"></i>
              <p>contact@renthouse.com</p>
            </div>
            <div class="information">
              <i class="icon fa-sharp fa-solid fa-phone-volume"></i>
              <p>+212 606204503</p>
            </div>
          </div>

          <div class="social-media">
            <p>Connect with us :</p>
            <div class="social-icons">
              <a href="#">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#">
                <i class="fab fa-instagram"></i>
              </a>
              <a href="#">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div>
          </div>
        </div>

        <div class="contact-form">
          <span class="circle one"></span>
          <span class="circle two"></span>

          <form action="sendmail.php" method="post" autocomplete="off">
            @csrf
            <h3 class="title">Contact us</h3>
            <div class="input-container">
              <input type="text" name="name" class="input" required/>
              <label for="">nom d'utilisateur</label>
              <span>nom d'utilisateur</span>
            </div>
            <div class="input-container">
              <input type="email" name="email" class="input mail" required/>
              <label for="">Email</label>
              <span>Email</span>
            </div>
            <div class="input-container">
              <input type="tel" name="sujet" class="input" />
              <label for="">Sujet</label>
              <span>Sujet</span>
            </div>
            <div class="input-container textarea">
              <textarea name="message" class="input"></textarea>
              <label for="">Message</label>
              <span>Message</span>
            </div>
            <input type="submit" name="submit" value="Send" class="btn" />
          </form>
        </div>
      </div>
    </div>

    <script src="{{ asset('assets/js/contactus.js') }}"></script>
  </body>
</html>