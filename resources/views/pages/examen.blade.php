@extends('layouts.layout')
@section('title', 'Liste matieres')
@section('content')
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
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
        @if (session('success'))
            <div class="bg-success p-2 text-white">
                {{ session('success') }}
            </div>
        @endif

        <div class="row">

            <div class="col-lg-4">
                <div class="card">
                    <div class="card-header align-items-center d-flex">
                        <div class="flex-shrink-0">
                            <h5>Ajouter un Examem</h5>
                        </div>
                    </div><!-- end card header -->
                    <div class="card-body">
                        <form method="post">
                            @csrf
                            <div>
                                <label for="basiInput">Type examen</label>
                                <select class="form-select mb-2" id="basiInput" name="nom">
                                    <option value="session">Session
                                    </option>
                                    <option value="devoir">Devoir
                                    </option>
                                </select>
                            </div>
                            <div>
                                <label for="selectInput">Semestre</label>
                                <select class="form-select mb-2" id="selectInput" name="semestre">
                                    <option value="1">Semestre 1
                                    </option>
                                    <option value="2">Semestre 2
                                    </option>
                                    <option value="3">Semestre 3
                                    </option>
                                </select>
                            </div>
                            <div>
                                <label for="annee">Date de l'examen</label>
                                <input type="date" name="annee" id="annee" class="form-control">
                            </div>
                            <div>
                                <label for="selectInput">Filiere</label>
                                <select class="form-select mb-2" id="selectInput" name="option">
                                    @foreach ($options as $option)
                                        <option value="{{ $option->id }}"> {{ $option->nom }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div>
                                <label for="selectInput">Matiere</label>
                                <select class="form-select mb-2" id="selectInput" name="matiere">
                                    @foreach ($matieres as $matiere)
                                        <option value="{{ $matiere->id }}">{{ $matiere->nom }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div>
                                <label for="basiInput">Description</label>
                                <textarea class="form-control mb-2" id="" cols="30" rows="10" name="description"></textarea>
                            </div>
                            <button class="btn btn-primary mb-2 " type="submit">Ajouter</button>
                        </form>
                    </div>
                </div>
            </div> <!-- end col -->


            <div class="col-lg-8">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title mb-0 flex-grow-1">...</h4>
                        <div class="search-box w-25">
                            <input type="text" class="form-control bg-light border-light" placeholder="Rechercher...">
                            <i class="ri-search-2-line search-icon"></i>
                        </div>
                    </div><!-- end card header -->

                    <div class="card-body">
                        <div id="table-gridjs">
                            <div role="complementary" class="gridjs gridjs-container" style="width: 100%;">
                                <div class="gridjs-wrapper" style="height: auto;">
                                    <table role="grid" class="gridjs-table" style="height: auto;">
                                        <thead class="gridjs-thead">
                                            <tr class="gridjs-tr">
                                                <th data-column-id="name" class="gridjs-th gridjs-th-sort" tabindex="0"
                                                    style="width: 150px;">
                                                    <div class="gridjs-th-content">Nom</div><button tabindex="-1"
                                                        aria-label="Sort column ascending" title="Sort column ascending"
                                                        class="gridjs-sort gridjs-sort-neutral"></button>
                                                </th>
                                                <th data-column-id="name" class="gridjs-th gridjs-th-sort" tabindex="0"
                                                    style="width: 150px;">
                                                    <div class="gridjs-th-content">Semestre</div><button tabindex="-1"
                                                        aria-label="Sort column ascending" title="Sort column ascending"
                                                        class="gridjs-sort gridjs-sort-neutral"></button>
                                                </th>
                                                <th data-column-id="position" class="gridjs-th gridjs-th-sort"
                                                    tabindex="0" style="width: 250px;">
                                                    <div class="gridjs-th-content">Description</div><button tabindex="-1"
                                                        aria-label="Sort column ascending" title="Sort column ascending"
                                                        class="gridjs-sort gridjs-sort-neutral"></button>
                                                </th>
                                                <th data-column-id="position" class="gridjs-th gridjs-th-sort"
                                                    tabindex="0" style="width: 250px;">
                                                    <div class="gridjs-th-content">Date de l'examen</div><button tabindex="-1"
                                                        aria-label="Sort column ascending" title="Sort column ascending"
                                                        class="gridjs-sort gridjs-sort-neutral"></button>
                                                </th>

                                                <th data-column-id="actions" class="gridjs-th gridjs-th-sort"
                                                    tabindex="0" style="width: 100px;">
                                                    <div class="gridjs-th-content">Actions</div><button tabindex="-1"
                                                        aria-label="Sort column ascending" title="Sort column ascending"
                                                        class="gridjs-sort gridjs-sort-neutral"></button>
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody class="gridjs-tbody">
                                            @foreach ($examens as $examen)
                                                <tr class="gridjs-tr">
                                                    <td data-column-id="name" class="gridjs-td">{{ $examen->nom }}</td>
                                                    <td data-column-id="text" class="gridjs-td"><span><a
                                                                href="">{{ $examen->semestre }}</a></span></td>
                                                    <td data-column-id="email" class="gridjs-td"><span><a
                                                                href="">{{ $examen->description }}</a></span>
                                                    </td>
                                                    <td data-column-id="email" class="gridjs-td"><span><a
                                                        href="">{{ $examen->annee }}</a></span>
                                            </td>
                                                    <td data-column-id="position" class="gridjs-td">
                                                        <a href="#popup3" class=" m-1 btn btn-primary w-100"> <i
                                                                class="mdi mdi-archive-edit"></i></a>
                                                    </td>
                                                </tr>
                                            @endforeach

                                        </tbody>
                                    </table>
                                    <!--
                                                        debut popup
                                                    -->
                                    <div id="popup2" class="overlay">
                                        <div class="card popup">
                                            <h4 class="text-center"> <i class="fa fa-exclamation-triangle"
                                                    aria-hidden="true"></i> <br>
                                                Attention
                                            </h4>
                                            <a class="close" href="#">&times;</a>
                                            <div class="content">

                                                <div class="mt-2 text-center">
                                                    <lord-icon src="https://cdn.lordicon.com/gsqxdxog.json" trigger="loop"
                                                        colors="primary:#f7b84b,secondary:#f06548"
                                                        style="width:100px;height:100px"></lord-icon>
                                                    <div class="mt-4 pt-2 fs-15 mx-4 mx-sm-5">
                                                        <h4>Etes vous sure ?</h4>
                                                        <p class="text-muted mx-4 mb-0">Supprimer cette
                                                            Matiere
                                                            est irrecersible voulez vous vraiment continuer
                                                            ?</p>
                                                    </div>
                                                </div>
                                                <div class="d-flex gap-2 justify-content-center mt-4 mb-2">
                                                    <a href="#" type="button" class="btn w-sm btn-light">Close</a>
                                                    <button type="submit" class="btn w-sm btn-danger"
                                                        id="delete-notification">Yes, Delete
                                                        It!</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div id="popup3" class="overlay">
                                        <div class="card popup">
                                            <a class="close" href="#">&times;X</a>
                                            <div class="content">
                                                <div class="col-lg-12">
                                                    <div class="card">
                                                        <div class="card-header align-items-center d-flex">
                                                            <div class="flex-shrink-0">
                                                                <h5>Modifier Examen</h5>
                                                            </div>
                                                        </div><!-- end card header -->
                                                        <div class="card-body">
                                                            <form action="">
                                                                <label for="basiInput">Nom</label>
                                                                <input value="Session" type="text"
                                                                    class="form-control mb-2" id="basiInput"
                                                                    name="nom">
                                                                <div>
                                                                    <label for="selectInput">Semestre</label>
                                                                    <select class="form-select mb-2" id="selectInput"
                                                                        name="semestre">
                                                                        <option value="1">Semestre 1
                                                                        </option>
                                                                        <option value="2">Semestre 2
                                                                        </option>
                                                                        <option value="3">Semestre 3
                                                                        </option>
                                                                    </select>
                                                                </div>
                                                                <div>
                                                                    <label for="selectInput">Filiere</label>
                                                                    <select class="form-select mb-2" id="selectInput"
                                                                        name="semestre">
                                                                        <option value="1"> Matiere
                                                                        </option>
                                                                    </select>
                                                                </div>
                                                                <div>
                                                                    <label for="selectInput">Matiere</label>
                                                                    <select class="form-select mb-2" id="selectInput"
                                                                        name="semestre">
                                                                        <option value="1">Semestre 1
                                                                        </option>
                                                                    </select>
                                                                </div>
                                                                <label for="basiInput">Description</label>
                                                                <textarea class="form-control mb-2" id="" cols="30" rows="10" name="description">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Consectetur, odit consequuntur iusto soluta laboriosam, culpa autem enim molestiae voluptatem corrupti aut deleniti! Vel, doloremque molestiae repellendus provident asperiores non deleniti.</textarea>
                                                                <button class="btn btn-success mb-2"
                                                                    type="submit">Modifier</button>
                                                                <a href="#" class="btn btn-danger mb-2"
                                                                    type="submit">Annuler</a>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--
                                                        Fin popup
                                                    -->
                                </div>


                                <div class="gridjs-footer">
                                    <div class="gridjs-pagination">
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
