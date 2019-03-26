<?php
	$prodi = array(
		array("Arya","Lampung","Sistem Informasi", "Semester 2"),
		array("Ahmad","Gorontalo","Menejemen Informatika", "Semester 8"),
		array("Putri","Jogja","Sistem Informasi", "Semester 2"),
		array("Umar","Kudus","Sitem Informasi", "Semester 4"),
	);
	
	for($x=0; $x<count($prodi); $x++){
		for($y=0; $y<count($prodi); $y++){
		echo $prodi[$x][$y] . " ";	
		}
		
		echo "<br>";
	}
?> 