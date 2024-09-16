@extends("app")
@section("content")
<div class="container">
    <div class="row  mt-3">
        @foreach($list as $data)
        <div class="col-md-6 text01 my-3 d-flex flex-column" style="height:50vh;">
            <a class=" text-decoration-none" href="#"><p class="h3 txt-title fw-bolder">{{$data->title}}</p></a>
            @if(!empty($data->content))
            <p class="h5 mt-2 p-3">{{explode("。",$data->content)[0]}}。</p>
            @endif
            <p class="mt-auto h6 text-end underline-section">{{$data->activeDate}}</p>
        </div>
        @endforeach
    </div>
</div>
@endsection