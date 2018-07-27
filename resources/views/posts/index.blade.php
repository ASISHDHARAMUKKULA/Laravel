<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

@if(count($post)>=1)
        @foreach($post as $posts)
            <div class="well">
            <h2><a href="/posts/{{$posts->id}}">{{$posts->title}}</a></h2>
            <h2>{{$posts->body}}</h2>
            <small>Post Created at {{$posts->created_at}}</small>
            <small>Post Updated at {{$posts->updated_at}}</small>
            </div>
        @endforeach

       


@endif 

   
