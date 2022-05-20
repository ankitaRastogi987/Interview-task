@extends('layout')
@extends('menu')
@section('content')
<section class="upload">
	  	<div class="container">
	 	 <div class="col-lg-12" style="background-color: white;">
			<div class="create-quiz-section" style="display: block;">
				<h2 style="padding-top: 32px;padding-bottom: 17px;">Update Post</h2>
				
				<form action="update" class="forms-sample quiz_form" name="" method="POST" enctype="multipart/form-data">
					@CSRF
					
					@if(Session::has("save_post_status"))
			              <p class="alert-success">{{Session::get("save_post_status")}}</p>
			        @endif
					<div class="form-group">
						<input type="hidden" name="id" value="{{$post->id}}">
						<label for="exampleTextarea1" class="card-title">Post Title<span title="mendetory field" style="color: red;">*</span></label>
						<input value="{{$post->title}}" name="title" type="text" class=" col-lg-6 form-control" id="exampleTextarea1" rows="4" placeholder="Write here..." required=""><br><br>
						<span style="color: red;">
							@if($errors->has('title'))
						          <div class="error">{{ $errors->first('title') }}</div>
						    @endif
						</span>
						<label for="exampleTextarea1" class="card-title">Post Description<span title="mendetory field" style="color: red;">*</span></label>
						<textarea name="detail" type="text" class=" col-lg-6 form-control detail" id="exampleTextarea1" rows="4" placeholder="Write here..." required="">{{$post->detail}}</textarea>
						<span style="color: red;">
							@if($errors->has('detail'))
						          <div class="error">{{ $errors->first('detail') }}</div>
						    @endif
						</span>

						<br>
						<br>
						
					</div>
					<div class="row">
						<div class="col-md-6">
	                     	<label for="exampleTextarea1" class="card-title">Post belong to which Category<span title="mendetory field" style="color: red;">*</span></label>
	                     	<select  selected="{{$post->category}}" class="form-control" name="category" id="exampleTextarea1" rows="4" required="">				
								<option value="Technology" @if($post->category=="Technology") selected @endif>Technology</option>
								<option value="Food" @if($post->category=="Food") selected @endif>Food</option>
								<option value="Social" @if($post->category=="Social") selected @endif>Social</option>
								<option value="Business" @if($post->category=="Business") selected @endif>Business</option>
								<option value="Music" @if($post->category=="Music") selected @endif>Music</option>
								<option value="Travell" @if($post->category=="Travel") selected @endif>Travel</option>
							</select>
							<span style="color: red;">
							@if($errors->has('category'))
						          <div class="error">{{ $errors->first('category') }}</div>
						    @endif
						</span>
						 </div>	  
						 <div class="col-md-6">
						 	<div class="col-md-3">
						 		<label for="exampleTextarea1" class="card-title">Post image<span title="mendetory field" style="color: red;">*</span></label>
								<input value="{{$post->post_img}}" name="post_img" type="file" class=" col-lg-3 form-control" id="exampleTextarea1" rows="4" placeholder="Select here..." >
						 	</div>
						 	<div class="col-md-3">
						 		<label for="exampleTextarea1" class="card-title">Old Image</label>
						 		<img src="{{Storage::url($post->post_img)}}" height="50px" width="120px">
						 		<input type="hidden" name="old_img" value="{{$post->post_img}}">
						 	</div>
							<span style="color: red;">
							@if($errors->has('post_img'))
						          <div class="error">{{ $errors->first('post_img') }}</div>
						    @endif

						</span>
							<br><br>
						 </div>              	  
                    </div>
                   <input type="submit" value="Post" id="save_post" class="btn btn-success" style="color: white;margin-bottom: 10px;">
                   <a id="cancle_btn" name="add_question" class="btn btn-success" style="color: white;margin-bottom: 10px;">Cancle</a>
			    </form>
			</div> 
		 </div>
	 	</div><!--/ container -->
	 </section><!--/ newsfeed -->
     
@endsection