  <div class="container">
    <div class="row justify-content-center p-5">
      <div class="card o-hidden border-0 shadow-lg my-5 col-lg-7 mx-auto">
        <div class="card-body p-5">
          <!-- Nested Row within Card Body -->
          <div class="row">
            <div class="col-lg">
              <div class="p-5">
                <div class="text-center">
                  <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                </div>
                <form class="user" method="post" action="/auth/registration">
                  <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control form-control-user" id="name" placeholder="Full Name" name="name" value="<?= set_value('name'); ?>">
                    <!-- set value digunakana agar ketika kita salah mengisi form kita tidak perlu mengisi dari awal -->
                    <?= form_error('name', '<small class="text-danger pl-3">', '</small> '); ?>
                    <!-- form error untuk menampilkan pesan error, ktk form kosong -->
                  </div>
                  <div class="form-group">
                    <label for="nim">NIM</label>
                    <input type="text" class="form-control form-control-user" id="nim" name="nim" placeholder="Isi NIM" value="<?= set_value('name'); ?>">
                    <?= form_error('nim', '<small class="text-danger pl-3">', '</small> '); ?>
                  </div>
                  <!-- SELECT / COMBO BOX -->
                  <div class="form-group">
                    <label for="fakultas">Fakultas</label>
                    <select name="fakultas" class="form-control" id="fakultas">
                      <option value="2"> Teknologi Informasi </option>
                      <option value="1">Ekonomi</option>

                    </select>
                  </div>
                  <div class="form-group">
                    <label for="ps">Program Studi</label>
                    <select class="form-control" id="jurusan">
                    </select>
                  </div>
                  <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                      <input type="password" class="form-control form-control-user" id="password1" name="password1" placeholder="Password">
                      <?= form_error('password1', '<small class="text-danger pl-3">', '</small> '); ?>
                    </div>

                    <div class="col-sm-6">
                      <input type="password" class="form-control form-control-user" id="password2" name="password2" placeholder="Repeat Password">
                    </div>
                  </div>
                  <button type="submit" class="btn btn-primary btn-user btn-block">
                    Register Account
                  </button>
                </form>
                <hr>
                <div class="text-center">
                  <a class="small" href="forgot-password.html">Forgot Password?</a>
                </div>
                <div class="text-center">
                  <a class="small" href="/auth/login">Already have an account? Login!</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>