<?php
class Reference{
public function getTable($a){
$db = Db::getConnection();
echo '<table><tr><th> № </th><th> ФИО </th><th> E-mail </th><th> Телефон </th><th> Справка </th></tr>';
            $sql ="SELECT * FROM reference where Message='$a'";
            $query  = $db->query($sql);
        $result = $query->FETCHALL(PDO::FETCH_ASSOC);
        foreach( $result  as  $arry )
        {
            echo '<table><tr><th>'.$arry['ID'].'</th><th>'.$arry['FIO'].'</th><th>'.$arry['Email'].'</th><th>'.$arry['Phone'].'</th><th>'.$arry['Message'].'</th></tr>';
        }
        }
}

