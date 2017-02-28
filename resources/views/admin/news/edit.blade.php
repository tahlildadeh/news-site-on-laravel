@extends('admin.layout')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Edit News: {{ $item->name }}</div>

                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-6">
                                <form action="{{ $url }}" method="post" enctype="multipart/form-data">
                                    {{ method_field('put') }}
                                    @include('admin.news.form')
                                </form>
                            </div>
                            <div class="col-md-6">
                                <img style="width:100%;" src="{{asset('static/article/'. ($item->imgNews ?? 'default.jpg'))}}" alt="news picture">
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection