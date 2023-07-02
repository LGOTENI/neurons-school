@extends('layouts.layout')
@section('title', 'Liste etudiants')
@section('content')
    <div class="container-fluid">
        <!-- start page title -->
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0">Etudiants</h4>

            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Anna</a></li>
                    <li class="breadcrumb-item active">Secretaire Generale</li>
                </ol>
            </div>

        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    @if (session('success'))
                        <div class="bg-success p-2 text-white">
                            {{ session('success') }}
                        </div>
                    @endif
                    <div class="card-header align-items-center d-flex">
                        <div class="flex-shrink-0">
                            <h5>Rechercher</h5>
                        </div>
                    </div><!-- end card header -->
                    <div class="card-body">
                        <form class="row" method="POST">
                            @csrf
                            <select class="form-select col-2 w-25 m-2" aria-label="Default select example" name="niveau">
                                <option selected>Niveau</option>
                                @foreach ($niveaux as $niveau)
                                    <option value="{{ $niveau->id }}">{{ $niveau->nom }}</option>
                                @endforeach
                            </select>
                            <select class="form-select col-2 w-25 m-2" aria-label="Default select example" name="option">
                                <option selected>Option</option>
                                @foreach ($options as $option)
                                    <option value="{{ $option->id }}">{{ $option->nom }}</option>
                                @endforeach
                            </select>
                            <select class="form-select col-2 w-25 m-2" aria-label="Default select example">
                                <option selected>Annee</option>
                                <option value="-----">2023</option>
                            </select>
                            <button class="btn btn-primary col-2 m-2" type="submit">rechercher</button>
                        </form>
                    </div>
                </div>
            </div> <!-- end col -->
            <div class="row">
                @isset($etudiants)

                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="row g-4 align-items-center">
                                <div class="col-sm-auto">
                                    <div>
                                        <h4 class="card-title mb-0 flex-grow-1">Liste Des Etudiants Genie
                                            Informatique L1 Semestre 1</h4>
                                        <div style="margin: 10px;">
                                            <a href="registre-n.html" class="btn btn-danger " type="button">Notes</a>
                                        </div>

                                    </div>
                                </div>

                                <div class="col-sm">
                                    <div class="d-flex justify-content-sm-end">
                                        <div class="search-box ms-2">
                                            <input type="text" class="form-control" id="searchResultList"
                                                placeholder="Rechercher un etud...">
                                            <i class="ri-search-line search-icon"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body w-100">
                            <div id="recomended-jobs" class="table-card">
                                <div role="complementary" class="gridjs gridjs-container" style="width: 100%;">
                                    <div class="gridjs-wrapper" style="height: auto;">
                                        <table role="grid" class="gridjs-table" style="height: auto;">
                                            <thead class="gridjs-thead">
                                                <tr class="gridjs-tr">
                                                    <th data-column-id="position" class="gridjs-th gridjs-th-sort"
                                                        tabindex="0" style="width: 150px;">
                                                        <div class="gridjs-th-content">Matricule</div>
                                                        <button tabindex="-1" aria-label="Sort column ascending"
                                                            title="Sort column ascending"
                                                            class="gridjs-sort gridjs-sort-desc"></button>
                                                    </th>
                                                    <th data-column-id="companyName" class="gridjs-th gridjs-th-sort"
                                                        tabindex="0" style="width: 250px;">
                                                        <div class="gridjs-th-content">Nom & prenom</div>
                                                        <button tabindex="-1" aria-label="Sort column ascending"
                                                            title="Sort column ascending"
                                                            class="gridjs-sort gridjs-sort-neutral"></button>
                                                    </th>
                                                    <th data-column-id="location" class="gridjs-th gridjs-th-sort"
                                                        tabindex="0" style="width: 250px;">
                                                        <div class="gridjs-th-content">Niveau</div><button tabindex="-1"
                                                            aria-label="Sort column ascending" title="Sort column ascending"
                                                            class="gridjs-sort gridjs-sort-neutral"></button>
                                                    </th>
                                                    <th data-column-id="salary" class="gridjs-th gridjs-th-sort"
                                                        tabindex="0" style="width: 250px;">
                                                        <div class="gridjs-th-content">Options</div><button tabindex="-1"
                                                            aria-label="Sort column ascending" title="Sort column ascending"
                                                            class="gridjs-sort gridjs-sort-neutral"></button>
                                                    </th>
                                                    <th data-column-id="experience" class="gridjs-th gridjs-th-sort"
                                                        tabindex="0" style="width: 150px;">
                                                        <div class="gridjs-th-content">Telephone</div>
                                                        <button tabindex="-1" aria-label="Sort column ascending"
                                                            title="Sort column ascending"
                                                            class="gridjs-sort gridjs-sort-neutral"></button>
                                                    </th>
                                                    <th data-column-id="jobType" class="gridjs-th gridjs-th-sort"
                                                        tabindex="0" style="width: 150px;">
                                                        <div class="gridjs-th-content">Details</div><button tabindex="-1"
                                                            aria-label="Sort column ascending"
                                                            title="Sort column ascending"
                                                            class="gridjs-sort gridjs-sort-neutral"></button>
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody class="gridjs-tbody">
                                                @isset($etudiants)
                                                    {{-- @else --}}
                                                    @foreach ($etudiants as $etudiant)
                                                        <tr class="gridjs-tr">
                                                            <td data-column-id="position" class="gridjs-td">
                                                                {{ $etudiant->matricule }}
                                                            </td>
                                                            <td data-column-id="companyName" class="gridjs-td">
                                                                {{ $etudiant->nom }}</td>
                                                            <td data-column-id="location" class="gridjs-td">
                                                                {{ $etudiant->niveau->nom }}
                                                            </td>
                                                            <td data-column-id="salary" class="gridjs-td">
                                                                {{ $etudiant->option->nom }}
                                                            </td>
                                                            <td data-column-id="experience" class="gridjs-td">
                                                                {{ $etudiant->telephone }}
                                                            <td data-column-id="jobType" class="gridjs-td">
                                                                <a
                                                                    href="{{ route('etudiant.show', ['id' => $etudiant->id]) }}">
                                                                    <button class="btn btn-primary w-100">
                                                                        Plus...
                                                                    </button>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                @endisset
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="gridjs-footer">
                                        <div class="gridjs-pagination">
                                            <div role="status" aria-live="polite" class="gridjs-summary"
                                                title="Page 2 of 3">Showing <b>7</b> to <b>12</b> of
                                                <b>14</b>
                                                results
                                            </div>
                                            <div class="gridjs-pages"><button tabindex="0" role="button"
                                                    title="Previous" aria-label="Previous"
                                                    class="">Previous</button><button tabindex="0" role="button"
                                                    class="" title="Page 1" aria-label="Page 1">1</button><button
                                                    tabindex="0" role="button" class="gridjs-currentPage"
                                                    title="Page 2" aria-label="Page 2">2</button><button tabindex="0"
                                                    role="button" class="" title="Page 3"
                                                    aria-label="Page 3">3</button><button tabindex="0" role="button"
                                                    title="Next" aria-label="Next" class="">Next</button></div>
                                        </div>
                                    </div>
                                    <div id="gridjs-temp" class="gridjs-temp"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endisset

                <!--end col-->
            </div>
            <!--end row-->
            <!-- end row-->
        </div>
        <!-- container-fluid -->
    </div>
@endsection
