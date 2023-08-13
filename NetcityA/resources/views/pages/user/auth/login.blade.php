<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
   <link rel="stylesheet" href="css/bootstrap.css">
    <link rel ="stylesheet" href="csslogin/login.css">
</head>
<body>
    <section class="h-100 gradient-form" style=" background: linear-gradient(to right, #ff966d, #fa538d, #89379c)">
        <div class="container py-5 h-100">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-xl-10">
              <div class="card rounded-3 text-black">
                <div class="row g-0">
                  <div class="col-lg-6">
                    <div class="card-body p-md-5 mx-md-4">

                      <div class="text-center">
                        <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/lotus.webp"
                          style="width: 185px;" alt="logo">
                        <h4 class="mt-1 mb-5 pb-1">We are The Lotus Team</h4>
                      </div>



                      <form action="" method="POST">
                        @csrf
                        <p>Please login to your account</p>

                        @if(session('success')=='Registrasi berhasil!')
                        <div class="alert alert-success"> Registrasi Berhasil!</div>
                        @endif

                        @if($errors->any())
                        <ul>
                        @foreach ( $errors->all() as $items )
                        <li>{{ $items }}</li>
                        @endforeach
                        </ul>
                        @endif

                        <div class="form-outline mb-4">
                          <input type="email" name="email" id="form2Example11" class="form-control"
                            placeholder=" Email address" />

                        </div>
                        @if($errors->has('email'))
                        <span class="text-danger">{{ $errors->first('email') }}</span>
                        @endif

                        <div class="form-outline mb-4">
                          <input type="password" name="password" id="form2Example22" class="form-control" placeholder="Password" />

                        </div>
                        
                        <div class="text-center pt-1 mb-5 pb-1">
                          <button class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3" type="submit">Login</button>
                          <a class="text-muted" href="#!">Forgot password?</a>
                        </div>

                        <div class="d-flex align-items-center justify-content-center pb-4">
                          <p class="mb-0 me-2 ">Don't have an account?</p>
                         <a href="{{ route('register') }}"><button type="button" class="btn btn-outline-danger ms-2 ">Create new</button></a>
                        </div>

                      </form>

                    </div>
                  </div>
                  <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
                    <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                      <h4 class="mb-4">We are more than just a company</h4>
                      <p class="small mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                        exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
</body>
</html>
