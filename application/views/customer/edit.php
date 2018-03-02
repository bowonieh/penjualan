<main role="main" class="container">
	<form method="POST" action="<?php echo base_url();?>index.php/customer/aksiedit" class=""> 
		<table class="table">
			<tr>
				<td>
				Kode customer</td>
				<td>:</td>
				<td><input class="form-control" type="text" size="30" name="kodecustomer" value="<?php echo $dtl->kodecustomer;?>" readOnly=true/></td>
			</tr>
			<tr>
				<td>
				Nama customer</td>
				<td>:</td>
				<td><input type="text" class="form-control" size="30" name="namacustomer" value="<?php echo $dtl->namacustomer;?>"/></td>
			</tr>
			<tr>
				<td>
				Alamat customer</td>
				<td>:</td>
				<td><input type="text" class="form-control" size="30" name="alamat" value="<?php echo $dtl->alamat;?>"/></td>
			</tr>
			<tr>
				<td>
				No Telp</td>
				<td>:</td>
				<td><input type="text" class="form-control" size="30" name="notelp" value="<?php echo $dtl->notelp;?>"/></td>
			</tr>
			<tr>
				<td>
				Email</td>
				<td>:</td>
				<td><input type="text" class="form-control" size="30" name="email" value="<?php echo $dtl->email;?>"/></td>
			</tr>
		</table>
		<input type="submit" value="Simpan" class="btn btn-primary" /> 
				


		</form>
	</main>