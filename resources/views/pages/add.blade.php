@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
               

                <div class="panel-body">
                    <div class ='panel-body'>
                    	<center>ADD Item</center>
                    </div>
                </div>
                
            </div>

            <div class="panel panel-default">
            	<div class="panel-body">
            		<div class="panel-body">
                      <div class="panel-body">
                        <center>
                        <form class = 'form-group' action="/upload" method="POST" enctype="multipart/form-data">
                          {{csrf_field()}}
                          <input id = 'file' type="file" name="file" /><br/><br/>
                          <label>Name of Item: </label><br/>
                          <input id = 'txtname' type ='text' name= 'txtname' required/> <br/><br/>
                          
                          <label>Price: </label><br/>
                          <div style = 'width:30%;' class="input-group">
                          <span class="input-group-addon">&#x20B1;</span> 
                          <input class = 'form-control' id = 'price' type ='text' name= 'price' required/>
                          <span class="input-group-addon">.00</span> 
                          </div>
                           <br/><br/>
                          <label>Category</label><br/>
                        
                          <select id = 'category' name = 'category'>
                            <option>Electronics</option>
                            <option>Furnitures</option>
                            <option>Clothes</option>
                            <option>Toys</option>
                            <option>Footwear</option>
                          </select><br/><br/>
                          
                          <label>Description: </label><br/>
                          <textarea id = 'body' name = 'body' required>
                               
                          </textarea><br/><br/>
                          <input value = 'Upload' type="submit" required/>
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