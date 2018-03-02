<main role="main" class="container">
		<?php 
			if(!empty($beli)){
				$no = 1;
				?>
					<table id="TableData" class="table table-striped">
						<thead>
						<tr>
							<th>NO</th>
							<th>Kode Transaksi</th>
							<th>Nama Barang</th>
							<th>Nama Supplier</th>
							<th>QTY</th>
							<th>Tanggal</th>
							<th>Aksi</th>
						</tr>
						</thead>
						<tbody>
						<?php
							foreach ($beli as $s => $d) {
								?>
									<tr>
										<td><?php echo $no++;?></td>
										<td><?php echo $d->notransaksi;?></td>
										<td><?php echo $d->namabarang;?></td>
										<td><?php echo $d->namasupplier;?></td>
										<td><?php echo $d->pembelian_qty;?></td>
										<td><?php echo $d->tanggal;?></td>

										<td><btn class="btn btn-danger hpsBr" act-link="<?php echo base_url();?>index.php/pembelian/hapus" key="<?php echo $d->no_invoice;?>">Hapus</btn></td>
										
									</tr>
								<?php 
							}
						?>
						</tbody>
					</table>
					<a href="<?php echo base_url();?>index.php/pembelian/tambah"><button class="btn btn-primary">Tambah</button></a>
				<?php
			}else{
				?>
					<h3>Data pembelian kosong</h3>
					<a href="<?php echo base_url();?>index.php/pembelian/tambah"><button>Tambah</button></a>
				<?php
			}

		?>
</main>