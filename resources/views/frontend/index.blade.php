@extends('frontend.layouts.master')

@section('content')

    <div class="row">

        <div class="col-md-6">
            <div id="google-block" class="col-md-11 metric-block">
                <h2 class="block-titel"> Google Analytics</h2>

                <div class="col-md-3">
                    <p class="metric-titel">Page Views</p>
                    <img src="{{url('/red-arrow.png')}}" alt="Image"/>
                    <p class="metric-value">2523</p>
                    <p class="metric-tendency-red">-1164 (68%)</p>
                    <p>vs Median</p>
                </div>
                <div class="col-md-3">
                    <p class="metric-titel">Sessions</p>
                    <img src="{{url('/red-arrow.png')}}" alt="Image"/>
                    <p class="metric-value">2500</p>
                    <p class="metric-tendency-red">-500 (84%)</p>
                    <p>vs Median</p>
                </div>
                <div class="col-md-3">
                    <p class="metric-titel">Bounces*</p>
                    <img src="{{url('/green-arrow.png')}}" alt="Image"/>
                    <p class="metric-value">69,78%</p>
                    <p class="metric-tendency-green">(+0.18%)</p>
                    <p>vs Median</p>
                </div>
                <div class="col-md-3">
                    <p class="metric-titel">New Sessions</p>
                    <img src="{{url('/red-arrow.png')}}" alt="Image"/>
                    <p class="metric-value">1046</p>
                    <p class="metric-tendency-red">-201 (84%)</p>
                    <p>vs Median</p>
                </div>

            </div>
        </div>


        <div class="col-md-6">
            <div id="facebook-block" class="col-md-11 col-md-offset-1 metric-block">
                <h2 class="block-titel"> Facebook</h2>

                <div class="col-md-15">
                    <p class="metric-titel">Likes</p>
                    <img src="{{url('/red-arrow.png')}}" alt="Image"/>
                    <p class="metric-value">1</p>
                    <p class="metric-tendency-red">-50% (diff)</p>
                    <p>vs previous Month</p>
                </div>
                <div class="col-md-15">
                    <p class="metric-titel">Engagement</p>
                    <img src="{{url('/red-arrow.png')}}" alt="Image"/>
                    <p class="metric-value">106</p>
                    <p class="metric-tendency-red">-58% (diff)</p>
                    <p>vs previous Month</p>
                </div>
                <div class="col-md-15">
                    <p class="metric-titel">Reach</p>
                    <img src="{{url('/red-arrow.png')}}" alt="Image"/>
                    <p class="metric-value">2</p>
                    <p class="metric-tendency-red">-50% (diff)</p>
                    <p>vs previous Month</p>
                </div>
                <div class="col-md-15">
                    <p class="metric-titel">Views</p>
                    <img src="{{url('/green-arrow.png')}}" alt="Image"/>
                    <p class="metric-value">4</p>
                    <p class="metric-tendency-green">+0% (diff)</p>
                    <p>vs previous Month</p>
                </div>
                <div class="col-md-15">
                    <p class="metric-titel">Comments</p>
                    <img src="{{url('/green-arrow.png')}}" alt="Image"/>
                    <p class="metric-value">null</p>
                    <p class="metric-tendency-green">+100% (110%)</p>
                    <p>vs previous Month</p>
                </div>

            </div>   
        </div>

        <!-- </p> -->

    </div><!--row-->


    <div class="row">

        <div class="col-md-5">
            <div id="semrush-block" class="col-md-11 metric-block">
                <h2 class="block-titel"> SEMrush</h2>

                <div class="col-md-4">
                    <p class="metric-titel">Site Audit</p>
                    <img src="{{url('/green-arrow.png')}}" alt="Image"/>
                    <p class="metric-value">52%</p>
                    <p class="metric-tendency-green">+1 (health score)</p>
                    <p>vs previous Month</p>
                </div>
                <div class="col-md-4">
                    <p class="metric-titel">Position Tracking</p>
                    <img src="{{url('/red-arrow.png')}}" alt="Image"/>
                    <p class="metric-value">8,21%</p>
                    <p class="metric-tendency-red">-0.19% (Visibility)</p>
                    <p>vs previous Month</p>
                </div>
                <div class="col-md-4">
                    <p class="metric-titel">Backlink Audit</p>
                    <img src="{{url('/green-arrow.png')}}" alt="Image"/>
                    <p class="metric-value">2229</p>
                    <p class="metric-tendency-green">0 (toxic)</p>
                    <p>vs previous Month</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div id="twitter-block" class="col-md-10 col-md-offset-1 metric-block">
                <h2 class="block-titel"> Twitter</h2>

                <div class="col-md-4">
                    <p class="metric-titel">Followers</p>
                    <img src="{{url('/red-arrow.png')}}" alt="Image"/>
                    <p class="metric-value">5316</p>
                    <p class="metric-tendency-red">-4 (Av-)</p>
                    <p>vs Median</p>
                </div>
                <div class="col-md-4">
                    <p class="metric-titel">Tweet Views</p>
                    <img src="{{url('/red-arrow.png')}}" alt="Image"/>
                    <p class="metric-value">2112</p>
                    <p class="metric-tendency-red">17.4%(Av-)</p>
                    <p>vs Median</p>
                </div>
                <div class="col-md-4">
                    <p class="metric-titel">Visits</p>
                    <img src="{{url('/green-arrow.png')}}" alt="Image"/>
                    <p class="metric-value">74</p>
                    <p class="metric-tendency-green">59.8%(Av+)</p>
                    <p>vs Median</p>
                </div>

            </div>
        </div>
        <div class="col-md-3">
            <div id="linkedin-block" class="col-md-12 metric-block">
                <h2 class="block-titel"> LinkedIn</h2>

                <div class="col-md-6">
                    <p class="metric-titel">Likes</p>
                    <img src="{{url('/green-arrow.png')}}" alt="Image"/>
                    <p class="metric-value">null</p>
                    <p class="metric-tendency-green">Totaal</p>
                    <p>_______</p>
                </div>
                <div class="col-md-6">
                    <p class="metric-titel">Follow</p>
                    <img src="{{url('/green-arrow.png')}}" alt="Image"/>
                    <p class="metric-value">107</p>
                    <p class="metric-tendency-green">Totaal</p>
                    <p>_______</p>
                </div>

            </div>   
        </div>

        <!-- </p> -->

    </div><!--row-->


    <div class="row">

        <div class="col-md-6">
            <div id="fd-block" class="col-md-11 metric-block">
                <h2 class="block-titel"> FD</h2>

                <div class="col-md-4">
                    <p class="metric-titel">Impress</p>
                    <img src="{{url('/green-arrow.png')}}" alt="Image"/>
                    <p class="metric-value">6M</p>
                    <p class="metric-tendency-green">Totaal</p>
                    <p>_______</p>
                </div>
                <div class="col-md-4">
                    <p class="metric-titel">Clicks</p>
                    <img src="{{url('/green-arrow.png')}}" alt="Image"/>
                    <p class="metric-value">15819</p>
                    <p class="metric-tendency-green">Totaal</p>
                    <p>_______</p>
                </div>
                <div class="col-md-4">
                    <p class="metric-titel">CTR</p>
                    <img src="{{url('/green-arrow.png')}}" alt="Image"/>
                    <p class="metric-value">0.26%</p>
                    <p class="metric-tendency-green">Totaal</p>
                    <p>_______</p>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div id="mailchimp-block" class="col-md-11 col-md-offset-1 metric-block">
                <h2 class="block-titel"> Mailchimp</h2>

                <div class="col-md-3">
                    <p class="metric-titel">Opens</p>
                    <img src="{{url('/red-arrow.png')}}" alt="Image"/>
                    <p class="metric-value">1291</p>
                    <p class="metric-tendency-red">Totaal</p>
                    <p>_______</p>
                </div>
                <div class="col-md-3">
                    <p class="metric-titel">CTR</p>
                    <img src="{{url('/red-arrow.png')}}" alt="Image"/>
                    <p class="metric-value">16.3%</p>
                    <p class="metric-tendency-red">Totaal</p>
                    <p>_______</p>
                </div>
                <div class="col-md-3">
                    <p class="metric-titel">List average</p>
                    <img src="{{url('/red-arrow.png')}}" alt="Image"/>
                    <p class="metric-value">23.1%</p>
                    <p class="metric-tendency-red">Totaal</p>
                    <p>_______</p>
                </div>
                <div class="col-md-3">
                    <p class="metric-titel">Industry average</p>
                    <img src="{{url('/red-arrow.png')}}" alt="Image"/>
                    <p class="metric-value">19.9%</p>
                    <p class="metric-tendency-red">Totaal</p>
                    <p>_______</p>
                </div>

            </div>
        </div>

        <!-- </p> -->

    </div><!--row-->    

