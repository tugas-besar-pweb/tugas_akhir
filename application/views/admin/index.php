<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
	<?php $this->load->view('pegawai/header'); ?>
</head> 
<body>
   <div class="page-container">
   <!--/content-inner-->
	<div class="left-content">
	   <div class="inner-content">
		<!-- header-starts -->
			<div class="header-section">
						<!--menu-right-->
						<div class="top_menu">
						        
							<!--/profile_details-->
								<div class="profile_details_left">
									<ul class="nofitications-dropdown">
									
										<li class="dropdown note">
											<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-envelope-o"></i> <span class="badge">3</span></a>

													<ul class="dropdown-menu two first">
														<li>
															<div class="notification_header">
																<h3>You have 3 new messages  </h3> 
															</div>
														</li>
														<li><a href="#">
														   <div class="user_img"><img src="<?php echo base_url().'assets/images/1.jpg'?>" alt=""></div>
														   <div class="notification_desc">
															<p>Lorem ipsum dolor sit amet</p>
															<p><span>1 hour ago</span></p>
															</div>
														   <div class="clearfix"></div>	
														 </a></li>
														 <li class="odd"><a href="#">
															<div class="user_img"><img src="<?php echo base_url().'assets/images/in.jpg'?>" alt=""></div>
														   <div class="notification_desc">
															<p>Lorem ipsum dolor sit amet </p>
															<p><span>1 hour ago</span></p>
															</div>
														  <div class="clearfix"></div>	
														 </a></li>
														<li><a href="#">
														   <div class="user_img"><img src="<?php echo base_url().'assets/images/in1.jpg'?>" alt=""></div>
														   <div class="notification_desc">
															<p>Lorem ipsum dolor sit amet </p>
															<p><span>1 hour ago</span></p>
															</div>
														   <div class="clearfix"></div>	
														</a></li>
														<li>
															<div class="notification_bottom">
																<a href="#">See all messages</a>
															</div> 
														</li>
													</ul>
										</li>
										
							<li class="dropdown note">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-bell-o"></i> <span class="badge">5</span></a>

									<ul class="dropdown-menu two">
										<li>
											<div class="notification_header">
												<h3>You have 5 new notification</h3>
											</div>
										</li>
										<li><a href="#">
											<div class="user_img"><img src="<?php echo base_url().'assets/images/in.jpg'?>" alt=""></div>
										   <div class="notification_desc">
											<p>Lorem ipsum dolor sit amet</p>
											<p><span>1 hour ago</span></p>
											</div>
										  <div class="clearfix"></div>	
										 </a></li>
										 <li class="odd"><a href="#">
											<div class="user_img"><img src="<?php echo base_url().'assets/images/in5.jpg'?>" alt=""></div>
										   <div class="notification_desc">
											<p>Lorem ipsum dolor sit amet </p>
											<p><span>1 hour ago</span></p>
											</div>
										   <div class="clearfix"></div>	
										 </a></li>
										 <li><a href="#">
											<div class="user_img"><img src="<?php echo base_url().'assets/images/in8.jpg'?>" alt=""></div>
										   <div class="notification_desc">
											<p>Lorem ipsum dolor sit amet </p>
											<p><span>1 hour ago</span></p>
											</div>
										   <div class="clearfix"></div>	
										 </a></li>
										 <li>
											<div class="notification_bottom">
												<a href="#">See all notification</a>
											</div> 
										</li>
									</ul>
							</li>	
						<li class="dropdown note">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-tasks"></i> <span class="badge blue1">9</span></a>
										<ul class="dropdown-menu two">
										<li>
											<div class="notification_header">
												<h3>You have 9 pending task</h3>
											</div>
										</li>
										<li><a href="#">
												<div class="task-info">
												<span class="task-desc">Database update</span><span class="percentage">40%</span>
												<div class="clearfix"></div>	
											   </div>
												<div class="progress progress-striped active">
												 <div class="bar yellow" style="width:40%;"></div>
											</div>
										</a></li>
										<li><a href="#">
											<div class="task-info">
												<span class="task-desc">Dashboard done</span><span class="percentage">90%</span>
											   <div class="clearfix"></div>	
											</div>
										   
											<div class="progress progress-striped active">
												 <div class="bar green" style="width:90%;"></div>
											</div>
										</a></li>
										<li><a href="#">
											<div class="task-info">
												<span class="task-desc">Mobile App</span><span class="percentage">33%</span>
												<div class="clearfix"></div>	
											</div>
										   <div class="progress progress-striped active">
												 <div class="bar red" style="width: 33%;"></div>
											</div>
										</a></li>
										<li><a href="#">
											<div class="task-info">
												<span class="task-desc">Issues fixed</span><span class="percentage">80%</span>
											   <div class="clearfix"></div>	
											</div>
											<div class="progress progress-striped active">
												 <div class="bar  blue" style="width: 80%;"></div>
											</div>
										</a></li>
										<li>
											<div class="notification_bottom">
												<a href="#">See all pending task</a>
											</div> 
										</li>
									</ul>
							</li>		   							   		
							<div class="clearfix"></div>	
								</ul>
							</div>
							<div class="clearfix"></div>	
							<!--//profile_details-->
						</div>
						<!--//menu-right-->
					<div class="clearfix"></div>
				</div>
					<!-- //header-ends -->
						<!--outter-wp-->
							<div class="outter-wp">
									<!--sub-heard-part-->
									  <div class="sub-heard-part">
									   <ol class="breadcrumb m-b-0">
											<li><a href="<?php echo site_url('admin/c_admin/') ?>">Home</a></li>
											<li class="active">Tables</li>
											
										</ol>
									   </div>
								  <!--//sub-heard-part-->
									<div class="graph-visual tables-main">
											<h3 class="inner-tittle two">Daftar Pegawai </h3>
											<!-- <a class="btn" data-toggle="modal" data-target="#myUserAdd" >Tambah Data</a>
														  <div class="graph">
															<div class="tables">
																<table class="table table-striped" id="mytable">
																<thead> <tr> 
																	<th>User Id</th> 
																	<th>Username</th> 
																	<th>Password</th> 
																	<th>Level</th>
																	<th>Action</th> </tr> 
																</thead> 
															</table> 
														</div> -->
												<a href="<?php echo base_url('index.php/User/create') ?>" class="btn btn-primary my-3">Tambah</a>
													<table class="table table-hover">
														<thead>
															<th>ID</th>
															<th>Nama</th>
															<th>NIP</th>
															<th>Jenis Kelamin</th>
															<th>Jabatan</th>
															<th>Status Aktif</th>
															<th>Action</th>
														</thead>
														<tbody>
															<?php foreach ($user_list as $key => $value): ?>
																<tr>
																<td><?php echo $value['id'] ?></td>
																<td><?php echo $value['nama_pegawai'] ?></td>
																<td><?php echo $value['nip'] ?></td>
																<td><?php echo $value['jk'] ?></td>
																<td><?php echo $value['jabatan'] ?></td>
																<td><?php echo $value['status_aktif'] ?></td>
																<td><?php ?></td>
																<td>
																	<a href="<?php echo base_url("index.php/User/update/".$value['id']) ?>" class="btn btn-sm btn-success">Edit</a>
																	<!-- <a href="<?php echo base_url("index.php/User/deleteData/".$value['id']) ?>" class="btn btn-sm btn-danger"> -->
																	<form id="add-row-form" action="<?php echo base_url().'index.php/admin/User/deleteData'?>" method="post">
																		<div class="modal fade" id="UserHapus" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
																			<div class="modal-dialog">
																			<div class="modal-content">
																				<div class="modal-header">
																					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
																					<h4 class="modal-title" id="myModalLabel">Hapus User</h4>
																				</div>
																				<div class="modal-body">
																						<input type="hidden" name="uid" class="form-control" placeholder="User ID" required>
																												<strong>Anda yakin mau menghapus record ini?</strong>
																				</div>
																				<div class="modal-footer">
																						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
																						<button type="submit" id="add-row" class="btn btn-success">Hapus</button>
																				</div>
																					</div>
																			</div>
																		</div>
																	</form>

																</td>
																</tr>
																
															<?php endforeach ?>
														</tbody>
													<h3 class="inner-tittle two">Responsive Table </h3>
														  <div class="graph">
															<div class="tables">
																<table class="table table-bordered"> 
																	<thead> 
																		<tr> 
																			<th>#</th> 
																				<th>Table heading</th> 
																					<th>Table heading</th> 
																					<th>Table heading</th> 
																					<th>Table heading</th> 
																		</tr> 
																	</thead>
																	<tbody> 
																		<tr> 
																			<th scope="row">1</th> 
																				<td>Table cell</td> 
																				<td>Table cell</td> 
																				<td>Table cell</td> 
																				<td>Table cell</td> 
																		</tr> 
																		<tr> 
																			<th scope="row">2</th> 
																				<td>Table cell</td> 
																				<td>Table cell</td> 
																				<td>Table cell</td> 
																				<td>Table cell</td> 
																		</tr> 
																		<tr> 
																			<th scope="row">3</th> 
																				<td>Table cell</td> 
																				<td>Table cell</td> 
																				<td>Table cell</td> 
																				<td>Table cell</td> 
																		</tr> 
																	</tbody> 
																</table> 
															</div>
														</div>
										
										<!--//graph-visual-->
									</div>
									<!--//outer-wp-->
									<!-- User Add User-->
      <!-- <form id="add-row-form" action="<?php echo base_url().'index.php/admin/User/simpan'?>" method="post">
         <div class="modal fade" id="myUserAdd" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
               <div class="modal-content">
                   <div class="modal-header">
                       <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                       <h4 class="modal-title" id="myUserLabel">Tambah Data</h4>
                   </div>
                   <div class="modal-body">
                       <div class="form-group">
                           <input type="text" value='' name="uid" class="form-control" placeholder="User ID" required>
                       </div>
                          <div class="form-group">
                           <input type="text" value='' name="username" class="form-control" placeholder="Username" required>
                       </div>
                          <div class="form-group">
                           <input type="text" value='' name="password" class="form-control" placeholder="Password" required>
                       </div>
                          <div class="form-group">
                           <input type="text" value='' name="level" class="form-control" placeholder="Level" required>
                       </div>
 
                   </div>
                   <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" id="add-row" class="btn btn-success">Save</button>
                   </div>
                    </div>
            </div>
         </div>
     </form> -->
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<?php echo form_open('admin/User/create'); ?>
				<legend>Tambah Data Pegawai</legend>
				<?php echo validation_errors(); ?>

				<div class="form-group">
						<label for="">Nama</label>
					<input type="text" class="form-control" name="nama" placeholder="Input field">
						<label for="">NIP</label>
					<input type="text" class="form-control" name="nip" placeholder="Input field">
						<label for="">Jenis Kelamin</label>
					<input type="text" class="form-control" name="jk" placeholder="Input field">
						<label for="">Jabatan</label>
					<input type="Date" class="form-control" name="jabatan" placeholder="Input field">
						<label for="">Status Aktif</label>
					<input type="Date" class="form-control" name="status_aktif" placeholder="Input field">

				</div>
				<button type="submit" class="btn btn-primary">submit</button>
				<?php echo form_close(); ?>
				</div>
			
 
     <!-- User Update User-->
      <!-- <form id="add-row-form" action="<?php echo base_url().'index.php/admin/User/update'?>" method="post">
         <div class="modal fade" id="UserUpdate" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
               <div class="modal-content">
                   <div class="modal-header">
                       <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                       <h4 class="modal-title" id="myModalLabel">Update User</h4>
                   </div>
                   <div class="modal-body">
                      <div class="form-group">
                           <input type="hidden" name="uid" class="form-control" placeholder="User ID" required>
                       </div>
                         <div class="form-group">
                           <input type="text" name="username" class="form-control" placeholder="Username" required>
                       </div>
                       <div class="form-group">
                           <input type="text" name="password" class="form-control" placeholder="Password" required>
                       </div>
                          <div class="form-group">
                           <input type="text" name="level" class="form-control" placeholder="Level" required>
                       </div>
 
                   </div>
                   <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" id="add-row" class="btn btn-success">Update</button>
                   </div>
                    </div>
            </div>
         </div>
     </form> -->
	 <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			<?php echo form_open('admin/User/update/'.$this->uri->segment(3)); ?>
			<legend>Edit Data User</legend>
			<?php echo validation_errors(); ?>
			<div class="form-group">
				<label for="">Nama</label>
				<input type="text" class="form-control" name="nama_pegawai" id="nama_pegawai" value="<?php echo $user[0]->nama_pegawai ?>" placeholder="Input field">
			</div>
			<div class="form-group">
				<label for="">NIP</label>
				<input type="text" class="form-control" name="nip" id="nip" value="<?php echo $user[0]->nip ?>" placeholder="Input field">
			</div>
			<div class="form-group">
				<label for="">Jenis Kelamin</label>
				<input type="text" class="form-control" name="jk" id="jk" value="<?php echo $user[0]->jk ?>" placeholder="Input field">
			</div>
			<div class="form-group">
				<label for="">Jabatan</label>
				<input type="text" class="form-control" name="jabatan" id="jabatan" value="<?php echo $user[0]->jabatan ?>" placeholder="Input field">
			</div>
			<div class="form-group">
				<label for="">Status Aktif</label>
				<input type="text" class="form-control" name="status_aktif" id="status_aktif" value="<?php echo $user[0]->status_aktif ?>" placeholder="Input field">
			</div>
			<button type="submit" class="btn btn-primary">Submit</button>
			<?php echo form_close(); ?>
		</div>									
     <!-- User Hapus User-->
      <!-- <form id="add-row-form" action="<?php echo base_url().'index.php/admin/User/delete'?>" method="post">
         <div class="modal fade" id="UserHapus" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
               <div class="modal-content">
                   <div class="modal-header">
                       <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                       <h4 class="modal-title" id="myModalLabel">Hapus User</h4>
                   </div>
                   <div class="modal-body">
                           <input type="hidden" name="uid" class="form-control" placeholder="User ID" required>
                                                 <strong>Anda yakin mau menghapus record ini?</strong>
                   </div>
                   <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" id="add-row" class="btn btn-success">Hapus</button>
                   </div>
                    </div>
            </div>
         </div>
     </form> -->
 
									 <!--footer section start-->
										<footer>
										   <p>&copy 2018 Adinda Dwi L. & M. Qolbil Atiq TI-2G</p>
										</footer>
									<!--footer section end-->
								</div>
							</div>
				<!--//content-inner-->
			<!--/sidebar-menu-->
				<div class="sidebar-menu">
					<header class="logo">
					<a href="#" class="sidebar-icon"> <span class="fa fa-bars"></span> </a> <a href="index.html"> <span id="logo"> <h1>Augment</h1></span> 
					<!--<img id="logo" src="" alt="Logo"/>--> 
				  </a> 
				</header>
			<div style="border-top:1px solid rgba(69, 74, 84, 0.7)"></div>
			<!--/down-->
							<div class="down">	
									  <a href="index.html"><img src="<?php echo base_url().'assets/images/admin.jpg'?>"></a>
									  <h3><b><?php echo $username; ?></b></h3>
									 <p>System Administrator</p>
									<ul>
										<li><a class="tooltips" href="<?php echo site_url('admin/c_admin/logout'); ?>"><span>Log out</span><i class="lnr lnr-power-switch"></i></a></li>
										</ul>
									</div>
							   <!--//down-->
								<div class="menu">
									<ul id="menu" >
										<li><a href="<?php echo site_url('admin/c_admin/') ?>"<i class="fa fa-tachometer"></i> <span>Dashboard</span></a></li>
										 <li id="menu-academico" ><a href="#"><i class="fa fa-table"></i> <span> Tabs &amp; Panels</span> <span class="fa fa-angle-right" style="float: right"></span></a>
										   <ul id="menu-academico-sub" >
											<li id="menu-academico-avaliacoes" ><a href="tabs.html"> Tabs &amp; Panels</a></li>
											<li id="menu-academico-boletim" ><a href="widget.html">Widgets</a></li>
											<li id="menu-academico-avaliacoes" ><a href="calender.html">Calender</a></li>
											
										  </ul>
										</li>
										 <li id="menu-academico" ><a href="#"><i class="fa fa-file-text-o"></i> <span>Ui Elements</span> <span class="fa fa-angle-right" style="float: right"></span></a>
											 <ul id="menu-academico-sub" >
												<li id="menu-academico-avaliacoes" ><a href="forms.html">Forms</a></li>
												<li id="menu-academico-boletim" ><a href="validation.html">Validation Forms</a></li>
												<li id="menu-academico-boletim" ><a href="table.html">Tables</a></li>
												<li id="menu-academico-boletim" ><a href="buttons.html">Buttons</a></li>
											  </ul>
										 </li>
									<li><a href="typography.html"><i class="lnr lnr-pencil"></i> <span>Typography</span></a></li>
									<li id="menu-academico" ><a href="#"><i class="lnr lnr-book"></i> <span>Pages</span> <span class="fa fa-angle-right" style="float: right"></span></a>
										  <ul id="menu-academico-sub" >
										    <li id="menu-academico-avaliacoes" ><a href="login.html">Login</a></li>
										    <li id="menu-academico-boletim" ><a href="register.html">Register</a></li>
											<li id="menu-academico-boletim" ><a href="404.html">404</a></li>
											<li id="menu-academico-boletim" ><a href="sign.html">Sign up</a></li>
											<li id="menu-academico-boletim" ><a href="profile.html">Profile</a></li>
										  </ul>
									 </li>
									 <li><a href="#"><i class="lnr lnr-envelope"></i> <span>Mail Box</span><span class="fa fa-angle-right" style="float: right"></span></a>
									   <ul>
										<li><a href="inbox.html"><i class="fa fa-inbox"></i> Inbox</a></li>
										<li><a href="compose.html"><i class="fa fa-pencil-square-o"></i> Compose Mail</a></li>
											<li><a href="editor.html"><span class="lnr lnr-highlight"></span> Editors Page</a></li>
									
									  </ul>
									</li>
							        <li id="menu-academico" ><a href="#"><i class="lnr lnr-layers"></i> <span>Components</span> <span class="fa fa-angle-right" style="float: right"></span></a>
										 <ul id="menu-academico-sub" >
											<li id="menu-academico-avaliacoes" ><a href="grids.html">Grids</a></li>
											<li id="menu-academico-boletim" ><a href="media.html">Media Objects</a></li>

										  </ul>
									 </li>
									<li><a href="chart.html"><i class="lnr lnr-chart-bars"></i> <span>Charts</span> <span class="fa fa-angle-right" style="float: right"></span></a>
									  <ul>
										<li><a href="map.html"><i class="lnr lnr-map"></i> Maps</a></li>
										<li><a href="graph.html"><i class="lnr lnr-apartment"></i> Graph Visualization</a></li>
									</ul>
									</li>
									<li id="menu-comunicacao" ><a href="#"><i class="fa fa-smile-o"></i> <span>More</span><span class="fa fa-angle-double-right" style="float: right"></span></a>
									    <ul id="menu-comunicacao-sub" >
										<li id="menu-mensagens" style="width:120px" ><a href="project.html">Projects <i class="fa fa-angle-right" style="float: right; margin-right: -8px; margin-top: 2px;"></i></a>
										  <ul id="menu-mensagens-sub" >
											<li id="menu-mensagens-enviadas" style="width:130px" ><a href="ribbon.html">Ribbons</a></li>
											<li id="menu-mensagens-recebidas"  style="width:130px"><a href="blank.html">Blank</a></li>
										  </ul>
										</li>
										<li id="menu-arquivos" ><a href="500.html">500</a></li>
									  </ul>
									</li>
								  </ul>
								</div>
							  </div>
							  <div class="clearfix"></div>		
							</div>
							<script>
							var toggle = true;
										
							$(".sidebar-icon").click(function() {                
							  if (toggle)
							  {
								$(".page-container").addClass("sidebar-collapsed").removeClass("sidebar-collapsed-back");
								$("#menu span").css({"position":"absolute"});
							  }
							  else
							  {
								$(".page-container").removeClass("sidebar-collapsed").addClass("sidebar-collapsed-back");
								setTimeout(function() {
								  $("#menu span").css({"position":"relative"});
								}, 400);
							  }
											
											toggle = !toggle;
										});
							</script>
