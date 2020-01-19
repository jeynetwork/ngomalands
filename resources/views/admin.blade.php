<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="/css/masterAccount.css">
    <link href="https://fonts.googleapis.com/css?family=Quicksand&display=swap" rel="stylesheet">
  </head>
  <body>
    <div class="mainContainer">
      <div class="header">
          <ul>
            <li>Home</li>
            <li>Upload</li>
            <li>Orders</li>
          </ul>
          <h3>
            <img src="img/avatar.jpg" id="img">
            {{Auth::user()->name}}
          </h3>

      </div>
      <div class="container">
        <div class="leftContent">
          <h3>{{Auth::user()->name}}</h3>
          <img src="img/avatar.jpg" id="leftimg">
          <h3>{{Auth::user()->email}}</h3>
          <button type="button" name="button">
            Edit Profile
          </button>
        </div>
        <div class="rightcontent">
          <form class="addProd" action="add_farm" method="post">
            <h3>Avail Farm</h3>
            <input type="hidden" name="_token" value="{{csrf_token()}}">
            <input type="text" name="location" placeholder="Location">
            <input type="text" name="size" placeholder="Size">
            <input type="text" name="crops" placeholder="Adapted Crops">
            <input type="text" name="price" placeholder="Price">
            <input type="text" name="photos" placeholder="Protos">
            <br>
            <div class="line"></div>
            <button type="submit" name="button">Upload</button>
            <button type="button" name="button">Cancel</button>
          </form>

          <div class="allprod">
            <h3>My farms</h3>
            @foreach($prods as $products)
              <div class="single_prod">
                <img src="img/{{$products->photos}}" id="image">
              </div>
            @endforeach
          </div>

          <div class="allprod">
            <h3>Requests Pending</h3>
            <div class="single_request"></div>
            <div class="single_request"></div>
            <div class="single_request"></div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
