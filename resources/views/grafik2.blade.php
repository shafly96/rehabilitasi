
Gerak :{{$gerak}};
<?php
for($i=0;$i<11;$i++){
	if(empty($data[$i])) echo "Tanggal :0|Waktu :0;";
	else echo "Tanggal :".$data[$i]->tanggal."|Waktu :".$data[$i]->value.";";
}
?>