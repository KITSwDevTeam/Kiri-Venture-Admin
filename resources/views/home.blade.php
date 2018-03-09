@extends('layouts.app')

@section('sidenav')
    @include('includes.sidenav')
@endsection

@section('content')
    <div class="page-content">
        <div class="container-fluid">
            <h2 class="content-heading">Dashboard</h2>
            <div class="content-description">Welcome to Kiriventure Dashboard</div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="widget widget-remaining-time">
                        <h3 class="widget-remaining-time__heading">Member</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="widget widget-controls widget-sales-stats">
                        <div class="widget-controls__header">
                            <div>
                                <span class="widget-controls__header-icon iconfont iconfont-widget-charts"></span>
                                Member of each department
                            </div>
                        </div>
                        <div class="widget-controls__content">
                            <div id="widget-step-distribution-chart" class="widget-step-distribution__chart"></div>
                            <div class="widget-sales-stats__labels">
                                <span class="badge-circle badge-circle-sm badge-circle-yellow-orange widget-sales-stats__label">201 <span>Activity</span></span>
                                <span class="badge-circle badge-circle-sm badge-circle-fountain-blue widget-sales-stats__label">140 <span>Transportation</span></span>
                                <span class="badge-circle badge-circle-sm badge-circle-heliotrope widget-sales-stats__label">10 <span>F&B</span></span>
                                <span class="badge-circle badge-circle-sm badge-circle-golden widget-sales-stats__label">25 <span>Front Office</span></span>
                                <span class="badge-circle badge-circle-sm badge-circle-waterlemon widget-sales-stats__label">130 <span>HouseKeeping</span></span>
                                <span class="badge-circle badge-circle-sm badge-circle-danger widget-sales-stats__label">66 <span>General Manager</span></span>
                                <span class="badge-circle badge-circle-sm badge-circle-danger widget-sales-stats__label">22 <span>Operation Manager</span></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
