@extends('layouts.layout')
@section('title', 'Liste matieres')
@section('content')
    <div class="container-fluid">
        <div class="profile-foreground position-relative mx-n4 mt-n4">
            <div class="profile-wid-bg">

            </div>
        </div>
        <div class="pt-4 mb-4 mb-lg-3 pb-lg-4 profile-wrapper">
            <div class="row g-4">
                <div class="col-auto">
                    <div class="avatar-lg">
                        <img src="/storage/{{ $etudiant->photo }}" alt="user-img" class="img-thumbnail rounded-circle" />
                    </div>
                </div>
                <!--end col-->
                <div class="col">
                    <div class="p-2">
                        <h3 class="text-white mb-1">{{ $etudiant->nom }}</h3>
                        <p class="text-white-75">Etudiant(e) Genie Informatique</p>
                        <div class="hstack text-white-50 gap-1">
                            <div class="me-2 text-danger">
                                <i class="ri-user-line me-1 text-white-75 fs-16 align-middle"></i>{{ $etudiant->matricule }}
                            </div>
                            <div class="me-2 text-danger">
                                <i class="ri-key-line me-1 text-white-75 fs-16 align-middle"></i>{{ $etudiant->password }}
                            </div>
                        </div>
                    </div>
                </div>
                <!--end col-->

                <!--end col-->

            </div>
            <!--end row-->
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div>
                    <div class="d-flex profile-wrapper">
                        <!-- Nav tabs -->
                        <ul class="nav nav-pills animation-nav profile-nav gap-2 gap-lg-3 flex-grow-1" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link fs-14 active" data-bs-toggle="tab" href="#overview-tab" role="tab">
                                    <i class="ri-airplay-fill d-inline-block d-md-none"></i> <span
                                        class="d-none d-md-inline-block">Overview</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link fs-14" data-bs-toggle="tab" href="#activities" role="tab">
                                    <i class="ri-list-unordered d-inline-block d-md-none"></i> <span
                                        class="d-none d-md-inline-block">Notes</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link fs-14" data-bs-toggle="tab" href="#documents" role="tab">
                                    <i class="ri-folder-4-line d-inline-block d-md-none"></i> <span
                                        class="d-none d-md-inline-block">Documents</span>
                                </a>
                            </li>
                        </ul>
                        <div class="flex-shrink-0">
                            <a href="pages-profile-settings.html" class="btn btn-success"><i
                                    class="ri-edit-box-line align-bottom"></i> Edit Profile</a>
                        </div>
                        <div class="flex-shrink-0 mx-2">
                            <a href="pages-profile-settings.html" class="btn btn-warning"><i
                                    class="ri-account-box-line align-bottom"></i> Activer compte</a>
                        </div>
                    </div>
                    <!-- Tab panes -->
                    <div class="tab-content pt-4 text-muted">
                        <div class="tab-pane active" id="overview-tab" role="tabpanel">
                            <div class="row">
                                <div class="col-xxl-3">

                                    <div class="card">
                                        <div class="card-body">
                                            <h5 class="card-title mb-3">Info</h5>
                                            <div class="table-responsive">
                                                <table class="table table-borderless mb-0">
                                                    <tbody>
                                                        <tr>
                                                            <th class="ps-0" scope="row">Nom complet:</th>
                                                            <td class="text-muted">{{ $etudiant->nom }}</td>
                                                        </tr>
                                                        <tr>
                                                            <th class="ps-0" scope="row">Mobile :</th>
                                                            <td class="text-muted">{{ $etudiant->telephone }}</td>
                                                        </tr>
                                                        <tr>
                                                            <th class="ps-0" scope="row">E-mail :</th>
                                                            <td class="text-muted">{{ $etudiant->email }}</td>
                                                        </tr>
                                                        <tr>
                                                            <th class="ps-0" scope="row">Location :</th>
                                                            <td class="text-muted">{{ $etudiant->adresse }}
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th class="ps-0" scope="row">date de naissance</th>
                                                            <td class="text-muted">{{ $etudiant->date_naissance }}</td>
                                                        </tr>
                                                        <tr>
                                                            <th class="ps-0" scope="row">Niveau</th>
                                                            <td class="text-muted">{{ $etudiant->niveau->nom }}</td>
                                                        </tr>
                                                        <tr>
                                                            <th class="ps-0" scope="row">Option</th>
                                                            <td class="text-muted">{{ $etudiant->option->nom }}</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div><!-- end card body -->
                                    </div><!-- end card -->
                                    <!--end card-->
                                </div>
                                <!--end col-->
                                <div class="col-xxl-9">
                                    <div class="card">
                                        <div class="card-header">
                                            <div class="row g-4 align-items-center">
                                                <div class="col-sm-auto">
                                                    <div>
                                                        <h5>Moyenne</h5>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-body">
                                            <div id="recomended-jobs" class="table-card">
                                                <div role="complementary" class="gridjs gridjs-container"
                                                    style="width: 100%;">
                                                    <div class="gridjs-wrapper" style="height: auto;">
                                                        <table role="grid" class="gridjs-table" style="height: auto;">
                                                            <thead class="gridjs-thead">
                                                                <tr class="gridjs-tr">
                                                                    <th data-column-id="position"
                                                                        class="gridjs-th gridjs-th-sort" tabindex="0"
                                                                        style="width: 100px;">
                                                                        <div class="gridjs-th-content">Examen</div><button
                                                                            tabindex="-1"
                                                                            aria-label="Sort column ascending"
                                                                            title="Sort column ascending"
                                                                            class="gridjs-sort gridjs-sort-desc"></button>
                                                                    </th>
                                                                    <th data-column-id="companyName"
                                                                        class="gridjs-th gridjs-th-sort" tabindex="0"
                                                                        style="width: 90px;">
                                                                        <div class="gridjs-th-content">Semestre 1</div>
                                                                        <button tabindex="-1"
                                                                            aria-label="Sort column ascending"
                                                                            title="Sort column ascending"
                                                                            class="gridjs-sort gridjs-sort-neutral"></button>
                                                                    </th>
                                                                    <th data-column-id="companyName"
                                                                        class="gridjs-th gridjs-th-sort" tabindex="0"
                                                                        style="width: 90px;">
                                                                        <div class="gridjs-th-content">semestre 2</div>
                                                                        <button tabindex="-1"
                                                                            aria-label="Sort column ascending"
                                                                            title="Sort column ascending"
                                                                            class="gridjs-sort gridjs-sort-neutral"></button>
                                                                    </th>
                                                                    <th data-column-id="companyName"
                                                                        class="gridjs-th gridjs-th-sort" tabindex="0"
                                                                        style="width: 90px;">
                                                                        <div class="gridjs-th-content">semestre 3</div>
                                                                        <button tabindex="-1"
                                                                            aria-label="Sort column ascending"
                                                                            title="Sort column ascending"
                                                                            class="gridjs-sort gridjs-sort-neutral"></button>
                                                                    </th>
                                                                    <th data-column-id="companyName"
                                                                        class="gridjs-th gridjs-th-sort" tabindex="0"
                                                                        style="width: 90px;">
                                                                        <div class="gridjs-th-content">semestre 4</div>
                                                                        <button tabindex="-1"
                                                                            aria-label="Sort column ascending"
                                                                            title="Sort column ascending"
                                                                            class="gridjs-sort gridjs-sort-neutral"></button>
                                                                    </th>
                                                                    <th data-column-id="companyName"
                                                                        class="gridjs-th gridjs-th-sort" tabindex="0"
                                                                        style="width: 90px;">
                                                                        <div class="gridjs-th-content">Semestre 5</div>
                                                                        <button tabindex="-1"
                                                                            aria-label="Sort column ascending"
                                                                            title="Sort column ascending"
                                                                            class="gridjs-sort gridjs-sort-neutral"></button>
                                                                    </th>
                                                                    <th data-column-id="companyName"
                                                                        class="gridjs-th gridjs-th-sort" tabindex="0"
                                                                        style="width: 90px;">
                                                                        <div class="gridjs-th-content">Semestre 6</div>
                                                                        <button tabindex="-1"
                                                                            aria-label="Sort column ascending"
                                                                            title="Sort column ascending"
                                                                            class="gridjs-sort gridjs-sort-neutral"></button>
                                                                    </th>
                                                                </tr>
                                                            </thead>
                                                            <tbody class="gridjs-tbody">
                                                                <tr class="gridjs-tr">
                                                                    <td data-column-id="position" class="gridjs-td">Devoir
                                                                        1</td>
                                                                    <td data-column-id="companyName" class="gridjs-td">7
                                                                    </td>
                                                                    <td data-column-id="location" class="gridjs-td">15
                                                                    </td>
                                                                    <td data-column-id="salary" class="gridjs-td">18
                                                                    </td>
                                                                    <td data-column-id="experience" class="gridjs-td">11
                                                                    </td>
                                                                    <td data-column-id="jobType" class="gridjs-td">8
                                                                    </td>
                                                                    <td data-column-id="experience" class="gridjs-td">11
                                                                    </td>

                                                                </tr>
                                                                <tr class="gridjs-tr">
                                                                    <td data-column-id="position" class="gridjs-td">
                                                                        Session 1</td>
                                                                    <td data-column-id="companyName" class="gridjs-td">7
                                                                    </td>
                                                                    <td data-column-id="location" class="gridjs-td">15
                                                                    </td>
                                                                    <td data-column-id="salary" class="gridjs-td">18
                                                                    </td>
                                                                    <td data-column-id="experience" class="gridjs-td">11
                                                                    </td>
                                                                    <td data-column-id="jobType" class="gridjs-td">8
                                                                    </td>
                                                                    <td data-column-id="experience" class="gridjs-td">11
                                                                    </td>

                                                                </tr>
                                                                <tr class="gridjs-tr">
                                                                    <td data-column-id="position" class="gridjs-td">Devoir
                                                                        2</td>
                                                                    <td data-column-id="companyName" class="gridjs-td">7
                                                                    </td>
                                                                    <td data-column-id="location" class="gridjs-td">15
                                                                    </td>
                                                                    <td data-column-id="salary" class="gridjs-td">18
                                                                    </td>
                                                                    <td data-column-id="experience" class="gridjs-td">11
                                                                    </td>
                                                                    <td data-column-id="jobType" class="gridjs-td">8
                                                                    </td>
                                                                    <td data-column-id="experience" class="gridjs-td">11
                                                                    </td>

                                                                </tr>
                                                                <tr class="gridjs-tr">
                                                                    <td data-column-id="position" class="gridjs-td">
                                                                        Session 2</td>
                                                                    <td data-column-id="companyName" class="gridjs-td">7
                                                                    </td>
                                                                    <td data-column-id="location" class="gridjs-td">15
                                                                    </td>
                                                                    <td data-column-id="salary" class="gridjs-td">18
                                                                    </td>
                                                                    <td data-column-id="experience" class="gridjs-td">11
                                                                    </td>
                                                                    <td data-column-id="jobType" class="gridjs-td">8
                                                                    </td>
                                                                    <td data-column-id="experience" class="gridjs-td">11
                                                                    </td>

                                                                </tr>
                                                                <tr class="gridjs-tr">
                                                                    <td data-column-id="position" class="gridjs-td">
                                                                        <div class="gridjs-th-content"
                                                                            style="font-weight: bold">Generale</div>
                                                                    <td data-column-id="companyName" class="gridjs-td"
                                                                        style="font-weight: bold">10.5</td>
                                                                    <td data-column-id="location" class="gridjs-td"
                                                                        style="font-weight: bold">11.5
                                                                    </td>
                                                                    <td data-column-id="salary" class="gridjs-td"
                                                                        style="font-weight: bold">18
                                                                    </td>
                                                                    <td data-column-id="experience" class="gridjs-td"
                                                                        style="font-weight: bold">11.5
                                                                    </td>
                                                                    <td data-column-id="jobType" class="gridjs-td"
                                                                        style="font-weight: bold">8
                                                                    </td>
                                                                    <td data-column-id="experience" class="gridjs-td"
                                                                        style="font-weight: bold">11.5
                                                                    </td>

                                                                </tr>

                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <div id="gridjs-temp" class="gridjs-temp"></div>
                                                </div>
                                            </div>


                                            <!--end row-->
                                        </div>
                                        <!--end card-body-->
                                    </div><!-- end card -->
                                </div>
                                <!--end col-->
                            </div>
                            <!--end row-->
                        </div>
                        <div class="tab-pane fade" id="activities" role="tabpanel">
                            <div class="card">
                                <div class="card-header">
                                    <div class="row g-4 align-items-center">
                                        <div class="col-sm-auto">
                                            <div>
                                                <h5>Semestre 1</h5>
                                            </div>
                                        </div>
                                        <div class="col-sm">
                                            <div class="d-flex justify-content-sm-end">
                                                <div class="search-box ms-2">
                                                    <a href="update-note.html" class="btn btn-danger"
                                                        type="button">Modifier</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div id="recomended-jobs" class="table-card">
                                        <div role="complementary" class="gridjs gridjs-container" style="width: 100%;">
                                            <div class="gridjs-wrapper" style="height: auto;">
                                                <table role="grid" class="gridjs-table" style="height: auto;">
                                                    <thead class="gridjs-thead">
                                                        <tr class="gridjs-tr">
                                                            <th data-column-id="position" class="gridjs-th gridjs-th-sort"
                                                                tabindex="0" style="width: 100px;">
                                                                <div class="gridjs-th-content">Examen</div><button
                                                                    tabindex="-1" aria-label="Sort column ascending"
                                                                    title="Sort column ascending"
                                                                    class="gridjs-sort gridjs-sort-desc"></button>
                                                            </th>
                                                            <th data-column-id="companyName"
                                                                class="gridjs-th gridjs-th-sort" tabindex="0"
                                                                style="width: 90px;">
                                                                <div class="gridjs-th-content">Francais</div><button
                                                                    tabindex="-1" aria-label="Sort column ascending"
                                                                    title="Sort column ascending"
                                                                    class="gridjs-sort gridjs-sort-neutral"></button>
                                                            </th>
                                                            <th data-column-id="companyName"
                                                                class="gridjs-th gridjs-th-sort" tabindex="0"
                                                                style="width: 90px;">
                                                                <div class="gridjs-th-content">Geographie</div><button
                                                                    tabindex="-1" aria-label="Sort column ascending"
                                                                    title="Sort column ascending"
                                                                    class="gridjs-sort gridjs-sort-neutral"></button>
                                                            </th>
                                                            <th data-column-id="companyName"
                                                                class="gridjs-th gridjs-th-sort" tabindex="0"
                                                                style="width: 90px;">
                                                                <div class="gridjs-th-content">Histoire</div><button
                                                                    tabindex="-1" aria-label="Sort column ascending"
                                                                    title="Sort column ascending"
                                                                    class="gridjs-sort gridjs-sort-neutral"></button>
                                                            </th>
                                                            <th data-column-id="companyName"
                                                                class="gridjs-th gridjs-th-sort" tabindex="0"
                                                                style="width: 90px;">
                                                                <div class="gridjs-th-content">Mathematique</div><button
                                                                    tabindex="-1" aria-label="Sort column ascending"
                                                                    title="Sort column ascending"
                                                                    class="gridjs-sort gridjs-sort-neutral"></button>
                                                            </th>
                                                            <th data-column-id="companyName"
                                                                class="gridjs-th gridjs-th-sort" tabindex="0"
                                                                style="width: 90px;">
                                                                <div class="gridjs-th-content">SVT</div><button
                                                                    tabindex="-1" aria-label="Sort column ascending"
                                                                    title="Sort column ascending"
                                                                    class="gridjs-sort gridjs-sort-neutral"></button>
                                                            </th>
                                                        </tr>
                                                    </thead>
                                                    <tbody class="gridjs-tbody">
                                                        <tr class="gridjs-tr">
                                                            <td data-column-id="position" class="gridjs-td">Devoir 1</td>
                                                            <td data-column-id="companyName" class="gridjs-td">7</td>
                                                            <td data-column-id="location" class="gridjs-td">15
                                                            </td>
                                                            <td data-column-id="salary" class="gridjs-td">18
                                                            </td>
                                                            <td data-column-id="experience" class="gridjs-td">11
                                                            </td>
                                                            <td data-column-id="jobType" class="gridjs-td">8
                                                            </td>
                                                        </tr>
                                                        <tr class="gridjs-tr">
                                                            <td data-column-id="position" class="gridjs-td">Session 1</td>
                                                            <td data-column-id="companyName" class="gridjs-td">7</td>
                                                            <td data-column-id="location" class="gridjs-td">15
                                                            </td>
                                                            <td data-column-id="salary" class="gridjs-td">18
                                                            </td>
                                                            <td data-column-id="experience" class="gridjs-td">11
                                                            </td>
                                                            <td data-column-id="jobType" class="gridjs-td">8
                                                            </td>
                                                        </tr>
                                                        <tr class="gridjs-tr">
                                                            <td data-column-id="position" class="gridjs-td">Devoir 2</td>
                                                            <td data-column-id="companyName" class="gridjs-td">7</td>
                                                            <td data-column-id="location" class="gridjs-td">15
                                                            </td>
                                                            <td data-column-id="salary" class="gridjs-td">18
                                                            </td>
                                                            <td data-column-id="experience" class="gridjs-td">11
                                                            </td>
                                                            <td data-column-id="jobType" class="gridjs-td">8
                                                            </td>
                                                        </tr>
                                                        <tr class="gridjs-tr">
                                                            <td data-column-id="position" class="gridjs-td">Session 2</td>
                                                            <td data-column-id="companyName" class="gridjs-td">7</td>
                                                            <td data-column-id="location" class="gridjs-td">15
                                                            </td>
                                                            <td data-column-id="salary" class="gridjs-td">18
                                                            </td>
                                                            <td data-column-id="experience" class="gridjs-td">11
                                                            </td>
                                                            <td data-column-id="jobType" class="gridjs-td">8
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div id="gridjs-temp" class="gridjs-temp"></div>
                                        </div>
                                    </div>
                                </div>

                                <div class="card-header">
                                    <div class="row g-4 align-items-center">
                                        <div class="col-sm-auto">
                                            <div>
                                                <h5>Semestre 2</h5>
                                            </div>
                                        </div>
                                        <div class="col-sm">
                                            <div class="d-flex justify-content-sm-end">
                                                <div class="search-box ms-2">
                                                    <a href="update-note.html" class="btn btn-danger"
                                                        type="button">Modifier</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="card-body">
                                    <div id="recomended-jobs" class="table-card">
                                        <div role="complementary" class="gridjs gridjs-container" style="width: 100%;">
                                            <div class="gridjs-wrapper" style="height: auto;">
                                                <table role="grid" class="gridjs-table" style="height: auto;">
                                                    <thead class="gridjs-thead">
                                                        <tr class="gridjs-tr">
                                                            <th data-column-id="position" class="gridjs-th gridjs-th-sort"
                                                                tabindex="0" style="width: 100px;">
                                                                <div class="gridjs-th-content">Examen</div><button
                                                                    tabindex="-1" aria-label="Sort column ascending"
                                                                    title="Sort column ascending"
                                                                    class="gridjs-sort gridjs-sort-desc"></button>
                                                            </th>
                                                            <th data-column-id="companyName"
                                                                class="gridjs-th gridjs-th-sort" tabindex="0"
                                                                style="width: 90px;">
                                                                <div class="gridjs-th-content">Francais</div><button
                                                                    tabindex="-1" aria-label="Sort column ascending"
                                                                    title="Sort column ascending"
                                                                    class="gridjs-sort gridjs-sort-neutral"></button>
                                                            </th>
                                                            <th data-column-id="companyName"
                                                                class="gridjs-th gridjs-th-sort" tabindex="0"
                                                                style="width: 90px;">
                                                                <div class="gridjs-th-content">Geographie</div><button
                                                                    tabindex="-1" aria-label="Sort column ascending"
                                                                    title="Sort column ascending"
                                                                    class="gridjs-sort gridjs-sort-neutral"></button>
                                                            </th>
                                                            <th data-column-id="companyName"
                                                                class="gridjs-th gridjs-th-sort" tabindex="0"
                                                                style="width: 90px;">
                                                                <div class="gridjs-th-content">Histoire</div><button
                                                                    tabindex="-1" aria-label="Sort column ascending"
                                                                    title="Sort column ascending"
                                                                    class="gridjs-sort gridjs-sort-neutral"></button>
                                                            </th>
                                                            <th data-column-id="companyName"
                                                                class="gridjs-th gridjs-th-sort" tabindex="0"
                                                                style="width: 90px;">
                                                                <div class="gridjs-th-content">Mathematique</div><button
                                                                    tabindex="-1" aria-label="Sort column ascending"
                                                                    title="Sort column ascending"
                                                                    class="gridjs-sort gridjs-sort-neutral"></button>
                                                            </th>
                                                            <th data-column-id="companyName"
                                                                class="gridjs-th gridjs-th-sort" tabindex="0"
                                                                style="width: 90px;">
                                                                <div class="gridjs-th-content">SVT</div><button
                                                                    tabindex="-1" aria-label="Sort column ascending"
                                                                    title="Sort column ascending"
                                                                    class="gridjs-sort gridjs-sort-neutral"></button>
                                                            </th>
                                                        </tr>
                                                    </thead>
                                                    <tbody class="gridjs-tbody">
                                                        <tr class="gridjs-tr">
                                                            <td data-column-id="position" class="gridjs-td">Devoir 1</td>
                                                            <td data-column-id="companyName" class="gridjs-td">7</td>
                                                            <td data-column-id="location" class="gridjs-td">15
                                                            </td>
                                                            <td data-column-id="salary" class="gridjs-td">18
                                                            </td>
                                                            <td data-column-id="experience" class="gridjs-td">11
                                                            </td>
                                                            <td data-column-id="jobType" class="gridjs-td">8
                                                            </td>
                                                        </tr>
                                                        <tr class="gridjs-tr">
                                                            <td data-column-id="position" class="gridjs-td">Session 1</td>
                                                            <td data-column-id="companyName" class="gridjs-td">7</td>
                                                            <td data-column-id="location" class="gridjs-td">15
                                                            </td>
                                                            <td data-column-id="salary" class="gridjs-td">18
                                                            </td>
                                                            <td data-column-id="experience" class="gridjs-td">11
                                                            </td>
                                                            <td data-column-id="jobType" class="gridjs-td">8
                                                            </td>
                                                        </tr>
                                                        <tr class="gridjs-tr">
                                                            <td data-column-id="position" class="gridjs-td">Devoir 2</td>
                                                            <td data-column-id="companyName" class="gridjs-td">7</td>
                                                            <td data-column-id="location" class="gridjs-td">15
                                                            </td>
                                                            <td data-column-id="salary" class="gridjs-td">18
                                                            </td>
                                                            <td data-column-id="experience" class="gridjs-td">11
                                                            </td>
                                                            <td data-column-id="jobType" class="gridjs-td">8
                                                            </td>
                                                        </tr>
                                                        <tr class="gridjs-tr">
                                                            <td data-column-id="position" class="gridjs-td">Session 2</td>
                                                            <td data-column-id="companyName" class="gridjs-td">7</td>
                                                            <td data-column-id="location" class="gridjs-td">15
                                                            </td>
                                                            <td data-column-id="salary" class="gridjs-td">18
                                                            </td>
                                                            <td data-column-id="experience" class="gridjs-td">11
                                                            </td>
                                                            <td data-column-id="jobType" class="gridjs-td">8
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div id="gridjs-temp" class="gridjs-temp"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-header">
                                    <div class="row g-4 align-items-center">
                                        <div class="col-sm-auto">
                                            <div>
                                                <h5>Semestre 3</h5>
                                            </div>
                                        </div>
                                        <div class="col-sm">
                                            <div class="d-flex justify-content-sm-end">
                                                <div class="search-box ms-2">
                                                    <a href="update-note.html" class="btn btn-danger"
                                                        type="button">Modifier</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div id="recomended-jobs" class="table-card">
                                        <div role="complementary" class="gridjs gridjs-container" style="width: 100%;">
                                            <div class="gridjs-wrapper" style="height: auto;">
                                                <table role="grid" class="gridjs-table" style="height: auto;">
                                                    <thead class="gridjs-thead">
                                                        <tr class="gridjs-tr">
                                                            <th data-column-id="position" class="gridjs-th gridjs-th-sort"
                                                                tabindex="0" style="width: 100px;">
                                                                <div class="gridjs-th-content">Examen</div><button
                                                                    tabindex="-1" aria-label="Sort column ascending"
                                                                    title="Sort column ascending"
                                                                    class="gridjs-sort gridjs-sort-desc"></button>
                                                            </th>
                                                            <th data-column-id="companyName"
                                                                class="gridjs-th gridjs-th-sort" tabindex="0"
                                                                style="width: 90px;">
                                                                <div class="gridjs-th-content">Francais</div><button
                                                                    tabindex="-1" aria-label="Sort column ascending"
                                                                    title="Sort column ascending"
                                                                    class="gridjs-sort gridjs-sort-neutral"></button>
                                                            </th>
                                                            <th data-column-id="companyName"
                                                                class="gridjs-th gridjs-th-sort" tabindex="0"
                                                                style="width: 90px;">
                                                                <div class="gridjs-th-content">Geographie</div><button
                                                                    tabindex="-1" aria-label="Sort column ascending"
                                                                    title="Sort column ascending"
                                                                    class="gridjs-sort gridjs-sort-neutral"></button>
                                                            </th>
                                                            <th data-column-id="companyName"
                                                                class="gridjs-th gridjs-th-sort" tabindex="0"
                                                                style="width: 90px;">
                                                                <div class="gridjs-th-content">Histoire</div><button
                                                                    tabindex="-1" aria-label="Sort column ascending"
                                                                    title="Sort column ascending"
                                                                    class="gridjs-sort gridjs-sort-neutral"></button>
                                                            </th>
                                                            <th data-column-id="companyName"
                                                                class="gridjs-th gridjs-th-sort" tabindex="0"
                                                                style="width: 90px;">
                                                                <div class="gridjs-th-content">Mathematique</div><button
                                                                    tabindex="-1" aria-label="Sort column ascending"
                                                                    title="Sort column ascending"
                                                                    class="gridjs-sort gridjs-sort-neutral"></button>
                                                            </th>
                                                            <th data-column-id="companyName"
                                                                class="gridjs-th gridjs-th-sort" tabindex="0"
                                                                style="width: 90px;">
                                                                <div class="gridjs-th-content">SVT</div><button
                                                                    tabindex="-1" aria-label="Sort column ascending"
                                                                    title="Sort column ascending"
                                                                    class="gridjs-sort gridjs-sort-neutral"></button>
                                                            </th>
                                                        </tr>
                                                    </thead>
                                                    <tbody class="gridjs-tbody">
                                                        <tr class="gridjs-tr">
                                                            <td data-column-id="position" class="gridjs-td">Devoir 1</td>
                                                            <td data-column-id="companyName" class="gridjs-td">7</td>
                                                            <td data-column-id="location" class="gridjs-td">15
                                                            </td>
                                                            <td data-column-id="salary" class="gridjs-td">18
                                                            </td>
                                                            <td data-column-id="experience" class="gridjs-td">11
                                                            </td>
                                                            <td data-column-id="jobType" class="gridjs-td">8
                                                            </td>
                                                        </tr>
                                                        <tr class="gridjs-tr">
                                                            <td data-column-id="position" class="gridjs-td">Session 1</td>
                                                            <td data-column-id="companyName" class="gridjs-td">7</td>
                                                            <td data-column-id="location" class="gridjs-td">15
                                                            </td>
                                                            <td data-column-id="salary" class="gridjs-td">18
                                                            </td>
                                                            <td data-column-id="experience" class="gridjs-td">11
                                                            </td>
                                                            <td data-column-id="jobType" class="gridjs-td">8
                                                            </td>
                                                        </tr>
                                                        <tr class="gridjs-tr">
                                                            <td data-column-id="position" class="gridjs-td">Devoir 2</td>
                                                            <td data-column-id="companyName" class="gridjs-td">7</td>
                                                            <td data-column-id="location" class="gridjs-td">15
                                                            </td>
                                                            <td data-column-id="salary" class="gridjs-td">18
                                                            </td>
                                                            <td data-column-id="experience" class="gridjs-td">11
                                                            </td>
                                                            <td data-column-id="jobType" class="gridjs-td">8
                                                            </td>
                                                        </tr>
                                                        <tr class="gridjs-tr">
                                                            <td data-column-id="position" class="gridjs-td">Session 2</td>
                                                            <td data-column-id="companyName" class="gridjs-td">7</td>
                                                            <td data-column-id="location" class="gridjs-td">15
                                                            </td>
                                                            <td data-column-id="salary" class="gridjs-td">18
                                                            </td>
                                                            <td data-column-id="experience" class="gridjs-td">11
                                                            </td>
                                                            <td data-column-id="jobType" class="gridjs-td">8
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div id="gridjs-temp" class="gridjs-temp"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-header">
                                    <div class="row g-4 align-items-center">
                                        <div class="col-sm-auto">
                                            <div>
                                                <h5>Semestre 4</h5>
                                            </div>
                                        </div>
                                        <div class="col-sm">
                                            <div class="d-flex justify-content-sm-end">
                                                <div class="search-box ms-2">
                                                    <a href="update-note.html" class="btn btn-danger"
                                                        type="button">Modifier</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div id="recomended-jobs" class="table-card">
                                        <div role="complementary" class="gridjs gridjs-container" style="width: 100%;">
                                            <div class="gridjs-wrapper" style="height: auto;">
                                                <table role="grid" class="gridjs-table" style="height: auto;">
                                                    <thead class="gridjs-thead">
                                                        <tr class="gridjs-tr">
                                                            <th data-column-id="position" class="gridjs-th gridjs-th-sort"
                                                                tabindex="0" style="width: 100px;">
                                                                <div class="gridjs-th-content">Examen</div><button
                                                                    tabindex="-1" aria-label="Sort column ascending"
                                                                    title="Sort column ascending"
                                                                    class="gridjs-sort gridjs-sort-desc"></button>
                                                            </th>
                                                            <th data-column-id="companyName"
                                                                class="gridjs-th gridjs-th-sort" tabindex="0"
                                                                style="width: 90px;">
                                                                <div class="gridjs-th-content">Francais</div><button
                                                                    tabindex="-1" aria-label="Sort column ascending"
                                                                    title="Sort column ascending"
                                                                    class="gridjs-sort gridjs-sort-neutral"></button>
                                                            </th>
                                                            <th data-column-id="companyName"
                                                                class="gridjs-th gridjs-th-sort" tabindex="0"
                                                                style="width: 90px;">
                                                                <div class="gridjs-th-content">Geographie</div><button
                                                                    tabindex="-1" aria-label="Sort column ascending"
                                                                    title="Sort column ascending"
                                                                    class="gridjs-sort gridjs-sort-neutral"></button>
                                                            </th>
                                                            <th data-column-id="companyName"
                                                                class="gridjs-th gridjs-th-sort" tabindex="0"
                                                                style="width: 90px;">
                                                                <div class="gridjs-th-content">Histoire</div><button
                                                                    tabindex="-1" aria-label="Sort column ascending"
                                                                    title="Sort column ascending"
                                                                    class="gridjs-sort gridjs-sort-neutral"></button>
                                                            </th>
                                                            <th data-column-id="companyName"
                                                                class="gridjs-th gridjs-th-sort" tabindex="0"
                                                                style="width: 90px;">
                                                                <div class="gridjs-th-content">Mathematique</div><button
                                                                    tabindex="-1" aria-label="Sort column ascending"
                                                                    title="Sort column ascending"
                                                                    class="gridjs-sort gridjs-sort-neutral"></button>
                                                            </th>
                                                            <th data-column-id="companyName"
                                                                class="gridjs-th gridjs-th-sort" tabindex="0"
                                                                style="width: 90px;">
                                                                <div class="gridjs-th-content">SVT</div><button
                                                                    tabindex="-1" aria-label="Sort column ascending"
                                                                    title="Sort column ascending"
                                                                    class="gridjs-sort gridjs-sort-neutral"></button>
                                                            </th>
                                                        </tr>
                                                    </thead>
                                                    <tbody class="gridjs-tbody">
                                                        <tr class="gridjs-tr">
                                                            <td data-column-id="position" class="gridjs-td">Devoir 1</td>
                                                            <td data-column-id="companyName" class="gridjs-td">7</td>
                                                            <td data-column-id="location" class="gridjs-td">15
                                                            </td>
                                                            <td data-column-id="salary" class="gridjs-td">18
                                                            </td>
                                                            <td data-column-id="experience" class="gridjs-td">11
                                                            </td>
                                                            <td data-column-id="jobType" class="gridjs-td">8
                                                            </td>
                                                        </tr>
                                                        <tr class="gridjs-tr">
                                                            <td data-column-id="position" class="gridjs-td">Session 1</td>
                                                            <td data-column-id="companyName" class="gridjs-td">7</td>
                                                            <td data-column-id="location" class="gridjs-td">15
                                                            </td>
                                                            <td data-column-id="salary" class="gridjs-td">18
                                                            </td>
                                                            <td data-column-id="experience" class="gridjs-td">11
                                                            </td>
                                                            <td data-column-id="jobType" class="gridjs-td">8
                                                            </td>
                                                        </tr>
                                                        <tr class="gridjs-tr">
                                                            <td data-column-id="position" class="gridjs-td">Devoir 2</td>
                                                            <td data-column-id="companyName" class="gridjs-td">7</td>
                                                            <td data-column-id="location" class="gridjs-td">15
                                                            </td>
                                                            <td data-column-id="salary" class="gridjs-td">18
                                                            </td>
                                                            <td data-column-id="experience" class="gridjs-td">11
                                                            </td>
                                                            <td data-column-id="jobType" class="gridjs-td">8
                                                            </td>
                                                        </tr>
                                                        <tr class="gridjs-tr">
                                                            <td data-column-id="position" class="gridjs-td">Session 2</td>
                                                            <td data-column-id="companyName" class="gridjs-td">7</td>
                                                            <td data-column-id="location" class="gridjs-td">15
                                                            </td>
                                                            <td data-column-id="salary" class="gridjs-td">18
                                                            </td>
                                                            <td data-column-id="experience" class="gridjs-td">11
                                                            </td>
                                                            <td data-column-id="jobType" class="gridjs-td">8
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div id="gridjs-temp" class="gridjs-temp"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-header">
                                    <div class="row g-4 align-items-center">
                                        <div class="col-sm-auto">
                                            <div>
                                                <h5>Semestre 5</h5>
                                            </div>
                                        </div>
                                        <div class="col-sm">
                                            <div class="d-flex justify-content-sm-end">
                                                <div class="search-box ms-2">
                                                    <a href="update-note.html" class="btn btn-danger"
                                                        type="button">Modifier</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div id="recomended-jobs" class="table-card">
                                        <div role="complementary" class="gridjs gridjs-container" style="width: 100%;">
                                            <div class="gridjs-wrapper" style="height: auto;">
                                                <table role="grid" class="gridjs-table" style="height: auto;">
                                                    <thead class="gridjs-thead">
                                                        <tr class="gridjs-tr">
                                                            <th data-column-id="position" class="gridjs-th gridjs-th-sort"
                                                                tabindex="0" style="width: 100px;">
                                                                <div class="gridjs-th-content">Examen</div><button
                                                                    tabindex="-1" aria-label="Sort column ascending"
                                                                    title="Sort column ascending"
                                                                    class="gridjs-sort gridjs-sort-desc"></button>
                                                            </th>
                                                            <th data-column-id="companyName"
                                                                class="gridjs-th gridjs-th-sort" tabindex="0"
                                                                style="width: 90px;">
                                                                <div class="gridjs-th-content">Francais</div><button
                                                                    tabindex="-1" aria-label="Sort column ascending"
                                                                    title="Sort column ascending"
                                                                    class="gridjs-sort gridjs-sort-neutral"></button>
                                                            </th>
                                                            <th data-column-id="companyName"
                                                                class="gridjs-th gridjs-th-sort" tabindex="0"
                                                                style="width: 90px;">
                                                                <div class="gridjs-th-content">Geographie</div><button
                                                                    tabindex="-1" aria-label="Sort column ascending"
                                                                    title="Sort column ascending"
                                                                    class="gridjs-sort gridjs-sort-neutral"></button>
                                                            </th>
                                                            <th data-column-id="companyName"
                                                                class="gridjs-th gridjs-th-sort" tabindex="0"
                                                                style="width: 90px;">
                                                                <div class="gridjs-th-content">Histoire</div><button
                                                                    tabindex="-1" aria-label="Sort column ascending"
                                                                    title="Sort column ascending"
                                                                    class="gridjs-sort gridjs-sort-neutral"></button>
                                                            </th>
                                                            <th data-column-id="companyName"
                                                                class="gridjs-th gridjs-th-sort" tabindex="0"
                                                                style="width: 90px;">
                                                                <div class="gridjs-th-content">Mathematique</div><button
                                                                    tabindex="-1" aria-label="Sort column ascending"
                                                                    title="Sort column ascending"
                                                                    class="gridjs-sort gridjs-sort-neutral"></button>
                                                            </th>
                                                            <th data-column-id="companyName"
                                                                class="gridjs-th gridjs-th-sort" tabindex="0"
                                                                style="width: 90px;">
                                                                <div class="gridjs-th-content">SVT</div><button
                                                                    tabindex="-1" aria-label="Sort column ascending"
                                                                    title="Sort column ascending"
                                                                    class="gridjs-sort gridjs-sort-neutral"></button>
                                                            </th>
                                                        </tr>
                                                    </thead>
                                                    <tbody class="gridjs-tbody">
                                                        <tr class="gridjs-tr">
                                                            <td data-column-id="position" class="gridjs-td">Devoir 1</td>
                                                            <td data-column-id="companyName" class="gridjs-td">7</td>
                                                            <td data-column-id="location" class="gridjs-td">15
                                                            </td>
                                                            <td data-column-id="salary" class="gridjs-td">18
                                                            </td>
                                                            <td data-column-id="experience" class="gridjs-td">11
                                                            </td>
                                                            <td data-column-id="jobType" class="gridjs-td">8
                                                            </td>
                                                        </tr>
                                                        <tr class="gridjs-tr">
                                                            <td data-column-id="position" class="gridjs-td">Session 1</td>
                                                            <td data-column-id="companyName" class="gridjs-td">7</td>
                                                            <td data-column-id="location" class="gridjs-td">15
                                                            </td>
                                                            <td data-column-id="salary" class="gridjs-td">18
                                                            </td>
                                                            <td data-column-id="experience" class="gridjs-td">11
                                                            </td>
                                                            <td data-column-id="jobType" class="gridjs-td">8
                                                            </td>
                                                        </tr>
                                                        <tr class="gridjs-tr">
                                                            <td data-column-id="position" class="gridjs-td">Devoir 2</td>
                                                            <td data-column-id="companyName" class="gridjs-td">7</td>
                                                            <td data-column-id="location" class="gridjs-td">15
                                                            </td>
                                                            <td data-column-id="salary" class="gridjs-td">18
                                                            </td>
                                                            <td data-column-id="experience" class="gridjs-td">11
                                                            </td>
                                                            <td data-column-id="jobType" class="gridjs-td">8
                                                            </td>
                                                        </tr>
                                                        <tr class="gridjs-tr">
                                                            <td data-column-id="position" class="gridjs-td">Session 2</td>
                                                            <td data-column-id="companyName" class="gridjs-td">7</td>
                                                            <td data-column-id="location" class="gridjs-td">15
                                                            </td>
                                                            <td data-column-id="salary" class="gridjs-td">18
                                                            </td>
                                                            <td data-column-id="experience" class="gridjs-td">11
                                                            </td>
                                                            <td data-column-id="jobType" class="gridjs-td">8
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div id="gridjs-temp" class="gridjs-temp"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-header">
                                    <div class="row g-4 align-items-center">
                                        <div class="col-sm-auto">
                                            <div>
                                                <h5>Semestre 6</h5>
                                            </div>
                                        </div>
                                        <div class="col-sm">
                                            <div class="d-flex justify-content-sm-end">
                                                <div class="search-box ms-2">
                                                    <a href="update-note.html" class="btn btn-danger"
                                                        type="button">Modifier</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="card-body">
                                    <div id="recomended-jobs" class="table-card">
                                        <div role="complementary" class="gridjs gridjs-container" style="width: 100%;">
                                            <div class="gridjs-wrapper" style="height: auto;">
                                                <table role="grid" class="gridjs-table" style="height: auto;">
                                                    <thead class="gridjs-thead">
                                                        <tr class="gridjs-tr">
                                                            <th data-column-id="position" class="gridjs-th gridjs-th-sort"
                                                                tabindex="0" style="width: 100px;">
                                                                <div class="gridjs-th-content">Examen</div><button
                                                                    tabindex="-1" aria-label="Sort column ascending"
                                                                    title="Sort column ascending"
                                                                    class="gridjs-sort gridjs-sort-desc"></button>
                                                            </th>
                                                            <th data-column-id="companyName"
                                                                class="gridjs-th gridjs-th-sort" tabindex="0"
                                                                style="width: 90px;">
                                                                <div class="gridjs-th-content">Francais</div><button
                                                                    tabindex="-1" aria-label="Sort column ascending"
                                                                    title="Sort column ascending"
                                                                    class="gridjs-sort gridjs-sort-neutral"></button>
                                                            </th>
                                                            <th data-column-id="companyName"
                                                                class="gridjs-th gridjs-th-sort" tabindex="0"
                                                                style="width: 90px;">
                                                                <div class="gridjs-th-content">Geographie</div><button
                                                                    tabindex="-1" aria-label="Sort column ascending"
                                                                    title="Sort column ascending"
                                                                    class="gridjs-sort gridjs-sort-neutral"></button>
                                                            </th>
                                                            <th data-column-id="companyName"
                                                                class="gridjs-th gridjs-th-sort" tabindex="0"
                                                                style="width: 90px;">
                                                                <div class="gridjs-th-content">Histoire</div><button
                                                                    tabindex="-1" aria-label="Sort column ascending"
                                                                    title="Sort column ascending"
                                                                    class="gridjs-sort gridjs-sort-neutral"></button>
                                                            </th>
                                                            <th data-column-id="companyName"
                                                                class="gridjs-th gridjs-th-sort" tabindex="0"
                                                                style="width: 90px;">
                                                                <div class="gridjs-th-content">Mathematique</div><button
                                                                    tabindex="-1" aria-label="Sort column ascending"
                                                                    title="Sort column ascending"
                                                                    class="gridjs-sort gridjs-sort-neutral"></button>
                                                            </th>
                                                            <th data-column-id="companyName"
                                                                class="gridjs-th gridjs-th-sort" tabindex="0"
                                                                style="width: 90px;">
                                                                <div class="gridjs-th-content">SVT</div><button
                                                                    tabindex="-1" aria-label="Sort column ascending"
                                                                    title="Sort column ascending"
                                                                    class="gridjs-sort gridjs-sort-neutral"></button>
                                                            </th>
                                                        </tr>
                                                    </thead>
                                                    <tbody class="gridjs-tbody">
                                                        <tr class="gridjs-tr">
                                                            <td data-column-id="position" class="gridjs-td">Devoir 1</td>
                                                            <td data-column-id="companyName" class="gridjs-td">7</td>
                                                            <td data-column-id="location" class="gridjs-td">15
                                                            </td>
                                                            <td data-column-id="salary" class="gridjs-td">18
                                                            </td>
                                                            <td data-column-id="experience" class="gridjs-td">11
                                                            </td>
                                                            <td data-column-id="jobType" class="gridjs-td">8
                                                            </td>
                                                        </tr>
                                                        <tr class="gridjs-tr">
                                                            <td data-column-id="position" class="gridjs-td">Session 1</td>
                                                            <td data-column-id="companyName" class="gridjs-td">7</td>
                                                            <td data-column-id="location" class="gridjs-td">15
                                                            </td>
                                                            <td data-column-id="salary" class="gridjs-td">18
                                                            </td>
                                                            <td data-column-id="experience" class="gridjs-td">11
                                                            </td>
                                                            <td data-column-id="jobType" class="gridjs-td">8
                                                            </td>
                                                        </tr>
                                                        <tr class="gridjs-tr">
                                                            <td data-column-id="position" class="gridjs-td">Devoir 2
                                                            </td>
                                                            <td data-column-id="companyName" class="gridjs-td">7</td>
                                                            <td data-column-id="location" class="gridjs-td">15
                                                            </td>
                                                            <td data-column-id="salary" class="gridjs-td">18
                                                            </td>
                                                            <td data-column-id="experience" class="gridjs-td">11
                                                            </td>
                                                            <td data-column-id="jobType" class="gridjs-td">8
                                                            </td>
                                                        </tr>
                                                        <tr class="gridjs-tr">
                                                            <td data-column-id="position" class="gridjs-td">Session 2
                                                            </td>
                                                            <td data-column-id="companyName" class="gridjs-td">7</td>
                                                            <td data-column-id="location" class="gridjs-td">15
                                                            </td>
                                                            <td data-column-id="salary" class="gridjs-td">18
                                                            </td>
                                                            <td data-column-id="experience" class="gridjs-td">11
                                                            </td>
                                                            <td data-column-id="jobType" class="gridjs-td">8
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>

                                            <div id="gridjs-temp" class="gridjs-temp"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end card-->
                        </div>
                        <!--end tab-pane-->
                        <!--end tab-pane-->
                        <div class="tab-pane fade" id="documents" role="tabpanel">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex align-items-center mb-4">
                                        <h5 class="card-title flex-grow-1 mb-0">Documents</h5>
                                        <div class="flex-shrink-0">
                                            <input class="form-control d-none" type="file" id="formFile">
                                            <label for="formFile" class="btn btn-danger"><i
                                                    class="ri-upload-2-fill me-1 align-bottom"></i> Upload File</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="table-responsive">
                                                <table class="table table-borderless align-middle mb-0">
                                                    <thead class="table-light">
                                                        <tr>
                                                            <th scope="col">File Name</th>
                                                            <th scope="col">Type</th>
                                                            <th scope="col">Size</th>
                                                            <th scope="col">Upload Date</th>
                                                            <th scope="col">Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                <div class="d-flex align-items-center">
                                                                    <div class="avatar-sm">
                                                                        <div
                                                                            class="avatar-title bg-soft-primary text-primary rounded fs-20">
                                                                            <i class="ri-file-zip-fill"></i>
                                                                        </div>
                                                                    </div>
                                                                    <div class="ms-3 flex-grow-1">
                                                                        <h6 class="fs-15 mb-0">
                                                                            <div class="avatar-sm">
                                                                                <img src="/storage/{{ $etudiant->documents }}" alt="Doc" class="img-thumbnail" />
                                                                            </div>
                                                                        </h6>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>Zip File</td>
                                                            <td>4.57 MB</td>
                                                            <td>12 Dec 2021</td>
                                                            <td>
                                                                <div class="dropdown">
                                                                    <a href="javascript:void(0);"
                                                                        class="btn btn-light btn-icon"
                                                                        id="dropdownMenuLink15"
                                                                        data-bs-toggle="dropdown" aria-expanded="true">
                                                                        <i class="ri-equalizer-fill"></i>
                                                                    </a>
                                                                    <ul class="dropdown-menu dropdown-menu-end"
                                                                        aria-labelledby="dropdownMenuLink15">
                                                                        <li><a class="dropdown-item"
                                                                                href="javascript:void(0);"><i
                                                                                    class="ri-eye-fill me-2 align-middle text-muted"></i>View</a>
                                                                        </li>
                                                                        <li><a class="dropdown-item"
                                                                                href="javascript:void(0);"><i
                                                                                    class="ri-download-2-fill me-2 align-middle text-muted"></i>Download</a>
                                                                        </li>
                                                                        <li class="dropdown-divider"></li>
                                                                        <li><a class="dropdown-item"
                                                                                href="javascript:void(0);"><i
                                                                                    class="ri-delete-bin-5-line me-2 align-middle text-muted"></i>Delete</a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="text-center mt-3">
                                                <a href="javascript:void(0);" class="text-success"><i
                                                        class="mdi mdi-loading mdi-spin fs-20 align-middle me-2"></i> Load
                                                    more </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end tab-pane-->
                    </div>
                    <!--end tab-content-->
                </div>
            </div>
            <!--end col-->
        </div>
        <!--end row-->

    </div><!-- container-fluid -->
@endsection
