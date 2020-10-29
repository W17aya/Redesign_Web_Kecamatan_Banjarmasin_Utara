<?php
require_once('../../dompdf/dompdf_config.inc.php');
include '../src/koneksi.php';
include '../src/tgl_indo.php';


	$id = $_GET['id'];

	$nama_ibu = '';
	$nik_ibu = '';
	$tmp_lahir_ibu = '';
	$tgl_lahir_ibu = '';
	$jk_ibu = '';
	$agama_ibu = '';
	$alamat_lengkap_ibu = '';
	$nama_desa_ibu = '';
	$nama_kec_ibu = '';

	$data = mysqli_query($conn,"SELECT * FROM `tb_nikah` JOIN tb_penduduk ON tb_penduduk.id_penduduk=tb_nikah.id_penduduk JOIN tb_ttd ON tb_ttd.id_ttd=tb_nikah.id_ttd JOIN tb_desa ON tb_desa.id_desa=tb_penduduk.id_desa JOIN tb_kecamatan ON tb_kecamatan.id_kec=tb_penduduk.id_kec JOIN tb_kk ON tb_kk.id_penduduk=tb_penduduk.id_penduduk WHERE tb_nikah.id_nikah='$id'");

    while($dataa = mysqli_fetch_array($data)) {
    	$no_surat = $dataa['no_surat'];
    	$no_kk = $dataa['no_kk'];
    	$nama_ttd = $dataa['nama_ttd'];
    	$jabatan = $dataa['jabatan'];
    	$alamat_ttd = $dataa['alamat_ttd'];

	    $nama_penduduk = $dataa['nama_penduduk'];
	    $nik = $dataa['nik'];
	    $tmp_lahir = $dataa['tmp_lahir'];
	    $tgl_lahir = date('d-M-Y',strtotime($dataa['tgl_lahir']));
	    $jk = $dataa['jk'];
	    $agama = $dataa['agama'];
	    $alamat_lengkap = $dataa['alamat_lengkap'];
	    $nama_desa = $dataa['nama_desa'];
	    $nama_kec = $dataa['nama_kec'];

	    $tgl_permohonan = date('Y-m-d',strtotime($dataa['tgl_permohonan']));
	    $tgl_selesai = tgl_indo($dataa['tgl_selesai']);

    }

    $data_ayah = mysqli_query($conn,"SELECT * FROM `tb_nikah` JOIN tb_penduduk ON tb_penduduk.id_penduduk=tb_nikah.id_penduduk JOIN tb_ttd ON tb_ttd.id_ttd=tb_nikah.id_ttd JOIN tb_desa ON tb_desa.id_desa=tb_penduduk.id_desa JOIN tb_kecamatan ON tb_kecamatan.id_kec=tb_penduduk.id_kec JOIN tb_kk ON tb_kk.id_penduduk=tb_penduduk.id_penduduk WHERE tb_kk.no_kk='$no_kk' AND tb_kk.status_kk='Istri'");

    while($dataa = mysqli_fetch_array($data)) {

	    $nama_ibu = $dataa['nama_penduduk'];
	    $nik_ibu = $dataa['nik'];
	    $tmp_lahir_ibu = $dataa['tmp_lahir'];
	    $tgl_lahir_ibu = date('d-M-Y',strtotime($dataa['tgl_lahir']));
	    $jk_ibu = $dataa['jk'];
	    $agama_ibu = $dataa['agama'];
	    $alamat_lengkap_ibu = $dataa['alamat_lengkap'];
	    $nama_desa_ibu = $dataa['nama_desa'];
	    $nama_kec_ibu = $dataa['nama_kec'];
    }

$html = 
'<html>
	<head>
	<title>SURAT PENGANTAR NIKAH</title>
	<style type="text/css">
	table, th, td {
	  border: 1px solid black;
	  border-collapse: collapse;
	}
	@page {
		margin: 0cm 0cm;
	}
	body {
		margin-top: 1cm;
		margin-left: 2cm;
		margin-right: 2cm;
		margin-bottom: 2cm;
	}
	</style>
