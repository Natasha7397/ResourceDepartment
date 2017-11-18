 <head>
    <link href="style.css" rel="stylesheet" type="text/css" media="screen" />
</head>
<?php 
$f = fopen("D:/xampp/htdocs/ResourceDepartment/spravka.txt", "r"); 
while(!feof($f)) { 
$spravka = fgets($f); 
if (strlen($spravka) > 0){ 
echo "<li><a> ". $spravka. "</a></li>"; 
} 
} 
fclose($f); 
?> 



