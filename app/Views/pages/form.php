<?= $this->extend('template/template'); ?>

<?= $this->section('content'); ?>

<div class="wrap">
    <div class="row m-auto">
        <div class="col-md-1"></div>
        <div class="col-md-10 wrapper">
            <h1>Informatics Caring</h1>
            <div class="row m-auto mb-2 mt-4 form">
                <div class="col-md-4 left">
                    <nav class="navbar navbar-expand-lg navbar-light bg-transparent">
                        <img src="/img/hmif.png" alt="hmif" width="60" height="55">
                        <img src="/img/logo.png" alt="adhigana" width="45" height="90" class="logo">
                        <div class="container-fluid adhigana">
                            <a class="navbar-brand" href="#"></a>
                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            </div>
                        </div>
                    </nav>
                    <div class="card">
                        <br>
                        <div class="logo-kastrad">
                            <img src="/img/kastrad.png" alt="" id="kastrad-logo">
                        </div>
                        <div class="about">
                            <h2>Kastrad</h2>
                        </div>
                    </div>
                    <div class="home">

                        <?php 
                            if(session()->getFlashdata('success')) {
                        ?>
                        <div class="alert alert-success" role="alert">
                            <?= session()->getFlashdata('success'); ?>
                        </div>
                        <?php
                            }
                        ?>
                        <a href="/">
                            <button class="btn buttonhome">Home</button>
                        </a>
                    </div>

                    <div class="contact-us">
                        <div class="bawah">
                            <a href="https://instagram.com/hmif.unsri?utm_medium=copy_link" class="link">
                                <i class="bi bi-instagram"></i> hmif.unsri
                            </a>
                            <a href="https://instagram.com/kastrad.hmif.unsri?utm_medium=copy_link" class="link g">
                                <i class="bi bi-instagram"></i> kastrad.hmif.unsri
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-8 right">
                    <form action="/Kastrad/update" method="POST">
                        <?= csrf_field(); ?>
                        <div class="mb-3">
                            <label for="nama">Nama Lengkap</label>
                            <input type="text" class="form-control" name="nama" id="nama" required>
                        </div>
                        <div class="mb-3">
                            <label for="nim">NIM</label>
                            <input type="text" class="form-control" name="nim" id="nim" required>
                        </div>
                        <div class="mb-2">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="kelas">Kelas</label>
                                        <select name="kelas" id="kelas" class="form-select">
                                            <option hidden>Kelas</option>
                                            <option value="REGA">REGA</option>
                                            <option value="REGB">REGB</option>
                                            <option value="REGC">REGC</option>
                                            <option value="BILA">BILA</option>
                                            <option value="BILB">BILB</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label for="angkatan">Angkatan</label>
                                    <select name="angkatan" id="angkatan" class="form-select">
                                        <option hidden>Angkatan</option>
                                        <option value="2021">2021</option>
                                        <option value="2020">2020</option>
                                        <option value="2019">2019</option>
                                        <option value="2018">2018</option>
                                        <option value="2017">2017</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="email mt-1">Email</label>
                                    <input type="email" class="form-control" name="email" required>
                                </div>
                                <div class="col-md-6 mt-1">
                                    <label for="wa">No. HP</label>
                                    <input type="number" class="form-control" name="wa" required>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="aspirasi">Aspirasi</label>
                            <textarea name="aspirasi" id="aspirasi" cols="30" rows="5" class="form-control"
                                required></textarea>
                        </div>
                        <div class="mb-3">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                                <label class="form-check-label pernyataan" for="invalidCheck">
                                    Saya yakin bahwa data yang Saya isi adalah benar
                                </label>
                            </div>
                        </div>
                        <div class="button1">
                            <button type="submit" class="btn submit" name="submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-1"></div>
    </div>
</div>


<?= $this->endSection(); ?>