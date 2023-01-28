@extends('home')
@section('upload_file')
@if (Session::has('msg'))
    <h2>{{Session::get('msg')}}</h2>
@endif
<form action="{{ Route('uploadfile')}} " enctype="multipart/form-data" method="post">
    @csrf
    <input type="file" name="file" id="">
    <button type="submit">Upload</button>
</form>
@endsection