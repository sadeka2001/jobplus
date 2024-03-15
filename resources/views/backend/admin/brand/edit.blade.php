@extends('layouts.master')
@php
    $pageTitle = 'Job company';
@endphp
@section('content')
    <div class="page-heading">
        <div class="row">
            <div class="col-sm-6">
                <h1 class="page-title">{{ $pageTitle??'' }}</h1>
            </div>
            <div class="col-sm-6 pt-4 text-right">
                <a href="{{ route('company.index') }}" class="btn bg-danger text-white"><i class="fa fa-reply"></i> Back to
                    list</a>

            </div>
        </div>
    </div>
    <div class="page-content fade-in-up">
        <div class="ibox rounded">
            <div class="ibox-body">
                <div id="row">
                    <form method="post" action="{{ route('company.update', $company->id) }}" enctype="multipart/form-data"
                        autocomplete="off">
                        @csrf
                        @method('put')
                        <div class="row justify-content-center">
                            <div class="col-md-8">
                                <div class="card">
                                    <div class="card-header bg-gradient-info text-white">
                                        <h5 class="card-title">Edit New </h5>
                                    </div>
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="name">Name <strong class="text-danger">*</strong></label>
                                            <input value="{{ $company->name }}" type="text" name="name" id="name" class="form-control">
                                            @error('name')
                                                <span class="text-danger" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="email">Email <strong class="text-danger">*</strong></label>
                                            <input value="{{ $company->email }}" type="text" name="email" id="email" class="form-control">
                                            @error('email')
                                                <span class="text-danger" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="address">Address <strong class="text-danger">*</strong></label>
                                            <input value="{{ $company->address }}" type="text" name="address" id="address" class="form-control">
                                            @error('address')
                                                <span class="text-danger" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="phone">Phone <strong class="text-danger">*</strong></label>
                                            <input value="{{ $company->phone }}" type="text" name="phone" id="phone" class="form-control">
                                            @error('phone')
                                                <span class="text-danger" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="details">Details <strong class="text-danger">*</strong></label>
                                            <textarea placeholder="{{ $company->details }}" name="details" id="phone" class="form-control" cols="15" rows="5"></textarea>
                                            @error('details')
                                                <span class="text-danger" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="website">Website <strong class="text-danger">*</strong></label>
                                            <input value="{{ $company->website }}" type="text" name="website" id="website" class="form-control">
                                            @error('website')
                                                <span class="text-danger" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="fb">Fb <strong class="text-danger">*</strong></label>
                                            <input value="{{ $company->fb }}" type="text" name="fb" id="fb" class="form-control">
                                            @error('fb')
                                                <span class="text-danger" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="twitter">Twitter <strong class="text-danger">*</strong></label>
                                            <input value="{{ $company->twitter }}" type="text" name="twitter" id="twitter" class="form-control">
                                            @error('twitter')
                                                <span class="text-danger" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="linkedin">Linkedin <strong class="text-danger">*</strong></label>
                                            <input value="{{ $company->linkedin }}" type="text" name="linkedin" id="linkedin" class="form-control">
                                            @error('linkedin')
                                                <span class="text-danger" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="logo">Company Logo</label>
                                            <input value="{{ $company->logo }}" type="file" name="logo" id="logo"
                                                class="form-control dropify" data-height="220">
                                            @error('logo')
                                                <span class="text-danger" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>{{-- //.col-md-8 --}}

                        </div>
                        <div class="form-group text-center mt-3">
                            <button type="submit" class="btn btn-primary">
                                <i class="fa fa-arrow-circle-o-up"></i> Update
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('css')
    <link rel="stylesheet" href="{{ asset('assets/backend/vendors/dropify-master/dist/css/dropify.min.css') }}">
    <link href="{{ asset('assets/backend/vendors/select2/dist/css/select2.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/backend/vendors/summernote/dist/summernote-bs4.css') }}" rel="stylesheet" />
@endpush
@push('js')
    <script src="{{ asset('assets/backend/vendors/dropify-master/dist/js/dropify.min.js') }}"></script>
    <script src="{{ asset('assets/backend/vendors/select2/dist/js/select2.full.min.js') }}"></script>
    <script src="{{ asset('assets/backend/vendors/summernote/dist/summernote-bs4.min.js') }}"></script>
@endpush
@push('customJS')
    <script type="text/javascript">
        $('.dropify').dropify();
        $('.select2').select2();
        $('.editor').summernote({
            height: 250,
            callbacks: {
                // callback for pasting text only (no formatting)
                onPaste: function(e) {
                    var bufferText = ((e.originalEvent || e).clipboardData || window.clipboardData).getData(
                        'Text');
                    e.preventDefault();
                    bufferText = bufferText.replace(/\r?\n/g, '<br>');
                    document.execCommand('insertHtml', false, bufferText);
                }
            }
        });
    </script>
@endpush
