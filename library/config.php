<?php 

$config = array (
			//config base_url
			'base_url' => "http://".$_SERVER['HTTP_HOST'].
				str_replace(basename($_SERVER['SCRIPT_NAME']),"",$_SERVER['SCRIPT_NAME'])
	);

//create array kaprodi
$kaprodi 	= array("belum diisi","SI","TI");
//create array status judul	
$disetujui	= array("Belum","judul1","judul2");
//create array kelas
$kelas 		= array("Transfer","Reguler","Belum Diisi");
//create array pembimbing
$pembimbing =array("Belum Memilih","H. Muhyiddin Zainul Arifin, SH, SE, M.M.","Hasan Bisry Isa Alfaris, S.Kom.","Dr. Chairul Anam, S.Kom., S.E., M.Si.","Agus Syifaun Najah, M.Kom.","Siti Sufaidah, S. Kom., M.Si.","Ponari Isno, SE., S.Kom.","Ir. Zulfikar, M.Si.","Tholib Hariono, S.Kom.","Munawarah, S.Kom., M.Si.","Sujono, S.Kom.","Mochammad Chumaidi, M.M.","Ir. Moch. Noerhadi Sudjoni, M.B.A.","Primaadi Airlangga, M.IT"); 

?>