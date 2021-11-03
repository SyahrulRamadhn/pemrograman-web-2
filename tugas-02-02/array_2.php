<?php
    $programmer_php = array("Andi", "Budi", "Wati", "Gunawan", "Baco", "Becce", "Fatma");
    

    $Programmer_Python = array("Andi", "Fatma", "Fadli", "Haris", "Baco");
    

  echo "Daftar mahasiswa yang masuk kelompok Programmer PHP dengan nama diurutkan secara Ascending Adalah ";
  print_r($programmer_php);
 /*
  sort($programmer_php, SORT_STRING);
  foreach($programmer_php as $element){
      echo str_pad($element, 9)." ";
  }*/
  echo "<br />"; echo "<br />";

  echo "Daftar mahasiswa yang masuk kelompok Programmer Python dengan nama diurutkan secara Descending adalah ";
  print_r(array_reverse($Programmer_Python));
  /*rsort($Programmer_Python, SORT_STRING);
  foreach($Programmer_Python as $element){
      echo str_pad($element, 9)." ";
  }*/
  echo "<br />"; echo "<br />";
  
 echo "Daftar mahasiswa yang masuk kelompok Programmer PHP "; echo "<br />";
 echo $programmer_php[5]. "<br />";
 echo $programmer_php[1]. "<br />";
 echo $programmer_php[6]. "<br />";
 echo $programmer_php[3]. "<br />";
 echo $programmer_php[2]. "<br />";
 echo "<br />";

 echo "Daftar mahasiswa yang masuk kelompok Programmer Python "; echo "<br />";
 echo $Programmer_Python[1]. "<br />";
 echo $Programmer_Python[3]. "<br />";
 echo $Programmer_Python[2]. "<br />";
 echo "<br />";

 echo "Daftar mahasiswa yang masuk kelompok Programmer PHP dan ProgrammerPython "; echo "<br />";
 echo $programmer_php[0]. "<br />";
 echo $programmer_php[1]. "<br />";
 echo $programmer_php[2]. "<br />";
 echo $programmer_php[3]. "<br />";
 echo $programmer_php[4]. "<br />";
 echo $programmer_php[5]. "<br />";
 echo $programmer_php[6]. "<br />";
 echo $Programmer_Python[0]. "<br />";
 echo $Programmer_Python[1]. "<br />";
 echo $Programmer_Python[2]. "<br />";
 echo $Programmer_Python[3]. "<br />";
 echo $Programmer_Python[4]. "<br />";
echo "<br />";

 echo "Daftar seluruh mahasiswa yang masuk kelompok Programmer PHP atau
 Programmer Python (penggabungan metode merge) ";
 print_r(array_merge($programmer_php, $Programmer_Python));
  

?>