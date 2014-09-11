@extends('layout.default.main')

@section('content')

<div id="content-wrapper">
    <ul class="breadcrumb breadcrumb-page">
        <div class="breadcrumb-label text-light-gray">You are here: </div>
        <li><a href="{{ URL::route('user.dashboard') }}">Dashboard</a></li>
        <li><a href="{{ URL::route('beacon.index') }}">Beacons</a></li>
        <li class="active">{{ $beacon->sight->name }} Beacon</li>
    </ul>

    <div class="page-header">
        <h1>Beacons</h1>
    </div> <!-- / .page-header -->

    <div class="row">
        <div class="col-sm-12">

            <script>
                init.push(function () {
                    $('#sight_id').select2({ allowClear: true, placeholder: 'Select a sight...' }).change(function(){
                        $(this).valid();
                    });

                    $('#bs-datepicker-range').datepicker();
                });


            </script>

            <div class="panel">
                <div class="panel-heading">
                    <span class="panel-title">Edit Beacon</span>
                </div>
                <div class="panel-body">
                    {{ Form::open(array('route' => array('beacon.show', $beacon->id), 'files' => true),  array('class' => 'form-horizontal')) }}
                        <div class="form-group">
                            <label for="jq-validation-text" class="col-sm-1 control-label">UUID</label>
                            <div class="col-sm-10">
                                <input type="type" class="form-control" id="jq-validation-password" name="UUID" value="{{ $beacon->UUID }}" disabled>
                                <p class="help-block">Universally Unique Identifier</p>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="jq-validation-text" class="col-sm-1 control-label">Major ID</label>
                            <div class="col-sm-10">
                                <input type="type" class="form-control" id="jq-validation-password" name="major" value="{{ $beacon->major }}" disabled>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="jq-validation-text" class="col-sm-1 control-label">Minor ID</label>
                            <div class="col-sm-10">
                                <input type="type" class="form-control" id="jq-validation-password" name="minor" value="{{ $beacon->minor }}" disabled>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="sight_id" class="col-sm-1 control-label">Associated Sight</label>
                            <div class="col-sm-10">
                                <select class="form-control" name="sight_id" id="sight_id">
                                    <option></option>
                                    @foreach($sights as $sight)
                                        <option value="{{ $sight->id }}" @if($sight->id == $beacon->sight_id) selected @endif>{{ $sight->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="installed_at" class="col-sm-1 control-label">Installation Date</label>
                            <div class="col-sm-10">
                                <div class="input-daterange" id="bs-datepicker-range">
                                    <input type="text" class="input-sm form-control" name="installed_at" value="{{ $beacon->present()->date() }}" placeholder="Installation Date">
                                </div>
                            </div>
                        </div>

                        <div class="panel-padding-h">
                            <button type="submit" class="btn btn-primary pull-right">Save</button>
                        </div>

                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

