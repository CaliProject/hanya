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
            <div author><i class="fa fa-user"></i>&nbsp;作者: {{ $culture->author }}</div>
            <div stat>
                <ul>
                    <li>
                        <i class="fa fa-cloud"></i>&nbsp;来源: {{ $culture->source }}
                    </li>
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
        <hr>
        <h5>上一篇:
            <small>
                @if(!empty($culture->previous()))
                    <a href="{{ $culture->previous()->showLink() }}">{{ $culture->previous()->title }}</a>
                @endif
            </small>
        </h5>
        <h5>
            下一篇:
            <small>
                @if(!empty($culture->next()))
                    <a href="{{ $culture->next()->showLink() }}">{{ $culture->next()->title }}</a>
                @endif
            </small>
        </h5>
    </article>
@stop