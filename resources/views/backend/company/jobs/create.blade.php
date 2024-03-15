@extends('layouts.company_master')
@php
    $pageTitle = 'Company Job Post';
@endphp
@section('content')
    <div class="page-heading">
        <div class="row">
            <div class="col-sm-6">
                <h1 class="page-title">{{ $pageTitle ?? '' }}</h1>
            </div>
            <div class="col-sm-6 pt-4 text-right">
                <a href="{{ route('c-job-posts.index') }}" class="btn bg-danger text-white"><i class="fa fa-reply"></i> Back to
                    list</a>

            </div>
        </div>
    </div>
    <div class="page-content fade-in-up">
        <div class="ibox rounded">
            <div class="ibox-body">
                <div id="row">
                    <form method="post" action="{{ route('job-post.store') }}" enctype="multipart/form-data"
                        autocomplete="off">
                        @csrf
                        <div class="row justify-content-center">
                            <div class="col-md-8">
                                <div class="card">
                                    <div class="card-header bg-gradient-info text-white">
                                        <h5 class="card-title">Add New </h5>
                                    </div>
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="job_title">Job Title <strong class="text-danger">*</strong></label>
                                            <input type="text" name="job_title" id="job_title" class="form-control"
                                                required>
                                            @error('job_title')
                                                <span class="text-danger" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-md-6">
                                                <label for="email">Email <strong class="text-danger">*</strong></label>
                                                <input type="text" name="email" id="email" class="form-control"
                                                    required>
                                                @error('email')
                                                    <span class="text-danger" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="col-md-6">
                                                <label for="phone">Phone<strong class="text-danger">*</strong></label>
                                                <input type="text" name="phone" id="phone" class="form-control"
                                                    required>
                                                @error('phone')
                                                    <span class="text-danger" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>


                                        <div class="form-group row">
                                            <div class="col-md-6">
                                                <label for="job_location">Job Location <strong
                                                        class="text-danger">*</strong></label>
                                                <input type="text" name="job_location" id="job_location"
                                                    class="form-control">
                                                @error('job_location')
                                                    <span class="text-danger" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="col-md-6">
                                                <label for="salary">Expected Salary<strong
                                                        class="text-danger">*</strong></label>
                                                <input type="text" name="salary" id="salary" class="form-control">
                                                @error('salary')
                                                    <span class="text-danger" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>


                                        <div class="form-group row">
                                            <div class="col-md-6">
                                                <label for="experience">Experience <strong
                                                        class="text-danger">*</strong></label>
                                                <input type="text" name="experience" id="experience" class="form-control"
                                                    required>
                                                @error('experience')
                                                    <span class="text-danger" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="col-md-6">
                                                <label for="education">Education<strong
                                                        class="text-danger">*</strong></label>
                                                <input type="text" name="education" id="education" class="form-control"
                                                    required>
                                                @error('education')
                                                    <span class="text-danger" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>


                                        <div class="form-group row">
                                            <div class="col-md-6">
                                                <label for="job_type">job type <strong
                                                        class="text-danger">*</strong></label>
                                                <select name="job_type" class="form-control">
                                                    <option value="PartTime">Part Time</option>
                                                    <option value="FullTime">Full Time</option>


                                                </select>

                                                @error('job_type')
                                                    <span class="text-danger" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="col-md-6">
                                                <label for="gender">Gender<strong class="text-danger">*</strong></label>
                                                <select name="gender" class="form-control">
                                                    <option value="Male">Male</option>
                                                    <option value="Female">Female</option>


                                                </select>
                                                @error('gender')
                                                    <span class="text-danger" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>


                                        <div class="form-group row">
                                            <div class="col-md-6">
                                                <label for="published_date">Published Date<strong
                                                        class="text-danger">*</strong></label>
                                                <input type="date" name="published_date" id="published_date"
                                                    class="form-control" required>
                                                @error('published_date')
                                                    <span class="text-danger" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="col-md-6">
                                                <label for="deadline_date">Deadline Date<strong
                                                        class="text-danger">*</strong></label>
                                                <input type="date" name="deadline_date" id="deadline_date"
                                                    class="form-control" required>
                                                @error('deadline_date')
                                                    <span class="text-danger" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>


                                        <div class="form-group row">
                                            <div class="col-md-6">
                                                <label for="company_name">Company Name<strong
                                                        class="text-danger">*</strong></label>
                                                <input type="text" name="company_name" id="company_name"
                                                    class="form-control" required>
                                                @error('company_name')
                                                    <span class="text-danger" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="col-md-6">
                                                <label for="company_website">Company Website<strong
                                                        class="text-danger">*</strong></label>
                                                <input type="text" name="company_website" id="company_website"
                                                    class="form-control">
                                                @error('company_website')
                                                    <span class="text-danger" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-md-6">
                                                <label for="twitter_link">twitter link<strong
                                                        class="text-danger">*</strong></label>
                                                <input type="text" name="twitter_link" id="twitter_link"
                                                    class="form-control">
                                                @error('twitter_link')
                                                    <span class="text-danger" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="col-md-6">
                                                <label for=fb_linke">Fb Link <strong
                                                        class="text-danger">*</strong></label>
                                                <input type="text" name="fb_linke" id="fb_linke"
                                                    class="form-control">
                                                @error('fb_linke')
                                                    <span class="text-danger" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-md-6">
                                                <label for="linkdin_link">linkdin_link <strong
                                                        class="text-danger">*</strong></label>
                                                <input type="text" name="linkdin_link" id="linkdin_link"
                                                    class="form-control">
                                                @error('linkdin_link')
                                                    <span class="text-danger" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            {{-- <div class="col-md-6">
                                                <label for="other_benefit">other_benefit<strong
                                                        class="text-danger">*</strong></label>
                                                        <textarea name="other_benefit" id="other_benefit" rows="5" class="form-control editor">{{ old('other_benefit') }}</textarea>
                                                @error('other_benefit')
                                                    <span class="text-danger" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div> --}}
                                        </div>

                                        <div class="form-group">
                                            <label for="job_description">Job Description <strong
                                                    class="text-danger">*</strong></label>
                                            <textarea name="job_description" id="job_description" rows="10" class="form-control editor" required>{{ old('job_description') }}</textarea>
                                            @error('job_description')
                                                <span class="text-danger" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <label for="company_details">Company Details <strong
                                                    class="text-danger">*</strong></label>
                                            <textarea name="company_details" id="company_details" rows="10" class="form-control editor" required>{{ old('company_details') }}</textarea>
                                            @error('company_details')
                                                <span class="text-danger" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="other_benefit">Company Other Benefiit <strong
                                                    class="text-danger">*</strong></label>
                                            <textarea name="other_benefit" id="other_benefit" rows="10" class="form-control editor" required>{{ old('other_benefit') }}</textarea>
                                            @error('other_benefit')
                                                <span class="text-danger" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                    </div>
                                </div>
                            </div>{{-- //.col-md-8 --}}
                            <div class="col-md-4">
                                <div class="card">
                                    <div class="card-header bg-gradient-info text-white">
                                        <h5 class="card-title">Attachment </h5>
                                    </div>
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="company_logo">Company Logo</label>
                                            <input type="file" name="company_logo" id="company_logo"
                                                class="form-control dropify" data-height="220">
                                            @error('company_logo')
                                                <span class="text-danger" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group text-center mt-3">
                            <button type="submit" class="btn btn-primary">
                                <i class="fa fa-plus-circle"></i> Create
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
