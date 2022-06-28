<div class="col-12">
     <div class="card">
          <div class="card-header">
               <h3 class="card-title">Data Bunga</h3>
          </div>

          <div class="card-body">
               <table id="example2" class="table table-bordered table-hover">
                    <thead>
                         <tr>
                              <th>NO</th>
                              <th>Nama Bunga</th>
                              <th>Stok</th>
                              <th>Terjual</th>
                              <th>Pilihan</th>
                         </tr>
                    </thead>
                    <tbody>
                         <?php
                         $no = 1;
                         foreach ($data as $a) { ?>
                              <tr>
                                   <td><?= $no++; ?></td>
                                   <td><?= $a['nama_bunga']; ?></td>
                                   <td><?= $a['stok']; ?></td>
                                   <td><?= $a['terjual']; ?></td>
                                   <td>
                                        <a href="<?= base_url('') . 'admin/update-bunga/' . $a['id'] ?>" class="btn btn-sm btn-warning">Edit</a>
                                        <a onclick="return confirm('Kamu yakin ingin menghapus?')" href="<?= base_url('') . 'admin/hapus-bunga/' . $a['id'] ?>" class="btn btn-sm btn-denger">Hapus</a>
                                   </td>
                              </tr>
                         <?php }; ?>
                    </tbody>
               </table>
          </div>

     </div>
</div>