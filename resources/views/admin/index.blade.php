@extends('layouts.admin')

@section('admin.title','控制台')

@section('admin.content')
    <div class="row">
        <div class="col-md-6">
            <div class="Overview Panel">
                <div class="Content overview-content">
                    <div class="overview-title">
                        <p class="counter">{{ $culture }}</p>
                        <span>累计香道文化文章数</span>
                    </div>
                    <div class="overview-icon">
                        <i class="fa fa-envira"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="Overview Panel">
                <div class="Content overview-content">
                    <div class="overview-title">
                        <p class="counter">{{ $course }}</p>
                        <span>累计课程通知文章数</span>
                    </div>
                    <div class="overview-icon">
                        <i class="fa fa-wpforms"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="Overview Panel">
                <div class="Content overview-content">
                    <div class="overview-title">
                        <p class="counter">{{ $teacher }}</p>
                        <span>累计老师数量</span>
                    </div>
                    <div class="overview-icon">
                        <i class="fa fa-user"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="Overview Panel">
                <div class="Content overview-content">
                    <div class="overview-title">
                        <p class="counter">{{ $train }}</p>
                        <span>累计培训动态文章数</span>
                    </div>
                    <div class="overview-icon">
                        <i class="fa fa-bar-chart"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="Overview Panel">
                <div class="Content overview-content">
                    <div class="overview-title">
                        <p class="counter">{{ $link }}</p>
                        <span>累计友情链接数</span>
                    </div>
                    <div class="overview-icon">
                        <i class="fa fa-link"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="Overview Panel">
                <div class="Content overview-content">
                    <div class="overview-title">
                        <p class="counter">{{ $count }}</p>
                        <span>累计阅读数</span>
                    </div>
                    <div class="overview-icon">
                        <i class="fa fa-eye"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop