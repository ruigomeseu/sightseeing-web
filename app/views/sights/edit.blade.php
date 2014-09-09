@extends('layout.default.main')

@section('content')

<div id="content-wrapper">
    <ul class="breadcrumb breadcrumb-page">
        <div class="breadcrumb-label text-light-gray">You are here: </div>
        <li><a href="{{ URL::route('user.dashboard') }}">Dashboard</a></li>
        <li><a href="{{ URL::route('sight.index') }}">Sights</a></li>
        <li class="active">{{ $sight->name }}</li>
    </ul>

    <div class="page-header">
        <h1>Sights</h1>
    </div> <!-- / .page-header -->

    <div class="row">
        <div class="col-sm-12">

            <div class="panel">
                <div class="panel-heading">
                    <span class="panel-title">{{ $sight->name }}</span>
                </div>
                <div class="panel-body">
                    <form class="form-horizontal" id="jq-validation-form">
                        <div class="form-group">
                            <label for="jq-validation-text" class="col-sm-1 control-label">Name</label>
                            <div class="col-sm-10">
                                <input type="type" class="form-control" id="jq-validation-password" name="name" value="{{ $sight->name }}">
                                <p class="help-block">The name of the sight</p>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="jq-validation-text" class="col-sm-1 control-label">Description</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" rows="10" name="jq-validation-text" id="jq-validation-text">{{ $sight->description }}</textarea>
                                <p class="help-block">Explain why is this sight important and provide details about it</p>
                            </div>
                        </div>

                        <div class="panel-padding-h">
                            <button type="submit" class="btn btn-primary pull-right">Save</button>
                        </div>


                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

