
<div class='content-wrapper'>
  <section class='content-header'>
    <h1>
      Dashboard
      <small>LOUNDRY</small>
    </h1>
    <ol class='breadcrumb'>
      <li><a href='#'><i class='fa fa-dashboard'></i> Home</a></li>
      <li class='active'>LOUNDRY</li>
    </ol>
  </section>
  <section class='content'>
    <div class='row'>
      <div class='col-xs-12'>
        <div class='col-md-6'>
            <!-- Horizontal Form -->
            <div class='box box-solid box-info'>
              <div class='box-header'>
                <h3 class='box-title'>Form Input LOUNDRY</h3>
              </div><!-- /.box-header -->
                <div class='box-body'>
	
                  <div class='form-group'>
                    Id User
                    <input type='text' class='form-control' value='<?php echo $id_user; ?>' disabled>
                  </div>
	
                  <div class='form-group'>
                    Nama Loundry
                    <input type='text' class='form-control' value='<?php echo $nama_loundry; ?>' disabled>
                  </div>
	
                  <div class='form-group'>
                    Slogan Loundry
                    <input type='text' class='form-control' value='<?php echo $slogan_loundry; ?>' disabled>
                  </div>
	
                  <div class='form-group'>
                    Alamat Loundry
                    <input type='text' class='form-control' value='<?php echo $alamat_loundry; ?>' disabled>
                  </div>
                </div>
                <div class='box-footer'>
                <a href="<?php echo site_url('loundry') ?>" class="btn btn-default">Back</a>
                </div>
            </div><!-- /.box -->
          </div>
      </div>
    </div>
</section><!-- /.content -->
</div><!-- /.content-wrapper -->
                