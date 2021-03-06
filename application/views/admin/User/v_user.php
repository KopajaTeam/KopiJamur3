<?php $this->load->view("admin/side/header") ?>
<?php $this->load->view("admin/side/sidebar") ?>

<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-primary card-header-icon">
            <div class="card-icon">
              <i class="material-icons">account_circle</i>
            </div>
            <h4 class="card-title">Data User</h4>
          </div>
          <div class="card-body">
            <div class="toolbar">
              <!-- <a href="<?php echo base_url('User/tambah_user') ?>" class="btn btn-success">Tambah</a> -->
            </div>
            <div class="material-datatables">

              <table id="datatables" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
                <thead>
                  <tr>
                    <th style="width: 50px">No.</th>
                    <th>Nama Lengkap</th>
                    <th style="text-align: center">Email</th>
                    <th>Alamat</th>
                    <th>No. Telp</th>
                    <th style="text-align: center">Foto</th>
                    <th class="disabled-sorting text-right  ">Actions</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $no=0; foreach ($user as $users) {?>
                  <tr>
                    <th style="width: 50px"><?php echo ++$no; ?></th>
                    <td><?php echo $users->nama; ?></td>
                    <td><?php echo $users->email; ?></td>
                    <td><?php echo $users->alamat; ?></td>
                    <td><?php echo $users->telp; ?></td>
                    <td data-toggle="modal" data-target="#myModal<?php echo base_url("$users->foto"); ?>">
                      <img class="img-thumbnail img-fluid" style="width: 150px;height: 150px" src="<?php echo base_url("$users->foto"); ?>">
                    </td>
                    <td class="text-right">
                      <button data-toggle="modal" data-target="#exampleModal<?php echo $users->nama ?>" class="btn btn-simple btn-danger btn-icon edit"><i class="material-icons">delete</i></button>
                      <!-- <a href="<?php echo base_url("admin/User/hapus/".$users->id_user) ?>" onclick="return confirm('Data Akan Dihapus !')" class="btn btn-simple btn-danger btn-icon edit"><i class="material-icons">delete</i></a> -->
                      <a href="<?php echo base_url("admin/User/lihat_user/".$users->id_user) ?>" class="btn btn-simple btn-info btn-icon remove"><i class="material-icons">visibility</i></a>
                    </td>
                  </tr>
                  <!-- modal gambar -->
                  <div class="modal fade" id="myModal<?php echo base_url("$users->foto"); ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="myModalLabel"><?php echo ("$users->nama"); ?></h4>
                          </div>
                          <div class="modal-body">
                            <center>  
                              <img alt="Kopi Jamur" class="img-thumbnail img-fluid" style="width: 1500px; height: 400px" src="<?php echo base_url("$users->foto"); ?>">
                            </center>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> 
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal<?php echo $users->nama ?>"  tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel<?php echo $users->nama ?>"><?php echo $users->nama ?></h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                            Ketika menekan tombol Hapus maka data user akan dihapus, Apakah anda yakin? 
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-simple" data-dismiss="modal">Tutup</button>
                            <a href="<?php echo base_url("admin/User/hapus/".$users->id_user) ?>"class="btn btn-danger">Hapus</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  <?php } ?>
                </tbody>
              </table>
            </div>
          </div><!-- end content-->
        </div><!--  end card  -->
      </div> <!-- end col-md-12 -->
    </div> <!-- end row -->
  </div>
</div>

<?php $this->load->view("admin/side/footer") ?>
<?php $this->load->view("admin/side/js") ?>
<script type="text/javascript">
  $(document).ready(function() {
    $('#datatables').DataTable({
      "pagingType": "full_numbers",
      "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
      responsive: true,
      language: {
        search: "_INPUT_",
        searchPlaceholder: "Search records",
      }

    });


  // var table = $('#datatables').DataTable();

  // // Edit record
  // table.on( 'click', '.edit', function () {
  //   $tr = $(this).closest('tr');

  //   var data = table.row($tr).data();
  //   alert( 'You press on Row: ' + data[0] + ' ' + data[1] + ' ' + data[2] + '\'s row.' );
  // } );

  // // Delete a record
  // table.on( 'click', '.remove', function (e) {
  //   $tr = $(this).closest('tr');
  //   table.row($tr).remove().draw();
  //   e.preventDefault();
  // } );

  // //Like record
  // table.on( 'click', '.like', function () {
  //   alert('You clicked on Like button');
  // });

  $('.card .material-datatables label').addClass('form-group');
});

</script>