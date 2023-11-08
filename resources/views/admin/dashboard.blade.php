@extends('layouts.admin')
@section('content')

<div class="row mx-1 mt-4">
    <div class="col-sm-6 mb-4 mb-xl-0">
        <div class="d-lg-flex align-items-center">
            <div>
                <h3 class="text-dark font-weight-bold mb-2">Hi, welcome back!</h3>
                <h6 class="font-weight-normal mb-2">Last login was 23 hours ago. View details</h6>
            </div>
            <div class="ms-lg-5 d-lg-flex d-none">
                <button type="button" class="btn bg-white btn-icon">
                    <i class="mdi mdi-view-grid text-success"></i>
                </button>
                <button type="button" class="btn bg-white btn-icon ms-2">
                    <i class="mdi mdi-format-list-bulleted font-weight-bold text-primary"></i>
                </button>
            </div>
        </div>
    </div>
    <div class="col-sm-6">
        <div class="d-flex align-items-center justify-content-md-end">
            <div class="pe-1 mb-3 mb-xl-0">
                <button type="button" class="btn btn-outline-inverse-info btn-icon-text">
                    Feedback
                    <i class="mdi mdi-message-outline btn-icon-append"></i>
                </button>
            </div>
            <div class="pe-1 mb-3 mb-xl-0">
                <button type="button" class="btn btn-outline-inverse-info btn-icon-text">
                    Help
                    <i class="mdi mdi-help-circle-outline btn-icon-append"></i>
                </button>
            </div>
            <div class="pe-1 mb-3 mb-xl-0">
                <button type="button" class="btn btn-outline-inverse-info btn-icon-text">
                    Print
                    <i class="mdi mdi-printer btn-icon-append"></i>
                </button>
            </div>
        </div>
    </div>
</div>
@endsection