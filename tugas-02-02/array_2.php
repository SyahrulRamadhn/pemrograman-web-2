<?php
    $programmer_php = array("Andi", "Budi", "Wati", "Gunawan", "Baco", "Becce", "Fatma");
    

    $Programmer_Python = array("Andi", "Fatma", "Fadli", "Haris", "Baco");
    

 echo "Daftar mahasiswa yang masuk kelompok Programmer PHP dengan nama diurutkan secara Ascending Adalah "; 
 sort($programmer_php, SORT_STRING);
    foreach($programmer_php as $element){
        echo str_pad($element, 9)." ";
    }
 echo "<br />"; echo "<br />";
  
 echo "Daftar mahasiswa yang masuk kelompok Programmer Python dengan nama diurutkan secara Descending adalah ";
 rsort($Programmer_Python, SORT_STRING);
    foreach($Programmer_Python as $element){
        echo str_pad($element, 9)." ";
    }
 echo "<br />"; echo "<br />";
   
 echo "Daftar mahasiswa yang masuk kelompok Programmer PHP "; 
 print_r(array_diff($programmer_php, $Programmer_Python)); echo "<br />";
 echo "<br />";

 echo "Daftar mahasiswa yang masuk kelompok Programmer Python ";
 print_r(array_diff($Programmer_Python,$programmer_php )); echo "<br />";
 echo "<br />";

 echo "Daftar mahasiswa yang masuk kelompok Programmer PHP dan ProgrammerPython "; echo "<br />";
 print_r(array_intersect($programmer_php, $Programmer_Python));
 echo "<br />";

 echo "Daftar seluruh mahasiswa yang masuk kelompok Programmer PHP atau
 Programmer Python (penggabungan metode merge) ";
 print_r(array_merge($programmer_php, $Programmer_Python));
  

?>