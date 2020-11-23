 <?php
$to = "prog@it-delta.ru";
$tema = "Форма обратной связи"
$message = "Ваше имя: ".$_POST['name']."<br>";
  $message .= "E-mail: ".$_POST['email']."<br>";
$message .= "Номер телефона: ".$_POST['phone']."<br>";
$message .= "Сообщение: ".$_POST['message']."<br>"; 
mail($to, $tema, $message);
?>