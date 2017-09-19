@extends('layouts.app')

@section('content')
	
	<div class="container">
    	<div class="row">
        	<div class="col-md-8 col-md-offset-2">
            	<div class="panel panel-default">
               		<div class="panel-body">
	                    <div class ='panel-body'>
	                    	<center>{{$post->name}}</center>

	                    	
	                    	<center>
							<img src = 'uploads/{{$post->file}}' style = 'width:350px; height:350px;' width = '100%' height = '100%'/>
	                    	<p>Product ID: {{$post->id}}</p>
	                    	<p>Price: &#x20B1; {{$post->price}}</p> 
	                    	<p>Description: {{$post->body}}</p>
	                    	<p>Posted by: {{ $post->user->name }}</p>
	                    	</center>
	                   </div>
                	</div>
                
            	</div>

            	<div class="panel panel-default">
               		<div class="panel-body">
	                    <div class ='panel-body'>
	                    	
							<div class="comments">
								<center><strong>REVIEW: </strong></center><br/>
								<ul class="list-gruop">
									@foreach($post->comment as $comment)
									<li class = 'list-group-item'>
										<strong>
										{{ $comment->user->name }} || 
										{{ $comment->created_at->diffForHumans() }} : &nbsp;
										<br/>
										</strong>
										{{ $comment->body }}
									</li>
									@endforeach
								</ul>
								
							</div>
	                    	
	                   </div>
                	</div>
                
            	</div>

            	<div class="panel panel-default">
               		<div class="panel-body">
	                    <div class ='panel-body'>
	                    	
							<div class="card">
								<div class="card-block">

									<form method = 'post' action ="/{{$post->id}}/comment">
									{{ csrf_field() }}
									
										<div class="form-group">
											<textarea name = 'commentBody' placeholder = 'Your Review Here!' id ='commentBody' class = 'form-control'></textarea>
										</div>
										<div class="form-group">
											 <button type="submit" class="btn btn-primary">Comment</button>
										</div>
									

								
									</form>
								</div>
							</div>
	                    	
	                   </div>
                	</div>
                
            	</div>

	        </div>
	    </div>
	</div>

@endsection