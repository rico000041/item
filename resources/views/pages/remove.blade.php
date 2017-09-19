@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
               

                <div class="panel-body">
                    <div class ='panel-body'>
                        <center>EDIT Item</center>
                    </div>
                </div>
                
            </div>
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="panel-body">
   
                      <div class="panel-body">
                        <center>
                        <form class = 'form-group' action="/remove" method="POST" enctype="multipart/form-data">
                          {{csrf_field()}}
                           <div style = 'width:30%;' class="input-group">
                              <span class="input-group-addon">ID</span> 
                                 <input class = 'form-control' id = 'postId' type ='text' name= 'postId' required/>
                              
                          </div>
                          <hr>
                          <input value = 'Remove Item' type="submit" required/>
                        </form>
                      </center> 
                      </div>
                     
                  
                        
                        
                    </div>
                </div>  
            

            </div>
        </div>
    </div>
</div>

@endsection