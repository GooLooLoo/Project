@extends("app")
@section("content")
<div class="container">
    @php $cnt=0;@endphp
    @foreach($about as $data)
    @php $cnt++;@endphp
    <div class="row align-items text-center {{$cnt % 2 !=0 ? 'flex-row-reverse':''}}">
        <div class="col-md-7 mt-3">
            <div class="h1 aboutTitle txt-title fw-bold">{{$data->title}}</div>
            @if(!empty($data->photo))
            <div class="abortImg bg-cover  rounded-3" style="background-image: url(images/about/{{$data->photo}}); height: 300px;"></div>
            @endif
        </div>
        <div class="col-md-5 text-center pt-5 text01">
            <p class="h5 fw-600 h4 mt-5">{{$data->content}}</p>
        </div>
    </div>
    @endforeach
    <!-- <div class="row align-items flex-row-reverse text-center">
        <div class="col-md-7  mt-3">
            <div class="h1 aboutTitle txt-title fw-bold">專業技術</div>
            <div class="abortImg bg-cover  rounded-3" style="background-image: url(images/aboutImg2.jpg); height: 300px;"></div>
        </div>
        <div class="col-md-5 text-center pt-5 text01">
            <p class="h4 fw-600 h4 mt-5">
                自成立以來，始終以提供高品質的美髮服務為宗旨。我們的設計師定期參加國內外的專業培訓，掌握最新的美髮技術和產品資訊。我們的服務包括精緻剪髮、創意染髮、深層護理、燙髮和特殊造型，無論是日常護理還是特別場合，我們都能滿足您的需求。</p>
        </div>
    </div>
    <div class="row align-items text-center">
        <div class="col-md-7  mt-3">
            <div class="h1 aboutTitle txt-title fw-bold">舒適環境</div>
            <div class="abortImg bg-cover  rounded-3" style="background-image: url(images/aboutImg1.jpg); height: 300px;"></div>
        </div>
        <div class="col-md-5 text-center pt-5 text01">
            <p class="h4 fw-600 h4 mt-5">
                為您提供一個舒適、放鬆的環境，讓您在享受美髮服務的同時，也能感受到愉快的氛圍。我們的髮廊裝潢高雅，設施齊全，並且使用最先進的美髮設備和高品質的產品，確保每一次服務都達到最高標準。無論是短暫的修剪還是長時間的染燙護理，我們都希望您在這裡度過一段愉快的時光。</p>
        </div>
    </div>
    <div class="row align-items flex-row-reverse text-center">
        <div class="col-md-7 mt-3">
            <div class="h1 aboutTitle txt-title fw-bold">貼心服務</div>
            <div class="abortImg bg-cover  rounded-3" style="background-image: url(images/aboutImg2.jpg); height: 300px;"></div>
        </div>
        <div class="col-md-5 text-center pt-5 text01">
            <p class="h4 fw-600 h4 mt-5">
                我們不僅關注您的髮型，更關心您的整體體驗。我們的設計師會在服務開始前與您進行詳細溝通，了解您的需求和偏好，並提供專業建議。我們致力於打造一個溫暖和諧的氛圍，讓每一位客戶都能感受到如家般的舒適。</p>
        </div>
    </div> -->
</div>
@endsection