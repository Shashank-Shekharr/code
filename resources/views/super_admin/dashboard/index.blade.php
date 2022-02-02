@extends('layouts.app')
@section('title')
    {{ __('messages.dashboard.dashboard') }}
@endsection
@section('page_css')
    <link href="{{ mix('assets/css/dashboard.css') }}" rel="stylesheet" type="text/css"/>
@endsection
@section('content')
    <div class="post d-flex flex-column-fluid" id="kt_post">
        <div id="kt_content_container" class="container">
            <div class="row g-5 gx-xxl-8">
                <div class="col-xl-3 col-md-6">
                    <a href="{{route('super.admin.hospitals.index') }}"
                       class="card bg-warning hoverable card-xl-stretch mb-xl-8">
                        <div class="card-body card-1">
                            <span class="rotate"><i
                                        class="fas fa-hospital fa-4x display-4 card-icon text-white"></i></span>
                            <div class="text-inverse-primary fw-bolder card-count fs-2 mb-2 mt-5 amount-position">
                                {{$data['users']}}</div>
                            <div class="fw-bold text-inverse-primary fs-7">{{ __('messages.dashboard.total_hospitals') }}</div>
                        </div>
                    </a>
                </div>
                <div class="col-xl-3 col-md-6">
                    <a href="{{ route('subscriptions.transactions.index') }}"
                       class="card bg-info hoverable card-xl-stretch mb-xl-8">
                        <div class="card-body card-1">
                            <span class="rotate"><i class="fas fa-rupee-sign fa-4x display-4 card-icon text-white"></i></span>
                            <div class="text-inverse-primary fw-bolder card-count fs-2 mb-2 mt-5 amount-position">
                                {{number_format($data['revenue'], 2)}}</div>
                            <div class="fw-bold text-inverse-primary fs-7">{{ __('messages.dashboard.total_revenue') }}</div>
                        </div>
                    </a>
                </div>
                <div class="col-xl-3 col-md-6">
                    <a href="{{ route('super.admin.subscription.plans.index') }}"
                       class="card bg-success hoverable card-xl-stretch mb-xl-8">
                        <div class="card-body card-1">
                            <span class="rotate"><i
                                        class="fas fa-toggle-on fa-4x display-4 card-icon text-white"></i></span>
                            <div class="text-inverse-primary fw-bolder card-count fs-2 mb-2 mt-5 amount-position">
                                {{$data['activeHospitalPlan']}}</div>
                            <div class="fw-bold text-inverse-primary fs-7">{{ __('messages.dashboard.total_active_hospital_plan') }}</div>
                        </div>
                    </a>
                </div>

                <div class="col-xl-3 col-md-6">
                    <a href="{{ route('super.admin.subscription.plans.index') }}"
                       class="card bg-primary hoverable card-xl-stretch mb-xl-8">
                        <div class="card-body card-1">
                            <span class="rotate"><i
                                        class="fas fa-toggle-off fa-4x display-4 card-icon text-white"></i></span>
                            <div class="text-inverse-primary fw-bolder card-count fs-2 mb-2 mt-5 amount-position">
                                {{ $data['deActiveHospitalPlan']}}</div>
                            <div class="fw-bold text-inverse-primary fs-7">{{ __('messages.dashboard.total_expired_hospital_plan') }}</div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>


@endsection
