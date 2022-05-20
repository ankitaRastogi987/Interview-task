
<section class="nav-sec">
  <div class="d-flex justify-content-between">
   <div class="p-2 nav-icon-lg dark-black">
   <a class="nav-icon" href="home"><em class="fa fa-home"></em>
   <span>Home</span><br>
    @if(Session::has("email"))
       <span>Hello {{Session::get("email")}}</span>
    @endif
   </a>
   </div>
   <div class="p-2 nav-icon-lg  mint-green">
   <!-- <a class="nav-icon" href="home"><em class="fa fa-crosshairs"></em> -->
   <span></span>
   </a>
   </div>
   @if(Session::has("email"))
   <div class="p-2 nav-icon-lg mint-green">
   <a class="nav-icon" href="new_post"><em class="fab fa-instagram"></em>
   <span>New Post</span>
   </a>
   </div>
   <div class="p-2 nav-icon-lg  mint-green">
   <!-- <a class="nav-icon" href="home"><em class="fa fa-align-left"></em> -->
   <span></span>
   </a>
   </div>
   <div class="p-2 nav-icon-lg dark-black">
   <a class="nav-icon" href="logout"><em class="fa fa-user"></em>
   <span>Logout</span>
   </a>
   </div>
  </div>
  @else
   <div class="p-2 nav-icon-lg mint-green">
   <a class="nav-icon" href="login"><em class="fab fa-instagram"></em>
   <span>Login</span>
   </a>
   </div>
   <div class="p-2 nav-icon-lg  mint-green">
   <!-- <a class="nav-icon" href="home"><em class="fa fa-align-left"></em> -->
   <span></span>
   </a>
  @endif
</section>  
