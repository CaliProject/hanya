@extends('layouts.content')

@section('title','关于汉雅')

@section('breadcrumb')
    <li class="active">关于汉雅</li>
@stop

@section('right')
    <article class="Article">
        <div class="Article__body">
            {!! $about !!}
        </div>
    </article>
@stop