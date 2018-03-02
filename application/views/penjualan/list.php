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
							<th>Nama customer</th>
							<th>NO PO</th>
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
										<td><?php echo $d->namacustomer;?></td>
										<td><?php echo $d->no_po;?></td>
										<td><?php echo $d->tanggal;?></td>

										<td><a href="<?php echo base_url();?>index.php/penjualan/detil/<?php echo $d->notransaksi;?>"><btn class="btn btn-secondary">Detil Penjualan</btn></a> | <btn class="btn btn-danger hpsBr" act-link="<?php echo base_url();?>index.php/penjualan/hapus" key="<?php echo $d->notransaksi;?>">Hapus</btn></td>
										
									</tr>
								<?php 
							}
						?>
						</tbody>
					</table>
					<a href="<?php echo base_url();?>index.php/penjualan/tambah"><button class="btn btn-primary">Tambah</button></a>
				<?php
			}else{
				?>
					<h3>Data pembelian kosong</h3>
					<a href="<?php echo base_url();?>index.php/penjualan/tambah"><button>Tambah</button></a>
				<?php
			}

		?>
</main>