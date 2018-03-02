<main role="main" class="container">
	<div class="row">
	<!--<form method="post" action="<?php echo base_url();?>index.php/pembelian/aksitambah">-->
	<table class="table table-striped">
			<tr>
				<td>
				Kode Transaksi</td>
				<td>:</td>
				<td><input class="form-control" type="text" size="30" name="notransaksi" value="<?php echo getCodeCustomer();?>" readOnly=true/></td>
			</tr>
			<tr>
				<td>
				Nama Supplier</td>
				<td>:</td>
				<td><input class="form-control typeahead" type="text" size="30" name="namabarang" data-link="<?php echo base_url();?>index.php/api/get_supplier"/>
				<input type="hidden" name="kodesupplier" class="form-control supplierKd" value="" />
						<!--<input type="text" id="country" autocomplete="on" data-toogle="dropdown" name="country" class="form-control" placeholder="Type to get an Ajax call of Countries">        
                    <ul class="dropdown-menu txtcountry" style="margin-left:15px;margin-right:0px;" role="menu" aria-labelledby="dropdownMenu"  id="DropdownCountry"></ul>-->

				</td>
			</tr>
			<!--<tr>
				<td>
				Nama Barang</td>
				<td>:</td>
				<td><input class="form-control brgInput" type="text" size="30" name="namabarang" data-link="<?php echo base_url();?>index.php/api/get_barang"/>
				<input type="hidden" name="kodebarang" class="form-control barangKd" value="" />
						<!--<input type="text" id="country" autocomplete="on" data-toogle="dropdown" name="country" class="form-control" placeholder="Type to get an Ajax call of Countries">        
                    <ul class="dropdown-menu txtcountry" style="margin-left:15px;margin-right:0px;" role="menu" aria-labelledby="dropdownMenu"  id="DropdownCountry"></ul>-->
<!--
				</td>
			</tr>
			<tr>
				<td>
				QTY</td>
				<td>:</td>
				<td><input class="form-control qty" type="text" size="30" name="qty" /></td>
			</tr>
			<tr>
				<td>
				Harga Satuan</td>
				<td>:</td>
				<td><input class="form-control harga" type="text" size="30" name="harga" /></td>
			</tr>
			<tr>
				<td>
				Total</td>
				<td>:</td>
				<td><input class="form-control total" type="text" size="30" name="total" readonly="true" /></td>
			</tr>-->
		</table>
		<!--<input type="submit" class="btn btn-primary" value="Simpan"/>-->
		<!--<button class="btn btn-secondary">Tambah Barang</button>-->
<!--</form>-->
	</div>
	<hr>
	<div class="row">
	<table class="table">
		<thead>
			<tr>
				<th>Nama Barang</th>
				<th>Qty</th>
				<th>Jumlah</th>
				<th>Total</th>
				<th>aksi</th>
			</tr>
		</thead>
		<tbody>
			
			
		</tbody>
	</table>
	<input type='button' value='Add more' id='addmore'>
	</div>
</main>