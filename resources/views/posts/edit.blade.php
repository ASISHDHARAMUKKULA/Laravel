<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<h3>Create Post</h3>
{!! Form::open(['action'=>['PostsController@update',$post->id],'method'=>'POST']) !!}
 <div class="form-group">
    {{form::label('title','Title')}}
    
    {{form::text('title',$post->title,['class'=>'form-control','placeholder'=>'Title'])}}
   
 </div>
 <div class="form-group">
    
    {{form::label('body','Body')}}
    
    {{form::textarea('body',$post->body,['class'=>'form-control','placeholder'=>'Body'])}}
 </div>
  {{form::hidden('_method','PUT')}}
 {{form::submit('Submit',['class'=>'btn btn-primary'])}}
{!! Form::close() !!}