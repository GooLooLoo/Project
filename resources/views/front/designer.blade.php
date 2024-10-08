@extends("app")
@section("content")
<link rel="stylesheet" href="/css/Ming.css">
<style>
    /* 捲簾 */
    .card_in {
        position: absolute;
        width: 100%;
        height: 100%;
        bottom: -100%;
        transition: bottom 0.6s;
        display: flex;
        justify-content: center;
        align-items: center;
        left: 0;
    }

    /* 捲簾框架，捲簾放裡面 */
    .cont {
        position: relative;
        height: auto;
        overflow: hidden;
    }

    /* 滑鼠移動至card後card_in內容上升 */
    .card:hover .card_in {
        bottom: 0;
    }


    .card:hover .card-title {
        top: 10%;
    }

    /* 內容動畫 */
    .cont .card_in .btn-my03 {
        position: absolute;
        bottom: 0;
    }

    /* 設計師名稱 */
    .card-title {
        /* 強迫不換行 */
        white-space: nowrap;
        position: absolute;
        /* 上下50%後往回條50%使物件置中 */
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        transition: top 0.6s;
    }
</style>
<div class="container">
    <div class="row mt-3 p-3">
        @foreach($list as $data)
        <div class="col-md-6  mt-3">
            <div class="card border-0">
                <div class="row g-0">
                    <div class=" col-md-6 p-1 bg-modal">
                        <img class=" rounded-3" src="images/designer/{{$data->photo}}" alt="..." style="width: 100%;box-shadow: 3px 2px 4px 2px gray;">
                    </div>
                    <div class="cont col-md-6 bg-card rounded-3">
                        <div class="card-body text-center">
                            <div class="card_in d-none d-md-flex">
                                <div class="h5 p-2  text01">專長：{{$data->expertise}}</div>
                                <a href="/designer/detail/{{$data->id}}/#foc" class="btn-my03 mb-3">查看更多</a>
                            </div>
                            <div class="card-title h4 txt-title fw-bold d-none d-md-block w-100">{{$data->name}}</div>
                            <!-- rwd用 -->
                            <div class="h4 txt-title fw-bold 3 d-md-none text-center">{{$data->name}}</div>
                            <a href="/designer/detail/{{$data->id}}" class="btn-my03 d-md-none">查看更多</a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection