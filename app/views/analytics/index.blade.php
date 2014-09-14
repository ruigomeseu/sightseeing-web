@extends('layout.default.main')

@section('content')

<div id="content-wrapper">

    <ul class="breadcrumb breadcrumb-page">
        <div class="breadcrumb-label text-light-gray">You are here: </div>
        <li><a href="{{ URL::route('user.dashboard') }}">Dashboard</a></li>
        <li class="active"><a href="{{ URL::route('analytics.index') }}">Analytics</a></li>
    </ul>

    <div class="page-header">
        <h1>Analytics</h1>
    </div> <!-- / .page-header -->

    <div class="row">
        <div class="col-sm-6">
            <script>
                init.push(function () {
                    Morris.Donut({
                        element: 'visits-per-sight',
                        data: [
                        @foreach($visitsPerSight as $sight => $visits)
                            { label: '{{ $sight }}', value: {{ $visits }} },
                        @endforeach
                        ],
                        colors: PixelAdmin.settings.consts.COLORS,
                        resize: true,
                        labelColor: '#888',
                        formatter: function (y) { return y + " visitors" }
                    });
                });
            </script>
            <!-- / Javascript -->

            <div class="panel">
                <div class="panel-heading">
                    <span class="panel-title">Visitors Per Sight</span>
                </div>
                <div class="panel-body">
                    <div class="graph-container">
                        <div id="visits-per-sight" class="graph"></div>
                    </div>
                </div>
            </div>

        </div>

        <div class="col-sm-6">
            <script>
                init.push(function () {
                    // Visits Chart Data
                    var visitsChartData = [{
                        label: 'Visitors',
                        data: [
                            [1, {{ $sightsPerVisitor[1] }}], [2, {{ $sightsPerVisitor[2] }}], [3, {{ $sightsPerVisitor[3] }}], [4, {{ $sightsPerVisitor[4] }}], [5, {{ $sightsPerVisitor[5] }}]
                        ]
                    }];

                    // Init Chart
                    $('#jq-flot-bars').pixelPlot(visitsChartData, {
                        series: {
                            bars: {
                                show: true,
                                barWidth: .9,
                                align: 'center'
                            }
                        },
                        xaxis: { tickDecimals: 0 }
                    }, {
                        height: 295,
                        tooltipText: "y + ' visitors checked in at ' + x + ' or more sights'"
                    });
                });
            </script>
            <!-- / Javascript -->

            <div class="panel">
                <div class="panel-heading">
                    <span class="panel-title">Sights Per Visitor</span>
                </div>
                <div class="panel-body">
                    <div class="graph-container">
                        <div id="jq-flot-bars"></div>
                    </div>
                </div>
            </div>

    </div>
    </div>
    <div class="row">




        <div class="col-sm-6">
            <script>
                init.push(function () {
                    Morris.Donut({
                        element: 'visits-per-country2',
                        data: [
                        @foreach($visitsPerCountry as $country => $visits)
                            { label: '{{ $country }}', value: {{ $visits }} },
                        @endforeach
                        ],
                        colors: PixelAdmin.settings.consts.COLORS,
                        resize: true,
                        labelColor: '#888',
                        formatter: function (y) { return y + " visitors" }
                    });
                });
            </script>
            <!-- / Javascript -->

            <div class="panel">
                <div class="panel-heading">
                    <span class="panel-title">Visitors Per Country</span>
                </div>
                <div class="panel-body">
                    <div class="graph-container">
                        <div id="visits-per-country2" class="graph"></div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
</div>


@endsection