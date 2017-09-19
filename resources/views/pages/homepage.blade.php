@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="col-md-12"><br/>
                <div class="panel panel-default">
               

                <div class="panel-body">
                    <div class ='panel-body'>
                        
                        <div class="navbar-header">
                           
                            <a class="navbar-brand" href="#">
                                Electronics
                            </a>
                            <a class="navbar-brand" href="#">
                                Furnitures
                            </a>
                            <a class="navbar-brand" href="#">
                                Clothes
                            </a>
                            <a class="navbar-brand" href="#">
                                Toys
                            </a>
                            <a class="navbar-brand" href="#">
                                Footwear
                            </a>

                        </div>

                    </div>
                </div>
                
            </div>
            </div>
            

            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="panel-body">
                      <div class="panel-body">
                        <center>
                            @foreach($posts as $post)
                            <a href = '/{{$post->id}}'>
                                <img src="uploads/{{$post->file}}" style = 'width:200px; height:200px;' width = '100%' height = '100%'><br/>
                                </a>

                                <p> {{$post->name}}</p>
                               
                                <p> &#x20B1; {{$post->price}}.00</p>
                                <p>Category: {{$post->category}}</p>
                                <p>Posted on: {{$post->created_at->toFormattedDateString()}}</p>
                                <hr>
                            
                            @endforeach
                        </center> 
                      </div>
                     
                  
                        
                        
                    </div>
                </div>  
            

            </div>
        </div>
    </div>
</div>



@endsection
