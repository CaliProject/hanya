@extends('layouts.content')

@section('title','招贤纳士')

@section('breadcrumb')
    <li class="active">招贤纳士</li>
@stop

@section('right')
    <article class="Article">
        <div class="Article__body">
            {!! $job !!}
        </div>
    </article>
@stop