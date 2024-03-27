<?php include "header.php"; ?>
    <!-- card -->
    <section id="main" class="mb-5">
        <div class="container">
            <div class="row text-center my-5">
                <div class="col">
                    <h2>Selamat Datang di Website Kami</h2>
                </div>
            </div>
            <div class="row justify-content-evenly">
                <div class="col-3" style="width: 18rem">
                    <div class="card shadow">
                        <img src="../image/aryawallpaper.jpg" class="img-fluid rounded-2" alt="Yasir"/>
                        <div class="card-body text-center">
                            <h5 class="card-title">Nama</h5>
                            <p class="card-text">Lorem Ipsum</p>
                            <a href="arya.php" class="btn btn-info">Lihat Selengkapnya</a>
                        </div>
                    </div>
                </div>
                <div class="col-3" style="width: 18rem">
                    <div class="card shadow">
                        <img src="../image/aryawallpaper.jpg" class="img-fluid rounded-2" alt="Arya"/>
                        <div class="card-body text-center">
                            <h5 class="card-title">Nama</h5>
                            <p class="card-text">Lorem Ipsum</p>
                            <a href="yasir.php" class="btn btn-info">Lihat Selengkapnya</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end card -->

    <!-- form -->
    <section id="form" class="mb-5">
        <div class="container">
            <div class="row text-center">
                <div class="col">
                    <h3>Form</h3>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-4">
                    <form>
                        <div class="mb-3">
                            <label for="name" class="form-label">Nama Lengkap</label>
                            <input type="text" class="form-control" id="name" aria-describedby="naem"/>
                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- end form -->
<?php include "footer.php"; ?>