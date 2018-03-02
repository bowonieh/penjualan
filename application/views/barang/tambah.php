<main role="main" class="container">
	<form method="POST" action="<?php echo base_url();?>index.php/barang/tambah/proses"> 
		<table class="table table-striped">
			<tr>
				<td>
				Kode Barang</td>
				<td>:</td>
				<td><input class="form-control" type="text" size="30" name="kodebarang" value="<?php echo generateKodebrg();?>" readOnly=true/></td>
			</tr>
			<tr>
				<td>
				Nama Barang</td>
				<td>:</td>
				<td><input class="form-control" type="text" size="30" name="namabarang" /></td>
			</tr>
			<tr>
				<td>
				Harga Barang</td>
				<td>:</td>
				<td><input class="form-control" type="text" size="30" name="hargabarang" /></td>
			</tr>
		
		</table>
		<input type="submit" class="btn btn-primary" value="Simpan" /> 
				


		</form>
	</main>