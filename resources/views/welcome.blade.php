<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="/css/master.css">
    <link rel="stylesheet" href="/css/home.css">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <script src="js/jquery-1.10.2.min.js" type="text/javascript"></script>
    <script src="js/home.js" charset="utf-8"></script>
    <link href="https://fonts.googleapis.com/css?family=Quicksand&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Dancing+Script&display=swap" rel="stylesheet">
  </head>
  <body>
    <div class="mainContainer">
      <div class="header">
        <h3 id='ngomal'>NgomaLands</h3>
        <ul>
          <li id="lands">Lands</li>
          <li id="owners">land owners</li>
          <li id="login">Login</li>
          <li id="register">Register</li>
        </ul>
      </div>
      <div class="midContainer">
        @if(count($errors))
          @foreach($errors->all() as $error)
            <p style="font-size:20px;">{{$error}}</p>
          @endforeach
        @endif
        <div class="slider">
          <img src="img/ngoma8.jpg" id="ngoma">
        </div>
        <h3>Our Services</h3>
        <div class="services">
          <div class="icon">
            <img src="img/ngoma8.jpg" id="icon">
            <h3>Land rental</h3>
          </div>
          <div class="icon">
            <img src="img/ngoma6.jpg" id="icon">
            <h3>Counselling</h3>
          </div>
          <div class="icon">
              <img src="img/ngoma9.jpg" id="icon">
              <h3>Counselling</h3>
          </div>
        </div>

        <div class="products">
          @foreach($prods as $product)
            <div class="single_product" >
              <a href="navigate/{{$product->id}}">
                <img src="img/{{$product->photos}}" id="single">
              </a>
              <div class="relative">
                <p>location: <i>{{$product->location}}</i> </p>
                <div class="mid-line"></div>
                <p>size: <i>{{$product->size}}</i> </p>
                <div class="mid-line"></div>
                <p>price: <i>{{$product->price}}</i> </p>
              </div>
            </div>
          @endforeach
        </div>

        <div class="contact">
          <div class="left">
<div class="mapouter">
  <div class="gmap_canvas">
    <iframe width="100%" height="100%" id="gmap_canvas" src="https://maps.google.com/maps?q=goma%20republic%20democratic%20of%20the%20congo&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0">
  </iframe>
  <a href="https://www.embedgooglemap.org">how to embed a google map in dreamweaver cs6</a>
</div>
<style>.mapouter{position:relative;text-align:right;height:500px;width:600px;}.gmap_canvas {overflow:hidden;background:none!important;height:300px;width:90%;}</style></div>
          </div>
          <div class="right">
            <h3>leave us a message</h3>
            <form class="" action="index.html" method="post">
              <input type="hidden" name="_token" value="{{csrf_token()}}">
              <input type="text" name="name" placeholder="name">
              <textarea name="name" placeholder="message"></textarea>
              <button type="button" name="button">
                Send
              </button>
            </form>
          </div>
        </div>
      </div>
      <div class="footer">
        <h3>&copy; NgomaLands 2019</h3>
      </div>

      <!-- popupLogin -->

            <div class="poplog" id="poplog">
              <form class="loginForm" action="login" method="post">
                <h3>
                  Login Here
                  <button type="button" id="close">X</button>
                </h3>
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <input type="text" name="email" placeholder="Email" value="">
                <br>
                <input type="password" name="password" placeholder="Password" value="">
                <div class="line"></div>
                <button type="submit" name="button">Login</button>
                <button type="button" name="button">Register</button>
              </form>
            </div>
        <!-- popRegister -->

              <div class="popReg" id="popreg">
                <form class="loginForm" action="register" method="post">
                  <h3>
                    Register Here
                    <button type="button" id="closeReg">X</button>
                  </h3>
                  <input type="hidden" name="_token" value="{{csrf_token()}}">
                  <input type="text" name="name" placeholder="Full name">
                  <input type="email" name="email" placeholder="Email">
                  <input type="text" name="department" placeholder="Department">
                  <input type="password" name="password" placeholder="Password">
                  <input type="text" name="location" placeholder="Location">
                  <input type="text" name="contact" placeholder="Contact/Tel">
                  <div class="line"></div>
                  <button type="submit" style="background:green" name="button">Register</button>
                </form>
              </div>
    </div>
  </body>
</html>
