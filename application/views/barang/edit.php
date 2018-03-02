<main role="main" class="container">
	
		<table class="table table-striped">
			<tr>
				<td>
				Kode Barang</td>
				<td>:</td>
				<td>
				<input class="form-control kodeBarang" type="text" size="30" name="kodebarang" value="<?php echo $dtl->kodebarang;?>" readOnly=true/>

				</td>

			</tr>
			<tr>
				<td>
				Nama Barang</td>
				<td>:</td>
				<td><input class="form-control namaBarang" type="text" size="30" name="namabarang" value="<?php echo $dtl->namabarang;?>" /></td>
			</tr>
			<tr>
				<td>
				Harga Barang</td>
				<td>:</td>
				<td><input class="form-control hargaBarang" type="text" size="30" name="hargabarang"  value="<?php echo $dtl->hargabarang;?>" /></td>
			</tr>
		
		</table>
		<btn class="btn btn-primary editBtn" act-prc="<?php echo base_url();?>index.php/barang/aksiedit">Ubah Data!</btn>
				


		
	</main>