<?php 
$koneksi = mysqli_connect("localhost", "root", "", "belajarwithib");

function search_artikel($keyword){
	global $koneksi;
	$keyword = $keyword;
	$query = mysqli_query($koneksi,"SELECT * FROM artikel WHERE artikel_judul LIKE '%".$keyword."%' ORDER BY id_artikel DESC");
	while ($row = mysqli_fetch_assoc($query)) {
		$data[] = $row; 
	}
	return $data;
}

function relevan_kalimat($keyword){
	global $koneksi;
	$keyword = strtolower($keyword);

	if ($imbuhan = strpos($keyword, "mem")) {

		$kalimat = substr($keyword,$imbuhan+3,4);

	} elseif ($imbuhan = strpos($keyword, "ter")) {

		$kalimat = substr($keyword,$imbuhan+3,4);

	} elseif ($imbuhan = strpos($keyword, "pem")) {

		$kalimat = substr($keyword,$imbuhan+2,4);
		
	} elseif ($imbuhan = strpos($keyword, "me")) {

		$kalimat = substr($keyword,$imbuhan+2,4);
		
	} elseif ($imbuhan = strpos($keyword, "ke")) {

		$kalimat = substr($keyword,$imbuhan+2,4);
		
	} elseif ($imbuhan = strpos($keyword, "te")) {

		$kalimat = substr($keyword,$imbuhan+2,4);
		
	} elseif ($imbuhan = strpos($keyword, "se")) {

		$kalimat = substr($keyword,$imbuhan+2,4);
		
	} elseif ($imbuhan = strpos($keyword, "pe")) {

		$kalimat = substr($keyword,$imbuhan+2,4);

	} else {
		$kalimat = substr($keyword, -1, 4);
	}

	$query = mysqli_query($koneksi,"SELECT * FROM artikel WHERE artikel_judul LIKE '%".$kalimat."%'");
	while ($row = mysqli_fetch_assoc($query)) {
		$data[] = $row; 
	}
	return $data;
}


function relevan_kata($keyword){
	global $koneksi;
	$search = strtolower($keyword);

	$kata = substr($search,0,2);

	if ($kata == 'me' || $kata == 'ke' || $kata == 'te' || $kata == 'se' || $kata == 'be' || $kata == 'pe' ) {

		$kalimat = substr($search,3, 3);

	} else {

		$kalimat = substr($search,-4);
	}

	$query = mysqli_query($koneksi,"SELECT * FROM artikel WHERE artikel_judul LIKE '%".$kalimat."%' OR artikel_katakunci LIKE '%".$kalimat."%' OR artikel_deks LIKE '%".$kalimat."%' ORDER BY id_artikel DESC ");
	while ($row = mysqli_fetch_assoc($query)) {
		$data[] = $row; 
	}

	return $data;
}
?>