@extends('layouts.content')

@section('title', '香道文化')

@section('breadcrumb')
    <li class="active">香道文化</li>
@stop

@section('right')
    <ul class="List List--bullet">
        @foreach($cultures as $culture)
            <li>
                <a href="{{ $culture->showLink() }}">
                    {{ str_limit($culture->title,70) }}
                    <time>{{ $culture->created_at }}</time>
                </a>
            </li>
        @endforeach
    </ul>
    <div class="row text-center">
        {!! $cultures->links() !!}
    </div>
@stop