<?php 

if (!isset($_SESSION['nama_admin'])) {
  redirect('admin/Login_adm');
}
?>
<?php $this->load->view("admin/side/header") ?>
<?php $this->load->view("admin/side/sidebar") ?>
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="card card-stats">
          <div class="card-header card-header-warning card-header-icon">
            <div class="card-icon">
              <i class="material-icons">forum</i>
            </div>
            <p class="card-category">Forum</p>
            <h3 class="card-title"><?php echo $this->Admin_Dashboard->beforeforum()->num_rows();?></h3>
          </div>
          <div class="card-footer">
            <div class="stats">
              <i class="material-icons">arrow_right_alt</i>
              <a href="forum">Click Me...!!!</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="card card-stats">
          <div class="card-header card-header-rose card-header-icon">
            <div class="card-icon">
              <i class="material-icons">assignment_ind</i>
            </div>
            <p class="card-category">User </p>
            <h3 class="card-title"><?php echo $this->K_jamur->select('user')->num_rows();?></h3>
          </div>
          <div class="card-footer">
            <div class="stats">
              <i class="material-icons">arrow_right_alt</i>
              <a href="user">Click Me...!!!</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="card card-stats">
          <div class="card-header card-header-success card-header-icon">
            <div class="card-icon">
              <i class="material-icons">unarchive</i>
            </div>
            <p class="card-category">Produk</p>
            <h3 class="card-title"><?php echo $this->Admin_Dashboard->select_produk()->num_rows();?></h3>
          </div>
          <div class="card-footer">
            <div class="stats">
              <i class="material-icons">arrow_right_alt</i>
              <a href="produk">Click Me...!!!</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="card card-stats">
          <div class="card-header card-header-info card-header-icon">
            <div class="card-icon">
              <i class="material-icons">verified_user</i>
            </div>
            <p class="card-category">Testimonial</p>
            <h3 class="card-title"><?php echo $this->M_testi->testi()->num_rows();?></h3>
          </div>
          <div class="card-footer">
            <div class="stats">
              <i class="material-icons">arrow_right_alt</i>
              <a href="testimonial">Click Me...!!!</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-primary card-header-icon">
            <div class="card-icon">
              <i class="material-icons">assignment</i>
            </div>
            <h4 class="card-title">Transaksi</h4>
          </div>
          <div class="card-body">
            <div class="toolbar">
              <!--        Here you can write extra buttons/actions for the toolbar              -->
            </div>
            <div class="material-datatables">

              <table id="datatables" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
                <thead>
                  <tr>
                    <th>No.</th>
                    <th>Kode Order</th>
                    <th>Nama User</th>
                    <th>Tanggal Transfer</th>
                    <th>Alamat Pengiriman</th>
                    <th>Jumlah Transfer</th>
                    <th>Foto Bukti</th>
                    <th>Status</th>
                    <th class="disabled-sorting text-right">Actions</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $no=0; foreach ($transaksi as $transaksi_adm): ?>
                  <tr>
                    <th><?php echo ++$no; ?></th>
                    <td><?php echo $transaksi_adm->id_transaksi; ?></td>
                    <td><?php echo $transaksi_adm->nama; ?></td>
                    <td><?php echo $transaksi_adm->tgl_transfer; ?></td>
                    <td><?php echo $transaksi_adm->alamat_pengiriman; ?></td>
                    <td><?php echo $transaksi_adm->jumlah_transfer; ?></td>
                    <td data-toggle="modal" data-target="#myModal<?php echo base_url("$transaksi_adm->bukti"); ?>">
                      <img style="width: 150px;height: 100px" class="img-thumbnail img-fluid" src="<?php echo base_url($transaksi_adm->bukti); ?>">
                    </td>
                    <!-- <td><img style="width: 150px;height: 100px" class="img-thumbnail img-fluid" src="<?php //echo base_url($transaksi_adm->bukti); ?>"></td> -->
                    <td><?php if($transaksi_adm->status == 0) {?>
                                <i>Belum Membayar</i>
                                <?php } elseif($transaksi_adm->status == 1) {?>
                                <i>Belum terkonfirmasi</i><?php } elseif($transaksi_adm->status == 2){ ?>
                                <i>Terkonfirmasi</i><?php } else{ ?>
                                <i>Dibatalkan</i><?php } ?></td>
                    <td class="text-right">
                      <a href="<?php echo base_url('admin/Dashboard/konfirmasi_transaksi/'.$transaksi_adm->id_transaksi) ?>" class="btn btn-simple btn-success btn-icon like"><i class="material-icons">check</i></a>
                      <a href="<?php echo base_url('admin/Dashboard/batal_transaksi/'.$transaksi_adm->id_transaksi) ?>" class="btn btn-simple btn-warning btn-icon like"><i class="material-icons">close</i></a>
                      <a href="<?php echo base_url('admin/Dashboard/detail_pesanan/'.$transaksi_adm->id_transaksi) ?>" class="btn btn-simple btn-info btn-icon like"><i class="material-icons">visibility</i></a>
                      <button data-toggle="modal" data-target="#exampleModal<?php echo $transaksi_adm->id_transaksi ?>" class="btn btn-simple btn-danger btn-icon edit"><i class="material-icons">delete</i></button>
                    </td>
                  </tr>
                  <!-- modal gambar -->
                  <div class="modal fade" id="myModal<?php echo base_url("$transaksi_adm->bukti"); ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="myModalLabel"><?php echo ("$transaksi_adm->nama"); ?></h4>
                          </div>
                          <div class="modal-body">
                            <center>  
                              <img alt="Kopi Jamur" class="img-thumbnail img-fluid" style="width: 1500px; height: 400px" src="<?php echo base_url("$transaksi_adm->bukti"); ?>">
                            </center>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> 
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal<?php echo $transaksi_adm->id_transaksi ?>"  tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel<?php echo $transaksi_adm->id_transaksi ?>"></h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                            Ketika menekan tombol Hapus maka data transaksi akan dihapus, Apakah anda yakin? 
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-simple" data-dismiss="modal">Tutup</button>
                            <a href="<?php echo base_url("admin/Dashboard/hapus/".$transaksi_adm->id_transaksi) ?>"class="btn btn-danger">Hapus</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  <?php endforeach ?>
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


  //   var table = $('#datatables').DataTable();

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
