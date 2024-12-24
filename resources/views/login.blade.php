@yield('container')

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>login page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <div class="img">
        <img src="../img/gambar2.png" width="200px" height="100px">
    </div>
    <div class="card">
        <div class="card-body">
          <h5 class="card-title">Floating labels Form</h5>

          <!-- Floating Labels Form -->
          <form action="login" method="post" class="row g-3">
            @csrf
            <div class="form">
              <div class="form-floating">
                <input type="text" name="username" class="form-control" id="floatingName" placeholder="Your Name">
                <label for="floatingName">Your Name</label>
              </div>
            </div>
            <div class="form">
              <div class="form-floating">
                <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password">
                <label for="floatingPassword">Password</label>
              </div>
            </div>
            <div class="text-center">
              <button type="submit" class="btn btn-primary">Submit</button>
              <button type="reset" class="btn btn-secondary">Reset</button>
            </div>
          </form><!-- End floating Labels Form -->

        </div>
      </div>

    </div>
  </div>
</section>
    {{-- <form action="login" method="post">
        @csrf
        <div class="form">
          <label for="exampleInputEmail1" class="form-label"></label>
          <input type="text" name="username" id="exampleInputEmail1" required placeholder="Username">
        </div>

          <div class="form2">
          <label for="exampleInputPassword1" class="form-label"></label>
          <input type="password" name="password" id="exampleInputPassword1" required placeholder="Password">
        </div>
        <div class="button">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>

      </form> --}}
      <style>
       .img {
        align-items: center;
        text-align: center;
       }
      </style>
       @if (Session::has('status'))
       <script>alert('username atau password anda salah!')</script>

       @endif
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

  </body>
</html>
