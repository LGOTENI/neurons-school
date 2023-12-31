@extends('layouts.layout')
@section('title', 'Liste matieres')
@section('content')
    <div class="container-fluid">

        <!-- start page title -->
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0"> Registre des Notes</h4>

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
                    <div class="card-header">
                        <div class="row g-4 align-items-center">
                            <div class="col-sm-auto">
                                <div>
                                    <h4 class="card-title mb-0 flex-grow-1">Vous modifier la liste des notes GI LICENCE I
                                        Semestre I</h4>


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
                    <div class="card-body">
                        <div id="recomended-jobs" class="table-card">
                            <div role="complementary" class="gridjs gridjs-container" style="width: 100%;">
                                <div class="gridjs-wrapper" style="height: auto;">
                                    <table role="grid" class="gridjs-table" style="height: auto;">
                                        <thead class="gridjs-thead">
                                            <tr class="gridjs-tr">
                                                <th data-column-id="position" class="gridjs-th gridjs-th-sort"
                                                    tabindex="0" style="width: 20px;">
                                                    <div class="gridjs-th-content">N°</div><button tabindex="-1"
                                                        aria-label="Sort column ascending" title="Sort column ascending"
                                                        class="gridjs-sort gridjs-sort-desc"></button>
                                                </th>
                                                <th data-column-id="position" class="gridjs-th gridjs-th-sort"
                                                    tabindex="0" style="width: 100px;">
                                                    <div class="gridjs-th-content">Nom & prenom</div><button tabindex="-1"
                                                        aria-label="Sort column ascending" title="Sort column ascending"
                                                        class="gridjs-sort gridjs-sort-desc"></button>
                                                </th>
                                                @foreach ($matieres as $matiere)
                                                    <th data-column-id="companyName" class="gridjs-th gridjs-th-sort"
                                                        tabindex="0" style="width: 90px;">
                                                        <div class="gridjs-th-content">{{ $matiere->nom }}</div><button
                                                            tabindex="-1" aria-label="Sort column ascending"
                                                            title="Sort column ascending"
                                                            class="gridjs-sort gridjs-sort-neutral"></button>
                                                    </th>
                                                @endforeach
                                            </tr>
                                        </thead>
                                        <tbody class="gridjs-tbody">
                                            @foreach ($notes as $note)
                                                <tr class="gridjs-tr">
                                                    <form action="">
                                                        <td data-column-id="position" class="gridjs-td">1</td>
                                                        <td data-column-id="position" class="gridjs-td">{{ $note->etudiant->nom }}</td>
                                                        {{-- @foreach ($notes as $notes) --}}
                                                            <td data-column-id="companyName" class="gridjs-td">
                                                                <input class="form-control" type="number"
                                                                    style="border-color: #ffffff07;" value="{{ $note->valeur }}">
                                                            </td>
                                                        {{-- @endforeach --}}
                                                        <td data-column-id="jobType" class="gridjs-td">
                                                            <button class="btn btn-success btn-sm mt-2 w-100"
                                                                type="submit">Valider</button>
                                                        </td>
                                                    </form>
                                                </tr>
                                                @endforeach

                                        </tbody>
                                    </table>
                                </div>
                                <div class="gridjs-footer">
                                    <div class="gridjs-pagination">
                                        <div role="status" aria-live="polite" class="gridjs-summary" title="Page 2 of 3">
                                            Showing <b>7</b> to <b>12</b> of <b>14</b>
                                            results</div>
                                        <div class="gridjs-pages"><button tabindex="0" role="button" title="Previous"
                                                aria-label="Previous" class="">Previous</button><button tabindex="0"
                                                role="button" class="" title="Page 1"
                                                aria-label="Page 1">1</button><button tabindex="0" role="button"
                                                class="gridjs-currentPage" title="Page 2"
                                                aria-label="Page 2">2</button><button tabindex="0" role="button"
                                                class="" title="Page 3" aria-label="Page 3">3</button><button
                                                tabindex="0" role="button" title="Next" aria-label="Next"
                                                class="">Next</button></div>
                                    </div>
                                </div>
                                <div id="gridjs-temp" class="gridjs-temp"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--end col-->
        </div>
        <!--end row-->
        <!-- end row-->
    </div>
@endsection
