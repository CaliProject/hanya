@extends('layouts.content')

@section('title', $culture->title)

{{-- 开启面包屑: --}}
@section('breadcrumb')
    <li>
        <a href="{{ url('culture') }}">香道文化</a>
    </li>
    <li class="active">{{ $culture->title }}</li>
@stop

{{-- 不开启面包屑: --}}
{{--@push('body.class')--}}
{{--no-breadcrumb--}}
{{--@endpush--}}

@section('right')
    <article class="Article">
        <div class="Article__title">
            {{ $culture->title }}
        </div>
        <div class="Article__meta">
            {{-- TODO: 作者 --}}
            <div author><i class="fa fa-user"></i>&nbsp;作者: 王海鑫逗比</div>
            <div stat>
                <ul>
                    <li>
                        <i class="fa fa-clock-o"></i>&nbsp;发布于: {{ $culture->created_at->diffForHumans() }}
                    </li>
                    <li>
                        <i class="fa fa-eye"></i>&nbsp;浏览量: {{ $culture->count }}
                    </li>
                </ul>
            </div>
        </div>
        <div class="Article__body">
            {!! $culture->body !!}
        </div>
    </article>
@stop