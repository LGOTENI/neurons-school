@extends('layouts.layout')
@section('title', 'Liste matieres')
@section('content')
    <div class="container-fluid">

        <!-- start page title -->
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0">Inscription</h4>

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

        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6 col-xl-5">
                <div class="card mt-4">
                    <form method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body p-4">
                            <div class="card mt-n5">
                                <div class="card-body p-4">
                                    <div class="text-center">
                                        <div class="text-center mt-2">
                                            <h5 class="text-primary">Ajouter un Etudiant</h5>
                                        </div>
                                        <div class="profile-user position-relative d-inline-block mx-auto  mb-4">
                                            <img id="image-preview"
                                                src="{{ asset('assets/images/users/user-dummy-img.jpg') }}"
                                                class="rounded-circle avatar-xl img-thumbnail user-profile-image"
                                                alt="user-profile-image">
                                            <div class="avatar-xs p-0 rounded-circle profile-photo-edit">
                                                <input id="profile-img-file-input" type="file"
                                                    class="profile-img-file-input" name="photo">
                                                <label for="profile-img-file-input" class="profile-photo-edit avatar-xs">
                                                    <span class="avatar-title rounded-circle bg-light text-body">
                                                        <i class="ri-camera-fill"></i>
                                                    </span>
                                                </label>
                                            </div>
                                        </div>
                                        <h5 class="fs-16 mb-1">Photo D'Identite</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="p-2 mt-4">
                                <form class="needs-validation" novalidate="" action="index.html">
                                    <div class="mb-3">
                                        <label for="nom" class="form-label">Nom Complet <span
                                                class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="nom" placeholder="Nom complet"
                                            name="nom" required="">
                                        <div class="invalid-feedback">
                                            Please your full name
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="useremail" class="form-label">Email <span
                                                class="text-danger">*</span></label>
                                        <input type="email" class="form-control" id="useremail"
                                            placeholder="Enter email address" required="" name="email">
                                        <div class="invalid-feedback">
                                            Please enter email
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="userphone" class="form-label">Telephone <span
                                                class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="userphone" placeholder="Enter phone"
                                            required="" name="telephone">
                                        <div class="invalid-feedback">
                                            Please enter phone
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="userphone" class="form-label">Adresse <span
                                                class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="userphone" placeholder="Enter Adress"
                                            required="" name="adresse">
                                        <div class="invalid-feedback">
                                            Please enter Adress
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="nationalite" class="form-label">Nationalite <span
                                                class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="nationalite"
                                            placeholder="Enter your nationality" required="" name="nationalite">
                                        <div class="invalid-feedback">
                                            Please enter nationality
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="userphone" class="form-label">Date de Naissance <span
                                                class="text-danger">*</span></label>
                                        <input type="date" class="form-control" id="userphone" placeholder="Enter phone"
                                            required="" name="date_naissance">
                                        <div class="invalid-feedback">
                                            Please enter date
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="userphone" class="form-label">Lieu de naissance <span
                                                class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="userphone"
                                            placeholder="Lieu de naissance" required="" name="lieu_naissance">
                                        <div class="invalid-feedback">
                                            Please enter phone
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="userphone" class="form-label">Niveau <span
                                                class="text-danger">*</span></label>
                                        <select class="form-select" aria-label="Default select example" name="niveau">
                                            @foreach ($niveaux as $niveau)
                                                <option value="{{ $niveau->id }}">{{ $niveau->nom }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="mb-3">
                                        <label for="userphone" class="form-label">Filiere <span
                                                class="text-danger">*</span></label>
                                        <select class="form-select" aria-label="Default select example" name="option">
                                            @foreach ($options as $option)
                                                <option value="{{ $option->id }}">{{ $option->nom }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="mb-3">

                                        <div>
                                            <label for="formFileMultiple" class="form-label">Documents</label>
                                            <input class="form-control" type="file" id="formFileMultiple" multiple
                                                name="documents">
                                        </div>

                                        <div class="invalid-feedback">
                                            Please enter document
                                        </div>
                                    </div>
                                    <div class="mt-4">
                                        <button class="btn btn-success w-100" type="submit">Inscrire</button>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </form>
                    <!-- end card body -->
                </div>

            </div>
        </div>

        <!-- End Page-content -->

        <footer class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6">
                        <script>
                            document.write(new Date().getFullYear())
                        </script> © Neurons
                    </div>
                    <div class="col-sm-6">
                        <div class="text-sm-end d-none d-sm-block">
                            Design by Christ Ngakosso &
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
@endsection
