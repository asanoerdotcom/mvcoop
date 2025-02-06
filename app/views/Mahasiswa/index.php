<div class="container">
    <div class="jumbotron mt-5">

        <div class="row">
            <div class="col-lg-6">
                <?php Flasher::flash(); ?>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-6">
                <h3 class="mb-3">Daftar Mahasiswa <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#formTambah">
                        + Baru
                    </button></h3>
                <ul class="list-group">
                    <?php foreach ($data['mhs'] as $mhs) : ?>
                        <li class="list-group-item">
                            <?= $mhs['nama']; ?>
                            <div class="float-right">
                                <a href="<?= BASEURL; ?>mahasiswa/detail/<?= $mhs['id']; ?>" class="badge badge-primary">Detail</a>
                                <a href="<?= BASEURL; ?>mahasiswa/hapus/<?= $mhs['id']; ?>" class="badge badge-danger hapus-data">Hapus</a>
                            </div>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="formTambah" tabindex="-1" role="dialog" aria-labelledby="judulModal" aria-hidden="true">
    <form action="<?= BASEURL; ?>mahasiswa/tambah" method="post">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="judulModal">Mahasiswa Baru</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <div class="form-group row">
                        <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="nama" placeholder="Nama Lengkap Mahasiswa" name="nama" />
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="nim" class="col-sm-2 col-form-label">Nomor Induk</label>
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
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </div>
        </div>
    </form>
</div>

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