<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Мобильный клиент HopUp</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=1024">

        <link rel="stylesheet" href="css/normalize.min.css">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/fancybox/jquery.fancybox.css">
        <link rel="stylesheet" href="css/base_3.css">


        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">

		<style type="text/css">
            /*.placeholder { color: rgb(242, 171, 39) }*/

            footer form input[type="submit"] {
              /*-pie-background: linear-gradient(to bottom, #bf610f, #e39522) !important;
              behavior: url(PIE.htc) !important;*/
              background: #e39522 url("images/input-bg.jpg") repeat-x;
            }

		</style>

		<met a name='yandex-verification' content='7059bcbe871b4fde' />

    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <header>
            <section class="sec">
                <a href="http://www.tanais.ru/" class="logo"></a>

                <div class="contacts">
                    +7 (499) 390-94-77
                    <div class="sendBtn">
                        <a href="#fb_open_div" class="fb_open"> Заказать обратный звонок</a>
                    </div>
                </div>

                <!-- feedback open-->
                <div id="fb_open_div">
                    <h4>Заказать обратый звонок</h4>
                    <div class="close_fb_open_div"></div>
                    <form id="form_zvonok2" name="form_zvonok2" action="send_zakaz_zvonka.php" method="post" enctype="multipart/form-data">
                        <label>Имя:</label>
                            <input name="fio1" maxlength="40" type="text">
                        <label>*Телефон:</label>
                            <input id="phone1" name="phone1" required value="" type="text">
                        <input name="zvonok_submit" onClick="return Formdata(this.form)" type="submit">
                    </form>
                    <div class="clear"></div>
                </div>

                <h1>
                    мобильный клиент <span>hopup</span> <br>
                    <span class="devider"></span> для <span>directum</span>
                </h1>
                <div class="form">
                    <div class="arrow"></div>
                    <!--<p>Заказать <br>демонстрацию</p>-->

                    <form name="SIMPLE_FORM_7"  action="send_zajavka.php" method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="sessid" id="sessid">
                        <input type="hidden" name="WEB_FORM_ID" value="6">
                        <header>Заказать демонстрацию</header>
                        <div>
                            <label>Имя:</label>
                                <input name="form_name1" type="text">
                            <label>Email:</label>
                                <input name="form_email1" type="email" required >
                            <label>Текст:</label>

                                <textarea name="text" name="form_vopros" required rows="8" cols="40"></textarea>
                                <input id="vp_footer" name="web_form_submit1" value="" onClick="return Formdata4(this.form)" type="submit" class="sendBtn">
                        </div>
                    </form>

                </div>

                <div id="promo_nav">
                  <img src="images/promo_nav_bg.png" alt="" />
                  <a href="https://play.google.com/store/apps/details?id=ru.tanais.directumapp" class="p_android">
                    <i class="p_icon i_android"></i>Android</a>
                  <a href="#" class="p_wp">
                    <i class="p_icon i_wp"></i>Windows Phone</a>
                  <a href="https://itunes.apple.com/ru/app/hopup-for-directum/id888388357?mt=8" class="p_apple">
                    <i class="p_icon i_apple"></i>iOS</a>
                </div>

            </section>
            <div class="clear"></div>
        </header>

        <section class="section_2">
            <div class="sec">
                <div class="slide_to_holder">
                    <a id="slide_to" href="#cost">О стоимости решения<i></i></a>
                </div>
                <hgroup>
                    <h3>
                        Что <span>HOPUP</span> для <span>directum</span> дает<br> <span>руководителю Организации</span>?
                    </h3>
                </hgroup>
                <ul>
                    <li>Понимание того, кто и чем занимается, находясь как в офисе так и вне его.</li>
                    <li>Возможность оперативно ставить задачи и контролировать ход их выполнения.</li>
                    <li>Увеличение процента поручений, выполняемых в срок.</li>
                    <li>Отчетность по выполненным задачам позволяет выявлять неэффективных сотрудников и оптимизировать затраты на персонал.</li>
                    <li>Возможность удаленно работать с документами.</li>
                    <li>Возможность оперативно управлять предприятием, находясь в любом месте земного шара <span>с любого мобильного устройства.</span></li>
                </ul>

                <div class="tabs">
                    <img src="images/tabs_bg.png">
                </div>
                <div class="clear"></div>
            </div>
        </section>

        <section class="section_3">
            <div class="sec">
                <nav class="p_icons">
                    <a href="https://play.google.com/store/apps/details?id=ru.tanais.directumapp"><img src="images/i_android.png"></a>
                    <a href="#"><img src="images/i_wp.png"></a>
                    <a href="https://itunes.apple.com/ru/app/hopup-for-directum/id888388357?mt=8"><img src="images/i_apple.png"></a>
                </nav>

                <div class="video">
                    <a href="http://www.youtube.com/embed/VB5-kjYns4c?autoplay=1" class="fb fancybox.iframe"></a>
                </div>

                <div class="downloads">
                    <a href="files/HopUpx_for_DIRECTUM.pdf">Описание HopUp</a>
                    <a href="files/distributiv_server_chasti_HopUp_s_documentaciey.zip">Скачать дистрибутив серверной части</a>
                </div>

                <div class="store_download">
                    <a href="https://itunes.apple.com/ru/app/hopup-for-directum/id888388357?mt=8"></a>
                    <a href="https://play.google.com/store/apps/details?id=ru.tanais.directumapp"></a>
                </div>

            </div>
            <div class="clear"></div>
        </section>

        <section id="#cost" class="section_4">
        <a name="cost" id="cost"></a>
              <div class="sec">
                    <h2>Стоимость решения</h2>
                    <div class="price_table">
                      <h3>Покупка</h3>
                      <table>
                        <tr>
                          <td>
                            <span>стоимость</span> <span>серверной части</span>
                          </td>
                          <td>
                            50 000 <i class="rub">4</i>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <span>стоимость</span> <span>1 лицензии</span>
                          </td>
                          <td>
                            3 000 <i class="rub">4</i>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <span>стоимость</span> <span>10 лицензий</span>
                          </td>
                          <td>
                            27 000 <i class="rub">4</i>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <span>стоимость</span> <span>30 лицензий</span>
                          </td>
                          <td>
                            80 000 <i class="rub">4</i>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <span>стоимость</span> <span>50 лицензий</span>
                          </td>
                          <td>
                            127 500 <i class="rub">4</i>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <span>стоимость</span> <span>100 лицензий</span>
                          </td>
                          <td>
                            240 000 <i class="rub">4</i>
                          </td>
                        </tr>
                      </table>
                    </div> <!-- left_table -->

                    <div class="offer">
                      <p>
                        <span>Установив</span> один раз <span>серверную часть</span> вы получаете возможность работы с DIRECTUM с любых мобильных устройств на платформах iOS, Android, Windows Phone.<br><span>Лицензия выдается на пользователя, т.е. если у одного пользователя</span> есть iPad <span>и</span> телефон на android, <span>то ему</span><br> <span>достаточно одной лицензии!</span>
                      </p>
                    </div>

                    <p class="last-chance">
                      Попробуйте HopUp бесплатно в течение одного месяца!
                    </p>

                <div class="clear"></div>
              </div>
        </section>

        <section class="section_5">
          <h3><span>Кто мы?</span></h3>
          <div class="sec">
            <article>
              <div class="article_icon_1"></div>
              Партнеры компании DIRECTUM с 2007 года
            </article>
            <article>
              <div class="article_icon_2"></div>
              Группа компаний TANAIS: работаем с 1997 года
            </article>
            <article>
              <div class="article_icon_3"></div>
              статус "Сертифицированный партнер" компании DIRECTUM
            </article>
            <article>
              <div class="article_icon_4"></div>
              Более 2000 клиентов стали нашими друзьями
            </article>
            <article>
              <div class="article_icon_5"></div>
              центр Сертифицированного Обучения компании DIRECTUM
            </article>
            <article>
              <div class="article_icon_6"></div>
              В направлении электронного документооборота работает более 25 сотрудников
            </article>
            <div class="clear"></div>
          </div>
        </section>

        <section class="section_6">
          <div class="sec">
            <h3>Остались вопросы?</h3>
              <div class="form">
                <form name="SIMPLE_FORM_8" action="send_vopros.php" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="sessid" id="sessid">
                    <input type="hidden" name="WEB_FORM_ID" value="8">
                    <input type="text" name="form_name1" required placeholder="Имя" >
                    <input type="text" name="form_email1" required placeholder="Email">
                    <div class="text_area">
                        <textarea name="form_vopros" placeholder="Текст вопроса"></textarea>
                    </div>
                    <input class="ActionButton" id="vp_footer" type="submit" onClick="return Formdata4(this.form)" name="web_form_submit1" value="">
                    <div id="question_form_error" style="color: #f00; font-size: 13px;"></div>
                    <div class="clear"></div>
                </form>
              </div>
              <div class="info_text">
                  <a href="http://www.tanais.ru/" class="logo"></a>
                  <p>
                  Звоните +7 (499) 390-94-77<br>
                  <span>Пишите  hopup@tanais.ru</span><br><br>
                  <span>Приедем. Покажем. Расскажем.</span></p>
              </div>
              <div class="clear"></div>
          </div>
        </section>

        <footer>
        <div class="sec">
            <a href="#" class="devider"></a>
            <form name="form_zvonok2" action="send_zakaz_zvonka.php" method="post" enctype="multipart/form-data">
                <input type="text" name="fio1" maxlength="40" placeholder="Имя" required>
                <input type="text" name="phone1" placeholder="Телефон" required>
                <input id="ftid" name="zvonok_submit" type="submit" value="Заказать обратный звонок" onClick="return Formdata(this.form)">
            </form>
            <div class="clear"></div>
            </div>
        </footer>

        <script src="js/vendor/jquery-1.11.0.min.js"></script>
        <script src='http://jamesallardice.github.io/Placeholders.js/assets/js/placeholders.jquery.min.js'></script>


        <script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
        <script src="js/PIE_IE9.js"></script>

        <script src="js/vendor/jquery.fancybox.js"></script>
        <script src="js/ft.js"></script>
        <script src="js/cufon-yui.js"></script>
                <script src="fonts/js/Cuprum_400.font.js"></script>
                <script src="fonts/js/Open_Sans_700.font.js"></script>
                <script src="fonts/js/PF_Agora_Sans_Pro_400.font.js"></script>
                <script src="fonts/js/PF_Handbook_Pro_italic_400.font.js"></script>
                <script src="fonts/js/PF_Agora_Sans_Pro_Medium_italic_500.font.js"></script>
                <script src="fonts/js/Myriad_Pro_400.font.js"></script>
                <script src="fonts/js/PT_Rouble_Sans_400.font.js"></script>

        <script src="js/main.js"></script>



        <?if(isset($_GET["action"]) && ($_GET["action"] == "send_question" || $_GET["action"] == "send_callback")):?>
        <script>
        	$("<div>Спасибо за ваше обращение, наши специалисты обязательно с вами свяжутся, в ближайшее время.</div>").dialog({
        	dialogClass: "info-window",
        	modal: true,
        	draggable: false,
        	buttons: [
        	{
        	text: "OK",
        	click: function() {
        	$( this ).dialog( "close" );
        	}
        	}
        	]
        	});
        </script>
        <?elseif(isset($_GET["action"]) && $_GET["action"] == "send_prezent"):?>
        <script>
                $("<div>Спасибо за ваше обращение,  в течении нескольких минут на ваш Email придет письмо с презентацией.</div>").dialog({
                dialogClass: "info-window",
                modal: true,
                draggable: false,
                buttons: [
                {
                text: "OK",
                click: function() {
                $( this ).dialog( "close" );
                }
                }
                ]
                });
                </script>
        <?endif;?>

        <script type="text/javascript">
         //<![CDATA[
         Cufon.now();  //]]></script>


        <!--[if lt IE 10 ]>
