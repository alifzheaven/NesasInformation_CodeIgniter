<div class="row">
  <div class="col-md-12">
      <div class="panel panel-primary">
          <div class="panel-body">
              <h4 class="m-b-30 m-t-0">List News</h4>
              <div class="row">
                  <div class="col-md-12 col-sm-12 col-xs-12">
                      <a href="<?php echo base_url('administrator/news/add') ?>" class="btn btn-primary">+ Add</a> <br><br>
                      <table id="datatable" class="table table-striped table-bordered">
                          <thead>
                          <tr>
                              <th class="text-center">No</th>
                              <th class="text-center">Poster</th>
                              <th class="text-center">Title</th>
                              <th class="text-center">Description</th>
                              <th class="text-center">Category</th>
                              <th class="text-center">Entry</th>
                              <th class="text-center">Action</th>
                          </tr>
                          </thead>


                        <tbody>
                          <?php
                          $no = 1;
                          foreach ($data['news']->result() as $new) {
                            ?>
                            <tr>
                                <td class="text-center"><?php echo $no; ?></td>
                                <td class="text-center">
                                  <img src="<?php echo base_url('upload/poster/' . $new->news_poster) ?>" alt="" style="width:50px;">
                                </td>
                                <td><?php echo $new->news_title; ?></td>
                                <td><?php echo substr($new->news_description, 0, 20) . "..."; ?></td>
                                <td><?php echo $new->news_category; ?></td>
                                <td class="text-center"><?php echo $new->news_entry ?></td>
                                <td class="text-center">
                                  <a href="<?php echo base_url('administrator/news/edit/' . $new->news_id) ?>">
                                    <button type="button" name="button" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i> Edit</button>
                                  </a>
                                  <a href="<?php echo base_url('administrator/news/delete/' . $new->news_id) ?>">
                                    <button type="button" name="button" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> Delete</button>
                                  </a>
                                </td>
                            </tr>
                            <?php
                          }
                          $no++;
                           ?>
                        </tbody>
                      </table>

                  </div>
              </div>
          </div>
      </div>
  </div>

  </div> <!-- End Row -->
