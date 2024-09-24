@extends("app")
@section("content")
<script src="js/jquery.js"></script>
<script>
    $(document).ready(function() {
        getNews();
    });

    function getNews() {
        $("#list").html("");
        let year = $("#year").val();
        let month = $("#month").val();
        $.ajax({
            url: "/news/getNews",
            type: "post",
            data: {
                year: year,
                month:month,
                _token: "{{ csrf_token() }}"
            },
            success: function(msg) {
                $("#list").html(msg);
            }

        });
    }
</script>
<div class="container">
    <div class="row  mt-3">
        <div class="abgne_tab">
            <ul class="chooes">
                <li>
                    <select id="year" onchange="getNews()">
                        <option value="">所有年份</option>
                        @foreach($year as $data)
                        <option value="{{$data->year}}">{{$data->year}}</option>
                        @endforeach
                    </select>
                </li>
                <li>
                    <select id="month" onchange="getNews()">
                        <option value="">所有月份</option>
                        @foreach($month as $data)
                        <option value="{{$data->month}}">{{$data->month}}</option>
                        @endforeach
                    </select>
                </li>
            </ul>
            <div id="list"></div>
        </div>
    </div>
</div>
@endsection