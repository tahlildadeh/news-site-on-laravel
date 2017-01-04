@extends('layouts.master')
@section('content')
<div>{{  $article->intro_text }}</div>
<pre>
    <?php
        /*print_r($article->toArray());*/
    ?>
</pre>
@endsection