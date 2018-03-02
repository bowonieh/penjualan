<main role="main" class="container">
	
		<table class="table table-striped">
			<tr>
				<td>
				Kode Barang</td>
				<td>:</td>
				<td>
				
				<span class="label"><?php echo $dtl->kodebarang;?></span>

				</td>

			</tr>
			<tr>
				<td>
				Nama Barang</td>
				<td>:</td>
				<td><span class="label"><?php echo $dtl->namabarang;?></span></td>
			</tr>
			<tr>
				<td>
				Harga Barang</td>
				<td>:</td>
				<td>
				<span class="label"><?php echo $dtl->hargabarang;?></span>
				</td>
			</tr>
		
		</table>
		<a href="<?php echo base_url();?>index.php/barang/"><btn class="btn btn-primary">Kembali!</btn></a>
				


		
	</main>