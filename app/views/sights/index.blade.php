@extends('layout.default.main')

@section('content')

<div id="content-wrapper">

    <ul class="breadcrumb breadcrumb-page">
        <div class="breadcrumb-label text-light-gray">You are here: </div>
        <li><a href="{{ URL::route('user.dashboard') }}">Dashboard</a></li>
        <li class="active"><a href="{{ URL::route('sight.show') }}">Sights</a></li>
    </ul>

    <div class="page-header">
        <h1>Sights</h1>
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
                    <span class="panel-title">Sights</span>
                </div>
                <div class="panel-body">
                    <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="jq-datatables-example">

                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>City</th>
                                <th>Description</th>
                                <th>Manage</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($sights as $sight)
                                <tr>
                                    <td>{{ $sight->name }}</td>
                                    <td>{{ $sight->city->name }}</td>
                                    <td>{{ str_limit($sight->description, $limit = 100, $end = '...') }}</td>
                                    <td>Edit</td>
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