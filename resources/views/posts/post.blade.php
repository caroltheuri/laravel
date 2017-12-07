<h2 style="text-align:justify;color:blue;">
    <a href="/posts/{{$post->id}}">
    {{$post->title}}
</a>
</h2>
{{$post->created_at->toDayDateTimeString()}}
<hr>
<p style="text-align:justify;">{{$post->content}}</p>