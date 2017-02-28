@extends('admin.layout')

@section('content')
    <div class="container">
        @if($message)
        <div class="alert alert-{{$messageType}}">{{$message}}</div>
        @endif
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">List News</div>

                    <div class="panel-body">
                        <form action="" method="get">
                            @if($q)
                            <input type="hidden" name="q" value="{{ $q }}" />
                            @endif
                            <div class="form-group">
                                <label for="category">category:</label>
                                <select name="category">
                                    <option value="">All</option>
                                    @foreach($categories as $id => $label)
                                        <option value="{{ $id }}" {!!  $selectedCategory == $id? 'selected="selected"': '' !!}>{{ $label }}</option>
                                    @endforeach
                                </select>
                                <button type="submit">filter</button>
                            </div>
                        </form>
                        <form action="" method="get">
                            @if($selectedCategory)
                            <input type="hidden" name="category" value="{{ $selectedCategory }}" />
                            @endif
                            <div class="form-group">
                                <label for="q">Search:</label>
                                <input type="text" name="q" value="{{ $q }}" />
                                <button type="submit">search</button>
                            </div>
                        </form>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Num</th>
                                    <th>Name</th>
                                    <th>Author</th>
                                    <th>Category</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if(count($articles))
                                    <?php $offset= ($articles->currentPage() - 1) * $articles->perPage(); ?>
                                    @foreach($articles as $num => $article)
                                        <tr>
                                            <td>{{ $offset + $num + 1 }}</td>
                                            <td>{{ $article->name }}</td>
                                            <td>{{ $article->author->name }}</td>
                                            <td>{{ $article->articleCategory->name }}</td>
                                            <td>
                                                @can('edit', $article)
                                                <a class="btn btn-primary" href="{{ route('admin.news.edit', ['news'=>$article->id]) }}"><i class="glyphicon glyphicon-edit"></i> edit</a>
                                                @endcan
                                                @can('destroy', $article)
                                                        <form style="display: inline-block" action="{{ route('admin.news.destroy', ['news'=>$article->id]) }}" method="post">
                                                            {{method_field('delete')}}
                                                            {{csrf_field()}}
                                                            <button type="submit" class="btn btn-danger"><i class="glyphicon glyphicon-remove"></i>delete</button>
                                                        </form>
                                                @endcan
                                            </td>
                                        </tr>
                                    @endforeach
                                @else
                                    <tr>
                                        <td colspan="5" style="text-align:center">No articles found ...</td>
                                    </tr>
                                @endif
                            </tbody>
                        </table>
                        <div style="text-align:center">{{ $articles->appends(['category' => $selectedCategory, 'q' => $q])->links() }}</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection