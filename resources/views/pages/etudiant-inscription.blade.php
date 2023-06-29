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

                    <div class="card-body p-4">
                        <div class="card mt-n5">
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <div class="text-center mt-2">
                                        <h5 class="text-primary">Ajouter un Etudiant</h5>
                                    </div>
                                    <div class="profile-user position-relative d-inline-block mx-auto  mb-4">
                                        <img id="image-preview" src="assets/images/users/user-dummy-img.jpg"
                                            class="rounded-circle avatar-xl img-thumbnail user-profile-image"
                                            alt="user-profile-image">
                                        <div class="avatar-xs p-0 rounded-circle profile-photo-edit">
                                            <input id="profile-img-file-input" type="file"
                                                class="profile-img-file-input">
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
                                    <label for="username" class="form-label">Nom Complet <span
                                            class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="username" placeholder="Nom complet"
                                        required="">
                                    <div class="invalid-feedback">
                                        Please your full name
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="useremail" class="form-label">Email <span
                                            class="text-danger">*</span></label>
                                    <input type="email" class="form-control" id="useremail"
                                        placeholder="Enter email address" required="">
                                    <div class="invalid-feedback">
                                        Please enter email
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="userphone" class="form-label">Telephone <span
                                            class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="userphone" placeholder="Enter phone"
                                        required="">
                                    <div class="invalid-feedback">
                                        Please enter phone
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="userphone" class="form-label">Adresse <span
                                            class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="userphone" placeholder="Enter Adress"
                                        required="">
                                    <div class="invalid-feedback">
                                        Please enter Adress
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="userphone" class="form-label">Date de Naissance <span
                                            class="text-danger">*</span></label>
                                    <input type="date" class="form-control" id="userphone" placeholder="Enter phone"
                                        required="">
                                    <div class="invalid-feedback">
                                        Please enter date
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="userphone" class="form-label">Lieu de naissance <span
                                            class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="userphone"
                                        placeholder="Lieu de naissance" required="">
                                    <div class="invalid-feedback">
                                        Please enter phone
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="userphone" class="form-label">Niveau <span
                                            class="text-danger">*</span></label>
                                    <select class="form-select" aria-label="Default select example">
                                        <option selected>Niveau de licence</option>
                                        <option value="1">Licence 1</option>
                                        <option value="2">Licence 2</option>
                                        <option value="3">Licence 3</option>
                                    </select>
                                </div>

                                <div class="mb-3">
                                    <label for="userphone" class="form-label">Filiere <span
                                            class="text-danger">*</span></label>
                                    <select class="form-select" aria-label="Default select example">
                                        <option selected>Selectionner une filiere</option>
                                        <option value="1">Informatique</option>
                                        <option value="2">Mathematique</option>
                                        <option value="3">Physique</option>
                                        <option value="4">Chimie</option>
                                        <option value="5">Biologie</option>
                                        <option value="6">Geologie</option>
                                    </select>


                                </div>
                                <div class="mb-3">

                                    <div>
                                        <label for="formFileMultiple" class="form-label">Documents</label>
                                        <input class="form-control" type="file" id="formFileMultiple" multiple>
                                    </div>

                                    <div class="invalid-feedback">
                                        Please enter document
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label for="userphone" class="form-label">Mot de Passa generer <span
                                            class="text-danger">*</span></label>
                                    <div class="input-group">
                                        <input id="psw-gen" type="text" class="form-control" placeholder="psw-gen"
                                            value="">
                                        <buttton class="input-group-text btn btn-success" onclick="pass(event)">Valider
                                        </buttton>
                                    </div>
                                    <div class="invalid-feedback">
                                        Please enter phone
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label" for="password-input">Password</label>
                                    <div class="position-relative auth-pass-inputgroup">
                                        <input type="password" class="form-control pe-5 password-input"
                                            onpaste="return false" placeholder="Enter password" id="password-input"
                                            aria-describedby="passwordInput" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
                                            required="">
                                        <button
                                            class="btn btn-link position-absolute end-0 top-0 text-decoration-none text-muted password-addon"
                                            type="button" id="password-addon"><i
                                                class="ri-eye-fill align-middle"></i></button>
                                        <div class="invalid-feedback">
                                            Please enter password
                                        </div>
                                    </div>
                                </div>

                                <div id="password-contain" class="p-3 bg-light mb-2 rounded">
                                    <h5 class="fs-13">Password must contain:</h5>
                                    <p id="pass-length" class="invalid fs-12 mb-2">Minimum <b>8
                                            characters</b></p>
                                    <p id="pass-lower" class="invalid fs-12 mb-2">At <b>lowercase</b> letter
                                        (a-z)</p>
                                    <p id="pass-upper" class="invalid fs-12 mb-2">At least <b>uppercase</b>
                                        letter (A-Z)</p>
                                    <p id="pass-number" class="invalid fs-12 mb-0">A least <b>number</b>
                                        (0-9)</p>
                                </div>

                                <div class="mt-4">
                                    <button class="btn btn-success w-100" type="submit">Inscrire</button>
                                </div>
                            </form>

                        </div>
                    </div>
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
