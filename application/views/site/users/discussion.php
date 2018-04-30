<div class="row">
  <div class="col-md-12">
      <div class="panel panel-primary">
          <div class="panel-body">
              <h4 class="m-b-30 m-t-0">Join Discussion</h4>
              <div class="row">
                  <div class="col-md-12 col-sm-12 col-xs-12">
                      <table id="datatable" class="table table-striped table-bordered">
                          <thead>
                          <tr>
                              <th>No</th>
                              <th>Discussion</th>
                              <th>Created By</th>
                              <th>About</th>
                              <th>Since</th>
                              <th>Join Us</th>
                          </tr>
                          </thead>


                        <tbody>
                          <?php
                          for ($i=0; $i <1000 ; $i++) {
                            ?>
                            <tr>
                                <td class="text-center"><?php echo $i+1; ?></td>
                                <td>Batur</td>
                                <td>Alifia Hamzah</td>
                                <td>Penyebaran LGBT di sekolah</td>
                                <td class="text-center">7 April 2018 at 15:55</td>
                                <td class="text-center">
                                  <button type="button" name="button" class="btn btn-primary"><i class="fa fa-comments-o"></i> Join</button>
                                </td>
                            </tr>
                            <?php
                          }
                           ?>
                        </tbody>
                      </table>

                  </div>
              </div>
          </div>
      </div>
  </div>

  </div> <!-- End Row -->
