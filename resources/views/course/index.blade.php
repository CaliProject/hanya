@extends('layouts.content')

@section('title','课程通知')

@section('breadcrumb')
    <li class="active">课程通知</li>
@stop

@section('right')
    <ul class="List List--bullet">
        @foreach($courses as $course)
            <li>
                <a href="{{ $course->showLink() }}">
                    {{ str_limit($course->title,70) }}
                    <time>{{ $course->created_at }}</time>
                </a>
            </li>
        @endforeach
    </ul>
    <div class="row text-center">
        {!! $courses->links() !!}
    </div>
@stop