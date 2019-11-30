<!-- page content -->
<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>Detail Pegawai</h3>
      </div>
    </div>
    <div class="clearfix"></div>
    <div class="row">
      <div class="col-md-12 col-sm-12 ">
        <div class="x_panel">
          <div class="x_title">
            <h2>Detail Pegawai Tenaga Kependidikan</small></h2>
            <ul class="nav navbar-right panel_toolbox">
              <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
              </li>
              <li><a class="close-link"><i class="fa fa-close"></i></a>
              </li>
            </ul>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">
            <br />
            <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

              <div class="item form-group">
                <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Nama
                </label>
                <div class="col-md-6 col-sm-6 ">
                  <input type="text" id="first-name" required="required" class="form-control " value="<?= $result[0]->nama->value ?>">
                </div>
              </div>
              <div class="item form-group">
                <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Ruangan
                </label>
                <div class="col-md-6 col-sm-6 ">
                  <input type="text" id="last-name" name="last-name" required="required" class="form-control" value="<?= $result[0]->ruangan->value ?>">
                </div>
              </div>
              <div class="item form-group">
                <label class="col-form-label col-md-3 col-sm-3 label-align">Email
                </label>
                <div class="col-md-6 col-sm-6 ">
                  <input id="birthday" class="date-picker form-control" required="required" type="text" value="<?= $result[0]->email->value ?>">
                </div>
              </div>
              <div class="item form-group">
                <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Kepala Unit
                </label>
                <div class="col-md-6 col-sm-6 ">
                  <input type="text" id="first-name" required="required" class="form-control " value="<?= $result[0]->type->value ?>">
                </div>
              </div>
              <div class="ln_solid"></div>
              <div class="item form-group">
                <div class="col-md-6 col-sm-6 offset-md-3">
                  <!-- <button class="btn btn-primary" type="reset">Reset</button>
                  <button type="submit" class="btn btn-success">Submit</button> -->
                </div>
              </div>

            </form>
          </div>
        </div>
      </div>
    </div>