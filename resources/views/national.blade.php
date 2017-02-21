@extends('layouts.app')
@section('content')
<div class="form-group col col-lg-3">
    <form action="{{$url}}" method="post">
@include('form')
    </form>
    
    
</div>
    @endsection
