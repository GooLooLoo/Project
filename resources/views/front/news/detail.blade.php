@extends("app")
@section("content")
<div class="container p-5 text01">
    <div class="h1 text-center">{{$news->title}}</div>
    <div class="h5 mt-3">{!!explode("。",$news->content)[0]!!}</div>
    <img class="mt-3" src="/images/news/{{$news->photo}}" alt="" style="height:70vh;">
    <div class="h5 mt-3">{!!explode("。",$news->content)[1]!!}</div>
</div>
@endsection