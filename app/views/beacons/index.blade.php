@extends('layout.default.main')

@section('content')

<div id="content-wrapper">

    <ul class="breadcrumb breadcrumb-page">
        <div class="breadcrumb-label text-light-gray">You are here: </div>
        <li><a href="{{ URL::route('user.dashboard') }}">Dashboard</a></li>
        <li class="active"><a href="{{ URL::route('beacon.index') }}">Beacons</a></li>
    </ul>

    <div class="page-header">
        <h1>Beacons</h1>
    </div> <!-- / .page-header -->

    <div class="row">
        <div class="col-sm-12">

            <script>
                init.push(function () {
                    $('#jq-datatables-example').dataTable();
                    $('#jq-datatables-example_wrapper .dataTables_filter input').attr('placeholder', 'Search...');
                });
            </script>

            <div class="panel">
                <div class="panel-heading">
                    <span class="panel-title">Beacons</span>
                </div>
                <div class="panel-body">
                    <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="jq-datatables-example">

                        <thead>
                            <tr>
                                <th>Associated with</th>
                                <th>UUID</th>
                                <th>Major</th>
                                <th>Minor</th>
                                <th>Installation Date</th>
                                <th>Manage</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($beacons as $beacon)
                                <tr>
                                    <td>{{ $beacon->sight->name }}</td>
                                    <td>{{ $beacon->UUID }}</td>
                                    <td>{{ $beacon->major }}</td>
                                    <td>{{ $beacon->minor }}</td>
                                    <td>{{ $beacon->present()->dateWithDiff() }}</td>
                                    <td>{{ link_to_route('beacon.show', 'Edit', $beacon->id) }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection