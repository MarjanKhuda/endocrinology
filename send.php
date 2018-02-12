<?php 

if(isset($_POST['submit'])){
    $to = "lvivendocrinology@gmail.com"; // Здесь нужно написать e-mail, куда будут приходить письма
    $from = $_POST['email']; // this is the sender's Email address
    $first_name = $_POST['first_name'];
    $subject = "Нове повідомлення з сайту!";
    $subject2 = "Copy of your form submission";
    $message = $first_name . " залишив повідомлення:" . "\n\n" . $_POST['message'];
    $message2 = "Here is a copy of your message " . $first_name . "\n\n" . $_POST['message'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
	
    mail($to,$subject,$message,$headers);
   // mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender - Отключено!
    echo "Повідомлення відправлено. Дякуємо Вам " . $first_name . ", ми зв`яжемось з Вами.";
	echo "<br /><br /><a href='http://www.endocrinology.lviv.ua/'>Повернутись на головну сторінку</a>";

}

?>
