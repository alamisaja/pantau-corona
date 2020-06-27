<div class="col-lg-4 col-md-12">
  <div class="panel panel-yellow">
    <div class="panel-heading">
      <div class="row">
        <div class="col-xs-3">
          <i class="fa fa-hospital-o fa-5x"></i>
        </div>
        <div class="col-xs-9 text-right">
          <div class="huge"><?= $positif['value']; ?></div>
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
          <div class="huge"><?= $sembuh['value']; ?></div>
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
          <div class="huge"><?= $meninggal['value']; ?></div>
          <div>Total Meninggal</div>
        </div>
      </div>
    </div>

  </div>
</div>
<div class="col-lg-12 col-md-12">
  <div class="panel panel-primary">
    <div class="panel-heading">
      Data Kasus Coronavirus Global Berdasarkan Negara
    </div>
    <div class="panel-body">
      <table class="table table-bordered table-responsive" id="dataTables-example">
        <thead>
          <tr>
            <th class="text-center" style="width:60px">No</th>
            <th class="text-center">Negara</th>
            <th class="text-center" style="width:100px">Positif</th>
            <th class="text-center" style="width:100px">Sembuh</th>
            <th class="text-center" style="width:100px">Meninggal</th>
          </tr>
        </thead>
        <tbody>
          <?php $no = 1;
          foreach ($global as $key => $value) { ?>

            <tr>
              <td><?= $no++; ?></td>
              <td><?= $value['attributes']['Country_Region']; ?></td>
              <td class="text-center"><?= $value['attributes']['Confirmed']; ?></td>
              <td class="text-center"><?= $value['attributes']['Recovered']; ?></td>
              <td class="text-center"><?= $value['attributes']['Deaths']; ?></td>
            </tr>

          <?php } ?>
        </tbody>


      </table>

    </div>

  </div>