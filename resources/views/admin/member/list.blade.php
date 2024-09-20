@extends("admin.app")
@section("content")
<div class="container">
    <div class="row mt-3">
        <div class="col-12">
            <div class="card mb-3">
                <div class="card-header">
                    <div class="row mt-3">
                        <div class="col-4">
                            <a class="btn btn-primary mx-3" href="add">新增</a>
                        </div>
                    </div>
                    <form class="mt-3" name="member" id="member" method="post" action="">
                        {{ csrf_field() }}
                        <table class="table border border-dark">
                            <tr class="table-info">
                                <td class="col-1 text-center border border-dark">會員編號</td>
                                <td class="col-3 text-center border border-dark">會員帳號</td>
                                <td class="col-3 text-center border border-dark">會員信箱</td>
                                <td class="col-1 text-center border border-dark">會員等級</td>
                                <td class="col-1 text-center border border-dark">會員狀態</td>
                                <td class="col-1 text-center border border-dark">修改</td>
                            </tr>
                            @foreach($list as $data)
                            <tr>
                                {{csrf_field()}}
                                <td class="text-center align-middle">{{$data->id}}</td>
                                <td class="text-center">{{ $data->userName }}</td>
                                <td class="text-center align-middle">{{ $data->email }}</td>

                                @if( $data->level > 400)
                                <td class="text-center align-middle bg-danger text-bg-danger">鑽石會員</td>

                                @elseif($data->level > 300)
                                <td class="text-center align-middle bg-primary text-bg-primary">白金會員</td>

                                @elseif($data->level > 200)
                                <td class="text-center align-middle bg-warning text-bg-warnung">黃金會員</td>
                                @else
                                <td class="text-center align-middle bg-secondary text-bg-secondary">普通會員</td>
                                @endif

                                @if($data->active == "Y")
                                <td class=" text-center align-middle text-success">啟用</td>
                                @else
                                <td class=" text-center align-middle text-danger">停權</td>
                                @endif
                                <td class="text-center align-middle">
                                    <a href="./edit/{{ $data->id}}" class="btn btn-success">修改</a>
                                </td>
                            </tr>
                            @endforeach
                        </table>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection