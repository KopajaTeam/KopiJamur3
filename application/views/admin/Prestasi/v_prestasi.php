<?php $this->load->view("admin/side/header") ?>
<?php $this->load->view("admin/side/sidebar") ?>

<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <?php if($this->session->flashdata()){?>
          <?php echo $this->session->flashdata('message');?>    
          <?php
        }
        ?>
        <div class="card">
          <div class="card-header card-header-primary card-header-icon">
            <div class="card-icon">
              <i class="material-icons">photo_library</i>
            </div>
            <h4 class="card-title">Data Prestasi</h4>
          </div>
          <div class="card-body">
            <div class="toolbar">
              <a href="<?php echo base_url('admin/Prestasi/tambah_prestasi') ?>" class="btn btn-success">Tambah</a>
            </div>
            <div class="material-datatables">
              <table id="datatables" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
                <thead>
                  <tr>
                    <th>No.</th>
                    <th>Judul Prestasi</th>
                    <th>Isi Prestasi</th>
                    <th>Gambar Prestasi</th>
                    <th class="disabled-sorting text-right">Actions</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $no=0; foreach ($prestasi as $prestasies) {?>
                    <tr>
                      <th><?php echo ++$no; ?></th>
                      <td><?php echo $prestasies->judul_prestasi;  ?></td>
                      <td><?php echo $prestasies->isi_prestasi;  ?></td>
                      <td><img class="img-thumbnail img-fluid" style="width: 150px;height: 150px" src="<?php echo base_url("$prestasies->gambar_prestasi"); ?>"></td>
                      <td class="text-right">
                          <a href="<?php echo base_url("admin/Prestasi/edit/".$prestasies->id_prestasi); ?>" class="btn btn-simple btn-warning btn-icon like"><i class="material-icons">edit</i></a>
                          <button data-toggle="modal" data-target="#exampleModal<?php echo $prestasies->id_prestasi?>" class="btn btn-simple btn-danger btn-icon edit"><i class="material-icons">delete</i></button>
                      </td>
                    </tr>
                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal<?php echo $prestasies->id_prestasi?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Hapus Prestasi</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                            Ketika menekan tombol Hapus maka data prestasi akan dihapus, Apakah anda yakin? 
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-simple" data-dismiss="modal">Tutup</button>
                            <a href="<?php echo base_url("admin/Prestasi/hapus/".$prestasies->id_prestasi) ?>" class="btn btn-danger">Hapus</a>
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

  });
</script>