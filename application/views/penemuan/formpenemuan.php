	<center>
		<h1>Form Penemuan</h1>
	</center>
	<h1>&nbsp;</h1>
	<form action="<?= base_url() . 'penemuan/add_action'; ?>" method="post">
		<table cellspacing="1" cellpadding="1">
			<tr>
				<td>No Laporan</td>
				<td>&emsp;&emsp;&emsp;:&emsp;&emsp;&emsp;</td>
				<td><input type="text" name="no_laporan" id="no_laporan" class="form-control" value="<?= set_value('no_laporan'); ?>"></td>
			</tr>
			<tr>
				<td colspan=3>
					<h1></h1>
				</td>
			</tr>
			<tr>
				<td>Id Barang</td>
				<td>&emsp;&emsp;&emsp;:&emsp;&emsp;&emsp;</td>
				<td><input type="text" name="id_barang" id="id_barang" class="form-control" value="<?= set_value('id_barang'); ?>"></td>
			</tr>
			<tr>
				<td colspan=3>
					<h1></h1>
				</td>
			</tr>
			<tr>
				<td>Id User</td>
				<td>&emsp;&emsp;&emsp;:&emsp;&emsp;&emsp;</td>
				<td><input type="text" name="id_user" id="id_user" class="form-control" value="<?= set_value('id_user'); ?>"></td>
			</tr>
			<tr>
				<td colspan=3>
					<h1></h1>
				</td>
			</tr>
			<!-- <tr>
				<td>Tanggal Temuan</td>
				<td>&emsp;&emsp;&emsp;:&emsp;&emsp;&emsp;</td>
				<td><input type="text" name="tgl_temuan" id="tgl_temuan" class="form-control" value="<?= set_value('tgl_temuan'); ?>"></td>
			</tr> -->
			<tr>
				<td colspan=3>
					<h1></h1>
				</td>
			</tr>
			<tr>
				<td>Lokasi Penemuan</td>
				<td>&emsp;&emsp;&emsp;:&emsp;&emsp;&emsp;</td>
				<td><input type="text" name="lokasi_penemuan" id="lokasi_penemuan" class="form-control" value="<?= set_value('lokasi_penemuan'); ?>"></td>
			</tr>
			<tr>
				<td colspan=3>
					<h1></h1>
				</td>
			</tr>
			<tr>
				<td colspan=3>
					<h1></h1>
				</td>
			</tr>
			<!-- <tr>
				<td>Foto Barang</td>
				<td>&emsp;&emsp;&emsp;:&emsp;&emsp;&emsp;</td>
				<td><input type="text" name="foto_barang" class="form-control"></td>
			</tr> -->
			<tr>
				<td colspan=3>
					<h1></h1>
				</td>
			</tr>
			<tr>
				<td></td>
				<td>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</td>
				<td><button type="submit" class="btn btn-primary">Simpan Data</button></td>
			</tr>
		</table>
	</form>
	</div>