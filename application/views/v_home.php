<div class="col-lg-4 col-md-12">
  <div class="panel panel-yellow">
    <div class="panel-heading">
      <div class="row">
        <div class="col-xs-3">
          <i class="fa fa-hospital-o fa-5x"></i>
        </div>
        <div class="col-xs-9 text-right">
          <div class="huge"><?= $indo['0']['positif']; ?></div>
          <div>Total Positif</div>
        </div>
      </div>
    </div>

  </div>
</div>
<div class="col-lg-4 col-md-12">
  <div class="panel panel-green">
    <div class="panel-heading">
      <div class="row">
        <div class="col-xs-3">
          <i class="fa fa-smile-o fa-5x"></i>
        </div>
        <div class="col-xs-9 text-right">
          <div class="huge"><?= $indo['0']['sembuh']; ?></div>
          <div>Total Sembuh</div>
        </div>
      </div>
    </div>

  </div>
</div>
<div class="col-lg-4 col-md-12">
  <div class="panel panel-red">
    <div class="panel-heading">
      <div class="row">
        <div class="col-xs-3">
          <i class="fa fa-bed fa-5x"></i>
        </div>
        <div class="col-xs-9 text-right">
          <div class="huge"><?= $indo['0']['meninggal']; ?></div>
          <div>Total Meninggal</div>
        </div>
      </div>
    </div>

  </div>
</div>
<div class="col-lg-12 col-md-12">
  <div class="panel panel-primary">
    <div class="panel-heading">
      Data Kasus Coronavirus di Indonesia Berdasarkan Provinsi
    </div>
    <div class="panel-body">
      <table class="table table-bordered table-responsive">
        <thead>
          <tr>
            <th class="text-center" style="width:60px">No</th>
            <th class="text-center">Provinsi</th>
            <th class="text-center" style="width:100px">Positif</th>
            <th class="text-center" style="width:100px">Sembuh</th>
            <th class="text-center" style="width:100px">Meninggal</th>
          </tr>
        </thead>
        <tbody>
          <?php $no = 1;
          foreach ($prov as $key => $value) { ?>

            <tr>
              <td><?= $no++; ?></td>
              <td><?= $value['attributes']['Provinsi']; ?></td>
              <td class="text-center"><?= $value['attributes']['Kasus_Posi']; ?></td>
              <td class="text-center"><?= $value['attributes']['Kasus_Semb']; ?></td>
              <td class="text-center"><?= $value['attributes']['Kasus_Meni']; ?></td>
            </tr>

          <?php } ?>
        </tbody>


      </table>

    </div>

  </div>