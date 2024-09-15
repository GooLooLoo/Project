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
                            <a class="btn btn-danger" href='javascript:doDelete("designer")'>刪除</a>
                        </div>
                    </div>
                    <form class="mt-3" name="designer" id="designer" method="post" action="delete">
                        {{ csrf_field() }}
                        <table class="table border border-dark">
                            <tr class="table-info">
                                <td class="col-1 text-center border border-dark">
                                    <input type="checkbox" id="all" class="form-check-input">
                                </td>

                                <td class="col-2 text-center border border-dark">設計師</td>
                                <td class="col-2 text-center border border-dark">照片</td>
                                <td class="col-2 text-center border border-dark">專長</td>
                                <td class="col-4 text-center border border-dark">介紹</td>
                                <td class="col-1 text-center border border-dark">修改</td>
                            </tr>
                            @foreach($list as $data)
                            <tr>
                                {{csrf_field()}}
                                <td class="text-center align-middle">
                                    <input type="checkbox" class="form-check-input  chk" name="id[]" value="{{$data->id}}">
                                </td>
                                <td class="text-center h5 align-middle">{{$data->name}}</td>
                                <td class="text-center align-middle">
                                    @if(!empty($data->photo))
                                    <a href="/images/about/{{$data->photo}}" data-lightbox="photo">
                                        <img src="/images/designer/S/{{$data->photo}}">
                                    </a>
                                    @endif
                                </td>
                                <td class="text-center align-middle">{{ $data->expertise }}</td>
                                <td class=" text-start align-middle">{{ $data->introduce }}</td>
                                <td class="text-center  align-middle">
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