<h5>
    <span class="float-left"><span class="fa fa-edit"></span> <?php echo $title; ?></span>
    <span class="float-right"><?php echo date("d-m-Y"); ?></span>
</h5>
<br>
<hr>

<form class="col-md-4" method="post" action="<?php echo site_url(); ?>/<?php echo $aksi; ?>">
	To
	<input  maxlength="20"  class="form-control" value="<?php if($data!=null)  echo $data->username; ?>" readonly>
	Pesan
	<textarea placholder="Pesan" maxlength="1000" required id="pesan"  name="pesan" class="form-control"></textarea>
	<br>
	<button class="btn btn-outline-success btn-sm"><span class="fa fa-save"></span> Simpan</button>
	<a class="btn btn-sm btn-outline-danger" href="<?php echo site_url(); ?>/member/pesan"><span class="fa fa-backward"></span> Kembali</a>

</form>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/ckeditor/ckeditor.js"></script>
<script type="text/javascript">
CKEDITOR.replace("pesan");
</script>