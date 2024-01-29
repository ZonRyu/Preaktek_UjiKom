@extends('Layout.main')

@section('content')
    <form class="form-group" action="addImage" method="POST" enctype="multipart/form-data">
        @csrf
        <label class="label" for="">Image</label>
        <input class="form-control" type="file" name="photo" id="" />
        <button type="submit" class="btn btn-success mt-2">Submit</button>
    </form>
@endsection