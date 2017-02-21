@extends('layouts.app')
@section('content')
    <div class="form-group col col-lg-3">
        <form action="{{$url}}" method="post">
            {{method_field('put')}}
            @include('form')
        </form>


    </div>
@endsection
