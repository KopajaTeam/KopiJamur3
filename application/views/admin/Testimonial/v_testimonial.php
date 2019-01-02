<?php $this->load->view("admin/side/header") ?>
<?php $this->load->view("admin/side/sidebar") ?>

<div class="content">
  <div class="container-fluid">
  <div class="row">
      <div class="col-md-12">
          <div class="card">
            <div class="card-header card-header-primary card-header-icon">
              <div class="card-icon">
                <i class="material-icons">verified_user</i>
              </div>
              <h4 class="card-title">Data Testimonial</h4>
            </div>
              <div class="card-body">
                  <div class="toolbar">
<!--                       <a href="<?php //echo base_url('Testimonial/tambah_testimonial') ?>" class="btn btn-success">Tambah</a> -->
                  </div>
                  <div class="material-datatables">
        
                  <table id="datatables" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
                      <thead>
                          <tr>
                              <th>Nama User</th>
                              <th>Nama Produk</th>
                              <th>Isi Testimoni</th>
                              <th>Gambar</th>
                        
                              <th class="disabled-sorting text-right">Actions</th>
                          </tr>
                      </thead>
                    
                      <tbody>
                         <?php foreach ($testimoni as $testie) {?>
                          <tr>
                              <td><?php echo $testie->nama; ?></td>
                              <td><?php echo $testie->nama_produk; ?></td>
                              <td><?php echo $testie->komentar; ?></td>
                              <td data-toggle="modal" data-target="#myModal<?php echo base_url("$testie->gambar_testi"); ?>">
                              <img class="img-thumbnail img-fluid" style="width: 150px;height: 150px" src="<?php echo base_url("$testie->gambar_testi"); ?>">
                              </td>
                              <td class="text-right">
                              <!-- <a href="<?php echo base_url('Admin/Testimonial/deletdata/'.$testie->id_testimoni); ?>" class="btn btn-simple btn-danger btn-icon edit"><i class="material-icons">close</i></a> -->
                              <button data-toggle="modal" data-target="#exampleModal<?php echo $testie->id_testimoni ?>" class="btn btn-simple btn-danger btn-icon edit"><i class="material-icons">delete</i></button>
                              </td>
                          </tr>
                          <!-- modal gambar -->
                          <div class="modal fade" id="myModal<?php echo base_url("$testie->gambar_testi"); ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                              <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title" id="myModalLabel"><?php echo ("$testie->nama"); ?></h4>
                                  </div>
                                  <div class="modal-body">
                                    <center>  
                                      <img alt="Kopi Jamur" class="img-thumbnail img-fluid" style="width: 1500px; height: 400px" src="<?php echo base_url("$testie->gambar_testi"); ?>">
                                    </center>
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> 
                                  </div>
                                </div>
                              </div>
                            </div>
                            <!-- Modal -->
                    <div class="modal fade" id="exampleModal<?php echo $testie->id_testimoni ?>"  tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel<?php echo $testie->id_testimoni ?>"><?php echo $testie->nama ?></h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                            Ketika menekan tombol Batalkan maka data testimonial akan dibatalkan, Apakah anda yakin? 
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-simple" data-dismiss="modal">Tutup</button>
                            <a href="<?php echo base_url('Admin/Testimonial/deletdata/'.$testie->id_testimoni); ?>"class="btn btn-danger">Batalkan</a>
                          </div>
                        </div>
                      </div>
                    </div>
                        <?php  } ?>    
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