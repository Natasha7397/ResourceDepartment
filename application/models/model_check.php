<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<head>
    <title>Заявка</title>
    <link rel="stylesheet" type="text/css" href="styles/style.css" />
</head>

<?php 
class Model_check extends Model{

public static function register($name, $mail,$phone, $message)
{
    ?> <script>alert('Ваша заявка принята! Мы обязательно свяжемся с Вами в ближайшее время.', top.location.href="index.php" )</script><?php
    $db = Db::getConnection();
    $sql = 'INSERT INTO reference (FIO,Email,Phone,Message) VALUES (:name, :mail,:phone, :message)';
    // Получение и возврат результатов. Используется подготовленный запрос
    $result = $db->prepare($sql);
    $result->bindParam(':name', $name, PDO::PARAM_STR);
    $result->bindParam(':mail', $mail, PDO::PARAM_STR);
    $result->bindParam(':phone', $phone, PDO::PARAM_STR);
    $result->bindParam(':message', $message, PDO::PARAM_STR);

  
}
}

              

                            

