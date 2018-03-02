<main role="main" class="container">
		<?php 
			if(!empty($barang)){
				$no = 1;
				?>
					<table id="TableData" class="table table-striped">
						<thead>
						<tr>
							<th>NO</th>
							<th>Kode Barang</th>
							<th>Nama Barang</th>
							<th>Stok</th>
							<th>Aksi</th>
						</tr>
						</thead>
						<tbody>
						<?php
							foreach ($barang as $s => $d) {
								?>
									<tr>
										<td><?php echo $no++;?></td>
										<td><?php echo $d->kdbrg;?></td>
										<td><?php echo $d->namabarang;?></td>
										<td>
										<?php 
										if (empty($d->stock)){
											echo $d->pembelian_qty;
										}elseif(empty($d->pembelian_qty)){
											echo "0";
										}else{
											echo $d->stock;	
										}
										
										?>
										</td>

										<td><a href="<?php echo base_url();?>index.php/barang/detil/<?php echo $d->kdbrg;?>"><btn class="btn btn-primary">Detil</btn></a> | <a href="<?php echo base_url();?>index.php/barang/edit/<?php echo $d->kdbrg;?>"><btn class="btn btn-secondary">Edit</btn></a> | <btn class="btn btn-danger hpsBr" act-link="<?php echo base_url();?>index.php/barang/hapus" key="<?php echo $d->kdbrg;?>"> Hapus</btn></td>
										
									</tr>
								<?php 
							}
						?>
						</tbody>
					</table>
					<a href="<?php echo base_url();?>index.php/barang/tambah"><button class="btn btn-primary">Tambah</button></a>
				<?php
			}else{
				?>
					<h3>Data Barang Kosong</h3>
					<a href="<?php echo base_url();?>index.php/barang/tambah"><button>Tambah</button></a>
				<?php
			}

		?>
</main>