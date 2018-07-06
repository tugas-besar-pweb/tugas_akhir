<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Pegawai</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/bootstrap.min.css">
    <!--<script src="<?php echo base_url()?>assets/js/bootstrap.min.js"></script>-->

    <link rel="stylesheet" href="<?=base_url()?>assets/DataTables/datatables.min.css">

</head>
<body scroll="no">
    
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">User Tabel</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="<?php echo site_url('admin/c_admin/') ?>">Beranda</a></li>
            <li><a class="btn" data-toggle="modal" data-target="#myUserAdd" >Tambah Data</a></li>
            <li><a href="<?php echo site_url('admin/c_admin/logout'); ?>">Logout</a>
          </ul>
        </div>
      </div>
    </nav>
    <div class="container">
    <br><br><br><h3>Hai, selamat datang! Anda login sebagai <b><?php echo $username; ?></b></h3>
    <br>
  </div>
    <div class="container">
      <h2><b>User Tabel</b></h2>
      <table class="table table-striped" id="mytable">
        <thead>
          <tr>
            <th>User Id</th>
            <th>Username</th>
            <th>Password</th>
            <th>Level</th>
            <th>Action</th>
          </tr>
        </thead>
      </table>
    </div>
  
    <!-- User Add User-->
      <form id="add-row-form" action="<?php echo base_url().'index.php/admin/User/simpan'?>" method="post">
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
     </form>
 
     <!-- User Update User-->
      <form id="add-row-form" action="<?php echo base_url().'index.php/admin/User/update'?>" method="post">
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
     </form>
 
     <!-- User Hapus User-->
      <form id="add-row-form" action="<?php echo base_url().'index.php/admin/User/delete'?>" method="post">
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
 
<script src="<?php echo base_url().'assets/js/jquery-2.1.4.min.js'?>"></script>
<script src="<?php echo base_url().'assets/js/bootstrap.js'?>"></script>
<script src="<?php echo base_url().'assets/js/jquery.datatables.min.js'?>"></script>
<script src="<?php echo base_url().'assets/js/dataTables.bootstrap.js'?>"></script>
 
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