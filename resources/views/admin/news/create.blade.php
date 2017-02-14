@extends('admin.layout')

@section('content')
    <h1>Create News</h1>
    <form action="{{ $url }}" method="post">
        @include('admin.news.form')
    </form>
@endsection