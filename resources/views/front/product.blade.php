@extends("app")
@section("content")
<style>
    .card .bg-cover {
        height: 420px;
    }
    .card-title{
        color: #4B3A2A;
    }
    .card-text{
        color:#6B6B6B;
    }
    .mt-auto{
        color:#556B2F;
    }

</style>
<div class="container">
    <div class="row mt-3">
        <div class="col-md-4 mt-3 text-center">
            <div class="card h-100 border-0">
                <img class="bg-cover rounded-top" src="images/product_1.jpg" class="card-img-top" alt="...">
                <div class="card-body  d-flex flex-column bg-card rounded-bottom">
                    <h5 class="card-title">護色洗髮精</h5>
                    <p class="card-text">專為染後髮質設計的護色洗髮精，有效鎖住顏色，讓頭髮保持亮麗光澤。</p>
                    <div class="mt-auto">價格：NT$ 800</div>
                    <div class="input-group">
                        <label for="" class="input-group-text">數量</label>
                        <input type="number" class="form-control text-center" value="0" min="1">
                        <button class="btn btn-warning">加入購物車</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 mt-3 text-center">
            <div class="card border-0 h-100">
                <img class="bg-cover rounded-top" src="images/product_2.jpg" class="card-img-top" alt="...">
                <div class="card-body d-flex flex-column bg-card rounded-bottom">
                    <h5 class="card-title">角蛋白護髮霜</h5>
                    <p class="card-text">這款護髮霜富含角蛋白和天然植物提取物，能深入修復受損髮絲，強化髮質結構。</p>
                    <div class="mt-auto">價格：NT$ 600</div>
                    <div class="input-group">
                        <label for="" class="input-group-text">數量</label>
                        <input type="number" class="form-control text-center" value="0" min="1">
                        <button class="btn btn-warning">加入購物車</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 mt-3 text-center">
            <div class="card border-0 h-100">
                <img class="bg-cover rounded-top" src="images/product_3.jpg" class="card-img-top" alt="...">
                <div class="card-body  d-flex flex-column bg-card rounded-bottom">
                    <h5 class="card-title">深層保濕髮膜</h5>
                    <p class="card-text">含有乳木果油和椰子油的深層保濕髮膜，為乾燥髮質提供深層的滋養和保濕效果。</p>
                    <div class="mt-auto">價格：NT$ 520</div>
                    <div class="input-group">
                        <label for="" class="input-group-text">數量</label>
                        <input type="number" class="form-control text-center" value="0" min="1">
                        <button class="btn btn-warning">加入購物車</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 mt-3 text-center">
            <div class="card border-0 h-100">
                <img class="bg-cover rounded-top" src="images/product_4.jpg" class="card-img-top" alt="...">
                <div class="card-body  d-flex flex-column bg-card rounded-bottom">
                    <h5 class="card-title">摩洛哥堅果油護髮油</h5>
                    <p class="card-text">含有豐富的摩洛哥堅果油，這款護髮油能快速滲透髮絲，補充流失的水分和油脂，並形成保護膜防止外界傷害。</p>
                    <div class="mt-auto">價格：NT$ 750</div>
                    <div class="input-group">
                        <label for="" class="input-group-text">數量</label>
                        <input type="number" class="form-control text-center" value="0" min="1">
                        <button class="btn btn-warning">加入購物車</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 mt-3 text-center">
            <div class="card border-0 h-100">
                <img class="bg-cover rounded-top" src="images/product_5.jpg" class="card-img-top" alt="...">
                <div class="card-body  d-flex flex-column bg-card rounded-bottom">
                    <h5 class="card-title">深層修護髮膜</h5>
                    <p class="card-text">富含高效修護成分，能夠深入滋養乾燥受損髮絲，使頭髮恢復柔順光澤。</p>
                    <div class="mt-auto ">價格：NT$ 1,200</div>
                    <div class="input-group ">
                        <label for="" class="input-group-text">數量</label>
                        <input type="number" class="form-control text-center" value="0" min="1">
                        <button class="btn btn-warning">加入購物車</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 mt-3 text-center">
            <div class="card border-0 h-100">
                <img class="bg-cover rounded-top" src="images/product_6.jpg" class="card-img-top" alt="...">
                <div class="card-body  d-flex flex-column bg-card rounded-bottom">
                    <h5 class="card-title">頭皮淨化精華</h5>
                    <p class="card-text">富含天然植物萃取，深層潔淨頭皮，去除多餘油脂和角質，改善頭皮環境，促進健康髮質生長。</p>
                    <div class="mt-auto">價格：NT$ 1,500</div>
                    <div class="input-group">
                        <label for="" class="input-group-text">數量</label>
                        <input type="number" class="form-control text-center" value="0" min="1">
                        <button class="btn btn-warning">加入購物車</button>
                    </div>
                </div>


            </div>
        </div>
    </div>
</div>
@endsection