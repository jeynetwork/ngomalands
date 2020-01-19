<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="/css/master.css">
    <link rel="stylesheet" href="/css/home.css">
    <link rel="stylesheet" href="/css/land.css">
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
        <div class="midmid">
          <div class="search">
            <h3>Search Land owners</h3>
            <form class="" action="index.html" method="post">
              <input type="text" name="name" placeholder="name">
              <input type="text" name="location" placeholder="location">
              <button type="button" name="button">
                search
              </button>
            </form>
          </div>
          <div class="lands">
            @foreach($owners   as $product)
              <div class="single_land ">
                <img src="img/{{$product->profilePic}}" id="single">
                <div class="relative">
                  <p>Name: <i>{{$product->name}}</i> </p>
                  <p>Location: <i>{{$product->location}}</i> </p>
                  <p>Contact: <i>{{$product->contact}}</i> </p>
                  <button type="button" name="button">
                    Navigate
                  </button>
                </div>
              </div>
            @endforeach
          </div>
        </div>

      </div>
      <!-- <div class="footer">
        <h3>&copy; NgomaLands 2019</h3>
      </div> -->

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
