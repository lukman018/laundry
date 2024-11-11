<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <title>Document</title>
    <style>
        .divider:after,
        .divider:before {
        content: "";
        flex: 1;
        height: 1px;
        background: #eee;
        }
        .h-custom {
        height: calc(100% - 73px);
        }
        @media (max-width: 450px) {
        .h-custom {
        height: 100%;
        }
    }

    </style>
</head>
<body>
    <section class="vh-100">
        <div class="container-fluid h-custom">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-md-9 col-lg-6 col-xl-5">
              <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.webp"
                class="img-fluid" alt="Sample image">
            </div>
            <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $item )
                                <li>{{$item}}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
              <form action="{{route('login.post')}}" method="POST">
                @csrf
                <div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start">
                  <p class="lead fw-normal mb-0 me-3">Login</p>
                </div>

                <div class="divider d-flex align-items-center my-4">
                </div>

                <!-- Email input -->
                <div data-mdb-input-init class="form-outline mb-4">
                    <label class="form-label" for="email">Email address</label>
                  <input type="email" name="email" value="{{old('email')}}" id="email" class="form-control form-control-lg" placeholder="Masukan Email" />
                </div>

                <!-- Password input -->
                <div data-mdb-input-init class="form-outline mb-3">
                    <label class="form-label" for="password ">Password</label>
                  <input type="password" name="password" id="password" class="form-control form-control-lg" placeholder="Masukan Password" required>
                </div>

                <!-- login -->
                <div class="text-center text-lg-start mt-4 ">
                  <button  type="submit" class="btn btn-primary form-control form-control-lg">Login</button>

                <!-- register -->
                  <p class="small fw-bold mt-2 pt-1 mb-0">Apakah Kamu Tidak Mempunyai Akun ? <a href="{{route('register')}}"
                      class="link-danger">Register</a></p>
                </div>

              </form>
            </div>
          </div>
        </div>
      </section>
</body>
</html>
