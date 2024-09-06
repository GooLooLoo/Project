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
        <div class="carousel-item active">
            <img src="images/banner_1.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="images/banner_2.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="images/banner_3.jpg" class="d-block w-100" alt="...">
        </div>
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
            <a class="" href="#">
                <div class="bg-cover" style="background-image: url(images/about.jpg); height:400px; border-radius: 20px; box-shadow: 5px 3px 20px 5px black;"></div>
            </a>
            <div class="h5 mt-5 text-center" style="color: var(--color18); letter-spacing: 0.1em;">我們致力於為每一位客戶提供專業、個性化的美髮服務。無論您是想要嘗試全新的造型，還是尋找日常護理的專業建議，我們的經驗豐富的設計師團隊都會竭誠為您服務。我們使用高品質的產品，結合最新的美髮技術，確保您在每一次光臨都能享受到卓越的體驗。
            </div>
        </div>
    </div>
</div>
<!-- 最新消息 -->
<div class="container mt-3" style="height:65vh;">
    <div class="top underline-section">
        <div class="h1 title ms-5 txt-title fw-bold ">
            最新消息
        </div>
    </div>
    <div class="row autoplay mt-5 pt-3">
        <div class="col-md-4 text01 p-3 d-flex flex-column">
            <p class="h3">夏季特惠活動開始了！</p>
            <p class="h5 mt-2">我們的夏季特惠活動已經開始啦！即日起至8月底，所有剪髮和染髮服務享受八折優惠。</p>
            <p class="mt-auto h6 text-end underline-section">2024/07/01</p>
        </div>
        <div class="col-md-4  text01 p-3 d-flex flex-column">
            <p class="h3">即將推出會員專屬優惠</p>
            <p class="h5 mt-2">為了感謝一直以來支持我們的忠實客戶，我們即將推出會員專屬優惠計劃！包括每月一次的免費護髮服務、生日當月的特別折扣。</p>
            <p class="mt-auto h6 mt-3 text-end underline-section">2024/07/07</p>
        </div>
        <div class="col-md-4 text01 p-3 d-flex flex-column">
            <p class="h3">夏季特惠活動開始了！</p>
            <p class="h5 mt-2">我們的夏季特惠活動已經開始啦！即日起至8月底，所有剪髮和染髮服務享受八折優惠。</p>
            <p class="mt-auto h6 text-end underline-section mt-auto">2024/07/01</p>
        </div>
        <div class="col-md-4  text01 p-3 d-flex flex-column">
            <p class="h3">即將推出會員專屬優惠</p>
            <p class="h5 mt-2">為了感謝一直以來支持我們的忠實客戶，我們即將推出會員專屬優惠計劃！包括每月一次的免費護髮服務、生日當月的特別折扣。</p>
            <p class="mt-auto h6 mt-3 text-end underline-section">2024/07/07</p>
        </div>
        <div class="col-md-4  text01 p-3 d-flex flex-column">
            <p class="h3">即將推出會員專屬優惠</p>
            <p class="h5 mt-2">為了感謝一直以來支持我們的忠實客戶，我們即將推出會員專屬優惠計劃！包括每月一次的免費護髮服務、生日當月的特別折扣。</p>
            <p class="mt-auto h6 mt-3 text-end underline-section">2024/07/07</p>
        </div>
    </div>
</div>
<!-- 設計師 -->
<div class="container mt-3" style="height:80vh;">
    <div class="top underline-section accordion">
        <div class="h1 title ms-5 txt-title fw-bold">
            設計師
        </div>
    </div>
    <div class="row">
        <div class="col-1"></div>
        <div class="col-3">
            <div class="h4 mb-5 p-4 text01 text-center" style="letter-spacing: 0.1em; line-height:50px;">
                我們的設計師團隊精通最新的美髮技術和潮流趨勢。為您提供專業建議和個性化造型。讓我們幫助您展現最美的一面！
            </div>
        </div>
        <div class="col-8">
            <div class="row">
                <div class="col-4">
                    <div class="des_card mt-3 card">
                        <span class="ms-3 h3 des_name txt-title fw-bold align-self-center">Linda Zhang</span>
                        <div class="des_pic bg-cover" style="background-image: url(/images/designer_1.jfif);"></div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="des_card mt-3 card">
                        <span class="ms-3 h3 des_name txt-title fw-bold align-self-center">Sophie Lee</span>
                        <div class="des_pic bg-cover" style="background-image: url(/images/designer_2.jfif);"></div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="des_card mt-3 card">
                        <span class="ms-3 h3 des_name txt-title fw-bold align-self-center">Emily Chen</span>
                        <div class="des_pic bg-cover" style="background-image: url(/images/designer_3.jfif);"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- 推薦髮品 -->
<div class="container mt-3">
    <div class="top underline-section">
        <div class="h1 title ms-5 txt-title fw-bold">
            推薦髮品
        </div>
    </div>
    <div class="pruduct autoplay row mt-5">
        <div class="m-0 " style="height: 480px;">
            <img class="slick-track h-100 w-100 rounded-3 img-thumbnail" src="images/product_1.jpg" alt="">
        </div>
        <div class="m-0" style="height: 480px;">
            <img class="slick-track h-100 w-100 rounded-3 img-thumbnail" src="images/product_2.jpg" alt="">
        </div>
        <div class="m-0" style="height: 480px;">
            <img class="slick-track h-100 w-100 rounded-3 img-thumbnail" src="images/product_3.jpg" alt="">
        </div>
        <div class="m-0" style="height: 480px;">
            <img class="slick-track h-100 w-100 rounded-3 img-thumbnail" src="images/product_4.jpg" alt="">
        </div>
        <div class="m-0" style="height: 480px;">
            <img class="slick-track h-100 w-100 rounded-3 img-thumbnail" src="images/product_5.jpg" alt="">
        </div>
    </div>
</div>

@endsection