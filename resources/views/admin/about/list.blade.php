@extends("admin.app")
@section("content")
<div class="container">
    <div class="row mt-3">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <div class="row mt-3">
                        <div class="col-4">
                            <a class="btn btn-primary mx-3" href="add">新增</a>
                            <a class="btn btn-danger" href='javascript:doDelete("about")'>刪除</a>
                        </div>
                    </div>
                    <form class="mt-3" name="about" id="about" method="post" action="delete">
                        {{ csrf_field() }}
                        <table class="table border border-dark">
                            <tr class="table-info">
                                <td class="col-1 text-center border border-dark">
                                    <input type="checkbox" id="all" class="form-check-input">
                                </td>

                                <td class="col-2 text-center border border-dark">標題</td>
                                <td class="col-6 text-center border border-dark">內容</td>
                                <td class="col-2 text-center border border-dark">圖檔</td>
                                <td class="col-1 text-center border border-dark">修改</td>
                            </tr>
                            @foreach($list as $data)
                            <tr>
                                {{csrf_field()}}
                                <td class="text-center">
                                    <input type="checkbox" class="form-check-input  chk" name="id[]" value="{{$data->id}}" >
                                </td>
                                <td class="text-center h3">{{$data->title}}</td>
                                <td class="text-center h4">{{ $data->content }}</td>
                                <td class="text-center h4">
                                    @if(!empty($data->photo))
                                    <a href="/images/about/{{$data->photo}}" data-lightbox="photo">
                                        <img src="/images/about/S/{{$data->photo}}">
                                    </a>
                                    @endif
                                </td>
                                <td class="text-center">
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