@extends('admin.layout')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Create News</div>

                    <div class="panel-body">
                        <form action="{{ $url }}" method="post" enctype="multipart/form-data">
                            @include('admin.news.form')
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection