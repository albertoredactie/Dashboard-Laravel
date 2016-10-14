@extends('frontend.layouts.master')

@section('content')

    <div class="row">

        <div class="col-md-8">
            <div id="container" style="min-width: 310px; height: 400px; margin: 0 auto"></div>

            <div class="row">
                <button type="button" class="col-md-2" onclick="metrics('views')">Views</button>
                <button type="button" class="col-md-2" onclick="metrics('bounces')">Bounces</button>
                <button type="button" class="col-md-2" onclick="metrics('sessions')">Sessions</button>
                <button type="button" class="col-md-2" onclick="metrics('new_sessions')">New Sessions</button>

                <div class="col-md-12">
                    <div id="container2" style="min-width: 310px; height: 400px; margin: 0 auto"></div>
                </div>
            </div>       
        </div>

        <div class="col-md-4">
            <div class="row">

                <button type="button" class="col-md-2" style='float:right'>Day</button>
                <button type="button" class="col-md-2" style='float:right'>Week</button>
                <button type="button" class="col-md-2" style='float:right'>Month</button>

                <div class="col-md-12">
                    Date Range:
                    <input type="text" name="birthdate" value="10/24/1984" class="col-md-12" />
                    <table id="example" class="display" width="100%" style="margin-top: 50px;""></table>
                </div>
            </div>

        </div>

        <table id="test"></table>

<!--         <div class="col-md-4">
            <table id="example" class="display" width="100%"></table>
        </div> -->

        <!-- </p> -->

    </div><!--row-->
@endsection

@section('after-scripts-end')

<!--     <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/modules/exporting.js"></script> -->

<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/data.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>

<!-- Additional files for the Highslide popup effect -->
<script src="https://www.highcharts.com/samples/static/highslide-full.min.js"></script>
<script src="https://www.highcharts.com/samples/static/highslide.config.js" charset="utf-8"></script>
<link rel="stylesheet" type="text/css" href="https://www.highcharts.com/samples/static/highslide.css" />




    <link rel="stylesheet" href="{{ URL::asset('css/nouislider.min.css') }}" />
    <script type="text/javascript" src="{{URL::asset('js/nouislider.js')}}"></script>

<!-- Include Required Prerequisites -->
<script type="text/javascript" src="//cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>

 
<!-- Include Date Range Picker -->
<script type="text/javascript" src="//cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.js"></script>
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.css" />

    <script>

        $(function () {
            
            var options = {
                chart: {
                    renderTo: 'container',
                    type: 'spline',
                    // zoomType: 'x',
                    // events: {
                    //     redraw: function(e){
                    //       console.log(this.xAxis[0].DataMax);
                    //       console.log(this.yAxis[0]);

                    //       var data = e.target.series[0].processedYData;
                    //       var dataMin = data[0];
                    //       var dataMax = data[data.length - 1];

                    //       console.log(dataMin);
                    //       console.log(dataMax);

                    //     }
                    // } 
                },
                title: {
                    text: 'Google Analytics',
                    x: -20 //center
                },
                xAxis: {
                    type: 'datetime',
                    dateTimeLabelFormats: { // don't display the dummy year
                      month: '%e. %b',
                      year: '%b'
                    }
                },
                series: [{},{},{},{}]
            };
    
            $.getJSON('metrics/google_analytics/all.json', function(data) {
                options.series[0].name = 'Views';
                options.series[0].data = data.views;
                options.series[1].name = 'Bounces';
                options.series[1].data = data.bounce;
                options.series[2].name = 'Sessions';
                options.series[2].data = data.sessions;
                options.series[3].name = 'newSessions';
                options.series[3].data = data.newSessions;
                var chart = new Highcharts.Chart(options);   
            });

        });

        function metrics(metric) {

            $.getJSON('metrics/google_analytics/'+metric+'.json', function(data) {
            //$.getJSON(metric+'.json', function(data) {
                year2015 = data.y2015;
                year2016 = data.y2016;

                $('#container2').highcharts({

                    chart: {
                        renderTo: 'container2',
                        // zoomType: 'x',
                        // events: {
                        //     setExtremes: function(){
                        //         console.log(this.xAxis);
                        //         console.log(this.yAxis);
                        //     }
                        // }
                    },

                    title: {
                        text: metric,
                        x: -20 //center
                    },

                    tooltip: {
                      shared: true,
                      crosshairs: true,
                      dateTimeLabelFormats : {
                            day:"%b %e",
                            month: '%b %e'
                        }
                    },

                    xAxis: {
                        type: 'datetime'
                    },
                    series: [{
                        name: '2015',
                        data: year2015,
                    },{
                        name:'2016',
                        data: year2016,
                    }]
                
                });

            });

        }

        metrics('views');



    </script>

    <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>

    <script>

        var dataSet = [
            [ 1451689200000, "10000", "60%", "2000", "8000"],
            [ 1451775600000, "10000", "60%", "2000", "8000"],
            [ 1452121200000, "10000", "60%", "2000", "8000"],
            [ 1452207600000, "10000", "60%", "2000", "8000"],
            [ 1452294000000, "10000", "60%", "2000", "8000"],
            [ 1452380400000, "10000", "60%", "2000", "8000"],
            [ 1452639600000, "10000", "60%", "2000", "8000"],
            [ 1452726000000, "10000", "60%", "2000", "8000"],
            [ 1452812400000, "10000", "60%", "2000", "8000"],
            [ 1452898800000, "10000", "60%", "2000", "8000"]
        ];

        var dataSet2 = [
            [ 1451689200000, "10"],
            [ 1451775600000, "10"],
            [ 1452121200000, "10"],
            [ 1452207600000, "10"],
            [ 1452294000000, "1000"],
            [ 1452380400000, "1000"],
            [ 1452639600000, "1000"],
            [ 1452726000000, "1000"],
            [ 1452812400000, "1000"],
            [ 1452898800000, "100"]
        ];

        //var finalObj = $.extend(dataSet, dataSet2);

        var table;
         
        $(function() {
            table = $('#example').DataTable( {
                data: dataSet,
                "bFilter": false,
                "bPaginate": false,
                "bLengthChange": false,
                "bInfo": false,
                "bAutoWidth": false,
                columns: [
                    { title: "Date" },
                    { title: "Views" },
                    { title: "Bounce Rate" },
                    { title: "New Visitor" },
                    { title: "Returning Visitor" }
                ],
                "columnDefs": [{
                    "targets": 0,
                    "render": function (data, type, full, meta) {
                          d = new Date(data);
                          var yyyy = d.getFullYear().toString();                                    
                          var mm = (d.getMonth()+1).toString(); // getMonth() is zero-based         
                          var dd  = d.getDate().toString();    
                          return yyyy + '-' + (mm[1]?mm:"0"+mm[0]) + '-' + (dd[1]?dd:"0"+dd[0]);
                    }
                }]
            } );
            table.rows().every( function ( rowIdx, tableLoop, rowLoop ) {       
            var cell = table.cell({ row: rowIdx, column: 3 }).node();
            if(parseInt($(cell).text()) > 30)
                $(cell).addClass('warning');        
            });
        });

    </script>

    <script>

        $(function() {
            $('input[name="birthdate"]').daterangepicker({
                singleDatePicker: false,
                showDropdowns: true
            }, 
            function(start, end, label) {
                var years = moment().diff(start, 'years');
                table.clear();
                $.each(dataSet, function(i, item) {
                    var dd = new Date(dataSet[i][0]);
                    if(dd >= start && dd <= end){
                        $('#example').dataTable().fnAddData( 
                        dataSet[i]
                        );
                    }
                });
                var chart = $('#container').highcharts();
                chart.xAxis[0].setExtremes(
                    start,
                    end
                );
                var chart = $('#container2').highcharts();
                chart.xAxis[0].setExtremes(
                    start,
                    end
                );
            });
        });

    </script>

@stop