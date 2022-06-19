<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Ani's Distro</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="assets/styles.css" />
  </head>
  <body>
    <!-- navbar -->
    <!-- <nav class="navbar navbar-expand-lg navbar-light bgnav">
      <div class="container pe-5 ps-5">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0 fontnav">
          <li class="nav-item">
            <a href="index.html" class="nav-link">HOME</a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">PRODUCT</a>
          </li>
        </ul>

        <div class="collapse navbar-collapse text-white" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0 fontnav">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Daftar Member</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index.html#contactus">Checkout (3)</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#loginModal">Login</a>
            </li>
          </ul>
        </div>
      </div>
    </nav> -->
    <!-- header banner -->
    <!-- <section id="header">
      <div class="container ps-0">
        <img src="assets/img/banner.jpg" class="banner" />
        <div class="judulbanner">
          <span class="subtitle1">Ani Distro</span> <br />
          <span class="subtitle2">Yuk belanjaa...!!!</span>
        </div>
      </div>
    </section> -->
    <!-- konten -->
    <section id="daftarmember">
      <div class="container pb-5">
        <div class="row">
          <div class="col-md-1 pt-4"></div>
          <div class="col-md-10 pt-4">
            <div class="subkategori p-3" id="formdaftar">
              <h5 class="text-center pb-2"><b> DAFTAR MEMBER</b></h5>
              <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-10">
                  <div class="row pb-1">
                    <label for="txtname" class="col-md-3">Nama</label>
                    <div class="col-md-6">
                      <input type="email" name="txtname" id="txtname" class="form-control" />
                    </div>
                  </div>
                  <div class="row pb-1">
                    <label for="txtuser" class="col-md-3">Username</label>
                    <div class="col-md-6">
                      <input type="text" name="txtuser" id="txtuser" class="form-control" />
                    </div>
                  </div>
                  <div class="row pb-1">
                    <label for="txtpass" class="col-md-3">Password</label>
                    <div class="col-md-6">
                      <input type="password" name="txtpass" id="txtpass" class="form-control" />
                    </div>
                  </div>
                  <div class="row pb-1">
                    <label for="txtcpass" class="col-md-3">Confirm Password</label>
                    <div class="col-md-6">
                      <input type="password" name="txtcpass" id="txtcpass" class="form-control" />
                      <div class="alert alert-warning text-danger p-1" role="alert" id="alert" style="display: none; font-size: 12px">
                        password yang anda inputkan tidak sesuai
                      </div>
                    </div>
                  </div>
                  <div class="row pb-1">
                    <label for="txttelp" class="col-md-3">Nomor Telepon</label>
                    <div class="col-md-6">
                      <input type="text" name="txttelp" id="txttelp" class="form-control" />
                    </div>
                  </div>
                  <div class="row pb-1">
                    <div class="col-md-3"></div>
                    <div class="col-md-6">
                      <button type="button" class="btn btn-warning btn-sm form-control" id="btndaftar" disabled>Daftar</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- ketika tampil hasil -->
            <div class="subkategori p-3" id="tampildaftar" style="display: none">
              <h5 class="text-center pb-2"><b> Terima Kasih Telah Melakukan Pendaftaran sebagai Member</b></h5>
              <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-10">
                  <div class="row pb-1">
                    <label for="txtname" class="col-md-3">Nama</label>
                    <div class="col-md-6" id="outnama"></div>
                  </div>
                  <div class="row pb-1">
                    <label for="txtuser" class="col-md-3">Username</label>
                    <div class="col-md-6" id="outuser"></div>
                  </div>
                  <div class="row pb-1">
                    <label for="txttelp" class="col-md-3">Nomor Telepon</label>
                    <div class="col-md-6" id="outtelepon"></div>
                  </div>
                  <div class="row pb-1">
                    <label for="txttelp" class="col-md-3">Kode Member</label>
                    <div class="col-md-6" id="outkode"></div>
                  </div>
                </div>
              </div>
              <h5 class="text-center pb-2 pt-2"><b> Silahkan cek email untuk mendapatkan link aktivasi!!</b></h5>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- footer -->
    <!-- <section id="footer" class="bgnav text-white">
      <div class="container pt-4">
        <div class="row">
          <div class="col-md-4">
            <address class="fw-bold pb-0">Ani's Distro :</address>
            <p class="p-0">Jalan Merdeka No.101 , Manyar Surabaya</p>
            <p>WA : 081-3393-64971</p>
          </div>
          <div class="col-md-4"></div>
          <div class="col-md-4">
            <address class="fw-bold">Follow us :</address>
            <p>
              <span class="pe-3">@anidistro</span>
              <span class="pe-3">@anidistro</span>
            </p>
          </div>
        </div>
      </div>
    </section> -->
    <!-- modal -->
    <div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Form Login</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form class="bg-light p-5">
              <div class="alert alert-danger" role="alert" id="alert" style="display: none"></div>
              <div class="alert alert-success" role="alert" id="alertok" style="display: none"></div>
              <div id="judul" class="mt-3"></div>
              <hr />
              <div class="mb-4">
                <label for="username" class="form-label">Username</label>
                <input type="text" name="logusername" class="form-control" id="logusername" />
              </div>
              <div class="mb-4">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="logpassword" />
              </div>
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" id="btnbatal" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
            <button type="button" id="btnkeluar" class="btn btn-primary" onclick="ceklogin()">Login</button>
          </div>
        </div>
      </div>
    </div>
    <!-- js -->
    <script src="assets/proses.js"></script>
  </body>
</html>
