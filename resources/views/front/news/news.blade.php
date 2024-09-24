<div class="tab_container">
    <div id="tab1" class="tab_content">
        @foreach($list as $data)
        <a href="/news/detail/{{$data->id}}">
            <section class="box">
                <img src="/images/news/{{$data->photo}}">
                <div class="date">{{$data->activeDate}}</div>
                <h3 class="main_title">{{$data->title}}</h3>
            </section>
        </a>
        @endforeach
    </div>
    <div id="tab2" class="tab_content" style="display:none;">
        @foreach($list as $data)
        <a href="/news/detail/{{$data->id}}">
            <section class="line">
                <div class="date">{{$data->activeDate}}</div>
                <h3 class="title">{{$data->title}}</h3>
            </section>
        </a>
        @endforeach
    </div>
</div>