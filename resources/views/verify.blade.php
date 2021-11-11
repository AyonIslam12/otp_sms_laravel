<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Register</title>
    <style>
        body {
  background: #007bff;
  background: linear-gradient(to right, #0062E6, #33AEFF);
}

.card-img-left {
  width: 45%;
  /* Link to your background image using in the property below! */
  background: scroll center url('https://source.unsplash.com/WEQbe2jBg40/414x512');
  background-size: cover;
}

.btn-login {
  font-size: 0.9rem;
  letter-spacing: 0.05rem;
  padding: 0.75rem 1rem;
}

.btn-google {
  color: white !important;
  background-color: #ea4335;
}

.btn-facebook {
  color: white !important;
  background-color: #3b5998;
}

    </style>
    @toastr_css
  </head>
  <body>

    <div class="container">
        <div class="row">
            <div class="col-lg-10 col-xl-9 mx-auto">
                <div class="card flex-row my-5 border-0 shadow rounded-3 overflow-hidden">

                    <div class="card-body p-4 p-sm-5">
                        <h5 class="card-title text-center mb-5 fw-light fs-5">Verify Account</h5>
                        <form action="{{ route('verify') }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-6 offset-3">
                                    <div class="form-floating mb-3">
                                        <label for="code">Your Code</label>
                                        <input type="text" class="form-control" name="code" id="code" placeholder="enter-code" />
                                        @error('code')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="d-grid mb-2">
                                        <button class="btn btn-lg btn-primary btn-login fw-bold text-uppercase" type="submit">Verify</button>
                                    </div>

                                    <a class="d-block text-left mt-2 small" href="#">resend code</a>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>


  </body>
  @jquery
@toastr_js
@toastr_render
</html>
