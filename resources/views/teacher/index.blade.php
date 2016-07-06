@extends('layouts.content')

@section('title','师资力量')

@section('breadcrumb')
    <li class="active">师资力量</li>
@stop

@section('right')
    @foreach($teachers->chunk(3) as $chunk)
        <div class="row">
            @foreach($chunk as $teacher)
                <a href="{{ $teacher->showLink() }}" class="Teacher col-md-4">
                    <div class="Teacher__avatar" style="background-image: url('{{ $teacher->image }}')"></div>
                    <span class="Teacher__name">{{ $teacher->name }}</span>
                    <p>{{ $teacher->content }}</p>
                </a>
            @endforeach
        </div>
    @endforeach
    <div class="row text-center">
        {!! $teachers->links() !!}
    </div>
@stop