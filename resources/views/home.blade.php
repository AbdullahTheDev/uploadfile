@extends('layout.main')

@section('main_content')
    
@yield('upload_file')

<a href="{{Route('DeleteFiles')}}">Delete</a>
@endsection