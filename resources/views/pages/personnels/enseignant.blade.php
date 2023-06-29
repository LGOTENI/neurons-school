@extends('layouts.layout')
@section('title', 'Liste enseignants')
@section('content')
    <div class="container-fluid">

        <!-- start page title -->
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0">Enseignant</h4>

            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Anna</a></li>
                    <li class="breadcrumb-item active">Secretaire Generale</li>
                </ol>
            </div>

        </div>
        <!-- end page title -->

        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->

        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header align-items-center d-flex">
                        <div class="flex-shrink-0">
                            <h5>Rechercher</h5>
                        </div>
                    </div><!-- end card header -->
                    <div class="card-body">
                        <form action="" class="row">
                            <select class="form-select col-2 w-25 m-2" aria-label="Default select example">
                                <option selected>Niveau</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                            <select class="form-select col-2 w-25 m-2" aria-label="Default select example">
                                <option selected>Option</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                            <select class="form-select col-2 w-25 m-2" aria-label="Default select example">
                                <option selected>Semestre</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                            <button class="btn btn-primary col-2 m-2" type="submit">rechercher</button>
                        </form>
                    </div>
                </div>
            </div> <!-- end col -->
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title mb-0 flex-grow-1">Total 05</h4>
                    </div><!-- end card header -->

                    <div class="card-body">
                        <div id="table-gridjs">
                            <div role="complementary" class="gridjs gridjs-container" style="width: 100%;">
                                <div class="gridjs-wrapper" style="height: auto;">
                                    <table role="grid" class="gridjs-table" style="height: auto;">
                                        <thead class="gridjs-thead">
                                            <tr class="gridjs-tr">
                                                <th data-column-id="id" class="gridjs-th gridjs-th-sort" tabindex="0"
                                                    style="width: 80px;">
                                                    <div class="gridjs-th-content">ID</div><button tabindex="-1"
                                                        aria-label="Sort column ascending" title="Sort column ascending"
                                                        class="gridjs-sort gridjs-sort-neutral"></button>
                                                </th>
                                                <th data-column-id="name" class="gridjs-th gridjs-th-sort" tabindex="0"
                                                    style="width: 150px;">
                                                    <div class="gridjs-th-content">Nom</div><button tabindex="-1"
                                                        aria-label="Sort column ascending" title="Sort column ascending"
                                                        class="gridjs-sort gridjs-sort-neutral"></button>
                                                </th>
                                                <th data-column-id="email" class="gridjs-th gridjs-th-sort" tabindex="0"
                                                    style="width: 220px;">
                                                    <div class="gridjs-th-content">Email</div><button tabindex="-1"
                                                        aria-label="Sort column ascending" title="Sort column ascending"
                                                        class="gridjs-sort gridjs-sort-neutral"></button>
                                                </th>
                                                <th data-column-id="position" class="gridjs-th gridjs-th-sort"
                                                    tabindex="0" style="width: 250px;">
                                                    <div class="gridjs-th-content">Adresse</div><button tabindex="-1"
                                                        aria-label="Sort column ascending" title="Sort column ascending"
                                                        class="gridjs-sort gridjs-sort-neutral"></button>
                                                </th>
                                                <th data-column-id="company" class="gridjs-th gridjs-th-sort" tabindex="0"
                                                    style="width: 180px;">
                                                    <div class="gridjs-th-content">Telephone</div><button tabindex="-1"
                                                        aria-label="Sort column ascending" title="Sort column ascending"
                                                        class="gridjs-sort gridjs-sort-neutral"></button>
                                                </th>
                                                <th data-column-id="country" class="gridjs-th gridjs-th-sort" tabindex="0"
                                                    style="width: 180px;">
                                                    <div class="gridjs-th-content">Matiere</div><button tabindex="-1"
                                                        aria-label="Sort column ascending" title="Sort column ascending"
                                                        class="gridjs-sort gridjs-sort-neutral"></button>
                                                </th>
                                                <th data-column-id="actions" class="gridjs-th gridjs-th-sort"
                                                    tabindex="0" style="width: 150px;">
                                                    <div class="gridjs-th-content">Actions</div><button tabindex="-1"
                                                        aria-label="Sort column ascending" title="Sort column ascending"
                                                        class="gridjs-sort gridjs-sort-neutral"></button>
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody class="gridjs-tbody">
                                            <tr class="gridjs-tr">
                                                <td data-column-id="id" class="gridjs-td"><span><span
                                                            class="fw-semibold">01</span></span></td>
                                                <td data-column-id="name" class="gridjs-td">Jonathan</td>
                                                <td data-column-id="email" class="gridjs-td"><span><a
                                                            href="">jonathan@example.com</a></span></td>
                                                <td data-column-id="position" class="gridjs-td">Senior
                                                    Implementation Architect</td>
                                                <td data-column-id="company" class="gridjs-td">Hauck Inc
                                                </td>
                                                <td data-column-id="country" class="gridjs-td">Holy See</td>
                                                <td data-column-id="actions" class="gridjs-td"><span><a href="#"
                                                            class="text-reset text-decoration-underline">Details</a></span>
                                                </td>
                                            </tr>
                                            <tr class="gridjs-tr">
                                                <td data-column-id="id" class="gridjs-td"><span><span
                                                            class="fw-semibold">02</span></span></td>
                                                <td data-column-id="name" class="gridjs-td">Harold</td>
                                                <td data-column-id="email" class="gridjs-td"><span><a
                                                            href="">harold@example.com</a></span></td>
                                                <td data-column-id="position" class="gridjs-td">Forward
                                                    Creative Coordinator</td>
                                                <td data-column-id="company" class="gridjs-td">Metz Inc</td>
                                                <td data-column-id="country" class="gridjs-td">Iran</td>
                                                <td data-column-id="actions" class="gridjs-td"><span><a href="#"
                                                            class="text-reset text-decoration-underline">Details</a></span>
                                                </td>
                                            </tr>
                                            <tr class="gridjs-tr">
                                                <td data-column-id="id" class="gridjs-td"><span><span
                                                            class="fw-semibold">03</span></span></td>
                                                <td data-column-id="name" class="gridjs-td">Shannon</td>
                                                <td data-column-id="email" class="gridjs-td"><span><a
                                                            href="">shannon@example.com</a></span></td>
                                                <td data-column-id="position" class="gridjs-td">Legacy
                                                    Functionality Associate</td>
                                                <td data-column-id="company" class="gridjs-td">Zemlak Group
                                                </td>
                                                <td data-column-id="country" class="gridjs-td">South Georgia
                                                </td>
                                                <td data-column-id="actions" class="gridjs-td"><span><a href="#"
                                                            class="text-reset text-decoration-underline">Details</a></span>
                                                </td>
                                            </tr>
                                            <tr class="gridjs-tr">
                                                <td data-column-id="id" class="gridjs-td"><span><span
                                                            class="fw-semibold">04</span></span></td>
                                                <td data-column-id="name" class="gridjs-td">Robert</td>
                                                <td data-column-id="email" class="gridjs-td"><span><a
                                                            href="">robert@example.com</a></span></td>
                                                <td data-column-id="position" class="gridjs-td">Product
                                                    Accounts Technician</td>
                                                <td data-column-id="company" class="gridjs-td">Hoeger</td>
                                                <td data-column-id="country" class="gridjs-td">San Marino
                                                </td>
                                                <td data-column-id="actions" class="gridjs-td"><span><a href="#"
                                                            class="text-reset text-decoration-underline">Details</a></span>
                                                </td>
                                            </tr>
                                            <tr class="gridjs-tr">
                                                <td data-column-id="id" class="gridjs-td"><span><span
                                                            class="fw-semibold">05</span></span></td>
                                                <td data-column-id="name" class="gridjs-td">Noel</td>
                                                <td data-column-id="email" class="gridjs-td"><span><a
                                                            href="">noel@example.com</a></span></td>
                                                <td data-column-id="position" class="gridjs-td">Customer
                                                    Data Director</td>
                                                <td data-column-id="company" class="gridjs-td">Howell -
                                                    Rippin</td>
                                                <td data-column-id="country" class="gridjs-td">Germany</td>
                                                <td data-column-id="actions" class="gridjs-td"><span><a href="#"
                                                            class="text-reset text-decoration-underline">Details</a></span>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="gridjs-footer">
                                    <div class="gridjs-pagination">
                                        <div role="status" aria-live="polite" class="gridjs-summary"
                                            title="Page 1 of 2">Showing <b>1</b> to <b>5</b> of <b>10</b>
                                            results</div>
                                        <div class="gridjs-pages"><button tabindex="0" role="button" disabled=""
                                                title="Previous" aria-label="Previous"
                                                class="">Previous</button><button tabindex="0" role="button"
                                                class="gridjs-currentPage" title="Page 1"
                                                aria-label="Page 1">1</button><button tabindex="0" role="button"
                                                class="" title="Page 2" aria-label="Page 2">2</button><button
                                                tabindex="0" role="button" title="Next" aria-label="Next"
                                                class="">Next</button></div>
                                    </div>
                                </div>
                                <div id="gridjs-temp" class="gridjs-temp"></div>
                            </div>
                        </div>
                    </div><!-- end card-body -->
                </div><!-- end card -->
            </div>
            <!-- end col -->
        </div>
    </div>
@endsection
