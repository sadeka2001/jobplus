@extends('layouts.candidate_master')
@php
    $pageTitle = 'Candidate Dashboard';
@endphp
@section('content')
    <!-- START PAGE CONTENT-->
    <div class="page-heading">
        <div class="row">
            <div class="col-sm-6">
                <h1 class="page-title">{{ $pageTitle??'' }}</h1>
            </div>
            <div class="col-sm-6 pt-4 text-right">

            </div>
        </div>
    </div>
    <div class="page-content fade-in-up">
        <div class="ibox rounded">
            <div class="ibox-body">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="ibox bg-gradient-default color-white widget-stat">
                            <div class="ibox-body">
                                <h2 class="m-b-5 font-strong">201</h2>
                                <div class="m-b-5">Job Applied</div><i class="ti-shopping-cart widget-stat-icon"></i>
                                <div><i class="fa fa-level-up m-r-5"></i><small>25% higher</small></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="ibox bg-gradient-info color-white widget-stat">
                            <div class="ibox-body">
                                <h2 class="m-b-5 font-strong">1250</h2>
                                <div class="m-b-5">Job saved</div><i class="ti-bar-chart widget-stat-icon"></i>
                                <div><i class="fa fa-level-up m-r-5"></i><small>17% higher</small></div>
                            </div>
                        </div>
                    </div>

                </div>


            </div>
        </div>
    </div>
@endsection
