<?php
$elrahma = array(
    'mahasiswa' => array(
        "sem_2"=> array(
			"nama1"=>array(
            1 => "Arya","Lampung","Sistem Informasi", "Semester 2",
        )),
        "sem_4" => array(
			"nama2"=>array(
            1 => "Ahmad","Gorontalo","Menejemen Informatika", "Semester 8",
        )),
		"sem_6"=> array(
			"nama3"=>array(
            1 => "Putri","Jogja","Sistem Informasi", "Semester 2",
        )),
		"sem_8"=> array(
			"nama4"=>array(
            1 => "Umar","Kudus","Sitem Informasi", "Semester 4",
        )),
        "alumni"=> array(
			"nama5"=>array(
            1 => "Tiara","Bengkulu","Teknik Informatika","Semester 6",
			)
		)
	)
);

function recursive_loop($array)
    {
        foreach($array as $key => $value)
        {
            if(is_array($value))
            {
                recursive_loop($value);
            }
            else
            {
                echo $value . PHP_EOL;
            }
        }
		echo "<br>";
    }
    echo recursive_loop($elrahma);
?>

	