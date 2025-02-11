<div class="container">
    <div class="jumbotron mt-5">

        <div class="row">
            <div class="col-lg-6">
                <?php Flasher::flash(); ?>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-6">
                <h3 class="mb-3">Daftar Mahasiswa <button type="button" class="btn btn-primary float-right" id="tbTambahData" data-toggle="modal" data-target="#formTambah" data-backdrop="static" data-action="<?= BASEURL; ?>mahasiswa/tambah">
                        + Baru
                    </button></h3>
                <ul class="list-group">
                    <li class="list-group-item">
                        <form action="<?= BASEURL;  ?>mahasiswa/cari" method="post">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Cari Nama Mahasiswa" name="keyword" id="keyword" autocomplete="off" />
                                <div class="input-group-append">
                                    <button class="btn btn-primary" type="submit" id="tombolCari">Cari</button>
                                </div>
                            </div>
                        </form>
                    </li>
                    <?php foreach ($data['mhs'] as $mhs) : ?>
                        <li class="list-group-item">
                            <?= $mhs['nama']; ?>
                            <div class="float-right">
                                <a href="<?= BASEURL; ?>mahasiswa/detail/<?= $mhs['id']; ?>" class="badge badge-primary">Detail</a>
                                <a href="<?= BASEURL; ?>mahasiswa/ambildata/<?= $mhs['id']; ?>" class="badge badge-success ubah-data" data-toggle="modal" data-target="#formTambah" data-backdrop="static" data-action="<?= BASEURL; ?>mahasiswa/ubah">Ubah</a>
                                <a href="<?= BASEURL; ?>mahasiswa/hapus/<?= $mhs['id']; ?>" class="badge badge-danger hapus-data">Hapus</a>
                            </div>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
    </div>
</div>

<!-- Form -->
<div class="modal fade" id="formTambah" tabindex="-1" role="dialog" aria-labelledby="judulModal" aria-hidden="true">
    <form action="" method="post">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="judulModal">Kosongan Saja Dah</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <input type="hidden" name="id" id="id" />
                    <div class="form-group row">
                        <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="nama" placeholder="Nama Lengkap Mahasiswa" name="nama" />
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="nim" class="col-sm-2 col-form-label">NIM</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" id="nim" placeholder="Nomor Induk Mahasiswa" name="nim" />
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="email" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control" id="email" placeholder="Lengkap: mahasiswa@kampus.id" name="email" />
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="jurusan" class="col-sm-2 col-form-label">Jurusan</label>
                        <div class="col-sm-10">
                            <select class="form-control" id="jurusan" name="jurusan">
                                <option value="" disabled selected>PILIH JURUSAN</option>
                                <option value="TEKINIK IT">TEKINIK IT</option>
                                <option value="ILMU JARINGAN KOMPUTER">ILMU JARINGAN KOMPUTER</option>
                                <option value="FARMASI TEKNICAL">FARMASI TEKNICAL</option>
                                <option value="D3 TEKNIK ELKTRO">D3 TEKNIK ELKTRO</option>
                                <option value="TEKNIK KIMIA">TEKNIK KIMIA</option>
                            </select>
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary">Ok Simpan</button>
                </div>
            </div>
        </div>
    </form>
</div>

<!-- Notifikasi Hapus -->
<div class="modal fade" tabindex="-1" role="dialog" id="hapus-kofirm">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Hapus Mahasiswa</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Apakah anda yakin?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                <a type="button" class="btn btn-danger" id="konfirm-hapus">Ya, Hapus</a>
            </div>
        </div>
    </div>
</div>