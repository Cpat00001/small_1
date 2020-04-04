<?php
// Array with names
$a[] = "Anna";
$a[] = "Brittany";
$a[] = "Cinderella";
$a[] = "Diana";
$a[] = "Eva";
$a[] = "Fiona";
$a[] = "Gunda";
$a[] = "Hege";
$a[] = "Inga";
$a[] = "Johanna";
$a[] = "Kitty";
$a[] = "Linda";
$a[] = "Nina";
$a[] = "Ophelia";
$a[] = "Petunia";
$a[] = "Amanda";
$a[] = "Raquel";
$a[] = "Cindy";
$a[] = "Doris";
$a[] = "Eve";
$a[] = "Evita";
$a[] = "Sunniva";
$a[] = "Tove";
$a[] = "Unni";
$a[] = "Violet";
$a[] = "Liza";
$a[] = "Elizabeth";
$a[] = "Ellen";
$a[] = "Wenche";
$a[] = "Vicky";

//get request from input field. q = jest rowne wartosci podanej w URL jako q=
$request = $_REQUEST['q'];
$wskazowka = "";

if(!$request == ""){
    $request = strtolower($request);
    $len = strlen($request);
    foreach($a as $name){
        if(stristr($request,substr($name,0,$len))){
            if($wskazowka === ""){
                $wskazowka = $name;
            }else{
                $wskazowka .= ", $name";
            }
        }
    }
}
//display answer
echo $wskazowka === ""? "nothing to displa": $wskazowka;

?>