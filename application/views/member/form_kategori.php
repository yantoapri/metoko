<h5>
    <span class="float-left"><span class="fa fa-edit"></span> <?php echo $title; ?></span>
    <span class="float-right"><?php echo date("d-m-Y"); ?></span>
</h5>
<br>
<hr>

<form class="col-md-4" method="post" action="<?php echo site_url(); ?>/<?php echo $aksi; ?>">
	Nama Kategori
	<input placholder="Kategori" maxlength="20" required  class="form-control" value="<?php if($data!=null)  echo $data->kategori; ?>" name="kategori">
	Keterangan
	<textarea placholder="Keterangan" maxlength="1000" required  name="keterangan" class="form-control"><?php if($data!=null) echo $data->keterangan; ?></textarea>
	<br>
	<button class="btn btn-outline-success btn-sm"><span class="fa fa-save"></span> Simpan</button>
	<a class="btn btn-sm btn-outline-danger" href="<?php echo site_url(); ?>/member/kategori"><span class="fa fa-backward"></span> Kembali</a>

</form>