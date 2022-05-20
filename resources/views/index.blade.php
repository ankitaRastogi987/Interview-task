@extends('layout')
@section('content')
<section class="login">
  <div class="container">
   <div class="banner-content">
    <h1><i class="fa fa-smile"></i> Blogger</h1>
      
    <form method="post" class="form-signin" action="login">
      @CSRF
     <h3 class="form-signin-heading">Please sign in</h3>
        @if(Session::has("login_msg"))
              <p class="alert-success">{{Session::get("login_msg")}}</p>
        @endif
     <div class="form-group">
      <input name="email" type="text" id="email" value="{{old('email')}}" class="form-control" placeholder="Email"><span style="color: red;"></span>
     </div>
     <div class="form-group">
      <input type="password" id="password" value="{{old('password')}}" class="form-control" name="password" placeholder="Password"><span style="color: red;"></span>
     </div>
  
     <button class="kafe-btn kafe-btn-mint btn-block" type="submit" name="subm" style="margin-bottom: 13px;">Sign in</button>
     <br/>
     
     <a class="btn btn-dark " href="" role="button">Only Auth user perform CRUD operations</a>
     <a class="btn btn-dark " href="" role="button">While Guest can only see post</a>
    </form>
    </form>
  
   </div><!--/. banner-content -->
  </div><!-- /.container -->
 </section> 
@endsection
