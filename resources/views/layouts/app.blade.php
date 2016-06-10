@extends('layouts.base')

@unless(request()->is('manage*'))
    @section('header')
        <header class="Hero">
            {{-- TODO: 更改横幅url --}}
            <div class="Hero__banner" style="background-image: url('http://xiuxiutea.cn/ximg/pic.jpg')"></div>
        </header>
    @stop
@endunless