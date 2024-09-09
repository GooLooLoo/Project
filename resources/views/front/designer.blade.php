@extends("app")
@section("content")
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
        white-space:nowrap;
        position: absolute;
        /* 上下50%後往回條50%使物件置中 */
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        transition: top 0.6s;
    }
</style>
<div class="container">
    <div class="row mt-3">
        <div class="col-md-6 card border-0 mt-3 ">
            <div class="row g-0 bg-card">
                <div class=" col-md-6">
                    <img src="images/designer_3.jfif" alt="..." style="width: 100%;">
                </div>
                <div class="cont col-md-6">
                    <div class="card-body text-center ">
                        <div class="card_in d-none d-md-flex">
                            <div class="h5 p-2  text01">專長：精緻剪髮與造型設計</div>
                            <button class="btn-my03 mb-3">查看更多</button>
                        </div>
                        <div class="card-title h4 txt-title fw-bold d-none d-md-block w-100">Emily Chen</div>
                        <!-- rwd用 -->
                        <div class="h4 txt-title fw-bold 3 d-md-none text-center">Emily Chen</div>
                        <button class="btn-my03 d-md-none ">查看更多</button>
                    </div>

                </div>
            </div>
        </div>
        <div class="col-md-6 card border-0 mt-3">
            <div class="row g-0 bg-card">
                <div class=" col-md-6">
                    <img src="images/designer_4.jfif" alt="..." style="width: 100%;">
                </div>
                <div class="cont col-md-6">
                    <div class="card-body text-center">
                        <div class="card_in d-flex flex-column text-center  d-none d-md-flex">
                            <div class="h5 text-center p-2 text01">專長：創意染髮與燙髮</div>
                            <button class="btn-my03 mb-3">查看更多</button>
                        </div>
                        <div class="h4 card-title txt-title fw-bold 3 d-none d-md-flex">Michael Wang</div>
                        <!-- rwd用 -->
                        <div class="h4 txt-title fw-bold 3 d-md-none">Michael Wang</div>
                        <button class="btn-my03 d-md-none ">查看更多</button>
                    </div>

                </div>
            </div>
        </div>
        <div class="col-md-6 card border-0 mt-3">
            <div class="row g-0 bg-card">
                <div class=" col-md-6">
                    <img src="images/designer_2.jfif" alt="..." style="width: 100%;">
                </div>
                <div class="cont col-md-6">
                    <div class="card-body text-center">
                        <div class="card_in d-flex flex-column text-center  d-none d-md-flex">
                            <div class="h5 text-center p-2  text01">專長：精緻剪髮與造型設計</div>
                            <button class="btn-my03 mb-3">查看更多</button>
                        </div>
                        <div class="h4 card-title txt-title fw-bold 3 d-none d-md-flex">Sophie Lee</div>
                        <!-- rwd用 -->
                        <div class="h4 txt-title fw-bold 3 d-md-none">Sophie Lee</div>
                        <button class="btn-my03 d-md-none ">查看更多</button>
                    </div>

                </div>
            </div>
        </div>
        <div class="col-md-6 card border-0 mt-3">
            <div class="row g-0 bg-card">
                <div class=" col-md-6">
                    <img src="images/designer_1.jfif" alt="..." style="width: 100%;">
                </div>
                <div class="cont col-md-6">
                    <div class="card-body text-center">
                        <div class="card_in d-flex flex-column text-center  d-none d-md-flex">
                            <div class="h5 text-center p-2  text01">專長：新娘造型與特殊場合造型</div>
                            <button class="btn-my03 mb-3">查看更多</button>
                        </div>
                        <div class="h4 card-title txt-title fw-bold 3 d-none d-md-flex">Linda Zhang</div>
                        <!-- rwd用 -->
                        <div class="h4 txt-title fw-bold 3 d-md-none">Linda Zhang</div>
                        <button class="btn-my03 d-md-none ">查看更多</button>
                    </div>

                </div>
            </div>
        </div>
        <div class="col-md-6 card border-0 mt-3">
            <div class="row g-0 bg-card">
                <div class=" col-md-6">
                    <img src="images/designer_5.jfif" alt="..." style="width: 100%;">
                </div>
                <div class="cont col-md-6">
                    <div class="card-body text-center">
                        <div class="card_in d-flex flex-column text-center  d-none d-md-flex">
                            <div class="h5 text-center p-2  text01">專長：男士理髮與造型</div>
                            <button class="btn-my03 mb-3">查看更多</button>
                        </div>
                        <div class="h4 card-title txt-title fw-bold 3 d-none d-md-flex">James Lin</div>
                        <!-- rwd用 -->
                        <div class="h4 txt-title fw-bold 3 d-md-none">James Lin</div>
                        <button class="btn-my03 d-md-none ">查看更多</button>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection