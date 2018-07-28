<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<a href="/posts" class="btn btn-default">Go Back</a>
<div class="well">
<h1>{{$post->title}}</h1>
<small>Written on {{$post->created_at}}</small>
<p>{{$post->body}}</p>
<a href="/posts/{{$post->id}}/edit" class="btn btn-default">Edit</a>

{!! Form::open(['action'=>['PostsController@destroy',$post->id],'method'=>'POST']) !!}
    {{ form::submit("Delete",['class'=>"btn btn-danger"])}}
  {{form::hidden('_method','DELETE')}}
 
 
{!! Form::close() !!}
</div>
