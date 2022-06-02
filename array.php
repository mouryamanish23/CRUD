<?php

// -----INDEXED ARRAY---
$Fruits = array("Orange","Mango","Guava","Banana");

echo "<u>INDEXED ARRAY :-<br><br></u>";
echo $Fruits[0]."<br>";
echo $Fruits[1]."<br>";
echo $Fruits[2]."<br>";
echo $Fruits[3]."<br><br>";

$Cars[0]="Mercedes";
$Cars[1]="Toyota";
$Cars[2]="Maruti";
$Cars[3]="Audi";
$Cars[4]="BMW";
$Cars[5]="Tesla";

echo $Cars[0]."<br>";
echo $Cars[1]."<br>";
echo $Cars[2]."<br>";
echo $Cars[3]."<br>";
echo $Cars[4]."<br>";
echo $Cars[5]."<br><br>";


// ----ASSOCIATIVE ARRAY-------

echo "<u>ASSOCIATIVE ARRAY :-<br><br></u>";
$age = array(    
        3 => 24,
        4 => 23,
        6 => 28,
        7 => 31
        );

    $age[6] = 55;
echo $age[3]."<br>";
echo $age[4]."<br>";
echo $age[6]."<br>";
echo $age[7]."<br>";

$rank = [
  "mak" => 11.56,
  "jack" => 54.68,
  "nik" => "3",
  "bob" => 4
];
echo "<pre>";       
var_dump($rank);    
print_r($rank);     
echo "</pre>";
echo $rank["mak"]."<br>";
echo $rank["jack"]."<br>";
echo $rank["nik"]."<br>";
echo $rank["bob"]."<br><BR>";
 
// ----------MULTI-D ARRAY-----

echo "<u>MULTI-D ARRAY :-<br><br></u>";
$emp = [
  [1, "Manish", "manager", 100000 ],
  [2, "Akash", "salesman", 50000],
  [3, "Ravi", "executive", 40000],
  [4, "Jatin", "driver", 10000]
];

// echo $emp[0][0]." ";
// echo $emp[0][1]." ";
// echo $emp[0][2]." ";
// echo $emp[0][3]." ";

// echo "<br>".$emp[1][0]." ";
// echo $emp[1][1]." ";
// echo $emp[1][2]." ";
// echo $emp[1][3]." ";

// echo "<br>".$emp[2][0]." ";
// echo $emp[2][1]." ";
// echo $emp[2][2]." ";
// echo $emp[2][3]." ";

// echo "<br>".$emp[3][0]." ";
// echo $emp[3][1]." ";
// echo $emp[3][2]." ";
// echo $emp[3][3]." ";


echo "<table border='1' cellpadding='5' cellspacing='0 '>";
echo "<tr>
      <th>Emp-id</th>
      <th>Name</th>
      <th>Designation</th>
      <th>Salary</th>
    </tr>";

/*for ($row=0; $row < 4; $row++) {
  echo "<tr>";
  for ($col = 0; $col < 4; $col++) {
    echo "<td>"$emp[$row][$col] "</td>";

  }
  echo "</tr>";
}*/
foreach ($emp as $v1 ) {
  echo "<tr>";
  foreach ($v1 as $v2) {
    echo "<td>$v2</td>";
  }
  echo "</tr>";
}
echo "</table>";

echo "<pre>";
print_r($emp);
echo "</pre>";

// -------------


$array = array("name"=>"johnson", "code"=>"12345", "status"=>"true");
$string = serialize($array);
echo "<pre>";
print_r($string);
echo "</pre>";

?>