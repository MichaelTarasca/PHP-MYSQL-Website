<!-- header -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark p-4 fs-3">
  <div class="container-fluid">
      <a class="navbar-brand" href="/database/index.php">
          <i class="bi bi-film" style="font-size: 4rem; color:rgb(255, 255, 255); padding: 0.8em"></i>
        <h4>Dad Database</h4>
      </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" href="movie.php">Movies</a> <!--  -->
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="#">Shows</a> <!--  -->
        </li>
        </ul>
    </div>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item">
      <button type="button" class="btn btn-dark fs-2" data-bs-toggle="modal" data-bs-target="#modalLogin">
        Login
      </button>
      <div class="modal fade" id="modalLogin" tabindex="-1" aria-labelledby="modelLogin" aria-hidden="true">
  <div class="modal-dialog bg-dark">
    <div class="modal-content">
      <div class="modal-header bg-dark">
        <h4 class="modal-title text-white fs-2" id="modalLogin">
         <div class="text-white max-width-100">
          <i class="bi bi-film" style="font-size: 2rem; color:rgb(255, 255, 255); padding: 0.8em"></i>
        <h6 class="text-white">Dad Database</h6>
        </div>
        Please Sign in
        </h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body bg-dark mt-2em mb-2em">
        <form action="" class="row gy-2 gx-3 align-items-center">
          <input type="email" class="mb-3" id="emailAddress" class="form-control" placeholder="Email Address" required autofocus>
          <input type="password" class="mb-3" id="password" class="form-control" placeholder="Password" required autofocus>
          <div class="checkbox mt-3 text-white btn-group-lg">
            <input type="checkbox" class="form-check-input mb-3" id="rememberMe" value="rememberMe"> Remember Me
          </div>
          <div class="d-grid">
            <button type="submit" class="btn btn-primary btn-lg btn-primary btn-block">Login</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
        </li>
        <li class="nav-item">
         <button type="button" class="btn btn-dark fs-2" data-bs-toggle="modal" data-bs-target="#modalRegister">
        Register
      </button>
      <div class="modal fade" id="modalRegister" tabindex="-1" aria-labelledby="modalRegister" aria-hidden="true">
  <div class="modal-dialog bg-dark">
    <div class="modal-content">
      <div class="modal-header bg-dark">
        <h4 class="modal-title text-white fs-2" id="modalRegister">
         <div class="text-white max-width-100">
          <i class="bi bi-film" style="font-size: 2rem; color:rgb(255, 255, 255); padding: 0.8em"></i>
        <h6 class="text-white">Dad Database</h6>
        </div>
        Please Fill in</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body bg-dark mt-2em mb-2em">
        <form action="" class="row gy-2 gx-3 align-items-center">
          <input type="text" class="mb-3" id="fName" class="form-control" placeholder="First Name" required autofocus>
          <input type="text" class="mb-3" id="lName" class="form-control" placeholder="Last Name" required autofocus>
          <input type="password" class="mb-3" id="password" class="form-control" placeholder="Password" required autofocus>
          <input type="password" class="mb-3" id="password" class="form-control" placeholder="Confirm Password" required autofocus>
          <div class="d-grid">
            <button type="submit" class="btn btn-primary btn-lg btn-primary btn-block">Create Account</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
        </li>
        </ul>
    </div>
  </div>
</nav> 