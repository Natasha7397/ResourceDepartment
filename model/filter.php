<head>
    <title>Справки</title>
    <link href="style.css" rel="stylesheet" type="text/css" media="screen" />
</head>
<?php
                $a = $_GET['name'];
                $hostname = 'localhost'; 
                $username = 'root'; 
                $passwrd = ''; 
                $database = 'resourcedepartment';
 
$link = mysqli_connect($hostname, $username, $passwrd, $database) 
    or die("Ошибка " . mysqli_error($link)); 
     mysqli_query($link, "SET NAMES 'utf8' "); 
     
       $query ="SELECT * FROM reference where Message='$a'";
     

$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 
if($result)
{
    $rows = mysqli_num_rows($result); // количество полученных строк
     
    echo "<table><tr><th>№</th><th>ФИО</th><th>E-mail</th><th>Телефон</th><th>Справка</th></tr>";
    for ($i = 0 ; $i < $rows ; ++$i)
    {
        $row = mysqli_fetch_row($result);
        echo "<tr>";
            for ($j = 0 ; $j < 5 ; ++$j) echo "<td>$row[$j]</td>";
        echo "</tr>";
    }
    echo "</table>";
     
    // очищаем результат
    mysqli_free_result($result);
}
 
mysqli_close($link);
?>

