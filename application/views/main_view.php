<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<head>
    <title>Отдел кадров</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    </meta>
        <link rel="stylesheet" type="text/css" href="styles/style.css" />
        <link rel="stylesheet" type="text/css" href="styles/modal-contact.css" />
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
        <script src="js/dm-modal.js"></script>
        <script src="js/CheckScript.js"></script>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="js/jquery.easydropdown.js" type="text/javascript"></script>
        <script type="text/javascript" src="js/slaider.js"></script>
        <link rel="stylesheet" type="text/css" href="styles/easydropdown.css"/>

        
</head>
<body>
    <div id="header-wrapper">
        <div id="header" class="container">
            <div id="logo">
                <h1><a href="#">Отдел кадров</a></h1>

            </div>
            <div id="menu">
               <nav class="one"> 
<ul class="topmenu"> 
<li><a href="#">Главная</a></li> 
<li><a href="#">Вакансии</a></li> 
<li><a href="#">Документы</a></li> 
<li><a >Справки</a> 
    <ul class="submenu"><?php require  "application/models/ReadingFile.php";?></ul> 
</li> 
</ul> 
</nav> 
            </div>
        </div>
        <div class="slider-box">
            <div class="slider" >
                <img src="images/img03.png" alt="" width="970" height="320"/> 
    <img src="images/event.png" alt="" width="970" height="320" /> 
    <img src="images/urbnCal2013-turn.png" alt="" width="970" height="320" />
    <img src="images/International_services_2_banner(1) (1).jpg" alt="" width="970" height="320" />
  </div>
</div>
    </div>
    
    <div id="wrapper">
        <div id="splash" class="container">Отдел кадров является не только функциональной единицей, это еще и лицом компании, 
            так как именно в отделе кадров любой соискатель начинает знакомиться с организацией. </div>
        <div id="page" class="container">
            <div id="content">
                <div class="post">
                    <h2 class="title"><a href="#">Вас приветствует отдел кадров</a></h2>
                    <div class="entry">
                        <p>Отдел кадров способствовует достижению целей организации путем 
                            обеспечения предприятия необходимыми кадрами и эффективного использования потенциала работников.</p> 
                        <p>Подбор работников ведется с помощью специально разработанных стратегий: подачи информации о вакансиях в СМИ и службы занятости населения, 
                            применения методик отбора, тестирования, процедур адаптации специалистов и последующего повышения квалификации.</p>
                    </div>
                </div>

            </div>
            <div id="sidebar">
                <div>
                    <h2>Справки</h2>
                    <ul class="list-style1">
                       </div>
        <form name="Forma1" method="post" action="filter">
<!--            <div class="new-select-style-wpandyou">-->
                
                    <select name="spravka"  onchange="Forma1.submit()" class="dropdown">
                        <option value="" class="label">Выбрать</option>
                                        <option value ="Расчетный лист" >Расчетный лист</option>
                                        <option value ="Справка о страховых взносах" >Справка о страховых взносах</option>
                                        <option value ="Справка о доходах" >Справка о дохода</option>
                                        <option value ="Справка о заработной плате" >Справка о заработной плате</option>
                                        <option value ="Справка о периоде работы" >Справка о периоде работы</option>
                    </select>
           
          
        </form> 
                       
                </div>
            </div>

        </div>

    </div>

    <div id="footer-content" class="container">
        <div id="footer-bg">

            <div id="column2">

                <ul class="list-style2">
                    <li class="first"><a href="#">Подать резюме</a></li>
                    <li><a href="#">Оформить больничный</a></li>
                    <li><a href="#">Оформить отпуск</a></li>
                    <li><a href="#">Оформить командировку</a></li>
                 
                    <li><a href="#?w=500" rel="popup_contact" class="button poplight"><span class="submit">Заказать</span> справку</a></li>

                </ul>
            </div>
            <div id="column3">

                <ul class="list-style2">
                    <p>Режим работы: пн-пт 8:00 - 18:00<br> 
                            Телефон: 8(945)123-45-69<br>
                                E-mail: otdel@yandex.ru</p>
                                </ul>
                                </div>
                                </div>
                                </div>



                                <div id="popup_contact" class="popup_block">
                                    <a href="#" title="Закрыть" class="close"></a>
                                    <div class="note">
                                        <img src="images/email.jpg" alt="Контакты" style="float:left;margin:5px 10px 5px 0; ">
                                            <h1>Уважаемые коллеги!</h1>
                                            <p>
                                                Обращаю Ваше внимание, что в пункт "Сообщение" необходимо указать наименование нужной справки.
                                            </p>
                                    </div>
                                    <form id="form" action="check" method="post" onsubmit="checkForm(form)" >	
                                        <fieldset>
                                            <p>
                                                <label for="name">ФИО *</label>
                                                <input type="text" name="name" id="name" size="30">
                                            </p>
                                            <p>
                                                <label for="mail">Email *</label>
                                                <input type="text" name="mail" id="email" size="30">
                                            </p>
                                            <p>
                                                <label for="phone">Телефон *</label>
                                                <input type="text" name="phone" id="web" size="30">
                                            </p>			
                                        </fieldset>
                                        <fieldset>																			
                                            <p>
                                                <label for="message">Сообщение *</label>
                                                <textarea name="message" id="message" cols="30" rows="10"></textarea>
                                            </p>								
                                        </fieldset>
                                        <a><input  onclick="checkForm(form)" value="Отправить" class="send-message" type="submit"></a> 					
                                    </form>
                                </div>
                                </body>
                                </html>
 



