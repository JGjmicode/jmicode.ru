<!DOCTYPE html>
<html lang="ru">
    <head>
        <link rel="icon" type="image/ico" href="favicon.ico" />
        <link rel="stylesheet" type="text/css" href="css/style.css" />
        <meta charset="UTF-8">
        <title>JMI Code</title>

    </head>
    <body>
        <header>
            <div class="phone-menu">
                <div class="phone-ico"><img src="img/phone_ico.png" /></div>
                <h2 class="phone-number">+7(978) 555 55 55</h2>
            </div>
        </header>
        
        <div class="wide">
        <div class="banner">
            <img src="/img/baner.jpg" />
        </div>   
        
            <div class="slider">
                <div class="viewport">
                    <ul id="slidewrapper">
                        <li class="slide"><h2>РАЗРАБОТКА</h2></li>
                        <li class="slide"><h2>СОПРОВОЖДЕНИЕ</h2></li>
                        <li class="slide"><h2>ПРОДВИЖЕНИЕ</h2></li>
                    </ul>
                </div>
            </div>
        
        <section class="callback">
            <h3>Заказать звонок</h3>
            <h4>Имя</h4>
            <input type="text" class="input-form name-form"/>
            <h4>Телефон</h4>
            <input type="text" class="input-form name-form"/>
            <input type="button" class="input-form callme-button" value="Перезвоните мне" />
        </section>
        </div>
        <div class="container clearfix">
            <h2>Что мы предлагаем?</h2>
            <section class="service service-develop">
                <h4>РАЗРАБОТКА</h4>
                <div class="service-image"><img src="img/develop.png" /></div>
                <h5>Верстка</h5>
                <h5>Интеграция</h5>
                <h5>Программирование</h5>
            </section>
            <section class="service service-support">
                <h4>СОПРОВОЖДЕНИЕ</h4>
                <div class="service-image"><img src="img/support.png" /></div>
                <h5>Техническое сопровождение</h5>
                <h5>Информационное сопровождение</h5>
                <h5>Внесение изменений на сайт</h5>
            </section>
            <section class="service service-ceo">
                <h4>ПРОДВИЖЕНИЕ</h4>
                <div class="service-image"><img src="img/ceo.png" /></div>
                <h5>Контекстная реклама</h5>
                <h5>SEO-продвижение</h5>
                <h5>Услуги комплексного продвижения</h5>
            </section>                                    
        </div>
        
        <div class="">
        <div class="process-banner">
            <img src="img/process-baner.jpg" />
        </div>        
        </div>
                
        
        
        <div class="container">
            <h2>Разработка web-проектов любой сложности, разработка адаптивных сайтов</h2>
            <div class="serv clearfix">
                <section class="process-tab" onclick="servClick('1');">Разработка сайтов</section>
                <section class="process-tab" onclick="servClick('2');">Анализ</section>
                <section class="process-tab" onclick="servClick('3');">Дизайн</section>
                <section class="process-tab" onclick="servClick('4');">Программирование</section>
                <section class="process-tab" onclick="servClick('5');">Сопровождение</section>
                <section class="process-tab" onclick="servClick('6');">Продвижение</section>
                <section class="process-tab" onclick="servClick('7');">Оптимизация</section>
                <section class="process-tab" onclick="servClick('8');">Реконструкция</section>            
            </div>
            <div class="serv-description">
                <div id="des1">Если Вам необходим качественный и недорогой сайт в сжатые сроки, Вы попали по адресу!</div>
                <div id="des2" class="serv-description-hide">Без анализа невозможно сделать качественный, полезный и нужный проект.</div>
                <div id="des3" class="serv-description-hide">Завершив и согласовав с клиентом предыдущие этапы, мы приступаем к дизайну страниц сайта, который соответствует принятой концепции и основан на пожеланиях Заказчика.</div>
                <div id="des4" class="serv-description-hide">После согласования дизайн-макетов, за дело берутся backend и frontend специалисты, которые воплотят и наполнят жизнью всё то, что было задумано на стадии проектировки и дизайна.</div>
                <div id="des5" class="serv-description-hide">Мы обеспечиваем стабильную техническую поддержку, безопасность Вашего сайта, модернизацию и оперативное информационное сопровождение.</div>
                <div id="des6" class="serv-description-hide">Продвижение бывает разным: SEO, контекстная реклама в «Яндекс.Директ» и Google Adwords. С помощью грамотного использования этих инструментов становится возможным успешное продвижение услуг, сайта, компании и бренда в целом.</div>
                <div id="des7" class="serv-description-hide">Структура сайта. Улучшение навигации, меню и юзабилити в целом. 
                    Тексты. Уникализация, добавление ключевых слов и структурирование текстов.
                    Графика. Уменьшение размера графических элементов для ускорения загрузки сайта.
                    Исходный код. Крайне важно очистить код и исправить его, добавить метатеги.</div>
                <div id="des8" class="serv-description-hide">Реконструкция сайта подразумевает тщательное исследование его состояния, выявление новых потребностей, отсеивание ненужных функций, подбор и применение новых технологий в дизайне, программировании и контенте.</div>
            </div>
        </div>
        
        <footer>
            <img src="img/jmicode.png" />
        </footer>
        
        <script src="/js/jquery-3.2.1.min.js"></script>
        <script src="/js/common.js"></script>
    </body>
</html>