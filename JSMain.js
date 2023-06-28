$(document).ready(function() {

    $(function(Mycharts) {
        google.charts.load('current', { 'packages': ['corechart'] });
        google.charts.setOnLoadCallback(drawMychart);
        google.charts.setOnLoadCallback(defchartcurr);

        function drawMychart() {
            google.charts.load('current', { 'packages': ['corechart'] });
            var data = google.visualization.arrayToDataTable([
                ['DE', 'COUNT'],
                ['< 1 DE', 1181],
                ['1 - 2 DE', 3165],
                ['2 - 3 DE', 2221],
                ['> 3 DE', 829],


            ]);

            // Optional; add a title and set the width and height of the chart
            var options = {
                'title': 'Columbus 2022',
                'width': 200,
                'height': 210,
                'legend': 'none',
                'chartArea.left': 5,
                pieSliceTextStyle: {
                    color: 'white'
                },
                chartArea: { right: 0, left: 0, top: 30, width: '100%', height: '75%' },
                colors: ['#059613', '#059613', '#059613', '#268feb'],
                slices: [{}, {}, {}, { offset: '0.1' }],
                pieStartAngle: 70,
                pieSliceText: 'label',
            };
            // Display the chart inside the <div> element with id="piechart"
            var chart = new google.visualization.PieChart(document.getElementById('Col2022'));
            chart.draw(data, options);
        }

        function defchartcurr() {
            google.charts.load('current', { 'packages': ['corechart'] });
            var data = google.visualization.arrayToDataTable([
                ['DE', 'COUNT'],
                ['< 1 DE', 1237],
                ['1 - 2 DE', 3499],
                ['2 - 3 DE', 2392],
                ['> 3 DE', 1960],


            ]);

            // Optional; add a title and set the width and height of the chart
            var options = {
                'title': 'DEFOREST 2022',
                'width': 200,
                'height': 210,
                'legend': 'none',
                'chartArea.left': 5,
                pieSliceTextStyle: {
                    color: 'white'
                },
                chartArea: { right: 0, left: 0, top: 30, width: '100%', height: '75%' },
                colors: ['#059613', '#059613', '#059613', '#268feb'],
                slices: [{}, {}, {}, { offset: '0.1' }],
                pieStartAngle: 70,
                pieSliceText: 'label',
            };
            // Display the chart inside the <div> element with id="piechart"
            var chart = new google.visualization.PieChart(document.getElementById('def2022'));
            chart.draw(data, options);
        }



    })
});