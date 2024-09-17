@extends("admin.app")
@section("content")
<link rel="stylesheet" href="/leaflet/leaflet.css" />
<div class="container">
    <div class="row">
        <div class="col-6">
            <canvas id="myChart"></canvas>
        </div>
        <div class="col-6">
            <div id="map" style="height:80vh;">

            </div>
        </div>
    </div>
</div>
<script src="/leaflet/leaflet.js"></script>
<script src="/js/chart.js"></script>
<script>
    var Today = new Date();
    var year = Today.getFullYear();
    var month = Today.getMonth() + 1;
    // 今天日
    var day = Today.getDate();
    var markers;
    var map = L.map('map').setView([24.1690882, 120.6120678], 13);
    L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(map);

        markers = new L.marker([24.1690882, 120.6120678]).addTo(map)
            .bindPopup('我在這裡')
            .openPopup();

        // markers.addLayer(L.marker([item.Py,item.Px]).bindPopup(popupHTML));

        const ctx = document.getElementById('myChart');

        mychart = new Chart(ctx, {
            // 圖表形式
            type: 'line',
            // 資料
            data: {
                // X軸
                labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
                // 陣列
                datasets: [{
                    // 圖表標籤
                    label: '# of Votes',
                    // 資料
                    data: [12, 19, 3, 5, 2, 3],
                    // 圖border
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        // y軸從0開始
                        beginAtZero: true
                    }
                }
            }
        });
        // 手動更改圖表類型，需多config
        mychart.config.type = "bar";
        mychart.data.datasets[0].label = "近七日預約人數";
        mychart.data.datasets[0].backgroundColor = 'rgba(80,20,77,0.1)';
        // 清空x軸
        mychart.data.labels = [];
        // 清空y軸
        mychart.data.datasets[0].data = [];

        // mychart.data.datasets[0].data.push(300);
        // mychart.data.labels.push("新竹市");
        // mychart.data.datasets[0].data.push(280);
        // mychart.data.labels.push("台中市");
        // mychart.data.datasets[0].data.push(199);
        // mychart.data.labels.push("高雄市");
        // mychart.data.datasets[0].data.push(240);
        mychart.update();
</script>
@endsection