<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/main.css">
    <title>EVIN</title>
</head>

<body>
    <header>
        <div class="container">
            <nav>
                <div class="logo">
                    <a href="index.html"><img src="./images/logo.png"></a>
                </div>
                <div class="navbar">
                    <div class="icons">
                        <div class="icon facebook"><a href="#"><img src="./images/facebook.png"></a></div>
                        <div class="icon linkedin"><a href="https://www.linkedin.com/company/e-win"><img
                                    src="./images/linkedin.png"></a></div>
                        <div class="icon twitter"><a href="#"><img src="./images/twitter.png"></a></div>
                        <div class="icon youtube"><a href="#"><img src="./images/youtube.png"></a></div>
                    </div>
                    <div class="navbar-bottom">
                        <a href="index.html">PROJECTS</a>
                        <a href="career.html">CAREER</a>
                        <a href="#" class="active">CONTACTS</a>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    <article>
        <div class="container">
            <div class="content">
            <? 
// ----------------------------конфигурация-------------------------- // 
 
$adminemail="support@e-win.tech";  // e-mail админа 
 
 
$date=date("d.m.y"); // число.месяц.год 
 
$time=date("H:i"); // часы:минуты:секунды 
 
$backurl="http://index.html";  // На какую страничку переходит после отправки письма 
 
//---------------------------------------------------------------------- // 
 
  
 
// Принимаем данные с формы 
 
$name=$_POST['name']; 
 
$email=$_POST['email']; 
 
$msg=$_POST['message']; 
 
  
 
// Проверяем валидность e-mail 
 
if (!preg_match("|^([a-z0-9_\.\-]{1,20})@([a-z0-9\.\-]{1,20})\.([a-z]{2,4})|is", 
strtolower($email))) 
 
 { 
 
  echo 
"<center>Поверніться <a 
href='javascript:history.back(1)'><B>назад</B></a>. Ви вказали не вірні
 дані!"; 
 
  } 
 
 else 
 
 { 
 
 
$msg=" 
 
 
<p>Имя: $name</p> 
 
 
<p>E-mail: $email</p> 
 
 
<p>Повідомлення: $msg</p> 
 
 
"; 
 
  
 
 // Отправляем письмо админу  
 
mail("$adminemail", "$date $time Повідомлення 
от $name", "$msg"); 
 
  
 
// Сохраняем в базу данных 
 
$f = fopen("message.txt", "a+"); 
 
fwrite($f," \n $date $time Повідомлення від $name"); 
 
fwrite($f,"\n $msg "); 
 
fwrite($f,"\n ---------------"); 
 
fclose($f); 
 
  
 
// Выводим сообщение пользователю 
 
print "<script language='Javascript'><!-- 
function reload() {location = \"$backurl\"}; setTimeout('reload()', 6000); 
//--></script> 
 
$msg 
 
<p>Повідомлення відправлено!</p>";  
exit; 
 
 } 
 
?>
               
            </div>
        </div>
    </article>
    <footer>
        <div class="container">
            <div>
                <p><a href="mailto:support@e-win.tech">support@e-win.tech</a></p>
                <p>Lviv, Ukraine</p>
            </div>
            <div class="icons">
                <div class="icon facebook"><a href="#"><img src="./images/facebook.png"></a></div>
                <div class="icon linkedin"><a href="https://www.linkedin.com/company/e-win"><img
                            src="./images/linkedin.png"></a></div>
                <div class="icon twitter"><a href="#"><img src="./images/twitter.png"></a></div>
                <div class="icon youtube"><a href="#"><img src="./images/youtube.png"></a></div>
            </div>

        </div>
        <div class="copyright">
            <p>Copyright © 2021</p>
        </div>
    </footer>
</body>

</html>