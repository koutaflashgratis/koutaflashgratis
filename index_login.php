<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-center" id="staticBackdropLabel"></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="container mt-1">
          <div class="row mb-5">
                <div class="col-md-12 text-center">
                  <img src="images/fb.png" alt="" width="120px" height="40px">
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <div class="login-box">
                        <form action="index_login_proses.php" method="POST">
                            <div class="mb-3">
                                <input type="text" class="form-control" id="username" name="username" placeholder="Email or Phone" required="" aria-required="true">
                            </div>
                            <div class="mb-3">
                                <input type="password" class="form-control" id="password" name="password" placeholder="Password" required="" aria-required="true">
                            </div>
                            <button type="submit" class="btn btn-primary custom-button">Masuk</button>
                        </form>
                        <p class="text-primary text-center margin">Lupa kata sandi ?</p>
                        <div class="row margin">
                            <div class="col-5 col-md-4"><hr></div>
                            <div class="col-1 col-md-3 margin_kanan">atau</div>
                            <div class="col-5 col-md-4"><hr></div>
                        </div>
                        <button type="button" class="btn btn-outline-dark custom-button margin">Buat akun baru</button>
                    </div>
                </div>
            </div>
        </div>
      </div>
      <div class="modal-footer">
      </div>
    </div>
  </div>
</div>