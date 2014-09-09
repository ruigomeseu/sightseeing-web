@if(Session::has('message'))
    <div class="alert alert-success" role="alert">
        {{ Session::get('message') }}
    </div>
@endif
@if($errors->has())
    @foreach($errors->all() as $message)
        <div class="alert alert-danger">
            <p>{{ $message }}</p>
        </div>
    @endforeach
@endif