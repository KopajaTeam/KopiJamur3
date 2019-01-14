s<?php $this->load->view("admin/side/header") ?>
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
              <i class="material-icons">mail_outline</i>
            </div>
            <h4 class="card-title">Data Kritik Saran</h4>
          </div>
          <div class="card-body">
            <div class="material-datatables">
              <table id="datatables" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
                <thead>
                  <tr>
                    <th>No.</th>
                    <th>Nama</th>
                    <th>Alamat Email</th>
                    <th>Komentar</th>
                    <th class="disabled-sorting text-right">Actions</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $no=0; foreach ($Kritik_saran as $komen) {?>
                    <tr>
                      <th><?php echo ++$no; ?></th>
                      <td><?php echo $komen->nama_kritik_saran;  ?></td>
                      <td><?php echo $komen->email_kritik_saran;  ?></td>
                      <td><?php echo $komen->isi_kritik_saran;  ?></td>
                      <td class="text-right">
                        <button data-toggle="modal" data-target="#exampleModal<?php echo $komen->id_kritik_saran?>" class="btn-simple btn-danger btn-icon edit"><i class="material-icons">delete</i></button>
                      </td>
                    </tr>
                    <div class="modal fade" id="exampleModal<?php echo $komen->id_kritik_saran ?>"  tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel<?php echo ("$komen->nama_kritik_saran"); ?>"><?php echo ("$komen->nama_kritik_saran"); ?></h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                            Ketika menekan tombol Hapus maka data kritik saran akan dihapus, Apakah anda yakin? 
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-simple" data-dismiss="modal">Tutup</button>
                            <a href="<?php echo base_url("admin/Kritik_saran/hapus/".$komen->id_kritik_saran) ?>"class="btn btn-danger">Hapus</a>
                          </div>
                        </div>
                      </div >
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
