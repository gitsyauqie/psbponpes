<?= $this->extend('admin/layout/admin') ?>
<?= $this->section('content') ?>

<div class="row">
  <div class="col s12 m12 l12">
    <div id="button-trigger" class="card card card-default scrollspy">
      <div class="card-content">
        <h4 class="card-title">Data Calon Santri</h4>
        <div class="row">
          <div class="col s12">
            <p>Berikut data calon santri MTs.</p>
          </div>
          <div class="col s12">
            <table id="page-length-option" class="display">
              <thead>
                <tr role="row">
                  <th class="sorting_asc" tabindex="0" aria-controls="data-table-simple" rowspan="1" colspan="1" style="width: 165px;" aria-sort="ascending">Santri</th>
                  <th class="sorting" tabindex="0" aria-controls="data-table-simple" rowspan="1" colspan="1" style="width: 267px;">Tanggal Tes</th>
                  <th class="sorting" tabindex="0" aria-controls="data-table-simple" rowspan="1" colspan="1" style="width: 138px;">Tanggal Pendaftaran</th>
                  <th class="sorting" tabindex="0" aria-controls="data-table-simple" rowspan="1" colspan="1" style="width: 102px;">Aksi</th>
                </tr>
              </thead>
              <tbody>
                <?php if (!empty($data)) {
                  foreach ($data as $row) { ?>
                    <tr role="row" class="odd">
                      <td tabindex="0" class="sorting_1"><?php echo $row->nama; ?></td>
                      <td><?php echo $row->nama; ?></td>
                      <td><?php echo $row->nama; ?></td>
                      <td><?php echo $row->nama; ?></td>
                    </tr>
                <?php }
                } ?>
              </tbody>
              <tfoot>
                <tr>
                  <th rowspan="1" colspan="1">Santri</th>
                  <th rowspan="1" colspan="1">Tanggal Tes</th>
                  <th rowspan="1" colspan="1">Tanggal Pendaftaran</th>
                  <th rowspan="1" colspan="1">Aksi</th>
                </tr>
              </tfoot>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?= $this->endSection() ?>