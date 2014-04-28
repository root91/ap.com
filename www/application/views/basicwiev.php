<!DOCTYPE html>
<!--[if IE 8]><html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]>
<!--><html class="no-js" lang="en"><!--<![endif]-->

    <head>

        <!-- Basic Page Needs
  ================================================== -->
        <meta charset="utf-8">
        <title><?= $title; ?></title>
        <meta name="description" content="<?= $desc; ?>">
        <meta name="author" content="AP - веб студия">
        <meta name="Robots" content="ALL"> 
        <meta name="Revisit-After" content="1 Days"> 

        <!-- Mobile Metas
  ================================================== -->
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

        <!-- CSS
  ================================================== -->
        <link rel="stylesheet" href="css/base.css"/>
        <link rel="stylesheet" href="css/skeleton.css"/>
        <link rel="stylesheet" href="css/layout.css"/>
        <link rel="stylesheet" href="css/colorbox.css"/>

        <!--[if lte IE 8]>
            <script src="js/html5.js"></script>
        <![endif]-->		

        <!-- Favicons
        ================================================== -->
        <link rel="shortcut icon" href="favicon_ap.png">
        <!-- <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <link rel="apple-touch-icon" sizes="72x72" href="apple-touch-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="114x114" href="apple-touch-icon-114x114.png"> -->
    </head>
    <body>



        <!-- Primary Page Layout
        ================================================== -->

        <div id="preloader">
            <div id="status">&nbsp;</div>
        </div>	

        <!-- Home
        ================================================== -->	


        <div id="home">
            <div class="logo_header">
                <div class="container">
                    <div class="sixteen columns">
                        <img src="images/logo.png" alt="webstudio">
                        <h2>Сделай первый шаг</h2>
                    </div>
                </div>
            </div>

            <ul class="square-menu">
                <li>
                    <img src="images/home-1.jpg">
                </li>
                <li class="home-menu-green">
                    <a href="#services" class="slink-y scroll">УСЛУГИ</a>
                </li>
                <li>
                    <img src="images/home-3.jpg">
                </li>
                <li class="home-menu-yellow">
                    <a href="#contact" class="slink-x scroll">КОНТАКТЫ</a>
                </li>
                <li class="home-menu-red">
                    <a href="#about" class="slink-y scroll">О НАС</a>
                </li>
                <li>
                    <img src="images/home-2.jpg">
                </li>
                <li class="home-menu-blue">
                    <a href="#works" class="slink-y scroll">РАБОТЫ</a>
                </li>
                <li>
                    <img src="images/home-4.jpg">
                </li>
                <br style="clear:both;"/>
            </ul>
            <!-- 		<div class="home-menu1">
                                    <a class="scroll" href="#about">
                                    </a>
                            </div>
                            <div class="home-menu2">
                                    <a class="scroll" href="#works">
                                    </a>
                            </div>
                            <div class="home-menu3">
                                    <a class="scroll" href="#services">
                                    </a>
                            </div>
                            <div class="home-menu4">
                                    <a class="scroll" href="#contact">
                                    </a>
                            </div> -->
        </div>	


        <div class="md-overlay"></div>		




        <div id="about">
            <nav id="navigation">
                <a href="#home" class="scroll" ><img class="logo" alt='logo' src='images/logo1.png'></a>

                <ul   id="menu">
                    <li>
                        <a href="#home" class="scroll">Главная</a>
                    </li>
                    <li class="current">
                        <a href="#about" class="scroll">О нас</a>
                    </li>
                    <li>
                        <a href="#services" class="scroll">Услуги</a>
                    </li>
                    <li>
                        <a href="#works" class="scroll">Работы</a>
                    </li>
                    <li>
                        <a href="#contact" class="scroll">Контакты</a>
                    </li>
                </ul>

                <ul id="social-menu">
                    <li><a href="#" class="social-f"></a></li>
                    <li><a href="#" class="social-vk"></a></li>
                    <li><a href="#" class="social-g"></a></li>
                </ul>		   


            </nav>



            <div class="container">
                <div class="sixteen columns">
                    <h1>МЫ <span class="slide-text"></span></h1>
                </div>
            </div>	
            <div class="about-info">
                <div class="container">
                    <div class="eight columns">
                        <h6>КТО МЫ?</h6>
                        <p>Мы постоянно развевающаясяя веб студия, которая не останавливаеться на достигнутом, а полностью отдает себя совершенствованию в создание и продвижение интернет сайтов. Наша команда молодых специалистов по особенному подходит к каждому проекту, что бы вы получили то ради чего к нам обращались.</p>
                    </div>
                    <div class="eight columns">
                        <h6>КАК МЫ РАБОТАЕМ?</h6>
                        <p>Мы игнорируем сложность проекта и всегда выкладываемся на полную, и укладываемся в сроки. Для нас нет невозможных проектов - мы создадим любой сайт для вас, при этом мы затратим меньше времени чем другие, а вы затратите меньше средств. Все работы наших сотрудников являются эксклюзивом. Мы выполним любой заказ, а Вы получите именно такой сайт, какой вы хотели.</p>
                    </div>
                </div>	
            </div>
            <div class="facts">
                <div class="container">
                    <div class="sixteen columns">
                        <h6>Наши навыки</h6>
                        <div id="container-bar">

                            <p>Photoshop</p>
                            <div id="bar-1" class="bar-main-container color1">
                                <div class="wrap">
                                    <div class="bar-percentage" data-percentage="92"></div>
                                    <div class="bar-container">
                                        <div class="bar"></div>
                                    </div>
                                </div>
                            </div>

                            <p>Html5&amp;Css3</p>
                            <div id="bar-2" class="bar-main-container color2">
                                <div class="wrap">
                                    <div class="bar-percentage" data-percentage="84"></div>
                                    <div class="bar-container">
                                        <div class="bar"></div>
                                    </div>
                                </div>
                            </div>

                            <p>JavaScritp</p>
                            <div id="bar-3" class="bar-main-container color3">
                                <div class="wrap">
                                    <div class="bar-percentage" data-percentage="75"></div>
                                    <div class="bar-container">
                                        <div class="bar"></div>
                                    </div>
                                </div>
                            </div>

                            <p>PHP</p>
                            <div id="bar-4" class="bar-main-container color4">
                                <div class="wrap">
                                    <div class="bar-percentage" data-percentage="79"></div>
                                    <div class="bar-container">
                                        <div class="bar"></div>
                                    </div>
                                </div>
                            </div>

                            <p>Ajax</p>
                            <div id="bar-5" class="bar-main-container color6">
                                <div class="wrap">
                                    <div class="bar-percentage" data-percentage="70"></div>
                                    <div class="bar-container">
                                        <div class="bar"></div>
                                    </div>
                                </div>
                            </div>  
                        </div>
                    </div>
                </div>	
            </div>

            <div class="container">
                <div class="sixteen columns">
                    <h6>Кто для вас старается</h6>
                </div>
            </div>
            <div class="container">
                <div class="eight columns">
                    <p>Многие думают, что Lorem Ipsum - взятый с потолка псевдо-латинский набор слов, но это не совсем так. Его корни уходят в один фрагмент классической латыни 45 года н.э., то есть более двух тысячелетий назад.</p>
                    <br>
                    <p>Многие думают, что Lorem Ipsum - взятый с потолка псевдо-латинский набор слов, но это не совсем так. Его корни уходят в один фрагмент классической латыни 45 года н.э.</p>
                    <div class="butt-con">
                        <a class="scroll color1" href="#services" title="Перейти в раздел услуги">Посмотреть наши услуги</a>
                    </div>
                </div>
                <div class="eight columns">
                    <div class="team-wrapper">
                        <div class="team-desc pull-left tooltips">
                            <h5>Антонов Алексей</h5>
                            <p>( Арт директор )</p>
                            <a href="#"><img src="images/facebook.png" alt="Facebook"></a>
                            <a href="#"><img src="images/skype.png" alt="Skype"></a>
                            <a href="#"><img src="images/googleplus.png" alt="G+"></a>
                        </div>
                        <div class="team-avatar avatar-left">
                            <img src="images/ava1.png" alt="avatar">
                        </div>					
                    </div>
                    <div class="team-wrapper">
                        <div class="team-desc pull-left tooltips">
                            <h5>Антонов Алексей</h5>
                            <p>( Арт директор )</p>
                            <a href="#"><img src="images/facebook.png" alt="Facebook"></a>
                            <a href="#"><img src="images/skype.png" alt="Skype"></a>
                            <a href="#"><img src="images/googleplus.png" alt="G+"></a>
                        </div>
                        <div class="team-avatar avatar-left">
                            <img src="images/ava2.png" alt="avatar">
                        </div>					
                    </div>
                    <div class="team-wrapper">
                        <div class="team-desc pull-right tooltips">
                            <h5>Антонов Алексей</h5>
                            <p>( Арт директор )</p>
                            <a href="#"><img src="images/facebook.png" alt="Facebook"></a>
                            <a href="#"><img src="images/skype.png" alt="Skype"></a>
                            <a href="#"><img src="images/googleplus.png" alt="G+"></a>
                        </div>
                        <div class="team-avatar avatar-right">
                            <img src="images/ava3.png" alt="avatar">
                        </div>					
                    </div>
                    <div class="team-wrapper">
                        <div class="team-desc pull-right tooltips">
                            <h5>Антонов Алексей</h5>
                            <p>( Арт директор )</p>
                            <a href="#"><img src="images/facebook.png" alt="Facebook"></a>
                            <a href="#"><img src="images/skype.png" alt="Skype"></a>
                            <a href="#"><img src="images/googleplus.png" alt="G+"></a>
                        </div>
                        <div class="team-avatar avatar-right">
                            <img src="images/ava4.png" alt="avatar">
                        </div>					
                    </div>

                </div>
            </div>	

        </div>	

        <div id="separator2">
            <div class="separator2-wrap to-start">
                <div class="container">
                    <div class="sixteen columns">
                        <h3>ДАВАЙТЕ РАБОТАТЬ ВМЕСТЕ И СОЗДАВАТЬ ЧТО-ТО ПОТРЕСАЮЩЕ НОВОЕ</h3>
                    </div>
                    <div class="sixteen columns">
                        <div class="butt-con">
                            <a class="scroll color1" href="#contact" title="Перейти в раздел">СВЯЗАТЬСЯ С НАМИ</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id='services'>
            <div class="container">
                <div class="sixteen columns">
                    <h1>НАШИ УСЛУГИ, <span class="slide-text2"></span></h1>
                </div>
            </div>
            <div class="container">
                <div class="eight columns">
                    <p>На сегодняшний день каждый руководитель осознает, что без интернет - представительства его бизнес будет не столь весомый и современный. Сегодня все покупки, заявки и даже обучение проходит через интернет паутину, и поэтому имение своего интернет сайта - это стойкий фундамент для строение дальнейшей высотки своего бизнеса.</p>
                </div>
                <div class="eight columns">
                    <p>Перед тем как веб студия береться за ваш проект, она полностью изучает и проводит анализ ваших будущих конкурентов, и строит ваш сайт обходя при этом все подводные камни, что бы вы увидели, что иметь свой бизнес в интернет паутине - проще чем страничку в соц. сетях.</p>
                </div>
            </div>
            <div class="services-offer color1">
                <div class="container">
                    <div class="sixteen columns">	
                        <h5>Дизайн</h5>
                    </div>
                </div>			
            </div>	
            <div class="container">
                <div class="four columns">
                    <div class="services-icon-wrap1">
                        <div class="mask-services"></div>
                        <div class="services-icon-design"></div>
                    </div>
                </div>
                <div class="eight columns">
                    <p>Как говориться "Встречают по одёжке - провожают по уму", так же и в интернет бизнесе. Для того что бы он развевался - он должен быть приятным для потенциальных клиентов. Ведь даже простая интернет страничка поданная в ярких красках радуги - будет посещающей, чем огромные и мрачные интернет порталы.</p>
                </div>
                <div class="four columns services-list">
                    <ul class="list-services">
                        <li class="check1"><p>Сервис №1</p></li>
                        <li class="check1"><p>Сервис №2</p></li>
                        <li class="check1"><p>Сервис №3</p></li>
                        <li class="check1"><p>Сервис №4</p></li>
                    </ul>
                </div>
            </div>
            <div class="services-offer color2">
                <div class="container">
                    <div class="sixteen columns">	
                        <h5>Программирование</h5>
                    </div>
                </div>			
            </div>	
            <div class="container">
                <div class="four columns">
                    <div class="services-icon-wrap2">
                        <div class="services-icon-digital"></div>
                    </div>
                </div>
                <div class="eight columns">
                    <p>Многие думают, что Lorem Ipsum - взятый с потолка псевдо-латинский набор слов, но это не совсем так. Его корни уходят в один фрагмент классической латыни 45 года н.э., то есть более двух тысячелетий назад. Ричард МакКлинток, профессор латыни из колледжа.</p>
                </div>
                <div class="four columns services-list">
                    <ul class="list-services">
                        <li class="check2"><p>Сервис №1</p></li>
                        <li class="check2"><p>Сервис №2</p></li>
                        <li class="check2"><p>Сервис №3</p></li>
                        <li class="check2"><p>Сервис №4</p></li>

                    </ul>
                </div>
            </div>
            <div class="services-offer color3">
                <div class="container">
                    <div class="sixteen columns">	
                        <h5>SEO</h5>
                    </div>
                </div>			
            </div>	
            <div class="container">
                <div class="four columns">
                    <div class="services-icon-wrap3">
                        <div class="services-icon-strat"></div>
                    </div>
                </div>
                <div class="eight columns">
                    <p>Многие считают, что создали сайт и сразу же на него лынут огромной волной посетители - это не так! На просторах интернета высокая борьба за место под солнцем - в ТОП выдаче поисковой системы. Веб студии "AP" позволит вам преодолеть барьер конкуренции в поисковой выдаче Яндекс и Google.</p>
                </div>
                <div class="four columns services-list">
                    <ul class="list-services">
                        <li class="check3"><p>Сервис №1</p></li>
                        <li class="check3"><p>Сервис №2</p></li>
                        <li class="check3"><p>Сервис №3</p></li>
                        <li class="check3"><p>Сервис №4</p></li>
                    </ul>
                </div>
            </div>			
        </div>	


        <div id="separator2">
            <div class="separator2-wrap">
                <div class="container">
                    <div class="sixteen columns">
                        <h3><strong>Давайте работать вместе</strong> и создавать что-то потресающе новое!</h3>
                    </div>
                </div>
            </div>
        </div>	



        <div id='works'>
            <div class="container">
                <div class="sixteen columns">
                    <h1>Мы делаем, <span class="slide-text1"></span></h1>
                </div>
            </div>
            <div class="container">
                <div class="sixteen columns text-works">
                    <p>Многие думают, что Lorem Ipsum - взятый с потолка псевдо-латинский набор слов, но это не совсем так. Его корни уходят в один фрагмент классической латыни 45 года н.э., то есть более двух тысячелетий назад. Ричард МакКлинток, профессор латыни из колледжа.Многие думают, что Lorem Ipsum - взятый с потолка псевдо-латинский набор слов, но это не совсем так.</p>
                </div>
            </div>	
            <div class="fil">	
                <div class="container">
                    <div class="sixteen columns">
                        <div id="portfolio-filter">
                            <ul id="filter">
                                <li><a href="#" class="current color5" data-filter="*" title="Показать все работы">Все работы</a></li>
                                <li><a href="#" class="color1" data-filter=".photography" title="Показать все работы раздела Веб дизайна">Веб дизайн</a></li>
                                <li><a href="#" class="color2" data-filter=".illustration" title="Показать все работы раздела Интернет-магазины">Интернет-магазины</a></li>
                                <li><a href="#" class="color3" data-filter=".motion-graphics" title="Показать все работы раздела Мотивоционная графика">Мотивоционная графика</a></li>
                                <li><a href="#" class="color4" data-filter=".web-design" title="Показать все работы раздела Дизайн логотипов">Дизайн логотипов</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>	
            <div class="portfolio-isotope">
                <div id="container1" class="clearfix">
                    <div class="box photography web-design">
                        <a class='iframe group1'  href="/portfolio" title="">
                            <img src="images/portfolio/1.jpg" alt="" />
                            <div class="mask"></div>
                            <h4>Project Title 1</h4>
                            <p>Some Text Here</p>
                        </a>
                    </div>
                    <div class="box motion-graphics">
                        <a class='iframe group1'  href="/portfolio" title="">
                            <img src="images/portfolio/2.jpg" alt="" />	
                            <div class="mask"></div>
                            <h4>Project Title</h4>
                            <p>Some Text Here</p>
                        </a>
                    </div>
                    <div class="box photography motion-graphics">
                        <a class='iframe group1'  href="/portfolio" title="">
                            <img src="images/portfolio/3.jpg" alt="" />
                            <div class="mask"></div>
                            <h4>Project Title</h4>
                            <p>Some Text Here</p>
                        </a>
                    </div>
                    <div class="box photography">
                        <a class='iframe group1'  href="/portfolio" title="">
                            <img src="images/portfolio/4.jpg" alt="" />
                            <div class="mask"></div>
                            <h4>Project Title</h4>
                            <p>Some Text Here</p>
                        </a>
                    </div>
                    <div class="box illustration web-design">
                        <a class='iframe group1'  href="/portfolio" title="">
                            <img src="images/portfolio/5.jpg" alt="" />	
                            <div class="mask"></div>
                            <h4>Project Title</h4>
                            <p>Some Text Here</p>
                        </a>
                    </div>
                    <div class="box photography">
                        <a class='iframe group1'  href="/portfolio" title="">
                            <img src="images/portfolio/6.jpg" alt="" />
                            <div class="mask"></div>
                            <h4>Project Title</h4>
                            <p>Some Text Here</p>
                        </a>
                    </div>
                    <div class="box motion-graphics">
                        <a class='iframe group1'  href="/portfolio" title="">
                            <img src="images/portfolio/7.jpg" alt="" />	
                            <div class="mask"></div>
                            <h4>Project Title</h4>
                            <p>Some Text Here</p>
                        </a>
                    </div>
                    <div class="box illustration">
                        <a class='iframe group1'  href="/portfolio" title="">
                            <img src="images/portfolio/8.jpg" alt="" />
                            <div class="mask"></div>
                            <h4>Project Title</h4>
                            <p>Some Text Here</p>
                        </a>
                    </div>
                    <div class="box web-design">
                        <a class='iframe group1'  href="/portfolio" title="">
                            <img src="images/portfolio/9.jpg" alt="" />	
                            <div class="mask"></div>
                            <h4>Project Title</h4>
                            <p>Some Text Here</p>
                        </a>
                    </div>
                    <div class="box photography motion-graphics">
                        <a class='iframe group1'  href="/portfolio" title="">
                            <img src="images/portfolio/10.jpg" alt="" />
                            <div class="mask"></div>
                            <h4>Project Title</h4>
                            <p>Some Text Here</p>	
                        </a>
                    </div>
                    <div class="box illustration web-design">
                        <a class='iframe group1'  href="/portfolio" title="">
                            <img src="images/portfolio/11.jpg" alt="" />
                            <div class="mask"></div>
                            <h4>Project Title</h4>
                            <p>Some Text Here</p>
                        </a>
                    </div>
                    <div class="box motion-graphics">
                        <a class='iframe group1'  href="/portfolio" title="">
                            <img src="images/portfolio/12.jpg" alt="" />	
                            <div class="mask"></div>
                            <h4>Project Title</h4>
                            <p>Some Text Here</p>
                        </a>
                    </div>
                </div>	
            </div>
        </div>



        <div class="to-start color6">
            <div class="container">
                <div class="sixteen columns">	
                    <h5>ВЫ ГОТОВЫ ОБСУДИТЬ ВАШ БУДУЩИЙ ПРОЕКТ ?</h5>
                </div>
                <div class="sixteen columns">
                    <div class="butt-con">
                        <a href="#contact" class="scroll color1">СВЯЗАТСЯ</a>
                    </div>	
                </div>
            </div>			
        </div>		


        <div id="separator2">
            <div class="separator2-wrap">
                <div class="container">
                    <div class="sixteen columns">
                        <h3><strong>Давайте работать вместе</strong> и создавать что-то потресающе новое!</h3>
                    </div>
                </div>
            </div>
        </div>		





        <div id="contact">	
            <div class="contact-info">
                <div class="container">
                    <div class="one-third column">
                        <h6>Режим работы:</h6>
                        <p>понедельник - пятница, с 9:00 до 18:00</p>
                        <p>суббота: с 10:00 до 18:00</p>
                    </div>
                    <div class="one-third column">
                        <h6>Наши телефоны:</h6>
                        <p>Менеджер: +38 (050) 995 67 95</p>
                        <p>Директор:   +38 (095) 30 500 15</p>
                    </div>
                    <div class="one-third column">
                        <h6>Наша почта:</h6>
                        <p>Менеджер:<a href="mailto:alexeiantonov91@gmail.com" title="mailto:alexeiantonov91@gmail.com">alexeiantonov91@gmail.com</a></p>
                        <p>Директор: <a href="mailto:romanantonov@mail.com" title="mailto:romanantonov@mail.com">romanantonov@mail.com</a></p>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="sixteen columns">
                    <form name="ajax-form" id="ajax-form" action="http://ivang-design.com/creatrix/parallax/mail-it.php" method="post">
                        <h6>Отправить сообщение:</h6>
                        <label for="name">Имя: * 
                            <span class="error" id="err-name">пожалуйста введите имя</span>
                        </label>
                        <input name="name" id="name" type="text" />
                        <label for="email">E-Mail: * 
                            <span class="error" id="err-email">пожалуйста введите e-mail</span>
                            <span class="error" id="err-emailvld">не верный формат e-mail</span>
                        </label>
                        <input name="email" id="email" type="text" />
                        <label for="message">Сообщения:</label>
                        <textarea name="message" id="message"></textarea>
                        <button class="send_message" id="send">Отправить</button>
                        <div class="error" id="err-form">Возникла проблема при валидации формы, пожалуйста проверьте!</div>
                        <div class="error" id="err-timedout">Ошибка в подключение к серверу!</div>
                        <div class="error" id="err-state"></div>
                    </form>
                    <div id="ajaxsuccess">Сообщение успешно отправленно!!</div>	
                </div>	
            </div>		
        </div>	



        <!-- Copy
