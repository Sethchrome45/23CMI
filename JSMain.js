$(document).ready(function() {


    //Columbus
    //Year to date
    var colytd1DE = parseInt($("#colytd1DE").val());
    var colytd2DE = parseInt($("#colytd2DE").val());
    var colytd3DE = parseInt($("#colytd3DE").val());
    var colytdOver3DE = parseInt($("#colytdOver3DE").val());
    //Year minus one
    var colytd1DEm1 = parseInt($("#colytd1DEm1").val());
    var colytd2DEm1 = parseInt($("#colytd2DEm1").val());
    var colytd3DEm1 = parseInt($("#colytd3DEm1").val());
    var colytdOver3DEm1 = parseInt($("#colytdOver3DEm1").val());
    //Year minus 2
    var colytd1DEm2 = parseInt($("#colytd1DEm2").val());
    var colytd2DEm2 = parseInt($("#colytd2DEm2").val());
    var colytd3DEm2 = parseInt($("#colytd3DEm2").val());
    var colytdOver3DEm2 = parseInt($("#colytdOver3DEm2").val());
    //Year minus 3
    var colytd1DEm3 = parseInt($("#colytd1DEm3").val());
    var colytd2DEm3 = parseInt($("#colytd2DEm3").val());
    var colytd3DEm3 = parseInt($("#colytd3DEm3").val());
    var colytdOver3DEm3 = parseInt($("#colytdOver3DEm3").val());

    //Deforest
    //Year to date
    var defytd1DE = parseInt($("#defytd1DE").val());
    var defytd2DE = parseInt($("#defytd2DE").val());
    var defytd3DE = parseInt($("#defytd3DE").val());
    var defytdOver3DE = parseInt($("#defytdOver3DE").val());
    //Year minus one
    var defytd1DEm1 = parseInt($("#defytd1DEm1").val());
    var defytd2DEm1 = parseInt($("#defytd2DEm1").val());
    var defytd3DEm1 = parseInt($("#defytd3DEm1").val());
    var defytdOver3DEm1 = parseInt($("#defytdOver3DEm1").val());
    //Year minus 2
    var defytd1DEm2 = parseInt($("#defytd1DEm2").val());
    var defytd2DEm2 = parseInt($("#defytd2DEm2").val());
    var defytd3DEm2 = parseInt($("#defytd3DEm2").val());
    var defytdOver3DEm2 = parseInt($("#defytdOver3DEm2").val());
    //Year minus 3
    var defytd1DEm3 = parseInt($("#defytd1DEm3").val());
    var defytd2DEm3 = parseInt($("#defytd2DEm3").val());
    var defytd3DEm3 = parseInt($("#defytd3DEm3").val());
    var defytdOver3DEm3 = parseInt($("#defytdOver3DEm3").val());









    $(function(Mycharts) {
        google.charts.load('current', { 'packages': ['corechart'] });
        google.charts.setOnLoadCallback(drawMychart);
        google.charts.setOnLoadCallback(colChartm1);
        google.charts.setOnLoadCallback(colChartm2);
        google.charts.setOnLoadCallback(colChartm3);
        google.charts.setOnLoadCallback(colChartm4);

        google.charts.setOnLoadCallback(defchartcurr);
        google.charts.setOnLoadCallback(defChartm1);
        google.charts.setOnLoadCallback(defChartm2);


        //Columbus chart current year
        function drawMychart() {
            google.charts.load('current', { 'packages': ['corechart'] });
            var data = google.visualization.arrayToDataTable([
                ['DE', 'COUNT'],
                ['< 1 DE', colytd1DE],
                ['1 - 2 DE', colytd2DE],
                ['2 - 3 DE', colytd3DE],
                ['> 3 DE', colytdOver3DE],
            ]);

            var options = {
                'title': 'Columbus 2023',
                'fontSize': 14,
                'width': 300,
                'height': 270,
                'legend': 'none',
                'chartArea.left': 15,
                'pieSliceBorderColor': 'black',
                titleTextStyle: {
                    fontSize: 13,
                    bold: true
                },
                pieSliceTextStyle: {
                    color: 'white'
                },
                chartArea: { right: 0, left: 15, top: 30, width: '70%', height: '80%' },
                colors: ['#68b34f', '#68b34f', '#68b34f', '#45a3f5'],
                slices: [{ offset: '0.03' }, { offset: '0.02' }, { offset: '0.02' }, { offset: '0.2' }],
                pieStartAngle: 70,
                pieSliceText: 'label',
            };

            var chart = new google.visualization.PieChart(document.getElementById('Col2022'));
            chart.draw(data, options);
        }

        //Columbus chart current year minus 1 - 2022
        function colChartm1() {
            google.charts.load('current', { 'packages': ['corechart'] });
            var data = google.visualization.arrayToDataTable([
                ['DE', 'COUNT'],
                ['< 1 DE', 1181],
                ['1 - 2 DE', 3165],
                ['2 - 3 DE', 2221],
                ['> 3 DE', 829],
            ]);

            var options = {
                'title': 'Col - \'22',
                'fontSize': '10',
                'width': 170,
                'height': 160,
                'legend': 'none',
                'chartArea.left': 5,
                'pieSliceBorderColor': '#323332',
                'pieHole': 0.2,
                titleTextStyle: {
                    fontSize: 13,
                    bold: true
                },
                pieSliceTextStyle: {
                    color: 'black'
                },
                chartArea: { right: 0, left: 0, top: 20, width: '80%', height: '80%' },
                colors: ['#d6d2d2', '#d6d2d2', '#d6d2d2', '#85b2d6'],
                slices: [{ offset: '0.03' }, { offset: '0.02' }, { offset: '0.02' }, { offset: '0.2' }],
                pieStartAngle: 70,
                pieSliceText: 'label',
            };
            var chart = new google.visualization.PieChart(document.getElementById('col_y1'));
            chart.draw(data, options);
        }

        //Columbus chart current year minus 2 - 2021
        function colChartm2() {
            google.charts.load('current', { 'packages': ['corechart'] });
            var data = google.visualization.arrayToDataTable([
                ['DE', 'COUNT'],
                ['< 1 DE', 1553],
                ['1 - 2 DE', 3989],
                ['2 - 3 DE', 2835],
                ['> 3 DE', 1296],
            ]);

            var options = {
                'title': 'Col - \'21',
                'fontSize': '10',
                'width': 170,
                'height': 160,
                'legend': 'none',
                'chartArea.left': 5,
                'pieSliceBorderColor': '#323332',
                'pieHole': 0.2,
                titleTextStyle: {
                    fontSize: 13,
                    bold: true
                },
                pieSliceTextStyle: {
                    color: 'black'
                },
                chartArea: { right: 0, left: 0, top: 20, width: '80%', height: '80%' },
                colors: ['#d6d2d2', '#d6d2d2', '#d6d2d2', '#85b2d6'],
                slices: [{ offset: '0.03' }, { offset: '0.02' }, { offset: '0.02' }, { offset: '0.2' }],
                pieStartAngle: 70,
                pieSliceText: 'label',
            };
            var chart = new google.visualization.PieChart(document.getElementById('col_y2'));
            chart.draw(data, options);
        }

        //Columbus chart current year minus 3 - 2020
        function colChartm3() {
            google.charts.load('current', { 'packages': ['corechart'] });
            var data = google.visualization.arrayToDataTable([
                ['DE', 'COUNT'],
                ['< 1 DE', 1691],
                ['1 - 2 DE', 4414],
                ['2 - 3 DE', 2863],
                ['> 3 DE', 1875],
            ]);

            var options = {
                'title': 'Col - \'20',
                'fontSize': '10',
                'width': 170,
                'height': 160,
                'legend': 'none',
                'chartArea.left': 5,
                'pieSliceBorderColor': '#323332',
                'pieHole': 0.2,
                titleTextStyle: {
                    fontSize: 13,
                    bold: true
                },
                pieSliceTextStyle: {
                    color: 'black'
                },
                chartArea: { right: 0, left: 0, top: 20, width: '80%', height: '80%' },
                colors: ['#d6d2d2', '#d6d2d2', '#d6d2d2', '#85b2d6'],
                slices: [{ offset: '0.03' }, { offset: '0.02' }, { offset: '0.02' }, { offset: '0.2' }],
                pieStartAngle: 70,
                pieSliceText: 'label',
            };
            var chart = new google.visualization.PieChart(document.getElementById('col_y3'));
            chart.draw(data, options);
        }

        //Columbus chart current year minus 4 - 2019
        function colChartm4() {
            google.charts.load('current', { 'packages': ['corechart'] });
            var data = google.visualization.arrayToDataTable([
                ['DE', 'COUNT'],
                ['< 1 DE', 1181],
                ['1 - 2 DE', 3165],
                ['2 - 3 DE', 2221],
                ['> 3 DE', 829],
            ]);

            var options = {
                'title': 'Col - \'19',
                'fontSize': '10',
                'width': 170,
                'height': 160,
                'legend': 'none',
                'chartArea.left': 5,
                'pieSliceBorderColor': '#323332',
                'pieHole': 0.2,
                titleTextStyle: {
                    fontSize: 13,
                    bold: true
                },
                pieSliceTextStyle: {
                    color: 'black'
                },
                chartArea: { right: 0, left: 0, top: 20, width: '80%', height: '80%' },
                colors: ['#d6d2d2', '#d6d2d2', '#d6d2d2', '#85b2d6'],
                slices: [{ offset: '0.03' }, { offset: '0.02' }, { offset: '0.02' }, { offset: '0.2' }],
                pieStartAngle: 70,
                pieSliceText: 'label',
            };
            var chart = new google.visualization.PieChart(document.getElementById('col_y4'));
            chart.draw(data, options);
        }

        /////////////////////

        //Deforest chart
        function defchartcurr() {
            google.charts.load('current', { 'packages': ['corechart'] });
            var data = google.visualization.arrayToDataTable([
                ['DE', 'COUNT'],
                ['< 1 DE', defytd1DE],
                ['1 - 2 DE', defytd2DE],
                ['2 - 3 DE', defytd3DE],
                ['> 3 DE', defytdOver3DE],
            ]);

            var options = {
                'title': 'Deforest 2023',
                'fontSize': 14,
                'width': 300,
                'height': 270,
                'legend': 'none',
                'chartArea.left': 5,
                'pieSliceBorderColor': 'black',
                titleTextStyle: {
                    fontSize: 13,
                    bold: true
                },
                pieSliceTextStyle: {
                    color: 'white'
                },
                chartArea: { right: 0, left: 30, top: 30, width: '70%', height: '80%' },
                colors: ['#68b34f', '#68b34f', '#68b34f', '#45a3f5'],
                //slices: [{}, {}, {}, { offset: '0.1' }],
                slices: [{ offset: '0.03' }, { offset: '0.02' }, { offset: '0.02' }, { offset: '0.2' }],
                pieStartAngle: 70,
                pieSliceText: 'label',
            };

            var chart = new google.visualization.PieChart(document.getElementById('def2022'));
            chart.draw(data, options);
        }


        //Columbus chart current year minus 1 - 2022
        function defChartm1() {
            google.charts.load('current', { 'packages': ['corechart'] });
            var data = google.visualization.arrayToDataTable([
                ['DE', 'COUNT'],
                ['< 1 DE', 1735],
                ['1 - 2 DE', 4929],
                ['2 - 3 DE', 3291],
                ['> 3 DE', 2751],
            ]);

            var options = {
                'title': 'Def - \'22',
                'fontSize': '10',
                'width': 170,
                'height': 160,
                'legend': 'none',
                'chartArea.left': 5,
                'pieSliceBorderColor': '#323332',
                'pieHole': 0.2,
                titleTextStyle: {
                    fontSize: 13,
                    bold: true,
                    color: '#509c2a'
                },
                pieSliceTextStyle: {
                    color: 'black'
                },
                chartArea: { right: 0, left: 0, top: 20, width: '80%', height: '80%' },
                colors: ['#d6d2d2', '#d6d2d2', '#d6d2d2', '#85b2d6'],
                slices: [{ offset: '0.03' }, { offset: '0.02' }, { offset: '0.02' }, { offset: '0.2' }],
                pieStartAngle: 70,
                pieSliceText: 'label',
            };
            var chart = new google.visualization.PieChart(document.getElementById('def_y1'));
            chart.draw(data, options);
        }

        //Columbus chart current year minus 2 - 2021
        function defChartm2() {
            google.charts.load('current', { 'packages': ['corechart'] });
            var data = google.visualization.arrayToDataTable([
                ['DE', 'COUNT'],
                ['< 1 DE', 1284],
                ['1 - 2 DE', 3002],
                ['2 - 3 DE', 2028],
                ['> 3 DE', 1087],
            ]);

            var options = {
                'title': 'Def - \'21',
                'fontSize': '10',
                'width': 170,
                'height': 160,
                'legend': 'none',
                'chartArea.left': 5,
                'pieSliceBorderColor': '#323332',
                'pieHole': 0.2,
                titleTextStyle: {
                    fontSize: 13,
                    bold: true,
                    color: '#509c2a'
                },
                pieSliceTextStyle: {
                    color: 'black'
                },
                chartArea: { right: 0, left: 0, top: 20, width: '80%', height: '80%' },
                colors: ['#d6d2d2', '#d6d2d2', '#d6d2d2', '#85b2d6'],
                slices: [{ offset: '0.03' }, { offset: '0.02' }, { offset: '0.02' }, { offset: '0.2' }],
                pieStartAngle: 70,
                pieSliceText: 'label',
            };
            var chart = new google.visualization.PieChart(document.getElementById('def_y2'));
            chart.draw(data, options);
        }


















    })



});