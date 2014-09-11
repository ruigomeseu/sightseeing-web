@extends('layout.default.main')

@section('content')

<div id="content-wrapper">
    <ul class="breadcrumb breadcrumb-page">
        <div class="breadcrumb-label text-light-gray">You are here: </div>
        <li><a href="{{ URL::route('user.dashboard') }}">Dashboard</a></li>
        <li><a href="{{ URL::route('sight.index') }}">Sights</a></li>
        <li><a href="{{ URL::route('sight.show', $sight->id) }}">{{ $sight->name }}</a></li>
        <li class="active">Editing Image</li>
    </ul>

    <div class="page-header">
        <h1>Sights</h1>
    </div> <!-- / .page-header -->

    <div class="modal fade" id="deleteImage">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
            <h4 class="modal-title">Delete Image</h4>
          </div>
          <div class="modal-body">
            <p>Are you sure you want to delete this image?</p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
            <a href="{{ URL::route('sight.image.delete', $image->id) }}" type="button" class="btn btn-danger">Delete</a>
          </div>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

    <div class="row">
        <div class="col-sm-12">
            <div class="panel">
                <div class="panel-heading">
                    <span class="panel-title">Edit Image</span>
                </div>
                <div class="panel-body">
                    <p>{{ HTML::image("http://s3.amazonaws.com/sightseeing.io/" . $image->path) }}</p>
                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deleteImage">Delete</button>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