<!--js -->

    <script src="<?php echo base_url().'assets/js/jquery-2.1.4.min.js'?>"></script>
    <script src="<?php echo base_url().'assets/js/jquery.datatables.min.js'?>"></script>
    <script src="<?php echo base_url().'assets/js/dataTables.bootstrap.js'?>"></script>
	<script src="<?php echo base_url().'assets/js/jquery.nicescroll.js'?>"></script>
	<script src="<?php echo base_url().'assets/js/scripts.js'?>"></script>
<!-- Bootstrap Core JavaScript -->
   <script src="<?php echo base_url().'assets/js/bootstrap.min.js'?>"></script>
<script>
    $(document).ready(function(){
        // Setup datatables
        $.fn.dataTableExt.oApi.fnPagingInfo = function(oSettings)
      {
          return {
              "iStart": oSettings._iDisplayStart,
              "iEnd": oSettings.fnDisplayEnd(),
              "iLength": oSettings._iDisplayLength,
              "iTotal": oSettings.fnRecordsTotal(),
              "iFilteredTotal": oSettings.fnRecordsDisplay(),
              "iPage": Math.ceil(oSettings._iDisplayStart / oSettings._iDisplayLength),
              "iTotalPages": Math.ceil(oSettings.fnRecordsDisplay() / oSettings._iDisplayLength)
          };
      };
 
      var table = $("#mytable").dataTable({
          initComplete: function() {
              var api = this.api();
              $('#mytable_filter input')
                  .off('.DT')
                  .on('input.DT', function() {
                      api.search(this.value).draw();
              });
          },
              oLanguage: {
              sProcessing: "loading..."
          },
              processing: true,
              serverSide: true,
              ajax: {"url": "<?php echo base_url().'index.php/admin/User/get_User_json'?>", "type": "POST"},
                    columns: [
                                                {"data": "u_id"},
                                                {"data": "u_name"},
                                                {"data": "u_paswd"},
                                                {"data": "role"},
                                                {"data": "view"}
                  ],
                order: [[1, 'asc']],
          rowCallback: function(row, data, iDisplayIndex) {
              var info = this.fnPagingInfo();
              var page = info.iPage;
              var length = info.iLength;
              $('td:eq(0)', row).html();
          }
 
      });
            // end setup datatables
            // get Edit Records
            $('#mytable').on('click','.edit_record',function(){
              var id=$(this).data('id');
              var nama=$(this).data('nama');
              var pass=$(this).data('pass');
              var level=$(this).data('level');
              $('#UserUpdate').modal('show');
              $('[name="uid"]').val(id);
              $('[name="username"]').val(nama);
              $('[name="password"]').val(pass);
              $('[name="level"]').val(level);

              // var uidok=$('[name="uid"]').val();
              // window.alert("id atas: "+id+" id bawah: "+uidok);
      });
            // End Edit Records
            // get Hapus Records
            $('#mytable').on('click','.hapus_record',function(){
            var id=$(this).data('id');
            $('#UserHapus').modal('show');
            $('[name="uid"]').val(id);
            // window.alert($('[name="uid"]').val());

      });
            // End Hapus Records
 
    });
</script>
</body>
</html>