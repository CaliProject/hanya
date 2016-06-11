@extends('layouts.content')

@section('title','师资力量')

@section('breadcrumb')
    <li class="active">师资力量</li>
@stop

@section('right')
    @foreach($teachers as $teacher)
        <a href="{{ $teacher->showLink() }}" class="Teacher col-md-4">
            <div class="Teacher__avatar" style="background-image: url('{{ $teacher->image }}')"></div>
            <span class="Teacher__name">{{ $teacher->name }}</span>
        </a>
    @endforeach
    <div class="row text-center">
        {!! $teachers->links() !!}
    </div>
@stop