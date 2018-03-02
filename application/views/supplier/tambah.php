<main role="main" class="container">
	<form method="POST" action="<?php echo base_url();?>index.php/supplier/tambah/proses"> 
		<table class="table">
			<tr>
				<td>
				Kode Supplier</td>
				<td>:</td>
				<td><input type="text" size="30" name="kodesupplier" value="<?php echo generateSupplier();?>" readOnly=true/></td>
			</tr>
			<tr>
				<td>
				Nama Supplier</td>
				<td>:</td>
				<td><input type="text" class="form-control" size="30" name="namasupplier" /></td>
			</tr>
			<tr>
				<td>
				Alamat Supplier</td>
				<td>:</td>
				<td><input type="text" class="form-control" size="30" name="alamat" /></td>
			</tr>
			<tr>
				<td>
				No Telp</td>
				<td>:</td>
				<td><input type="text" class="form-control" size="30" name="notelp" /></td>
			</tr>
			<tr>
				<td>
				Email</td>
				<td>:</td>
				<td><input type="text" class="form-control" size="30" name="email" /></td>
			</tr>
		</table>
		<input type="submit" class="btn btn-primary" value="Simpan" />
		</form>
		</p>
</main>