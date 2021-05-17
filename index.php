<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>MebelPlusKzn</title>

    
</head>
<body id="top">
    <header>
        <div class="block_logo">МЕБЕЛЬ+</div>
        <div class="block_logo_bottom">КАЗАНЬ</div>
    </header>


    <nav>
        <a href="#block_about_us"><div class="div_about_us">О нас</div></a>
        <a href="#block_gallery"><div class="div_gallery">Фото</div></a>
        <a href="#block_making_an_order"><div class="div_making_an_order">Оформление заказа</div></a>
        <a href="#contacts"><div class="div_contacts">Контакты</div></a>
    </nav>


    <main>
        <div id="block_about_us" class="block_about_us">
            <div class="text_header_about_us">Производство корпусной мебели по индивидуаль&shy;ным эскизам</div>
            <div class="line"></div>
            <div class="text_content_about_us">
                Что мы делаем:
                <ul class="furniture_list">
                    <li>Кухонные гарнитуры</li>
                    <li>Шкафы (купе и створчатые)</li>
                    <li>Прихожие</li>
                    <li>Стенки-горки для гостинной</li>
                    <li>Стеллажи</li>
                    <li>Тумбы</li>
                    <li>Комоды</li>
                    <li>Кровати</li>
                    <li>Столы</li>
                    <li>Офисная мебель и прочее</li>
                </ul>
                Заказы выполняются по индивидуальным дизайнам клиентов.<br>
                <b>Качественная мебель по доступным ценам.</b>
            </div>
        </div>

        <div class="block_gallery_out">
        <div  id="block_gallery" class="block_gallery">
            
            <div class="text_header">Фото</div>

            <div class="mySlides fade">
            <img src="Images/furniture/1.jpg">
            </div>
  
            <div class="mySlides fade">
                <img src="Images/furniture/2.jpg">
            </div>
    
            <div class="mySlides fade">
                <img src="Images/furniture/3.jpg">
            </div>

            <!div class="mySlides fade">
                <!img src="Images/furniture/4.jpg">
            <!/div>

            <!div class="mySlides fade">
                <!img src="Images/furniture/5.jpg">
            <!/div>

            <div class="mySlides fade">
                <img src="Images/furniture/6.jpg">
            </div>

            <div class="mySlides fade">
                <img src="Images/furniture/7.jpg">
            </div>

            <div class="mySlides fade">
                <img src="Images/furniture/8.jpg">
            </div>

            <div class="mySlides fade">
                <img src="Images/furniture/9.jpg">
            </div>

            <div class="mySlides fade">
                <img src="Images/furniture/10.jpg">
            </div>

            <div class="mySlides fade">
                <img src="Images/furniture/11.jpg">
            </div>

            <!div class="mySlides fade">
                <!img src="Images/furniture/12.jpg">
            <!/div>

            <!div class="mySlides fade">
                <!img src="Images/furniture/14.jpg">
            <!/div>

            <div class="mySlides fade">
                <img src="Images/furniture/15.jpg">
            </div>

            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>
            </div>
        </div>

    

        <div id="block_making_an_order" class="block_making_an_order">
            <div class="text_header">Оформление заказа</div>
            <div class="text_content">
                <ol>
                    <li class="main_list">Оставьте заявку на заказ любым удобным для Вас способом: 
                        <ul>
                            <li>звонок по номеру 89625480033</li>
                            <li>напишите в WhatsApp по номеру 89625480033</li>
                            <li>напишите в Instagram: mebel_pluskzn</li>
                        </ul>
                    </li>
                    <li class="main_list">Мы с Вами обсуждаем общие моменты заказа, приезжаем к Вам, делаем замеры мебели и обсуждаем
                        заказ более детально.<br>
                        <b>Замеры проводятся бесплатно!</b>
                    </li>
                    <li class="main_list">Изготовление мебели происходит в среднем около двух недель (сроки изготовления зависят от 
                        сложности заказа).
                    </li>
                    <li class="main_list">Доставка и установка мебели осуществляется БЕСПЛАТНО.</li>
                    <li class="main_list">Оплата: предоплата - 50% от стоимости заказа, остальные 50% после установки мебели.</li>
                </ol>
                <a href="#modal_back">Оставьте заявку</a>
            </div>
        </div>
    </main>

    <div class="modal_back" id="modal_back">
        <div class="modal" id="modal">
            <div class="form_name">Заявка на заказ</div>
            <?php
    if(!isset($_POST['lastname']) and !isset($_POST['email'])){
     ?>
            <form action="index.php" method="POST">
            <div class="form">
                <div class="half">
                    <div class="area">
                        <label class="lastname">Фамилия</label>
                        <input class="input_half1" type="text" name="lastname">
                    </div>
                    <div class="area">
                        <label class="name">Имя</label>
                        <input class="input_half1" type="text" name="name">
                    </div>
                    <div class="area">
                        <label class="phone">Телефон</label>
                        <input class="input_half1" type="" name="number">
                    </div>
                    <div class="area">
                        <label class="mail">Эл.почта</label>
                        <input class="input_half1" type="email" name="email">
                    </div>
                </div>
                <div class="half">
                    <div class="area">
                        <label class="type">Тип мебели</label>
                        <input class="input_half2" type="checkbox">Кухонный гарнитур<br>
                        <input class="input_half2" type="checkbox">Шкафы-купе<br>
                        <input class="input_half2" type="checkbox">Cтворчатый шкаф<br>
                        <input class="input_half2" type="checkbox">Прихожая<br>
                        <input class="input_half2" type="checkbox">Стенка-горка для гостинной<br>
                        <input class="input_half2" type="checkbox">Стеллаж<br>
                        <input class="input_half2" type="checkbox">Тумба<br>
                        <input class="input_half2" type="checkbox">Комод<br>
                        <input class="input_half2" type="checkbox">Кровать<br>
                        <input class="input_half2" type="checkbox">Стол<br>
                        <input class="input_half2" type="checkbox">Офисная мебель<br>
                        <div class="area">
                            <label class="mail">Другое:</label>
                            <input class="input_half1" type="text" name="other">
                        </div>
                    </div>
                </div>
            </div>
                <div class="buttons">
                    <input type="submit" name="send" id="send" class="button" value="Отправить" onclick="cancel()">
                    <input type="button" name="cancel" id="cancel" class="button" value="Отмена">
                </div>
                
                
            </form>
            <?php
    } else {
     //показываем форму
     $lastname = $_POST['lastname'];
     $email = $_POST['email'];
     $lastname = htmlspecialchars($lastname);
     $email = htmlspecialchars($email);
     $lastname  = urldecode($lastname);
     $email = urldecode($email);
     $lastname = trim($lastname);
     $email = trim($email);
     if (mail("kamilaibr2002@mail.ru", "Заявка с сайта", "ФИО:".$lastname.". E-mail: ".$email ,"From: example2@mail.ru \r\n")){
     echo "Сообщение успешно отправлено";
     } else {
     echo "При отправке сообщения возникли ошибки";
     }
    }
    ?>
        </div>
    </div>


    <footer id="contacts">
        <div class="text_header">Контакты</div>
        <a class="contacts_inside" href="https://www.instagram.com/mebel_pluskzn/">
            <img src="Images/inst_logo.svg">
            <div class="socials"> mebel_pluskzn</div>
        </a>
        <a class="contacts_inside" href="https://wa.me/79625480033">
            <img src="Images/wa_logo.svg">
            <div class="socials"> Дамир</div>
        </a>
        <div class="contacts_inside">
            <img src="Images/phone_logo.svg">
            <div> 89625480033 Дамир</div>
        </div>
    </footer> 

    <a class="up" href="#top" style="position:fixed;bottom:30px;right:30px">Наверх</a>
    <script>
        var slideIndex = 1;
        showSlides(slideIndex);

        function plusSlides(n) {
            showSlides(slideIndex += n);
        }

        function currentSlide(n) {
            showSlides(slideIndex = n);
        }

        function showSlides(n) {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        if (n > slides.length) {slideIndex = 1}
        if (n < 1) {slideIndex = slides.length}
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        slides[slideIndex-1].style.display = "block";
        }

        
    </script>  
    <script>
        

        function cancel(){
            document.getElementById('modal').style.backgroundColor=('white');
        }
    </script>
     
</body>
</html>