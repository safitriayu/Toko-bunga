<div class="col-12">
     <div class="card">
          <div class="card-header">
               <h3 class="card-title">Data Users</h3>
          </div>

          <div class="card-body">
               <table id="example2" class="table table-bordered table-hover">
                    <thead>
                         <tr>
                              <th>NO</th>
                              <th>Nama</th>
                              <th>Email</th>
                              <th>Role Id</th>
                              <th>Aktif</th>
                              <th>Member Sejak</th>
                         </tr>
                    </thead>
                    <tbody>
                         <?php
                         $no = 1;
                         foreach ($data as $a) { ?>
                              <tr>
                                   <td><?= $no++; ?></td>
                                   <td><?= $a['nama']; ?></td>
                                   <td><?= $a['email']; ?></td>
                                   <td><?= $a['role_id']; ?></td>
                                   <td><?= $a['is_active']; ?></td>
                                   <td><?= $a['tanggal_input']; ?></td>
                                  
                              </tr>
                         <?php }; ?>
                    </tbody>
               </table>
          </div>

     </div>
</div>