================================================== -->	 

        <div id="copy">
            <div class="container">
                <div class="sixteen columns">
                    <p>© 2014, Web-студия <span>ap</span>. Все права защищены.</p>
                </div>
                <div class="sixteen columns">
                    <div class="social-footer">
                        <ul class="list-social-footer">
                            <li class="icon-soc-footer"><a href="#" title="#"><img src="images/facebook.png" alt="facebook"></a></li>
                            <li class="icon-soc-footer"><a href="#" title="#"><img src="images/vk.png" alt="vk"></a></li>
                            <li class="icon-soc-footer"><a href="#" title="#"><img src="images/googleplus.png" alt="g+"></a></li>
                        </ul>	
                    </div>
                </div>	
            </div>	
        </div>	





        <!-- JAVASCRIPT
    ================================================== -->
        <script type="text/javascript" src="js/jquery.js"></script>
        <script type="text/javascript" src="js/modernizr.custom.js"></script>
        <script type="text/javascript">
            $('.bar-percentage[data-percentage]').each(function() {
                var progress = $(this);
                var percentage = Math.ceil($(this).attr('data-percentage'));
                $({countNum: 0}).animate({countNum: percentage}, {
                    duration: 4000,
                    easing: 'linear',
                    step: function() {
                        // What todo on every count
                        var pct = Math.floor(this.countNum) + '%';
                        progress.text(pct) && progress.siblings().children().css('width', pct);
                    }
                });
            });
        </script>  
        <script type="text/javascript" src="js/jquery.nicescroll.min.js"></script>	
        <script type="text/javascript" src="js/jquery.sticky.js"></script>
        <script type="text/javascript" src="js/jquery.airport-1.1.source.js"></script>		
        <script type="text/javascript" src="js/classie.js"></script>
        <script type="text/javascript" src="js/modalEffects.js"></script>
        <script type="text/javascript" src="js/cssParser.js"></script>
        <script type="text/javascript" src="js/jquery.masonry.min.js"></script>
        <script type="text/javascript" src="js/jquery.isotope.min.js"></script> 
        <script type="text/javascript" src="js/jquery.parallax-1.1.3.js"></script>
        <script type="text/javascript" src="js/jquery.localscroll-1.2.7-min.js"></script>
        <script type="text/javascript" src="js/jquery.scrollTo-1.4.2-min.js"></script>
        <script type="text/javascript" src="js/jquery.colorbox.js"></script>
        <script type="text/javascript" src="js/template.js"></script>  

        <!-- End Document
        ================================================== -->
    </body>


</html>