@extends("app")
@section("content")
<style>
    .card .bg-cover {
        height: 420px;
    }

    .card-title {
        color: #4B3A2A;
    }

    .card-text {
        color: #6B6B6B;
    }

    .mt-auto {
        color: #556B2F;
    }
</style>
<div class="container">
    <div class="row mt-3">
        @foreach($list as $data)
        @if($data->active == "Y")
        <div class="col-md-4 mt-3 text-center">
            <div class="card h-100 border-0">
                <img class="bg-cover rounded-top" src="images/product/{{$data->photo}}" class="card-img-top" alt="...">
                <div class="card-body  d-flex flex-column bg-card rounded-bottom">
                    <h5 class="card-title">{{$data->name}}</h5>
                    <p class="card-text">{{$data->introduceShort}}</p>
                    <div class="mt-auto">價格：NT$ {{$data->price}}</div>
                    @if(Session::has("username"))
                    <div class="input-group">
                        <label for="" class="input-group-text">數量</label>
                        <input type="number" class="form-control text-center" value="0" min="1" max="{{$data->number}}">
                        <button class="btn" style="background-color: #FADADD;">加入購物車</button>
                    </div>
                    @endif
                </div>
            </div>
        </div>
        @endif
        @endforeach
    </div>
</div>
@endsection