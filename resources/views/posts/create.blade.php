<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<h3>Create Post</h3>
{!! Form::open(['action'=>'PostsController@store','method'=>'POST']) !!}
 <div class="form-group">
    {{form::label('title','Title')}}
    
    {{form::text('title','',['class'=>'form-control','placeholder'=>'Title'])}}
   
 </div>
 <div class="form-group">
    
    {{form::label('body','Body')}}
    
    {{form::textarea('body','',['class'=>'form-control','placeholder'=>'Body'])}}
 </div>
 {{form::submit('Submit',['class'=>'btn btn-primary'])}}
{!! Form::close() !!}