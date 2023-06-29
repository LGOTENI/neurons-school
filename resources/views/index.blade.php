@extends('layouts.layout')
@section('title', 'Home admin')
@section('content')
    <div class="container-fluid">

        <div class="row">
            <div class="col-12 ">
                <div class="page-title-box d-xm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">layout</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Anna</a></li>
                            <li class="breadcrumb-item active">Secretaire Generale</li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-12">
                <div class="d-flex flex-column h-100">
                    <div class="row">
                        <div class="col-xl-6 col-md-6">
                            <div class="card card-animate overflow-hidden">
                                <div class="position-absolute start-0" style="z-index: 0;">
                                    <svg version="1.2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 120"
                                        width="200" height="120">
                                        <style>
                                            .s0 {
                                                opacity: .05;
                                                fill: var(--vz-success)
                                            }
                                        </style>
                                        <path id="Shape 8" class="s0"
                                            d="m189.5-25.8c0 0 20.1 46.2-26.7 71.4 0 0-60 15.4-62.3 65.3-2.2 49.8-50.6 59.3-57.8 61.5-7.2 2.3-60.8 0-60.8 0l-11.9-199.4z" />
                                    </svg>
                                </div>
                                <div class="card-body" style="z-index:1 ;">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-grow-1 overflow-hidden">
                                            <p class="text-uppercase fw-medium text-muted text-truncate mb-3"> Total
                                                Etudiant</p>
                                            <h4 class="fs-22 fw-semibold ff-secondary mb-0"><span class="counter-value"
                                                    data-target="36894">0</span></h4>
                                        </div>
                                        <div class="flex-shrink-0">
                                            <div id="total_jobs" data-colors='["--vz-success"]' class="apex-charts"
                                                dir="ltr"></div>
                                        </div>
                                    </div>
                                </div><!-- end card body -->
                            </div><!-- end card -->
                        </div>
                        <!--end col-->
                        <div class="col-xl-6 col-md-6">
                            <!-- card -->
                            <div class="card card-animate overflow-hidden">
                                <div class="position-absolute start-0" style="z-index: 0;">
                                    <svg version="1.2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 120"
                                        width="200" height="120">
                                        <style>
                                            .s0 {
                                                opacity: .05;
                                                fill: var(--vz-success)
                                            }
                                        </style>
                                        <path id="Shape 8" class="s0"
                                            d="m189.5-25.8c0 0 20.1 46.2-26.7 71.4 0 0-60 15.4-62.3 65.3-2.2 49.8-50.6 59.3-57.8 61.5-7.2 2.3-60.8 0-60.8 0l-11.9-199.4z" />
                                    </svg>
                                </div>
                                <div class="card-body" style="z-index:1 ;">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-grow-1 overflow-hidden">
                                            <p class="text-uppercase fw-medium text-muted text-truncate mb-3"> Total Faculte
                                            </p>
                                            <h4 class="fs-22 fw-semibold ff-secondary mb-0"><span class="counter-value"
                                                    data-target="28410">0</span></h4>
                                        </div>
                                        <div class="flex-shrink-0">
                                            <div id="apply_jobs" data-colors='["--vz-success"]' class="apex-charts"
                                                dir="ltr"></div>
                                        </div>
                                    </div>
                                </div><!-- end card body -->
                            </div><!-- end card -->
                        </div><!-- end col -->
                        <div class="col-xl-6 col-md-6">
                            <!-- card -->
                            <div class="card card-animate overflow-hidden">
                                <div class="position-absolute start-0" style="z-index: 0;">
                                    <svg version="1.2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 120"
                                        width="200" height="120">
                                        <style>
                                            .s0 {
                                                opacity: .05;
                                                fill: var(--vz-success)
                                            }
                                        </style>
                                        <path id="Shape 8" class="s0"
                                            d="m189.5-25.8c0 0 20.1 46.2-26.7 71.4 0 0-60 15.4-62.3 65.3-2.2 49.8-50.6 59.3-57.8 61.5-7.2 2.3-60.8 0-60.8 0l-11.9-199.4z" />
                                    </svg>
                                </div>
                                <div class="card-body" style="z-index:1 ;">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-grow-1 overflow-hidden">
                                            <p class="text-uppercase fw-medium text-muted text-truncate mb-3">Total
                                                professeurs</p>
                                            <h4 class="fs-22 fw-semibold ff-secondary mb-0"><span class="counter-value"
                                                    data-target="4305">0</span></h4>
                                        </div>
                                        <div class="flex-shrink-0">
                                            <div id="new_jobs_chart" data-colors='["--vz-success"]' class="apex-charts"
                                                dir="ltr"></div>
                                        </div>
                                    </div>
                                </div><!-- end card body -->
                            </div><!-- end card -->
                        </div><!-- end col -->
                        <div class="col-xl-6 col-md-6">
                            <!-- card -->
                            <div class="card card-animate overflow-hidden">
                                <div class="position-absolute start-0" style="z-index: 0;">
                                    <svg version="1.2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 120"
                                        width="200" height="120">
                                        <style>
                                            .s0 {
                                                opacity: .05;
                                                fill: var(--vz-success)
                                            }
                                        </style>
                                        <path id="Shape 8" class="s0"
                                            d="m189.5-25.8c0 0 20.1 46.2-26.7 71.4 0 0-60 15.4-62.3 65.3-2.2 49.8-50.6 59.3-57.8 61.5-7.2 2.3-60.8 0-60.8 0l-11.9-199.4z" />
                                    </svg>
                                </div>
                                <div class="card-body" style="z-index:1 ;">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-grow-1 overflow-hidden">
                                            <p class="text-uppercase fw-medium text-muted text-truncate mb-3"> Total
                                                matiere</p>
                                            <h4 class="fs-22 fw-semibold ff-secondary mb-0"><span class="counter-value"
                                                    data-target="5021">0</span></h4>
                                        </div>
                                        <div class="flex-shrink-0">
                                            <div id="interview_chart" data-colors='["--vz-danger"]' class="apex-charts"
                                                dir="ltr"></div>
                                        </div>
                                    </div>
                                </div><!-- end card body -->
                            </div><!-- end card -->
                        </div><!-- end col -->
                    </div>
                    <!--end row-->
                </div>
            </div>
            <!--end col-->
            <!--end col-->
        </div>
        <!--end row-->

        <div class="row">
            <div class="col-xxl-8">
                <div class="card card-height-100">
                    <div class="card-header border-0 align-items-center d-flex">
                        <h4 class="card-title mb-0 flex-grow-1">Statistic Etudiants</h4>
                        <div>
                            <button type="button" class="btn btn-soft-primary btn-sm">
                                Tout
                            </button>
                            <button type="button" class="btn btn-soft-secondary btn-sm">
                                LICENCE I
                            </button>
                            <button type="button" class="btn btn-soft-secondary btn-sm">
                                LICENCE II
                            </button>
                            <button type="button" class="btn btn-soft-secondary btn-sm">
                                LICENCE III
                            </button>
                        </div>
                    </div><!-- end card header -->

                    <div class="card-header p-0 border-0 bg-soft-light">
                        <div class="row g-0 text-center">
                            <div class="col-6 col-sm-3">
                                <div class="p-3 border border-dashed border-start-0">
                                    <h5 class="mb-1"><span class="counter-value" data-target="3364">0</span></h5>
                                    <p class="text-muted mb-0">New Applications</p>
                                </div>
                            </div>
                            <!--end col-->
                            <div class="col-6 col-sm-3">
                                <div class="p-3 border border-dashed border-start-0">
                                    <h5 class="mb-1"><span class="counter-value" data-target="2804">0</span></h5>
                                    <p class="text-muted mb-0">Interview</p>
                                </div>
                            </div>
                            <!--end col-->
                            <div class="col-6 col-sm-3">
                                <div class="p-3 border border-dashed border-start-0">
                                    <h5 class="mb-1"><span class="counter-value" data-target="2402">0</span></h5>
                                    <p class="text-muted mb-0">Hired</p>
                                </div>
                            </div>
                            <!--end col-->
                            <div class="col-6 col-sm-3">
                                <div class="p-3 border border-dashed border-start-0 border-end-0">
                                    <h5 class="mb-1 text-success"><span class="counter-value" data-target="8">0</span>k
                                    </h5>
                                    <p class="text-muted mb-0">Total Applications</p>
                                </div>
                            </div>
                            <!--end col-->
                        </div>
                    </div><!-- end card header -->

                    <div class="card-body p-0 pb-2">
                        <div class="w-100">
                            <div id="line_chart_dashed" data-colors='["--vz-success", "--vz-info", "--vz-primary"]'
                                class="apex-charts" dir="ltr"></div>
                        </div>
                    </div><!-- end card body -->
                </div><!-- end card -->
            </div><!-- end col -->
            <div class="col-xxl-4">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex align-items-center">
                            <h6 class="card-title mb-0 flex-grow-1">Listes des professeurs</h6>
                        </div>
                    </div>
                    <div class="row g-0">
                        <div class="col-lg-6">
                            <div class="card-body border-end">
                                <div class="search-box">
                                    <input type="text" class="form-control bg-light border-light" autocomplete="off"
                                        id="searchList" placeholder="Search Professeur...">
                                    <i class="ri-search-line search-icon"></i>
                                </div>
                                <div data-simplebar style="max-height: 190px" class="px-3 mx-n3">
                                    <ul class="list-unstyled mb-0 pt-2" id="candidate-list">
                                        <li>
                                            <a href="javascript:void(0);" class="d-flex align-items-center py-2">
                                                <div class="flex-shrink-0 me-2">
                                                    <div class="avatar-xs">
                                                        <img src="assets/images/users/avatar-10.jpg" alt=""
                                                            class="img-fluid rounded-circle candidate-img">
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <h5 class="fs-13 mb-1 text-truncate"><span
                                                            class="candidate-name">Tonya Noble</span>
                                                        <div class="d-none candidate-position">Mathematique</div>
                                                </div>
                                            </a>
                                        </li>

                                        <li>
                                            <a href="javascript:void(0);" class="d-flex align-items-center py-2">
                                                <div class="flex-shrink-0 me-2">
                                                    <div class="avatar-xs">
                                                        <img src="assets/images/users/avatar-1.jpg" alt=""
                                                            class="img-fluid rounded-circle candidate-img">
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <h5 class="fs-13 mb-1 text-truncate"><span
                                                            class="candidate-name">Nicholas Ball</span></h5>
                                                    <div class="d-none candidate-position">Algotithme</div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" class="d-flex align-items-center py-2">
                                                <div class="flex-shrink-0 me-2">
                                                    <div class="avatar-xs">
                                                        <img src="assets/images/users/avatar-9.jpg" alt=""
                                                            class="img-fluid rounded-circle candidate-img">
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <h5 class="fs-13 mb-1 text-truncate"><span
                                                            class="candidate-name">Zynthia Marrow</span></h5>
                                                    <div class="d-none candidate-position">Histoire Geographie</div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" class="d-flex align-items-center py-2">
                                                <div class="flex-shrink-0 me-2">
                                                    <div class="avatar-xs">
                                                        <img src="assets/images/users/avatar-2.jpg" alt=""
                                                            class="img-fluid rounded-circle candidate-img">
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <h5 class="fs-13 mb-1 text-truncate"><span
                                                            class="candidate-name">Cheryl Moore</span></h5>
                                                    <div class="d-none candidate-position">Philosophie</div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" class="d-flex align-items-center py-2">
                                                <div class="flex-shrink-0 me-2">
                                                    <div class="avatar-xs">
                                                        <img src="assets/images/users/avatar-5.jpg" alt=""
                                                            class="img-fluid rounded-circle candidate-img">
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <h5 class="fs-13 mb-1 text-truncate"><span
                                                            class="candidate-name">Jennifer Bailey</span>></h5>
                                                    <div class="d-none candidate-position">SVT</div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" class="d-flex align-items-center py-2">
                                                <div class="flex-shrink-0 me-2">
                                                    <div class="avatar-xs">
                                                        <img src="assets/images/users/avatar-8.jpg" alt=""
                                                            class="img-fluid rounded-circle candidate-img">
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <h5 class="fs-13 mb-1 text-truncate"><span
                                                            class="candidate-name">Hadley Leonard</span></h5>
                                                    <div class="d-none candidate-position">Physique Chimie</div>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="card-body text-center">
                                <div class="avatar-md mb-3 mx-auto">
                                    <img src="assets/images/users/avatar-10.jpg" alt="" id="candidate-img"
                                        class="img-thumbnail rounded-circle shadow-none">
                                </div>

                                <h5 id="candidate-name" class="mb-0">Tonya Noble</h5>
                                <p id="candidate-position" class="text-muted">Mathematique</p>

                                <div>
                                    <button type="button" class="btn btn-success custom-toggle w-100"
                                        data-bs-toggle="button" aria-pressed="false">
                                        <span class="icon-on"><i class="ri-add-line align-bottom me-1"></i>
                                            Contacter</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end card -->
                <div class="card overflow-hidden shadow-none">
                    <div class="card-body bg-soft-danger">
                        <div class="d-flex align-items-center">
                            <div class="flex-shrink-0">
                                <div class="avatar-sm">
                                    <div class="avatar-title bg-soft-danger text-danger rounded-circle fs-17">
                                        <i class="ri-gift-line"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="flex-grow-1 ms-3">
                                <h6 class="fs-16">Inscription</h6>
                                <p class="text-muted mb-0">Nor again is there anyone who loves or pursues or desires to
                                    obtain pain of itself, because it is pain, but because occasionally.</p>
                            </div>
                        </div>
                        <div class="mt-3 text-end">
                            <a href="inscription.html" class="btn btn-danger">Ajouter Etudiants</a>
                        </div>
                    </div>
                </div>
            </div><!-- end col -->
        </div>
        <!--end row-->
    </div>

@endsection
