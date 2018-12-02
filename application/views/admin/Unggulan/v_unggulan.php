<?php $this->load->view("admin/side/header") ?>
<?php $this->load->view("admin/side/sidebar") ?>

<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-primary card-header-icon">
            <div class="card-icon">
              <i class="material-icons">photo_library</i>
            </div>
            <h4 class="card-title">Data Produk Unggulan</h4>
          </div>
          <div class="card-body">
            <div class="toolbar">
              <a href="<?php echo base_url('admin/Unggulan/tambah_unggulan') ?>" class="btn btn-success">Tambah</a>
            </div>
            <div class="material-datatables">

              <table id="datatables" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
                <thead>
                  <tr>
                    <th>No.</th>
                    <th>Judul Unggulan</th>
                    <th>Isi Unggulan</th>
                    <th>Gambar Unggulan</th>
                    <th class="disabled-sorting text-right">Actions</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $no=0; foreach ($unggulan as $unggulanes) {?>
                    <tr>
                      <th><?php echo ++$no; ?></th>
                      <td><?php echo $unggulanes->judul_unggulan;  ?></td>
                      <td><?php echo $unggulanes->isi_unggulan;  ?></td>
                      <td><img style="width: 150px;height: 150px" src="<?php echo base_url("$unggulanes->gambar_unggulan"); ?>"></td>
                      <td class="text-right">
                        <a href="<?php echo base_url("admin/Unggulan/edit/".$unggulanes->id_unggulan); ?>" class="btn btn-simple btn-warning btn-icon like"><i class="material-icons">edit</i></a>
                        <a href="<?php echo base_url("admin/Unggulan/hapus/".$unggulanes->id_unggulan) ?>" onclick="return confirm('Data Akan Dihapus !')" class="btn btn-simple btn-danger btn-icon edit"><i class="material-icons">delete</i></a>
                      </td>
                    </tr>
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


    var table = $('#datatables').DataTable();

  // Edit record
  table.on( 'click', '.edit', function () {
    $tr = $(this).closest('tr');

    var data = table.row($tr).data();
    alert( 'You press on Row: ' + data[0] + ' ' + data[1] + ' ' + data[2] + '\'s row.' );
  } );

  // Delete a record
  table.on( 'click', '.remove', function (e) {
    $tr = $(this).closest('tr');
    table.row($tr).remove().draw();
    e.preventDefault();
  } );

  //Like record
  table.on( 'click', '.like', function () {
    alert('You clicked on Like button');
  });

  $('.card .material-datatables label').addClass('form-group');
});

</script>