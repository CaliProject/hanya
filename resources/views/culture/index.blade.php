@extends('layouts.content')

@section('title', '香道文化')

@section('breadcrumb')
    <li class="active">香道文化</li>
@stop

@section('right')
    <ul class="List List--bullet">
        @for($i = 0; $i < 30; $i++)
            <li>
                {{-- TODO: 更改动态Collection --}}
                <a href="#">
                    文化 {{ $i + 1 }}
                    <time datetime="{{ \Carbon\Carbon::yesterday() }}">{{ \Carbon\Carbon::yesterday()->diffForHumans() }}</time>
                </a>
            </li>
        @endfor
    </ul>
    {{-- TODO: 分页 --}}
    <div class="row text-center">
        {{-- {!! $var->links() !!}}--}}
        <ul class="pagination"><li class="disabled"><span>«</span></li> <li class="active"><span>1</span></li><li><a href="?page=2">2</a></li><li><a href="?page=3">3</a></li><li><a href="?page=4">4</a></li><li><a href="?page=5">5</a></li><li><a href="?page=6">6</a></li><li><a href="?page=7">7</a></li> <li><a href="?page=2" rel="next">»</a></li></ul>
    </div>
@stop