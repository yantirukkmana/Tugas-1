<?php 
echo "Waktu Mundur\n";
for($count = 10; $count>=0; $count--){
	echo $count."\n";
	sleep(1);
}

$daftarNama=['aa','bb'];
	foreach ($daftarNama as $data) {
		echo $data."\n";
	}
?>