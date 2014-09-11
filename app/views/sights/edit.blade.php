@extends('layout.default.main')

@section('content')

<div id="content-wrapper">
    <ul class="breadcrumb breadcrumb-page">
        <div class="breadcrumb-label text-light-gray">You are here: </div>
        <li><a href="{{ URL::route('user.dashboard') }}">Dashboard</a></li>
        <li><a href="{{ URL::route('sight.index') }}">Sights</a></li>
        <li class="active">Editing {{ $sight->name }}</li>
    </ul>

    <div class="page-header">
        <h1>Sights</h1>
    </div> <!-- / .page-header -->

    <div class="row">
        <div class="col-sm-12">

            <div class="panel">
                <div class="panel-heading">
                    <span class="panel-title">Edit Sight</span>
                </div>
                <div class="panel-body">
                    {{ Form::open(array('route' => array('sight.show', $sight->id), 'files' => true),  array('class' => 'form-horizontal')) }}
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
                                <textarea class="form-control" rows="10" name="description" id="jq-validation-text">{{ $sight->description }}</textarea>
                                <p class="help-block">Explain why is this sight important and provide details about it</p>
                            </div>
                        </div>

                        <div class="panel-padding-h">
                            <button type="submit" class="btn btn-primary pull-right">Save</button>
                        </div>

                    {{ Form::close() }}
                </div>
            </div>

            <div class="panel">
                <div class="panel-heading">
                    <span class="panel-title">Image Gallery</span>
                </div>
                <div class="panel-body">
                    <div id="links">
                        @foreach($sight->images as $image)
                           <a href="{{ URL::route('sight.image.show', $image->id) }}" title="Banana" data-gallery>
                               <img src="http://s3.amazonaws.com/sightseeing.io/{{ $image->path }}" alt="Banana" height="150" width="150">
                           </a>
                        @endforeach
                    </div>
                </div>
            </div>

            <!-- Javascript -->
            <script>
                init.push(function () {
                    $("#dropzonejs-example").dropzone({
                        url: "{{ URL::route('sight.upload', $sight->id) }}",
                        paramName: "image", // The name that will be used to transfer the file
                        maxFilesize: 0.5, // MB

                        addRemoveLinks : true,
                        dictResponseError: "Can't upload file!",
                        autoProcessQueue: true,
                        thumbnailWidth: 138,
                        thumbnailHeight: 120,

                        previewTemplate: '<div class="dz-preview dz-file-preview"><div class="dz-details"><div class="dz-filename"><span data-dz-name></span></div><div class="dz-size">File size: <span data-dz-size></span></div><div class="dz-thumbnail-wrapper"><div class="dz-thumbnail"><img data-dz-thumbnail><span class="dz-nopreview">No preview</span><div class="dz-success-mark"><i class="fa fa-check-circle-o"></i></div><div class="dz-error-mark"><i class="fa fa-times-circle-o"></i></div><div class="dz-error-message"><span data-dz-errormessage></span></div></div></div></div><div class="progress progress-striped active"><div class="progress-bar progress-bar-success" data-dz-uploadprogress></div></div></div>',

                        resize: function(file) {
                            var info = { srcX: 0, srcY: 0, srcWidth: file.width, srcHeight: file.height },
                                srcRatio = file.width / file.height;
                            if (file.height > this.options.thumbnailHeight || file.width > this.options.thumbnailWidth) {
                                info.trgHeight = this.options.thumbnailHeight;
                                info.trgWidth = info.trgHeight * srcRatio;
                                if (info.trgWidth > this.options.thumbnailWidth) {
                                    info.trgWidth = this.options.thumbnailWidth;
                                    info.trgHeight = info.trgWidth / srcRatio;
                                }
                            } else {
                                info.trgHeight = file.height;
                                info.trgWidth = file.width;
                            }
                            return info;
                        }
                    });
                });
            </script>
            <!-- / Javascript -->

            <div class="panel">
                <div class="panel-heading">
                    <span class="panel-title">Upload to Gallery</span>
                </div>
                <div class="panel-body">
                    <div id="dropzonejs-example" class="dropzone-box">
                        <div class="dz-default dz-message">
                            <i class="fa fa-cloud-upload"></i>
                            Drop files in here<br><span class="dz-text-small">or click to pick manually</span>
                        </div>
                        {{ Form::open(array('route' => 'sight.upload')) }}
                            <div class="fallback">
                                <input name="image" type="file" multiple="" />
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

