<h5>
    <span class="float-left"><span class="fa fa-magic"></span> Produk</span>
    <span class="float-right"><?php echo date("d-m-Y"); ?></span>
</h5>
<br>
<hr>
<a class="btn btn-sm btn-outline-info" href="<?php echo site_url(); ?>/member/produk/add"><span class="fa fa-plus"></span> Buat Baru</a>
<br><br>
<table class="table table-bordered btn-sm">
	<tr>
		<td>Nama Produk</td><td>Kategori</td><td>Harga</td><td>Public View</td><td>Tindakan</td>
	</tr>
	<?php foreach ($data as $val) {?>
		<tr>
			<td><?php echo $val->produk; ?></td><td><?php echo $val->kategori; ?></td><td><?php echo number_format($val->harga,2); ?></td>
			<td>
				<span class="fa fa-thumbs-up"><?php echo $val->like; ?></span>
				<span class="fa fa-eye"><?php echo $val->view; ?></span>
				<span class="fa fa-download"><?php echo $val->download; ?></span>
			</td>
			<td>
				<a href="<?php echo site_url(); ?>/member/produk/edit/<?php echo $val->id; ?>" class="btn btn-sm btn-outline-warning"><span class="fa fa-edit"></span></a>
				<button id="<?php echo $val->id; ?>"  class="btn btn-sm btn-outline-danger hp"><span class="fa fa-trash"></span></button>
			</td>
		</tr>
	<?php } ?>
</table>
<script type="text/javascript">
$(function(){
	$(".hp").click(function(){
		id=$(this).attr("id");
        msg=confirm("Apa Anda Yakin?");
        if(msg)
        window.location=("<?php echo site_url(); ?>/member/produk/delete/"+id);
	});
});
</script>