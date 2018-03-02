<h5>
    <span class="float-left"><span class="fa fa-tag"></span> <?php echo $title; ?></span>
    <span class="float-right"><?php echo date("d-m-Y"); ?></span>
</h5>
<br>
<hr>

<br><br>
<table class="table table-bordered btn-sm">
	<tr>
		<td>Penerima</td><td>Pesan</td><td>Tindakan</td>
	</tr>
	<?php foreach($data as $val){?>
		<tr>
			<td><?php echo $val->username; ?>  <span class='badge badge-info'><sup>*</sup> New</span></td><td><?php echo substr($val->isi, 0,225); ?>............</td>
			<td>
				<a href="<?php echo site_url(); ?>/member/pesan/edit/<?php echo $val->id; ?>" class="btn btn-sm btn-outline-warning"><span class="fa fa-eye"></span></a>
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
        window.location=("<?php echo site_url(); ?>/member/pesan/delete/"+id);
	});
});
</script>