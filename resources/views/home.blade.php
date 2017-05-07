@extends('layouts.main')

@section('title')
    @lang('main.home')
@stop

@section('content')
<div class="row">
    <!-- Left col -->
    <section class="col-lg-6"> 
        <!-- Box (with bar chart) -->
        <div class="box box-danger">
            <div class="box-header">
                <i class="fa fa-cloud"></i>
                <h3 class="box-title">@lang('home.my_latest_projects')</h3>
            </div><!-- /.box-header -->
            
            <div class="box-body">
                <table class="table table-bordered">
                    <tbody><tr>
                        <th style="width: 10px">#</th>
                        <th>Task</th>
                    </tr>
                    <tr>
                        <td>1.</td>
                        <td>
                            Update software
                            @include('partials.progress_bar', ['percent' => 60])
                        </td>
                    </tr>
                    <tr>
                        <td>2.</td>
                        <td>
                            Update software
                            <div class="progress xs">
                                <div class="progress-bar progress-bar-danger" style="width: 55%"></div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>3.</td>
                        <td>
                            Update software
                            <div class="progress xs">
                                <div class="progress-bar progress-bar-danger" style="width: 55%"></div>
                            </div>
                        </td>
                       
                    </tr>
                    <tr>
                        <td>4.</td>
                        <td>
                            Update software
                            <div class="progress xs">
                                <div class="progress-bar progress-bar-danger" style="width: 55%"></div>
                            </div>
                        </td>
                       
                    </tr>
                </tbody></table>
            </div>

            <div class="box-footer">
                <a href="#">@lang('home.view_all_projects')</a>
            </div>

        </div><!-- /.box -->        
        
    </section><!-- right col -->

    <section class="col-lg-6"> 
        <!-- Box (with bar chart) -->
        <div class="box box-primary">
            <div class="box-header">
                <i class="fa fa-cloud"></i>
                <h3 class="box-title">@lang('home.my_upcoming_tasks')</h3>
            </div><!-- /.box-header -->
            
            <div class="box-body">
                <table class="table table-bordered">
                    <tbody><tr>
                        <th style="width: 10px">#</th>
                        <th>Task</th>
                        <th>Progress</th>
                    </tr>
                    <tr>
                        <td>1.</td>
                        <td>Update software</td>
                        <td>
                            @include('partials.progress_bar', ['percent' => 81])
                        </td>
                       
                    </tr>
                    <tr>
                        <td>2.</td>
                        <td>Clean database</td>
                        <td>
                            <div class="progress xs">
                                <div class="progress-bar progress-bar-yellow" style="width: 70%"></div>
                            </div>
                        </td>
                       
                    </tr>
                    <tr>
                        <td>3.</td>
                        <td>Cron job running</td>
                        <td>
                            <div class="progress xs progress-striped active">
                                <div class="progress-bar progress-bar-primary" style="width: 30%"></div>
                            </div>
                        </td>
                       
                    </tr>
                    <tr>
                        <td>4.</td>
                        <td>Fix and squish bugs</td>
                        <td>
                            <div class="progress xs progress-striped active">
                                <div class="progress-bar progress-bar-success" style="width: 90%"></div>
                            </div>
                        </td>
                       
                    </tr>
                </tbody></table>
            </div>

            <div class="box-footer">
                <a href="{{ route('tasks.index') }} ">@lang('home.view_all_tasks')</a>
            </div>

        </div><!-- /.box -->        
        
    </section><!-- right col -->
</div>
@stop