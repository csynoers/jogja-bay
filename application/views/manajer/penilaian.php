<div class="content-wrapper">
  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <form action="result.php" method="post">
              <!-- /.card-header -->
              <div class="card-body">
              <div class="table-responsive">
                  <table id="example1" class="table table-bordered table-striped">
                      <thead>
                          <tr>
                              <th>Name</th>
                              <th>Divisi</th>
                              <th style="min-width: 120px">Attitude</th>
                              <th style="min-width: 120px">Grooming</th>
                              <th style="min-width: 120px">Ketelitian</th>
                              <th style="min-width: 120px">Service Excellent</th>
                              <th style="min-width: 120px">Personal Selling</th>
                              <th style="min-width: 120px">Kerjasama Tim</th>
                              <th style="min-width: 120px">Kedisiplinan</th>
                              <th style="min-width: 120px">Kejujuran</th>
                              <th style="min-width: 120px">Inisiatif</th>
                          </tr>
                      </thead>
                      <tbody>
                          <?php
                            echo "<pre>";
                            print_r($karyawan);
                            print_r($kriteria);
                            echo "</pre>";
                              $data =[
                                  [
                                      'id_user'       => 1,
                                      'nama'          => 'Karyawan 1',
                                      'nama_divisi'   => 'Pramuniaga',
                                  ],
                                  [
                                      'id_user'       => 2,
                                      'nama'          => 'Karyawan 2',
                                      'nama_divisi'   => 'Kasir',
                                  ],
                                  [
                                      'id_user'       => 3,
                                      'nama'          => 'Karyawan 3',
                                      'nama_divisi'   => 'Security',
                                  ],
                                  [
                                      'id_user'       => 4,
                                      'nama'          => 'Karyawan 4',
                                      'nama_divisi'   => 'Logistik',
                                  ],
                              ];
                              foreach ($karyawan as $key => $value) {
                                $form_sub= '';
                                foreach ($kriteria as $key_sub => $value_sub) {
                                  $form_sub .= '
                                    <td>
                                        <input required="" value="" type="number" name="id_kriteria_'.$value->id_user.'['.$value_sub->id_kriteria.']" placeholder="0.1 s.d 1" step="0.1" min="0.1" max="1" class="form-control" >
                                    </td>
                                  ';
                                }
                                  echo '
                                      <tr>
                                          <input class="id_user" name="id_user[]" type="hidden" value="'.$value->id_user.'">
                                          <td>'.$value->nama.'</td>
                                          <td>'.$value->nama_divisi.'</td>
                                          '.$form_sub.'
                                      </tr>
                                  ';
                              }
                          ?>
                      </tbody>
                      <tfoot>
                          <tr>
                              <th>Name</th>
                              <th>Divisi</th>
                              <th>Attitude</th>
                              <th>Grooming</th>
                              <th>Ketelitian</th>
                              <th>Service Excellent</th>
                              <th>Personal Selling</th>
                              <th>Kerjasama Tim</th>
                              <th>Kedisiplinan</th>
                              <th>Kejujuran</th>
                              <th>Inisiatif</th>
                          </tr>
                      </tfoot>
                  </table>
              </div>
              </div>
              <!-- /.card-body -->
              <div class="card-footer">
                  <button type="submit" class="btn btn-primary float-right" >Simpan Penilaian</button>
              </div>
          </form>
        </div>
        <!-- /.card -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </section>
  <!-- /.content -->
</div>