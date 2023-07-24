$(document).ready(function() {


    //current week columbus
    var currwk1DE = parseInt($("#currwk1DE").val());
    var currwk2DE = parseInt($("#currwk2DE").val());
    var currwk3DE = parseInt($("#currwk3DE").val());
    var currwkOv3 = parseInt($("#currwkOv3").val());
    var currwkTotal = parseInt($("#currwkTotal").val());

    //current week categories
    var catA1 = $("#catA1").val();
    var catA2 = $("#catA2").val();
    var catA3 = $("#catA3").val();
    var catA4 = $("#catA4").val();
    var catA5 = $("#catA5").val();
    var catA6 = $("#catA6").val();
    var catA7 = $("#catA7").val();


    //current week category values
    var countA1 = parseInt($("#countA1").val());
    var countA2 = parseInt($("#countA2").val());
    var countA3 = parseInt($("#countA3").val());
    var countA4 = parseInt($("#countA4").val());
    var countA5 = parseInt($("#countA5").val());
    var countA6 = parseInt($("#countA6").val());
    var countA7 = parseInt($("#countA7").val());

    //Year in history values
    var yr_curr = parseFloat($("#yr_curr").val());
    var yr1_in_H = parseFloat($("#yr1_in_H").val());
    var yr2_in_H = parseFloat($("#yr2_in_H").val());
    var yr3_in_H = parseFloat($("#yr3_in_H").val());
    var yr4_in_H = parseFloat($("#yr4_in_H").val());

    //Week in history values
    var wk_curr = parseFloat($("#wk_curr").val());
    var wkyr1_in_H = parseFloat($("#wkyr1_in_H").val());
    var wkyr2_in_H = parseFloat($("#wkyr2_in_H").val());
    var wkyr3_in_H = parseFloat($("#wkyr3_in_H").val());
    var wkyr4_in_H = parseFloat($("#wkyr4_in_H").val());

    //flex chart - categories
    var colflex1 = $("#colflex1").val();
    var colflex2 = $("#colflex2").val();
    var colflex3 = $("#colflex3").val();


    //flex chart - values
    var colflexCt1 = parseFloat($("#colflexCt1").val());
    var colflexCt2 = parseFloat($("#colflexCt2").val());
    var colflexCt3 = parseFloat($("#colflexCt3").val());







    //Last week columbus
    var OneDELW = parseInt($("#OneDELW").val());
    var TwoDELW = parseInt($("#TwoDELW").val());
    var ThreeDELW = parseInt($("#ThreeDELW").val());
    var Over3 = parseInt($("#Over3").val());
    var TotalLW = parseInt($("#TotalLW").val());

    //Last week categories
    var colQcLW = parseInt($("#colQcLW").val());
    var colPressLW = parseInt($("#colPressLW").val());
    var colStandardLW = parseInt($("#colStandardLW").val());
    var colNoSLW = parseInt($("#colNoSLW").val());
    var colTrialLW = parseInt($("#colTrialLW").val());
    var colCylLW = parseInt($("#colCylLW").val());
    var colProjLW = parseInt($("#colProjLW").val());
    var colOthLW = parseInt($("#colOthLW").val());





    /////////CHARTS
    $(function(MyOthercharts) {
        google.charts.load('current', { 'packages': ['bar'] });
        google.charts.setOnLoadCallback(drawcurrwkColDE);
        //google.charts.setOnLoadCallback(drawcurrwkColDELW);
        //google.charts.setOnLoadCallback(drawColprobLW);

        function drawcurrwkColDE() {
            var data = google.visualization.arrayToDataTable([
                ['Ink DE categories', 'Last Wk', 'Current Wk'],
                ['0 - 1 DE', 16, 10],
                ['1 - 2 DE', 27, 39],
                ['2 - 3 DE', 49, 35],
                ['> 3 DE', 6, 12],
            ]);
            var view = new google.visualization.DataView(data);
            view.setColumns([0, 1,
                {
                    calc: "stringify",
                    sourceColumn: 1,
                    type: "string",
                    role: "annotation"
                },
                2
            ]);

            var options = {
                height: 410,

                animation: {
                    startup: true,
                    easing: 'out',
                    duration: 2000
                },
                vAxis: { minValue: 0, maxValue: 1000 },
                chart: {
                    title: 'Color performance',
                    subtitle: 'Performance in DE, last week versus current week',
                },
                colors: ['#d1d1d1', '#0AB0CE'],

                legend: {
                    position: 'left',
                    textStyle: {
                        fontSize: 12
                    }
                },


            };
            var chart = new google.charts.Bar(document.getElementById('Col-DE'));
            chart.draw(data, google.charts.Bar.convertOptions(options));
        };




        function drawColprob() {
            var data = google.visualization.arrayToDataTable([
                ['Ink DE categories', 'Last Wk', 'Current Wk'],
                ['0 - 1 DE', 16, 10],
                ['1 - 2 DE', 27, 39],
                ['2 - 3 DE', 49, 35],
                ['> 3 DE', 6, 12],
            ]);
            var view = new google.visualization.DataView(data);
            view.setColumns([0, 1,
                {
                    calc: "stringify",
                    sourceColumn: 1,
                    type: "string",
                    role: "annotation"
                },
                2
            ]);

            var options = {
                height: 310,
                animation: {
                    startup: true,
                    easing: 'out',
                    duration: 2000
                },
                vAxis: { minValue: 0, maxValue: 1000 },
                chart: {
                    title: 'Color performance',
                    subtitle: 'Performance in DE, last week versus current week',
                },
                colors: ['#d1d1d1', '#0AB0CE'],

                legend: {
                    position: 'left',
                    textStyle: {
                        fontSize: 12
                    }
                },
            };
            var chart = new google.charts.Bar(document.getElementById('Col-prob'));
            chart.draw(data, google.charts.Bar.convertOptions(options));
        };







        //probability
        google.charts.load("current", { packages: ['corechart'] });
        google.charts.setOnLoadCallback(drawColprob);

        function drawColprob() {
            var data = new google.visualization.arrayToDataTable([
                ['ISSUE', 'COUNT'],
                [catA1, countA1],
                [catA2, countA2],
                [catA3, countA3],
                [catA4, countA4],
                [catA5, countA5],
                [catA6, countA6],
                [catA7, countA7]
            ]);
            var view = new google.visualization.DataView(data);
            view.setColumns([0, 1, {
                calc: "stringify",
                sourceColumn: 1,
                type: "string",
                role: "annotation"
            }]);


            var options = {
                height: 220,
                fontSize: 11,
                legend: { position: 'none' },
                title: 'COUNT OF PROBLEM CATEGORIES FOR THIS WEEK',
                colors: ['#0AB0CE'],
                vAxis: {
                    gridlines: { count: 4 },
                    textStyle: {
                        fontSize: 14
                    },
                },

                bar: { groupWidth: "80%" },
                chartArea: { right: 10, left: 35, top: 30, width: '60%', height: '75%' },
            };

            var chart = new google.visualization.ColumnChart(document.getElementById('Col-prob'));
            chart.draw(view, options);
        };

        //Year in history
        google.charts.load("current", { packages: ['corechart'] });
        google.charts.setOnLoadCallback(drawYearInH);

        function drawYearInH() {
            var data = new google.visualization.arrayToDataTable([
                ['YEAR', '> 3 DE'],
                ['2019', yr4_in_H],
                ['2020', yr3_in_H],
                ['2021', yr2_in_H],
                ['2022', yr1_in_H],
                ['2023', yr_curr],
            ]);
            var view = new google.visualization.DataView(data);
            view.setColumns([0, 1, {
                calc: "stringify",
                sourceColumn: 1,
                type: "string",
                role: "annotation"
            }]);


            var options = {
                height: 220,
                fontSize: 12,
                legend: { position: 'none' },
                title: 'YEAR TO DATE IN HISTORY (%)',
                colors: ['#0AB0CE'],
                hAxis: {
                    gridlines: { count: 2 },
                    textStyle: {
                        fontSize: 14
                    },
                },

                bar: { groupWidth: "80%" },
                chartArea: { right: 10, left: 30, top: 40, width: '60%', height: '65%' },
            };

            var chart = new google.visualization.ColumnChart(document.getElementById('yr_in_H'));
            chart.draw(view, options);
        };


        //Week in history
        google.charts.load("current", { packages: ['corechart'] });
        google.charts.setOnLoadCallback(drawWeekInH);

        function drawWeekInH() {
            var data = new google.visualization.arrayToDataTable([
                ['YEAR', '> 3 DE'],
                ['2019', wkyr4_in_H],
                ['2020', wkyr3_in_H],
                ['2021', wkyr2_in_H],
                ['2022', wkyr1_in_H],
                ['2023', wk_curr],
            ]);
            var view = new google.visualization.DataView(data);
            view.setColumns([0, 1, {
                calc: "stringify",
                sourceColumn: 1,
                type: "string",
                role: "annotation"
            }]);


            var options = {
                height: 220,
                fontSize: 12,
                legend: { position: 'none' },
                title: 'LAST WEEK IN HISTORY (%)',
                colors: ['#0AB0CE'],
                hAxis: {
                    gridlines: { count: 2 },
                    textStyle: {
                        fontSize: 14
                    },
                },

                bar: { groupWidth: "80%" },
                chartArea: { right: 10, left: 30, top: 40, width: '60%', height: '65%' },
            };

            var chart = new google.visualization.ColumnChart(document.getElementById('wk_in_H'));
            chart.draw(view, options);
        };
        //////flexible chart - use space for other querries
        //Top 3 issues year to date
        google.charts.load("current", { packages: ['corechart'] });
        google.charts.setOnLoadCallback(drawFlexChart);

        function drawFlexChart() {
            var data = new google.visualization.arrayToDataTable([
                ['ISSUE', 'COUNT'],
                [colflex1, colflexCt1],
                [colflex2, colflexCt2],
                [colflex3, colflexCt3],

            ]);
            var view = new google.visualization.DataView(data);
            view.setColumns([0, 1, {
                calc: "stringify",
                sourceColumn: 1,
                type: "string",
                role: "annotation"
            }]);


            var options = {
                height: 220,
                fontSize: 12,
                legend: { position: 'none' },
                title: 'TOP 3 PROBLEM CATEGORIES YTD (%)',
                colors: ['#0AB0CE'],
                vAxis: {
                    gridlines: { count: 2 },
                    textStyle: {
                        fontSize: 14
                    },
                },

                bar: { groupWidth: "80%" },
                chartArea: { right: 10, left: 30, top: 40, width: '60%', height: '65%' },
            };

            var chart = new google.visualization.ColumnChart(document.getElementById('flex_chart'));
            chart.draw(view, options);
        };












    });



    /*

    //last week
    function drawcurrwkColDELW() {

        var data = new google.visualization.arrayToDataTable([
            ['DE', 'COUNT'],
            ["0 - 1 DE", OneDELW],
            ["1 - 2 DE", TwoDELW],
            ["2 - 3 DE", ThreeDELW],
            ["> 3 DE", Over3],

        ]);
        var view = new google.visualization.DataView(data);
        view.setColumns([0, 1, {
            calc: "stringify",
            sourceColumn: 1,
            type: "string",
            role: "annotation"
        }]);

        var options = {
            width: 300,
            height: 250,
            legend: { position: 'none' },
            title: 'COUNT OF INKS BY DE LAST WEEK',
            vAxis: {
                gridlines: { count: 0 }
            },
            chart: {

            },
            axes: {
                x: {
                    0: { side: 'bottom', label: 'Inks by DE' } // Top x-axis.
                }
            },
            bar: { groupWidth: "90%" },
            chartArea: { right: 10, left: 20, top: 30, width: '60%', height: '75%' },
        };

        var chart = new google.visualization.ColumnChart(document.getElementById('Col-DELW'));
        // Convert the Classic options to Material options.
        // chart.draw(data, google.charts.Bar.convertOptions(options));
        chart.draw(view, options)
    };


    function drawColprobLW() {
        var data = new google.visualization.arrayToDataTable([
            ['ISSUE', 'COUNT'],
            ["QC", colQcLW],
            ["PRESS", colPressLW],
            ["STANDARD", colStandardLW],
            ["NO SAMPLE", colNoSLW],
            ["TRIAL", colTrialLW],
            ["CYL", colCylLW],
            ["PROJECT", colProjLW],
            ["OTHER", colOthLW],

        ]);
        var view = new google.visualization.DataView(data);
        view.setColumns([0, 1, {
            calc: "stringify",
            sourceColumn: 1,
            type: "string",
            role: "annotation"
        }]);


        var options = {
            width: 700,
            height: 250,
            fontSize: 11,
            legend: { position: 'none' },
            title: 'COUNT OF PROBLEM CATEGORIES FOR LAST WEEK',
            vAxis: {
                gridlines: { count: 0 }
            },

            bar: { groupWidth: "90%" },
            chartArea: { right: 10, left: 20, top: 30, width: '60%', height: '75%' },
        };

        var chart = new google.visualization.ColumnChart(document.getElementById('Col-probLW'));
        // Convert the Classic options to Material options.
        chart.draw(view, options);
    };

    */
    //categories selected
    $('#cata').change(function() {
        var data = $("#cata").val();
        //var data1;
        $("#catb").text('');
        $.ajax({
            url: 'colEntryPhp.php',
            type: 'POST',
            data: { data: data },
            dataType: 'json',
            success: function(results) {
                $.each(results, function(i, result) {
                    $("#catb").append($('<option>', { value: result, text: result }));
                })
            },
            error: function() {
                alert("error");
            }
        })
    });


    $("#colForm").submit(function() {
        //grab all inputs
        var skipData = $("#comments").val();
        var ID = $("#ID").val();
        var spec = $("#spec").val();
        var ColorName = $("#ColorName").val();
        var JobNum = $("#JobNum").val();
        var FirstPull = $("#FirstPull").val();
        var RunDate = $("#RunDate").val();
        var SendDE = $("#SendDE").val();
        var BrlDE = $("#BrlDE").val();
        var BrlVis = $("#BrlVis").val();
        var BrlV36 = $("#BrlV36").val();
        var SumpDE = $("#SumpDE").val();
        var SumpVis = $("#SumpVis").val();
        var SumpV36 = $("#SumpV36").val();
        var Press = $("#presses").val();
        var send_date = $("#send_date").val();
        var batch_date = $("#batch_date").val();
        var cyl_no = $("#cyl_no").val();
        var cyl_eng = $("#cyl_eng").val();
        var cyl_ftg = $("#cyl_ftg").val();
        var cata = $("#cata").val();
        var catb = $("#catb").val();
        var FirstP = $("#FirstP").val();
        var Resetswitch = $("#checkbox").val();
        var tech = $("#tech").val();
        var comments = $("#comments").val();

        if (skipData == "") {
            skipData = 'skip';
        } else {
            skipData = 'save';
        }

        $.ajax({
            url: 'colEntryPhp.php',
            type: 'POST',
            data: {
                skipData: skipData,
                spec: spec,
                ID: ID,
                ColorName: ColorName,
                JobNum: JobNum,
                FirstPull: FirstPull,
                RunDate: RunDate,
                SendDE: SendDE,
                BrlDE: BrlDE,
                BrlVis: BrlVis,
                BrlV36: BrlV36,
                SumpDE: SumpDE,
                SumpVis: SumpVis,
                SumpV36: SumpV36,
                Press: Press,
                send_date: send_date,
                batch_date: batch_date,
                cyl_no: cyl_no,
                cyl_eng: cyl_eng,
                cyl_ftg: cyl_ftg,
                cata: cata,
                catb: catb,
                FirstP: FirstP,
                Resetswitch: Resetswitch,
                tech: tech,
                comments: comments,

            },

            //dataType: 'text',
            success: function() {
                skipData == ""
                window.location.href = 'ColEntry.php';
                //alert(Press);
                //alert(response);
                //alert('pass');
                //alert();
            },
            error: function() {
                alert('error again');
                //alert(data);
                //alert(response);

            }
        })

    });

    if ($("#Received").val() == "YES") {
        //alert("its a yes")
    } else {
        //alert('lets just say no')
    }
    // $("#colForm").submit(function(skipping) {
    //    var skipData = $("#formulaNum").text();
    //    var skipData = $.trim(skipData);
    //   $.ajax({
    //      url: 'colEntryPhp.php',
    //     type: 'POST',
    //    data: { text1: skipData },
    //   //dataType: 'json',
    //  success: function(response) {
    //alert(skipData);

    //   },
    //  error: function() {
    //       alert('error again');
    //   }
    //  })

    //});

    //  $("#form").validate({
    //      rules: {
    //          SendDE: {
    //              required: true
    //
    //         }
    //     },
    //     messages: {
    //         SendDE: {
    //            required: "this is nooooooo"
    //       }
    //
    //      }
    //});





    $.ajax({
        url: "test.php",
        dataType: "json", //the return type data is jsonn
        success: function(data) { // <--- (data) is in json format
            alert(data.test1);
            //parse the json data
        }
    });

























    $(function(Mycharts) {
        google.charts.load('current', { 'packages': ['corechart'] });
        google.charts.setOnLoadCallback(drawColperf);

        function drawColperf() {
            var OneDEcmi = parseInt($('#OneDEcmi').val());
            var TwoDEcmi = parseInt($('#TwoDEcmi').val());
            var ThreeDEcmi = parseInt($('#ThreeDEcmi').val());
            var Over3cmi = parseInt($('#Over3cmi').val());

            google.charts.load('current', { 'packages': ['corechart'] });
            var data = google.visualization.arrayToDataTable([
                ["DE", "COUNT"],
                ["< 1 DE", OneDEcmi],
                ["1 - 2 DE", TwoDEcmi],
                ["2 - 3 DE", ThreeDEcmi],
                ["> 3 DE", Over3cmi],


            ]);

            // Optional; add a title and set the width and height of the chart
            var options = {
                'title': $("#Totalcmi").val() + ' ' + 'Total Runs since 2018',
                'width': 300,
                'height': 280,
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
            var chart = new google.visualization.PieChart(document.getElementById('col-perf'));
            chart.draw(data, options);
        }

    })


    function updateColors() {
        //$("td").css("background-color", "white");
        $("#trial").each(function() {
            var $cCell = $(this);
            if ($cCell.val() > 3) {
                $cCell.css("background-color", "#FF99");
            }
        });
    }

    updateColors();


    // var allCells = document.querySelectorAll("td");
    //for (var i = 0; i < allCells.length; ++i) {
    //    allCells[i].addEventListener("DOMCharacterDataModified", function() {
    //        console.log(this.innerText);
    //       updateColors();
    //   });
    // }





});