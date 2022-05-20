@extends('layout')
@extends('menu')
@section('content')
<div id="wrap">

  <section class="bodymain">
    <div class="clear"></div>
  </section>
  <!-- cat row starts here -->
  
  <section class="category row" style="margin-top: 2px;">
     <div class="col-md-2 col-2 cat"
       style="background: linear-gradient( rgba(34,34,34,0.78), rgba(34,34,34,0.78)), url('assets/img/posts/3.gif') no-repeat;
              background-size: cover;
                  background-position: center center;
                  -webkit-background-size: cover;
                  -moz-background-size: cover;
                  -o-background-size: cover;">
          <div class="story-body text-center">
           <h4><a class="filteM" href="{{URL('/home?category=Food')}}">Food</a></h4> 
          </div>      
     </div>
     <div class="col-md-2 col-2 cat" 
       style="background: linear-gradient( rgba(34,34,34,0.78), rgba(34,34,34,0.78)), url('assets/img/posts/4.jpg') no-repeat;
              background-size: cover;
                  background-position: center center;
                  -webkit-background-size: cover;
                  -moz-background-size: cover;
                  -o-background-size: cover;">
          <div class="story-body text-center">
           <h4><a class="filteM" href="{{URL('/home?category=Social')}}">Social</a></h4>
          
          </div>      
     </div>
     
     <div class="col-md-2 col-2 cat" 
       style="background: linear-gradient( rgba(34,34,34,0.78), rgba(34,34,34,0.78)), url('assets/img/posts/4.jpg') no-repeat;
              background-size: cover;
                  background-position: center center;
                  -webkit-background-size: cover;
                  -moz-background-size: cover;
                  -o-background-size: cover;">
          <div class="story-body text-center">
           
           <h4><a class="filteM" href="{{URL('/home?category=Music')}}">Music</a></h4>
          
          </div>      
     </div>
     <div class="col-md-2 col-2 cat" 
       style="background: linear-gradient( rgba(34,34,34,0.78), rgba(34,34,34,0.78)), url('assets/img/posts/2.gif') no-repeat;
              background-size: cover;
                  background-position: center center;
                  -webkit-background-size: cover;
                  -moz-background-size: cover;
                  -o-background-size: cover;">
          <div class="story-body text-center">
          
           <h4><a class="filteM" href="{{URL('/home?category=Technology')}}">Technology</a></h4>
          </div>      
     </div>
 
       <div class="col-md-2 col-2 cat" 
         style="background: linear-gradient( rgba(34,34,34,0.78), rgba(34,34,34,0.78)), url('assets/img/posts/4.jpg') no-repeat;
                background-size: cover;
                    background-position: center center;
                    -webkit-background-size: cover;
                    -moz-background-size: cover;
                    -o-background-size: cover;">
            <div class="story-body text-center">
             
             <h4><a class="filteM" href="{{URL('/home?category=Travel')}}">Travel</a></h4>
            
            </div>      
       </div>
     <div class="col-md-2 col-2 cat" 
       style="background: linear-gradient( rgba(34,34,34,0.78), rgba(34,34,34,0.78)), url('assets/img/posts/15.jpg') no-repeat;
              background-size: cover;
                  background-position: center center;
                  -webkit-background-size: cover;
                  -moz-background-size: cover;
                  -o-background-size: cover;">
          <div class="story-body text-center">
          
           <h4><a class="filteM" href="{{URL('/home?category=Business')}}">Business</a></h4>
            
          
          </div>
         </div>

     


    </div><!--/ col-lg-3 -->
  </div>
</section>

  <!-- cat row ends here -->
  <section class="newsfeed">

	  <div class="container">
	  	@if(Session::has("delete_post_status"))
              <p class="alert-success">{{Session::get("delete_post_status")}}</p>
        @endif
        @if(Session::has("update_post_status"))
              <p class="alert-success">{{Session::get("update_post_status")}}</p>
        @endif
        
	   <div class="row">
	   	@if(empty($posts))
	   		No posts available
	   	@endif

	  	@foreach($posts as $post)
	    <div class="col-lg-4">
	    	
			 <a href="#readPost{{$post->id}}" data-toggle="modal">
				 <div class="explorebox" 
				   style="background: linear-gradient( rgba(34,34,34,0.2), rgba(34,34,34,0.2)), url({{Storage::url($post->post_img)}}) no-repeat;
				          background-size: cover;
		                  background-position: center center;
		                  -webkit-background-size: cover;
		                  -moz-background-size: cover;
		                  -o-background-size: cover;">
				 </div>
			 </a>
			 
			 <!-- Modal -->
<div class="modal fade"  id="readPost{{$post->id}}" tabindex="-1" role="dialog" aria-labelledby="readPostTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <!-- <h5 class="modal-title" id="readPostTitle">Read Post</h5> -->
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      
        <div class="modal-body row" style="margin-left: 10px;margin-right: 10px;">
          <div class="text-center">
            <h2>{{$post->title}}</h2>
          </div>
          <div class="entry-thumbnail col-md-6 col-sm-12">
            <img class="img-fluid img-thumbnail" src="{{Storage::url($post->post_img)}}" alt="Image">
          </div>
          <div class="entry-thumbnail col-md-6 col-sm-12 mt-5" style="margin-top: 10px;">
            <h4> Category : {{$post->category}} </h4>
          </div>
          <div class="entry-thumbnail col-md-6 col-sm-12 mt-5" style="margin-top: 10px;">
            {{$post->detail}}
            <input type="hidden" class="ar-post-id" value="{{$post->id}}">
          </div>
        </div>
      
      <div class="modal-footer">
      	@if(Session::has("email"))
      	<a href="edit?id={{$post->id}}" class="kafe kafe-btn-mint-small"><i class="fa fa-check-square"></i> Edit</a>
      	<a href="delete?id={{$post->id}}" class="kafe kafe-btn-mint-small"><i class="fa fa-check-square"></i> Delete</a>
      	@endif
        <button type="button" class="kafe-btn kafe-btn-mint-small" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
</div> 
@endforeach
		</div><!--/ col-lg-4 -->
		<!-- ************************* -->

		<!-- ************************* -->
	  
	    
		
	   </div><!--/ row -->

	  </div>

{{ $posts->links() }}
	</section>
<script type="text/javascript">
	$(document).ready(function() 
    {
      $('.cat').click(function()
      {
        var cat=$.trim($(this).text());
        // alert(cat);
        console.log("value is :"+cat);
        $.ajax({
          url: 'cat',
          type: 'POST',
          data: {cat: cat},
        })
        .done(function(e) 
        {
          console.log("success");
          $('#cont').html("");
          $('#cont').html(e);
        })
        .fail(function() {
          console.log("error");
        })
      });
    });
</script>
@endsection