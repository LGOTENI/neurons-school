@extends('layouts.layout')
@section('title', 'Liste matieres')
@section('content')
    <div class="container-fluid">

        <!-- start page title -->
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0">Matieres</h4>

            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Anna</a></li>
                    <li class="breadcrumb-item active">Secretaire Generale</li>
                </ol>
            </div>

        </div>
        @if (session('success'))
            <div class="bg-success p-2 text-white">
                {{ session('success') }}
            </div>
        @endif
        <!-- end page title -->

        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->

        <div class="row">
            <div class="col-lg-4">
                <form action="" method="post">
                    <div class="card">
                        <div class="card-header align-items-center d-flex">
                            <div class="flex-shrink-0">
                                <h5>Ajouter une Matiere</h5>
                            </div>
                        </div><!-- end card header -->
                        <div class="card-body">
                            <form action="">
                                @csrf
                                <label for="basiInput">Nom</label>
                                <input type="text" class="form-control mb-2" id="basiInput" name="nom">

                                <label for="selectInput">Option</label>
                                <select class="form-select mb-2" id="selectInput" name="option">
                                    @foreach ($options as $option)
                                        <option value="{{ $option->id }}">{{ $option->nom }}</option>
                                    @endforeach
                                </select>
                                <label for="basiInput">Description</label>
                                <textarea class="form-control mb-2" id="" cols="30" rows="10" name="description"></textarea>
                                <button class="btn btn-primary mb-2" type="submit">Ajouter</button>
                            </form>
                        </div>
                    </div>
                </form>

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
                                                    <div class="gridjs-th-content">Option</div><button tabindex="-1"
                                                        aria-label="Sort column ascending" title="Sort column ascending"
                                                        class="gridjs-sort gridjs-sort-neutral"></button>
                                                </th>
                                                <th data-column-id="name" class="gridjs-th gridjs-th-sort" tabindex="0"
                                                    style="width: 100px;">
                                                    <div class="gridjs-th-content">Coefficient</div><button tabindex="-1"
                                                        aria-label="Sort column ascending" title="Sort column ascending"
                                                        class="gridjs-sort gridjs-sort-neutral"></button>
                                                </th>
                                                <th data-column-id="position" class="gridjs-th gridjs-th-sort"
                                                    tabindex="0" style="width: 250px;">
                                                    <div class="gridjs-th-content">Description</div><button tabindex="-1"
                                                        aria-label="Sort column ascending" title="Sort column ascending"
                                                        class="gridjs-sort gridjs-sort-neutral"></button>
                                                </th>

                                                <th colspan="2" data-column-id="actions" class="gridjs-th gridjs-th-sort"
                                                    tabindex="0" style="width: 100px;">
                                                    <div class="gridjs-th-content">Actions</div><button tabindex="-1"
                                                        aria-label="Sort column ascending" title="Sort column ascending"
                                                        class="gridjs-sort gridjs-sort-neutral"></button>
                                                </th>
                                            </tr>

                                        </thead>
                                        <tbody class="gridjs-tbody">
                                            @foreach ($matieres as $matiere)
                                                <tr class="gridjs-tr">
                                                    <td data-column-id="name" class="gridjs-td">{{ $matiere->nom }}</td>

                                                    <td data-column-id="text" class="gridjs-td">
                                                        <span>
                                                            <a href="">{{ $matiere->option }}</a>
                                                        </span>
                                                    </td>
                                                    <td data-column-id="name" class="gridjs-td">2</td>
                                                    <td data-column-id="email" class="gridjs-td">
                                                        <span>
                                                            <a href="">{{ $matiere->description }}</a>
                                                        </span>
                                                    </td>
                                                    <td data-column-id="position" class="gridjs-td">
                                                        <a href="#popup3" class=" m-1 btn btn-primary w-100"> <i
                                                                class="mdi mdi-archive-edit"></i></a>
                                                    </td>
                                                    <<td data-column-id="position" class="gridjs-td">

                                                        <a href="#popup2" class=" m-1 btn btn-danger w-100"><i
                                                                class="mdi mdi-delete"></i></a>
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
                                                        <p class="text-muted mx-4 mb-0">Supprimer cette Matiere
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
                                                                <h5>Modifier une Matiere</h5>
                                                            </div>
                                                        </div><!-- end card header -->
                                                        <div class="card-body">
                                                            <form action="">
                                                                <label for="basiInput">Nom</label>
                                                                <input value="Jonathan" type="text"
                                                                    class="form-control mb-2" id="basiInput">
                                                                <label for="selectInput">Option</label>
                                                                <select class="form-select mb-2" id="selectInput">
                                                                    <option value="1">Genie informatique</option>
                                                                    <option value="2">Lanque et Affaire</option>
                                                                    <option value="3">Maintenance Industruelle
                                                                    </option>
                                                                </select>
                                                                <div>
                                                                    <label for="selectInput">Coefficient</label>
                                                                    <select class="form-select mb-2" id="selectInput">
                                                                        <option value="1">1</option>
                                                                        <option value="2" selected>2</option>
                                                                        <option value="3">3</option>
                                                                    </select>
                                                                </div>
                                                                <label for="basiInput">Description</label>
                                                                <textarea class="form-control mb-2" id="" cols="30" rows="10">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Consectetur, odit consequuntur iusto soluta laboriosam, culpa autem enim molestiae voluptatem corrupti aut deleniti! Vel, doloremque molestiae repellendus provident asperiores non deleniti.</textarea>
                                                                <button class="btn btn-success mb-2"
                                                                    type="submit">Modifier</button>
                                                                <a href="#" class="btn btn-danger mb-2"
                                                                    type="submit">Annuler</a>
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