<script type="text/javascript">
var input = document.getElementsByTagName('input'); // get all text fields
var cls = "placeholdr"; // set name of the class

if (input) { // if fields found
  for (var i=0; i < input.length; i++) {
      var t = input[i];
      var txt = t.getAttribute("placeholder");
      if (txt.length > 0) { // if placeholder found
         t.className = t.value.length == 0 ? t.className+" "+cls : t.className; // add class
         t.value = t.value.length > 0 ? t.value : txt; // if no value found

      t.onfocus = function() { // on focus
        this.className = this.className.replace(cls);
        this.value = this.value == this.getAttribute("placeholder") ? "" : this.value;
      }

      t.onblur = function() { // on focus out
        if (this.value.length == 0) {
          this.value = this.getAttribute("placeholder");
          this.className = this.className+" "+cls; // add class
        }
      }
    }
  }
}
})();
</script>
<![endif]-->

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-53064660-1', 'auto');
  ga('send', 'pageview');

</script>

<!-- Yandex.Metrika counter -->
<script type="text/javascript">
(function (d, w, c) {
    (w[c] = w[c] || []).push(function() {
        try {
            w.yaCounter25584926 = new Ya.Metrika({id:25584926,
                    webvisor:true,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true});
        } catch(e) { }
    });

    var n = d.getElementsByTagName("script")[0],
        s = d.createElement("script"),
        f = function () { n.parentNode.insertBefore(s, n); };
    s.type = "text/javascript";
    s.async = true;
    s.src = (d.location.protocol == "https:" ? "https:" : "http:") + "//mc.yandex.ru/metrika/watch.js";

    if (w.opera == "[object Opera]") {
        d.addEventListener("DOMContentLoaded", f, false);
    } else { f(); }
})(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="//mc.yandex.ru/watch/25584926" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->



    </body>
</html>
