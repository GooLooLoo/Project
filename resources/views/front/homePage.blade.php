@extends("front.app")
@section("content")
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
<div class="container mt-3">
    <div class="row d-flex flex-column align-items-center">
        <div class="col-md-8">
            <a class="" href="#">
                <div class="bg-cover" style="background-image: url(images/about.jpg); height:400px; border-radius: 20px; box-shadow: 5px 3px 20px 5px black;"></div>
            </a>
            <div class="h5 mt-3 text-center" style="color: var(--color18);">我們致力於為每一位客戶提供專業、個性化的美髮服務。無論您是想要嘗試全新的造型，還是尋找日常護理的專業建議，我們的經驗豐富的設計師團隊都會竭誠為您服務。我們使用高品質的產品，結合最新的美髮技術，確保您在每一次光臨都能享受到卓越的體驗。
            </div>
        </div>
    </div>
</div>
<!-- 最新消息 -->
<div class="container" style="height: 100vh;">
    <div class="top underline-section">
        <div class="h1 title ms-5 txt-title fw-bold ">
            最新消息
        </div>
    </div>
    <div class="row ms-5 mt-5 autoplay">
        <div class="col-md-4 text01 p-3 d-flex flex-column slick-track">
            <p class="h3" style="letter-spacing: 0.1em;">夏季特惠活動開始了！</p>
            <p class="h5 mt-2" style="letter-spacing: 0.1em;">我們的夏季特惠活動已經開始啦！即日起至8月底，所有剪髮和染髮服務享受八折優惠。</p>
            <p class="mt-auto h6 mt-3 text-end underline-section">2024/07/01</p>
        </div>
        <div class="col-md-4  text01 p-3 me-auto d-flex flex-column  slick-track">
            <p class="h3" style="letter-spacing: 0.1em;">即將推出會員專屬優惠</p>
            <p class="h5 mt-2" style="letter-spacing: 0.1em;">為了感謝一直以來支持我們的忠實客戶，我們即將推出會員專屬優惠計劃！包括每月一次的免費護髮服務、生日當月的特別折扣。</p>
            <p class="mt-auto h6 mt-3 text-end underline-section">2024/07/07</p>
        </div>
        <div class="col-md-4  text01 p-3 me-auto  d-flex flex-column  slick-track">
            <p class="h3" style="letter-spacing: 0.1em;">即將推出會員專屬優惠</p>
            <p class="h5 mt-2" style="letter-spacing: 0.1em;">為了感謝一直以來支持我們的忠實客戶，我們即將推出會員專屬優惠計劃！包括每月一次的免費護髮服務、生日當月的特別折扣。</p>
            <p class="mt-auto h6 mt-3 text-end underline-section">2024/07/07</p>
        </div>
        <div class="col-md-4  text01 p-3 me-auto d-flex flex-column  slick-track">
            <p class="h3" style="letter-spacing: 0.1em;">即將推出會員專屬優惠</p>
            <p class="h5 mt-2" style="letter-spacing: 0.1em;">為了感謝一直以來支持我們的忠實客戶，我們即將推出會員專屬優惠計劃！包括每月一次的免費護髮服務、生日當月的特別折扣。</p>
            <p class="mt-auto h6 mt-3 text-end underline-section">2024/07/07</p>
        </div>
        <div class="col-md-4  text01 p-3 me-auto d-flex flex-column  slick-track">
            <p class="h3" style="letter-spacing: 0.1em;">即將推出會員專屬優惠</p>
            <p class="h5 mt-2" style="letter-spacing: 0.1em;">為了感謝一直以來支持我們的忠實客戶，我們即將推出會員專屬優惠計劃！包括每月一次的免費護髮服務、生日當月的特別折扣。</p>
            <p class="mt-auto h6 mt-3 text-end underline-section">2024/07/07</p>
        </div>
    </div>
</div>
<!-- 設計師 -->
<div class="container" style="height: 100vh;">
    <div class="top underline-section">
        <div class="h1 title ms-5 txt-title fw-bold ">
            設計師
        </div>
    </div>
</div>
<!-- 推薦髮品 -->
<div class="container" style="height: 100vh;">
    <div class="top underline-section">
        <div class="h1 title ms-5 txt-title fw-bold ">
            推薦髮品
        </div>
    </div>
    <div class="pruduct autoplay row mt-3" >
        <div class="m-0 " style="height: 480px;">
            <img class="slick-track h-100 w-100 rounded-3 img-thumbnail" src="images/product_1.jpg" alt="">
        </div>
        <div class="m-0"  style="height: 480px;">
            <img class="slick-track h-100 w-100 rounded-3 img-thumbnail" src="images/product_2.jpg" alt="">
        </div>
        <div class="m-0"  style="height: 480px;">
            <img class="slick-track h-100 w-100 rounded-3 img-thumbnail" src="images/product_3.jpg" alt="">
        </div>
        <div class="m-0"  style="height: 480px;">
            <img class="slick-track h-100 w-100 rounded-3 img-thumbnail" src="images/product_4.jpg" alt="">
        </div>
        <div class="m-0"  style="height: 480px;">
            <img class="slick-track h-100 w-100 rounded-3 img-thumbnail" src="images/product_5.jpg" alt="">
        </div>
    </div>
</div>

@endsection