</head>
<body>
	<img src="kop_surat.jpg" width="" height="">
		
	<table border="0" align="center">
		<tbody >
			<tr>
				<td><font style="font-size: 12"><b><u>SURAT PENGANTAR NIKAH</u></b></font></h5></td>
			</tr>
			<tr align="center">
				<td><font style="font-size: 12">Nomor : '.$no_surat.'</font></td>
			</tr>
		</tbody>
	</table>

	<p style="line-height: 1.5em;">
		<font style="font-size: 12;">
			Yang bertanda tangan dibawah ini :
		</font>
		<table border="0" style="line-height: 1.5em;">
		<tbody>
			<tr>
				<td style="width: 15px;"><font style="font-size: 12;"></font></td>
				<td style="width: 100px;"><font style="font-size: 12">Nama</font></td>
				<td><font style="font-size: 12">: '.$nama_ttd.'</font></td>
			</tr>
			<tr>
				<td style="width: 15px;"><font style="font-size: 12;"></font></td>
				<td style="width: 100px;"><font style="font-size: 12">Alamat</font></td>
				<td><font style="font-size: 12">: '.$alamat_ttd.'</font></td>
			</tr>
			<tr>
				<td style="width: 15px;"><font style="font-size: 12;"></font></td>
				<td style="width: 100px;"><font style="font-size: 12">Jabatan</font></td>
				<td><font style="font-size: 12">: '.$jabatan.'</font></td>
			</tr>
		</tbody>
		</table>
	</p>

	<p style="line-height: 2em;">
		<font style="font-size: 12;">
			Dengan ini menerangkan dibawah :
		</font>
		<table border="0" style="line-height: 1.5em;">
		<tbody>
			<tr>
				<td style="width: 15px;"><font style="font-size: 12;"></font></td>
				<td style="width: 100px;"><font style="font-size: 12">No. KTP/NIK</font></td>
				<td><font style="font-size: 12">: '.$nik.'</font></td>
			</tr>
			<tr>
				<td style="width: 15px;"><font style="font-size: 12;"></font></td>
				<td style="width: 100px;"><font style="font-size: 12">Nama</font></td>
				<td><font style="font-size: 12">: '.$nama_penduduk.'</font></td>
			</tr>
			<tr>
				<td style="width: 15px;"><font style="font-size: 12;"></font></td>
				<td style="width: 100px;"><font style="font-size: 12">TTL</font></td>
				<td><font style="font-size: 12">: '.$tmp_lahir.', '.$tgl_lahir.'</font></td>
			</tr>
			<tr>
				<td style="width: 15px;"><font style="font-size: 12;"></font></td>
				<td style="width: 100px;"><font style="font-size: 12">Jenis Kelamin</font></td>
				<td><font style="font-size: 12">: '.$jk.'</font></td>
			</tr>
			<tr>
				<td style="width: 15px;"><font style="font-size: 12;"></font></td>
				<td style="width: 100px;"><font style="font-size: 12">Agama</font></td>
				<td><font style="font-size: 12">: '.$agama.'</font></td>
			</tr>
			<tr>
				<td style="width: 15px;"><font style="font-size: 12;"></font></td>
				<td style="width: 100px;"><font style="font-size: 12">Alamat</font></td>
				<td><font style="font-size: 12">: '.$alamat_lengkap.' Desa '.$nama_desa.' Kecamatan '.$nama_kec.'</font></td>
			</tr>
		</tbody>
	</table>
	</p>
	
	<p style="line-height: 2em;">
		<font style="font-size: 12;">
			Adalah anak kandung dari :
		</font>
		<table border="0" style="line-height: 1.5em;">
		<tbody>
			<tr>
				<td style="width: 15px;"><font style="font-size: 12;"></font></td>
				<td style="width: 100px;"><font style="font-size: 12">No. KTP/NIK Ibu</font></td>
				<td><font style="font-size: 12">: '.$nik_ibu.'</font></td>
			</tr>
			<tr>
				<td style="width: 15px;"><font style="font-size: 12;"></font></td>
				<td style="width: 100px;"><font style="font-size: 12">Nama Ibu</font></td>
				<td><font style="font-size: 12">: '.$nama_ibu.'</font></td>
			</tr>
			<tr>
				<td style="width: 15px;"><font style="font-size: 12;"></font></td>
				<td style="width: 100px;"><font style="font-size: 12">TTL</font></td>
				<td><font style="font-size: 12">: '.$tmp_lahir_ibu.', '.$tgl_lahir_ibu.'</font></td>
			</tr>

			<tr>
				<td style="width: 15px;"><font style="font-size: 12;"></font></td>
				<td style="width: 100px;"><font style="font-size: 12">Agama</font></td>
				<td><font style="font-size: 12">: '.$agama_ibu.'</font></td>
			</tr>

		</tbody>
	</table>
	</p>

	<p>
		<br>
		<font style="font-size: 12;line-height: 1.5em;">
			Yang mana nama-nama tersebut diatas adalah benar warga '.$alamat_lengkap.' Desa '.$nama_desa.' Kecamatan '.$nama_kec.' Kabupaten Murung Raya dan sepanjang sepengethuan kami yang bersangkutan berkelakuan baik. Surat keterangan pengantar ini diberikan untuk keperluan mengurus surat nikah (NA) dari kelurahan Puruk Cahu Seberang.
		</font>
		<br>
		<font style="font-size: 12;line-height: 1.5em;">
			Demikian surat keterangan ini dibuat dengan sebenarnya, agar dapat digunakan sebagaimana mestinya.
		</font>
		<br>
		<p>
		<table border="0" style="line-height: 1.5em;" width="100%">
		<tbody>
			<tr>
				<td>                                                        </td>
				<td style="width: 250px;"><font style="font-size: 12;">Puruk Cahu Seberang, '.$tgl_selesai.'</font></td>
			</tr>
			<tr>
				<td></td>
				<td><font style="font-size: 12;">'.$jabatan.',</font></td>
			</tr>
			<tr>
				<td></td>
				<td><br><br><br></td>
			</tr>
			<tr>
				<td></td>
				<td><font style="font-size: 12">'.$nama_ttd.'</font></td>
			</tr>
		</tbody>
		</p>	
	</p>


</body>
</html>
';

$dompdf = new dompdf();

$dompdf->set_paper('A4', 'portrait');
//You can use 'letter', 'legal', 'A4', landscape

$dompdf->load_html($html);
$dompdf->render();
$dompdf->stream('SrtNikah.pdf', array("Attachment"=>0)); 
?>