    <!-- konten -->
    <section id="detailproduk">
      <div class="container pb-5">
        <div class="row">
          <div class="col-md-3 pt-4">
            <div class="kategori-title">Kategori Produk</div>
            <div class="subkategori" id="subkategori"></div>
          </div>
          <div class="col-md-9 pt-4">
            <div class="row">
              <div class="col-md-6 pe-0">
                <img src="assets/img/baju1.jpg" class="card-img-top" alt="..." />
              </div>
              <div class="col-md-6 ps-0">
                <div class="card">
                  <div class="card-body subkategori p-2">
                    <h4>Sweater 001 - white</h4>
                    <h5 class="harga">Rp. 100,000</h5>
                    <p style="color: black; font-family: Arial, Helvetica, sans-serif; font-size: 14px">
                      Kondisi : Baru <br />
                      Berat : 450Gram <br />
                      Ukuran : Allsize <br />
                      Sweatshirt saat ini merupakan salah satu lini pakaian terbaik dan berkualitas tinggi di antara Local Brand Indonesia. Dengan
                      model loose-fit berlengan panjang tanpa tudung.
                    </p>
                  </div>
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item btndetail">
                      <a
                        href="http://wa.me/6281339364971?text=Saya mau beli Sweater 001- white , Harga Rp. 100,000 "
                        target="_blank"
                        class="text-white"
                        >Beli Yuk</a
                      >
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- footer -->
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