@extends("app")
@section("content")
<style>
    .des_card {
        position: relative;
        background-color: #F5F5DC;
        height: 400px;
    }

    .des_card .des_name {
        position: absolute;
        bottom: 70%;
    }

    .des_card .des_pic {
        position: absolute;
        background-position: 0 10%;
        top: 40%;
        left: 5%;
        border-radius: 50%;
        height: 50%;
        width: 90%;
    }

    .des_card:hover .des_name {
        background-color: rgba(255, 255, 255, 0.6);
        bottom: 0;
        z-index: 1;
        transition: bottom 800ms;
    }

    .des_card:hover .des_pic {
        top: 0;
        left: 0;
        border-radius: 2%;
        height: 100%;
        width: 100%;
        transition: ease 600ms;
    }
</style>
<!-- banner -->
<div id="carouselExampleFade" class="carousel slide carousel-fade h-100" data-bs-ride="carousel">
    <div class="carousel-inner">
        @php $cnt =0;@endphp
        @foreach($BannerPhoto as $data)
        @if($data->active == "Y")
        <div class="carousel-item {{$cnt == 0 ? 'active' : ''}}">
            <img src="images/home/bannerPhoto/{{$data->photo}}" class="d-block w-100" alt="...">
        </div>
        @php $cnt++;@endphp
        @endif
        @endforeach
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
<!-- about_img -->
<div class="container mt-5">
    <div class="row d-flex flex-column align-items-center">
        <div class="col-md-8">
            <a class="" href="/about">
                <div class="bg-cover" style="background-image: url(images/home/title/{{$about->photo}}); height:400px; border-radius: 20px; box-shadow: 5px 3px 20px 5px black;"></div>
            </a>
            <div class="h5 mt-5 text-center" style="color: var(--color18); letter-spacing: 0.1em;">{{$about->content}}
            </div>
        </div>
    </div>

    <!-- 最新消息 -->
    <div class="mt-5 top underline-section">
        <div class="h1 title ms-5 txt-title fw-bold ">
            {{$news->title}}
        </div>
    </div>
    <div class="row autoplay mt-5 pt-3">
        @foreach($newsContent as $data)
        @if($data->active == "Y")
        <div class="col-md-4 text01 p-3 d-flex flex-column" style="height:50vh;">
            <p class="h4">{{$data->title}}</p>
            <p class="mt-2">{{ explode("。",$data->content)[0] }}。<a class="text-direction-none text01" href="#">...</a></p>
            <p class="mt-auto h6 text-end underline-section">{{$data->activeDate}}</p>
        </div>
        @endif
        @endforeach
    </div>

    <!-- 設計師 -->
    <div class="top underline-section accordion mt-5">
        <div class="h1 title ms-5 txt-title fw-bold">
            {{$designer->title}}
        </div>
    </div>
    <div class="row">
        <div class="col-1"></div>
        <div class="col-3">
            <div class="h4 mb-5 p-4 text01 text-center" style="letter-spacing: 0.1em; line-height:50px;">
                {{$designer->content}}
            </div>
        </div>
        <div class="col-8">
            <div class="row">
                @foreach($designerContent as $data)
                <div class="col-4">
                    <div class="des_card mt-3 card border-0">
                        <span class="ms-3 h3 des_name txt-title fw-bold align-self-center">{{$data->name}}</span>
                        @if(!empty($data->photo))
                        <a href="">
                            <div class="des_pic bg-cover" style="background-image: url(/images/designer/{{$data->photo}});"></div>
                        </a>
                        @endif
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- 推薦髮品 -->

    <div class="top underline-section">
        <div class="h1 title ms-5 txt-title fw-bold">
            {{$product->title}}
        </div>
    </div>
    <div class="pruduct autoplay row mt-5">
        @foreach($productContent as $data)
        @if($data->active == "Y")
        <div class="m-0 " style="height: 480px;">
            <img class="slick-track h-100 w-100 rounded-3 img-thumbnail" src="images/product/{{$data->photo}}" alt="">
        </div>
        @endif
        @endforeach
    </div>
</div>

@endsection