@extends('layouts.company_master')
@php
    $pageTitle = 'Plugins';
@endphp
@section('content')
    <!-- START PAGE CONTENT-->
    <div class="page-heading">
        <div class="row">
            <div class="col-sm-6">
                <h1 class="page-title">{{ $pageTitle ?? '' }}</h1>
            </div>
            <div class="col-sm-6 pt-4 text-right">
                <a href="{{ route('c-plugins.create') }}" class="btn bg-primary text-white"><i class="fa fa-plus-circle"></i>
                    Add New</a>
            </div>
        </div>
    </div>
    <div class="page-content fade-in-up">
        <div class="ibox rounded">
            <div class="ibox-body">
                <div class="row">
                    @forelse ($plugins as $plugin)
                        <div class="col-lg-3 col-md-6">
                            <div class="ibox bg-gradient-default color-white widget-stat">
                                <div class="ibox-body p-4">
                                    <h2 class="m-b-5 font-strong">{{ $plugin->name }}</h2>
                                    <div class="m-b-5 mt-4">
                                        <form action="{{ route('plugins.update', $plugin->id) }}" method="POST">
                                            @csrf
                                            @method('put')
                                            <button type="submit" class="btn btn-primary">
                                                {{ $plugin->status }}
                                            </button>
                                        </form>
                                    </div>
                                    <div class="widget-stat-icon">
                                        <form id="delete-form-{{ $plugin->id }}" action="{{ route('plugins.destroy', $plugin->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit"
                                                onclick="return confirm('Are you sure to permanently delete?')"
                                                class="btn btn-danger btn-sm">
                                                <i class="fa fa-trash"></i>
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @empty
                        <div class="col-lg-4 col-md-6">
                            No plugins found!
                        </div>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
@endsection
