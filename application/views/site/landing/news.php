<div class="wthree_banner1_info">
			<div class="container">
				<h3><span>I</span>nformasi</h3>
			</div>
		</div>
	</div>
<!-- //banner -->
<!---728x90--->
<!-- services -->
	<div class="courses">
		<div class="container">
			<div class="w3_agile_team_grid">
				<div class="w3_agile_team_grid_left">
				</div>
				<div class="w3_agile_team_grid_right" style="float:left">
					<h3>Baca Berita Terbaru Seputar <span>SMKN 1 SUBANG</span></h3>
					<p>Aliquam sit amet sapien felis. Proin vel dolor sed risus maximus gravida.
						Ut suscipit orci sem, eget lobortis sem dictum eu. Etiam congue ex sed volutpat fringilla.</p>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="agileinfo_services_grids">
				<div class="col-md-8 w3_agile_services_grid">
					<div class="agile_services_grid1 wthree_services_grid1">
						<h3>Education Centre</h3>
						<div class="agile_services_grid1_sub">
							<p>20 January 2016</p>
						</div>
						<h4><span>L</span>earning</h4>
					</div>
					<div class="agileits_w3layouts_services_grid1">
						<h4 style="margin-top:10px;"><a href="#" data-toggle="modal" data-target="#myModal">Sed dictum augue quis varius</a></h4>
						<p>Etiam quis placerat dui, sit amet tristique nisl. Donec eget finibus eros.</p>
					</div>
				</div>

        <?php
        foreach ($news->result() as $new) {
          ?>
          <div class="col-md-4 w3_agile_services_grid">
  					<div class="agile_services_grid1 wthree_services_grid4" style="background-image: url('<?php echo base_url('upload/poster/'. $new->news_poster); ?>')">
  						<h3>Terbaru</h3>
  						<div class="agile_services_grid1_sub">
  							<p><?php echo $new->news_entry; ?></p>
  						</div>
  						<h4><?php echo $new->news_category; ?></h4>
  					</div>
  					<div class="agileits_w3layouts_services_grid1">
  						<h4 style="margin-top:10px;"><a href="#" data-toggle="modal" data-target="#myModal"><?php echo $new->news_title; ?></a></h4>
  						<p><?php echo $new->news_description; ?></p>
  					</div>
  				</div>
          <?php
        }
         ?>
         <div class="col-md-12 text-center">
           <button type="button" name="button" class="btn btn-success" style="margin-top: 30px;">+ Selengkapnya</button>
         </div>
			</div>
		</div>
	</div>

<div class="services-bottom">
		<div class="container">
			<div class="agileits_services_bottom_grid">
				<h3>Suatu <span>Pendidikan</span> sudah dimulai sejak kita lahir</h3>
				<p>Alifia Hamzah</p>
			</div>
		</div>
	</div>
	<div class="courses">
		<div class="container">
			<div class="w3_agile_team_grid">
				<div class="w3_agile_team_grid_left">
					<p>03</p>
					<span class="glyphicon glyphicon-arrow-down" aria-hidden="true"></span>
				</div>
				<div class="w3_agile_team_grid_right">
					<h3>Penghargaan <span>Sekolah</span></h3>
					<p>Sebuah Penghargaan yang telah sekolah raih</p>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="agileits_w3layouts_team_grids">
				<div class="col-md-4 w3_agileits_services1_grid">
					<div class="w3_agileits_services1_grid1">
						<h3>Sekolah Ramah Anak</h3>
						<p>Aliquam sit amet sapien felis. Proin vel dolor sed risus maximus gravida.</p>
						<div class="w3l_more wthree_more_service">
							<a href="#" class="button button--nina" data-text="Baca Selengkapnya" data-toggle="modal" data-target="#myModal">
								<span>L</span><span>e</span><span>a</span><span>n</span> <span>m</span><span>o</span><span>r</span><span>e</span>
							</a>
						</div>
						<div class="w3_agileits_services1_grid1_pos">
							<i class="fa fa-desktop" aria-hidden="true"></i>
						</div>
					</div>
				</div>
				<div class="col-md-4 w3_agileits_services1_grid">
					<div class="w3_agileits_services1_grid1">
						<h3>Sekolah Adiwiyata Nasional</h3>
						<p>Aliquam sit amet sapien felis. Proin vel dolor sed risus maximus gravida.</p>
						<div class="w3l_more wthree_more_service">
							<a href="#" class="button button--nina" data-text="Baca Selengkapnya" data-toggle="modal" data-target="#myModal">
								<span>L</span><span>e</span><span>a</span><span>n</span> <span>m</span><span>o</span><span>r</span><span>e</span>
							</a>
						</div>
						<div class="w3_agileits_services1_grid1_pos">
							<i class="fa fa-life-buoy" aria-hidden="true"></i>
						</div>
					</div>
				</div>
				<div class="col-md-4 w3_agileits_services1_grid">
					<div class="w3_agileits_services1_grid1">
						<h3>Terakreditasi A</h3>
						<p>Aliquam sit amet sapien felis. Proin vel dolor sed risus maximus gravida.</p>
						<div class="w3l_more wthree_more_service">
							<a href="#" class="button button--nina" data-text="Baca Selengkapnya" data-toggle="modal" data-target="#myModal">
								<span>L</span><span>e</span><span>a</span><span>n</span> <span>m</span><span>o</span><span>r</span><span>e</span>
							</a>
						</div>
						<div class="w3_agileits_services1_grid1_pos">
							<i class="fa fa-glass" aria-hidden="true"></i>
						</div>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<!-- //services1 -->
<!-- bootstrap-pop-up -->
	<div class="modal video-modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModal">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					Edifying
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				</div>
				<section>
					<div class="modal-body">
						<img src="images/10.jpg" alt=" " class="img-responsive" />
						<p>Ut enim ad minima veniam, quis nostrum
							exercitationem ullam corporis suscipit laboriosam,
							nisi ut aliquid ex ea commodi consequatur? Quis autem
							vel eum iure reprehenderit qui in ea voluptate velit
							esse quam nihil molestiae consequatur, vel illum qui
							dolorem eum fugiat quo voluptas nulla pariatur.
							<i>" Quis autem vel eum iure reprehenderit qui in ea voluptate velit
								esse quam nihil molestiae consequatur.</i></p>
					</div>
				</section>
			</div>
		</div>
	</div>
