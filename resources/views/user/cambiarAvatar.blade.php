@extends('layouts.app')

@section('content')
<form method="POST" action="{{ route('user.cambiarAvatar') }}" enctype="multipart/form-data">
    <div class="col-md-6">
        <input type="file" id="image_path" class="form-control" {{$errors->has("image_path")?"is-invalid":""}} name="image_path" required>
        @if ($errors->has("image_path"))
            <span class="invalid-feedback" role="alert">
            <strong>{{ $errors->first("image_path")}}</strong>
        </span>
        @endif
    </div>
</form>