<div class="col-md-6">

    <div class="card card-warning">
        <div class="card-header">
            <h3 class="card-title">Form Tambah Bunga</h3>
        </div>

        <form method="POST" action="<?= base_url('') . 'admin/tambah-bunga-action' ?>">

            <div class="card-body">
                <div class="form-group">
                    <label for="nama">Nama Bunga</label>
                    <input value="" name="nama" type="text" class="form-control" id="nama" placeholder="Masukkan nama bunga">

                    <small class=" text-danger">

                    </small>

                </div>
                <div class="form-group">
                    <label for="stok">Stok</label>
                    <input value="" name="stok" type="number" class="form-control" id="stok" placeholder="Masukkan jumlah bunga">

                    <small class="text-danger">

                    </small>

                </div>
                <div class="form-group">
                    <label for="terjual">Terjual</label>
                    <input value="" name="terjual" type="number" class="form-control" id="terjual" placeholder="Masukkan jumlah terjual">

                    <small class="text-danger">

                    </small>

                </div>
                <div class="form-group">
                    <label for="status">Gambar</label>
                    <div class="input-group">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="exampleInputFile" name="gambar">
                            <label class="custom-file-label" for="exampleInputFile">
                                Pilih Gambar
                            </label>
                        </div>
                        <div class="input-group-append">
                            <span class="input-group-text">Upload</span>
                        </div>
                    </div>
                    <small class="text-danger">

                    </small>

                </div>
                <div class="form-group">
                    <label>Kategori</label>
                    <select name="category_id" class="form-control">
                        <option class="text-muted">Pilih Kategori</option>
                        <?php foreach ($data as $d) {; ?>
                            <option value="<?= $d->id; ?>"><?= $d->kategori; ?></option>
                        <?php }; ?>
                    </select>

                    <small class="text-danger">

                    </small>

                </div>
            </div>

            <div class="card-footer">
                <button type="submit" class="btn btn-warning">Tambah</button>
            </div>
        </form>
    </div>
</div>