@extends('layouts.content')

@section('title',$train->title)

@section('breadcrumb')
    <li><a href="{{ url('train') }}">培训动态</a></li>
    <li class="active">{{ $train->title }}</li>
@stop

@section('right')
    <article class="Article">
        <div class="Article__title">
            {{ $train->title }}
        </div>
        <div class="Article__meta">
            <div author>
                <i class="fa fa-user"></i>&nbsp;作者: {{ $train->author }}
            </div>
            <div stat>
                <ul>
                    <li>
                        <i class="fa fa-cloud"></i>&nbsp;来源: {{ $train->source }}
                    </li>
                    <li>
                        <i class="fa fa-clock-o"></i>&nbsp;发布于: {{ $train->created_at->diffForHumans() }}
                    </li>
                    <li>
                        <i class="fa fa-eye"></i>&nbsp;浏览量: {{ $train->count }}
                    </li>
                </ul>
            </div>
        </div>
        <div class="Article__body">
            {!! $train->body !!}
        </div>
        <hr>
        <h5>
            上一篇:
            <small>
                @if(!empty($train->previous()))
                    <a href="{{ $train->previous()->showLink() }}">{{ $train->previous()->title }}</a>
                @endif
            </small>
        </h5>
        <h5>
            下一篇:
            <small>
                @if(!empty($train->next()))
                    <a href="{{ $train->next()->showLink() }}">{{ $train->next()->title }}</a>
                @endif
            </small>
        </h5>
    </article>
@stop