@endsection

@section('after-scripts-end')

    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/modules/exporting.js"></script>


    <script>

        $(function () {
            $('#container').highcharts({
                chart: {
                    type: 'spline'
                },
                title: {
                    text: 'Snow depth at Vikjafjellet, Norway'
                },
                subtitle: {
                    text: 'Irregular time data in Highcharts JS'
                },
                xAxis: {
                    type: 'datetime',
                    dateTimeLabelFormats: { // don't display the dummy year
                        month: '%e. %b',
                        year: '%b'
                    },
                    title: {
                        text: 'Date'
                    }
                },
                yAxis: {
                    title: {
                        text: 'Snow depth (m)'
                    },
                    min: 0
                },
                tooltip: {
                    headerFormat: '<b>{series.name}</b><br>',
                    pointFormat: '{point.x:%e. %b}: {point.y:.2f} m'
                },

                plotOptions: {
                    spline: {
                        marker: {
                            enabled: true
                        }
                    }
                },

                series: [{
                    name: 'Winter 2012-2013',
                    // Define the data points. All series have a dummy year
                    // of 1970/71 in order to be compared on the same x axis. Note
                    // that in JavaScript, months start at 0 for January, 1 for February etc.
                    data: [
                        [Date.UTC(1970, 9, 21), 0],
                        [Date.UTC(1970, 10, 4), 0.28],
                        [Date.UTC(1970, 10, 9), 0.25],
                        [Date.UTC(1970, 10, 27), 0.2],
                        [Date.UTC(1970, 11, 2), 0.28],
                        [Date.UTC(1970, 11, 26), 0.28],
                        [Date.UTC(1970, 11, 29), 0.47],
                        [Date.UTC(1971, 0, 11), 0.79],
                        [Date.UTC(1971, 0, 26), 0.72],
                        [Date.UTC(1971, 1, 3), 1.02],
                        [Date.UTC(1971, 1, 11), 1.12],
                        [Date.UTC(1971, 1, 25), 1.2],
                        [Date.UTC(1971, 2, 11), 1.18],
                        [Date.UTC(1971, 3, 11), 1.19],
                        [Date.UTC(1971, 4, 1), 1.85],
                        [Date.UTC(1971, 4, 5), 2.22],
                        [Date.UTC(1971, 4, 19), 1.15],
                        [Date.UTC(1971, 5, 3), 0]
                    ]
                }, {
                    name: 'Winter 2013-2014',
                    data: [
                        [Date.UTC(1970, 9, 29), 0],
                        [Date.UTC(1970, 10, 9), 0.4],
                        [Date.UTC(1970, 11, 1), 0.25],
                        [Date.UTC(1971, 0, 1), 1.66],
                        [Date.UTC(1971, 0, 10), 1.8],
                        [Date.UTC(1971, 1, 19), 1.76],
                        [Date.UTC(1971, 2, 25), 2.62],
                        [Date.UTC(1971, 3, 19), 2.41],
                        [Date.UTC(1971, 3, 30), 2.05],
                        [Date.UTC(1971, 4, 14), 1.7],
                        [Date.UTC(1971, 4, 24), 1.1],
                        [Date.UTC(1971, 5, 10), 0]
                    ]
                }, {
                    name: 'Winter 2014-2015',
                    data: [
                        [Date.UTC(1970, 10, 25), 0],
                        [Date.UTC(1970, 11, 6), 0.25],
                        [Date.UTC(1970, 11, 20), 1.41],
                        [Date.UTC(1970, 11, 25), 1.64],
                        [Date.UTC(1971, 0, 4), 1.6],
                        [Date.UTC(1971, 0, 17), 2.55],
                        [Date.UTC(1971, 0, 24), 2.62],
                        [Date.UTC(1971, 1, 4), 2.5],
                        [Date.UTC(1971, 1, 14), 2.42],
                        [Date.UTC(1971, 2, 6), 2.74],
                        [Date.UTC(1971, 2, 14), 2.62],
                        [Date.UTC(1971, 2, 24), 2.6],
                        [Date.UTC(1971, 3, 2), 2.81],
                        [Date.UTC(1971, 3, 12), 2.63],
                        [Date.UTC(1971, 3, 28), 2.77],
                        [Date.UTC(1971, 4, 5), 2.68],
                        [Date.UTC(1971, 4, 10), 2.56],
                        [Date.UTC(1971, 4, 15), 2.39],
                        [Date.UTC(1971, 4, 20), 2.3],
                        [Date.UTC(1971, 5, 5), 2],
                        [Date.UTC(1971, 5, 10), 1.85],
                        [Date.UTC(1971, 5, 15), 1.49],
                        [Date.UTC(1971, 5, 23), 1.08]
                    ]
                }]
            });

        });

    </script>

    <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>

    <script>

        var dataSet = [
            [ "Tiger Nixon", "System Architect", "Edinburgh", "5421", "2011/04/25", "$320,800" ],
            [ "Garrett Winters", "Accountant", "Tokyo", "8422", "2011/07/25", "$170,750" ],
            [ "Ashton Cox", "Junior Technical Author", "San Francisco", "1562", "2009/01/12", "$86,000" ],
            [ "Cedric Kelly", "Senior Javascript Developer", "Edinburgh", "6224", "2012/03/29", "$433,060" ],
            [ "Airi Satou", "Accountant", "Tokyo", "5407", "2008/11/28", "$162,700" ],
            [ "Brielle Williamson", "Integration Specialist", "New York", "4804", "2012/12/02", "$372,000" ],
            [ "Herrod Chandler", "Sales Assistant", "San Francisco", "9608", "2012/08/06", "$137,500" ],
            [ "Rhona Davidson", "Integration Specialist", "Tokyo", "6200", "2010/10/14", "$327,900" ],
            [ "Colleen Hurst", "Javascript Developer", "San Francisco", "2360", "2009/09/15", "$205,500" ],
            [ "Sonya Frost", "Software Engineer", "Edinburgh", "1667", "2008/12/13", "$103,600" ],
            [ "Jena Gaines", "Office Manager", "London", "3814", "2008/12/19", "$90,560" ],
            [ "Quinn Flynn", "Support Lead", "Edinburgh", "9497", "2013/03/03", "$342,000" ],
            [ "Charde Marshall", "Regional Director", "San Francisco", "6741", "2008/10/16", "$470,600" ],
            [ "Haley Kennedy", "Senior Marketing Designer", "London", "3597", "2012/12/18", "$313,500" ],
            [ "Tatyana Fitzpatrick", "Regional Director", "London", "1965", "2010/03/17", "$385,750" ],
            [ "Michael Silva", "Marketing Designer", "London", "1581", "2012/11/27", "$198,500" ],
            [ "Paul Byrd", "Chief Financial Officer (CFO)", "New York", "3059", "2010/06/09", "$725,000" ],
            [ "Gloria Little", "Systems Administrator", "New York", "1721", "2009/04/10", "$237,500" ],
            [ "Bradley Greer", "Software Engineer", "London", "2558", "2012/10/13", "$132,000" ],
            [ "Dai Rios", "Personnel Lead", "Edinburgh", "2290", "2012/09/26", "$217,500" ],
            [ "Jenette Caldwell", "Development Lead", "New York", "1937", "2011/09/03", "$345,000" ],
            [ "Yuri Berry", "Chief Marketing Officer (CMO)", "New York", "6154", "2009/06/25", "$675,000" ],
            [ "Caesar Vance", "Pre-Sales Support", "New York", "8330", "2011/12/12", "$106,450" ],
            [ "Doris Wilder", "Sales Assistant", "Sidney", "3023", "2010/09/20", "$85,600" ],
            [ "Angelica Ramos", "Chief Executive Officer (CEO)", "London", "5797", "2009/10/09", "$1,200,000" ],
            [ "Gavin Joyce", "Developer", "Edinburgh", "8822", "2010/12/22", "$92,575" ],
            [ "Jennifer Chang", "Regional Director", "Singapore", "9239", "2010/11/14", "$357,650" ],
            [ "Brenden Wagner", "Software Engineer", "San Francisco", "1314", "2011/06/07", "$206,850" ],
            [ "Fiona Green", "Chief Operating Officer (COO)", "San Francisco", "2947", "2010/03/11", "$850,000" ],
            [ "Shou Itou", "Regional Marketing", "Tokyo", "8899", "2011/08/14", "$163,000" ],
            [ "Michelle House", "Integration Specialist", "Sidney", "2769", "2011/06/02", "$95,400" ],
            [ "Suki Burks", "Developer", "London", "6832", "2009/10/22", "$114,500" ],
            [ "Prescott Bartlett", "Technical Author", "London", "3606", "2011/05/07", "$145,000" ],
            [ "Gavin Cortez", "Team Leader", "San Francisco", "2860", "2008/10/26", "$235,500" ],
            [ "Martena Mccray", "Post-Sales support", "Edinburgh", "8240", "2011/03/09", "$324,050" ],
            [ "Unity Butler", "Marketing Designer", "San Francisco", "5384", "2009/12/09", "$85,675" ]
        ];
         
        $(function() {
            var table = $('#example').DataTable( {
                data: dataSet,
                columns: [
                    { title: "Name" },
                    { title: "Position" },
                    { title: "Office" },
                    { title: "Extn." },
                    { title: "Start date" },
                    { title: "Salary" }
                ]
            } );
            table.rows().every( function ( rowIdx, tableLoop, rowLoop ) {       
            var cell = table.cell({ row: rowIdx, column: 3 }).node();
            if(parseInt($(cell).text()) > 30)
                $(cell).addClass('warning');        
            });
        });

    </script>

@stop