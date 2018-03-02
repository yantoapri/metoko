<h5>
    <span class="float-left"><span class="fa fa-edit"></span> <?php echo $title; ?></span>
    <span class="float-right"><?php echo date("d-m-Y"); ?></span>
</h5>
<br>
<hr>

<form class="col-md-12 row " method="post" action="<?php echo site_url(); ?>/<?php echo $aksi; ?>">
	<div class="col-md-4">
		Nama Produk
		<input placholder="Contoh :Aplikasi Kasir" required maxlength="225" class="form-control btn-sm" value="<?php if($data!=null)  echo $data->produk; ?>" name="produk">
		Jenis Aplikasi
		<select name="jenis" class="form-control btn-sm" required >
			<option value="">---Pilih Jenis Aplikasi---</option>
			<option value="Android">Android</option>
			<option value="Desktop">Desktop</option>
			<option value="Web">Web</option>
		</select>
		Kategori
		<select name="kategori" class="form-control btn-sm" required >
			<option value="">---Pilih Kategori---</option>
			<?php foreach($kategori as $kat){?>
				<option value="<?php echo $kat->id; ?>"><?php echo $kat->kategori; ?></option>
			<?php } ?>
		</select>
		Background Image
		<input type="file" name="image" class="form-control btn-sm" required  >
		Url Download
		<input type="url" name="download" placholder="Contoh :http://example.com/download" class="form-control btn-sm" required  >
		Url Demo (Untuk Aplikasi Web Jika Ada)
		<input type="url" name="demo" placholder="Contoh :http://example.com/download" class="form-control btn-sm"  >
	</div>
	<div class="col-md-8">
		Deskripsikan Aplikasi Anda
		<textarea placholder="Keterangan" maxlength="1000" name="keterangan" id="keterangan" class="form-control btn-sm" ><?php if($data!=null) echo $data->keterangan; ?></textarea>
		<br>
		<button class="btn btn-outline-success btn-sm" type="submit"><span class="fa fa-save"></span> Simpan</button>
		<a class="btn btn-sm btn-outline-danger" href="<?php echo site_url(); ?>member//kategori"><span class="fa fa-backward"></span> Kembali</a>
	</div>

</form>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/ckeditor/ckeditor.js"></script>
<script type="text/javascript">
CKEDITOR.replace("keterangan");
</script>