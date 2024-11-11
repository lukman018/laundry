<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
    <div class="container">
        @include('komponen.pesan')
    </div>
        <form id="registerForm" method="POST" action="{{ route('register') }}">
            @csrf
                <div class="container">
                <div class="p-3">
                  <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-lg-12 col-xl-11">
                      <div class="text-black" style="border-radius: 25px;">
                          <div class="row justify-content-center">
                            <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">
                              <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Register</p>
                              <form class="mx-1 mx-md-4">

                                <div class="d-flex flex-row align-items-center mb-2">
                                  <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                                  <div data-mdb-input-init class="form-outline flex-fill mb-0">
                                    <label for="name" class="form-label">Nama</label>
                                    <input name="name" id="name" value="{{old('name')}}" type="text"  class="form-control" required />
                                  </div>
                                </div>

                                <div class="d-flex flex-row align-items-center mb-2">
                                  <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                                  <div data-mdb-input-init class="form-outline flex-fill mb-0">
                                    <label for="email" class="form-label" >Email</label>
                                    <input name="email" type="email" value="{{old('email')}}" id="email" class="form-control" required/>
                                  </div>
                                </div>

                                <div class="d-flex flex-row align-items-center mb-2">
                                    <div class="form-outline flex-fill mb-0">
                                        <label for="role">Role:</label>
                                        <select class="form-control" name="role" id="role" required>
                                            <option value="" disabled selected>Pilih Role</option>
                                            <option value="Admin">Admin</option>
                                            <option value="Petugas">Petugas</option>
                                            <option value="Pimpinan">Pimpinan</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="d-flex flex-row align-items-center mb-2">
                                  <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                                  <div data-mdb-input-init class="form-outline flex-fill mb-0">
                                    <label class="form-label" for="password">Password</label>
                                    <input name="password" id="password" type="password" class="form-control" required/>
                                    </div>
                                </div>

                                <div class="d-flex flex-row align-items-center mb-4">
                                  <i class="fas fa-key fa-lg me-3 fa-fw"></i>
                                  <div class="form-outline flex-fill mb-0">
                                    <label class="form-label" for="password_confirmation">Repeat your password</label>
                                    <input type="password" name="password_confirmation" id="password_confirmation"  class="form-control" required/>
                                    </div>
                                </div>

                                <div class="text-center text-lg-start mt-4 pt-2">
                                    <button  type="submit" class="btn btn-primary form-control form-control-lg">register</button>
                                    <p class="small fw-bold mt-2 pt-1 mb-0"><strong>Apakah Kamu sudah Mempunyai Akun ?
                                        <a href="{{route('login')}}" class="text-danger">Login</a></strong></p>
                                  </div>

                              </form>

                            </div>
                            <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">

                              <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-registration/draw1.webp"
                                class="img-fluid" alt="Sample image">

                            </div>
                          </div>
                      </div>
                    </div>
                  </div>
                </div>
                </div>
        </form>
</body>
</html>
