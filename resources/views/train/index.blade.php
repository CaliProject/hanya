@extends('layouts.content')

@section('title','培训动态')

@section('breadcrumb')
    <li class="active">培训动态</li>
@stop

@section('right')
    <ul class="List List--bullet">
        @foreach($trains as $train)
            <li>
                <a href="{{ $train->showLink() }}">
                    {{ str_limit($train->title,70) }}
                    <time>{{ $train->created_at }}</time>
                </a>
            </li>
        @endforeach
    </ul>
    <div class="row text-center">
        {!! $trains->links() !!}
    </div>
@stop