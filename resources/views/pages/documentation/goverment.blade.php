@extends('layouts.app')
@section('title', 'Государственные символы Республики Казахстан')

@section('content')
    <div class="govs-inner">
        <h2>Государственные символы Республики Казахстан</h2>
        <div class="flag-container">
            <img class="flag-kz" src="{{asset('user/assets/img/Flag_of_Kazakhstan.svg')}}" alt="Flag of QAZAQSTAN">
        </div>
        <div class="gov__description">
            <p class="text-center">  ГОСУДАРСТВЕННЫЙ ФЛАГ РЕСПУБЛИКИ КАЗАХСТАН</p>
            <p>Государственный флаг Республики Казахстан представляет собой прямоугольное полотнище голубого цвета с изображением в центре солнца с лучами, под которым - парящий орел. У древка - национальный орнамент в виде вертикальной полосы. Изображение солнца, его лучей, орла и национального орнамента - цвета золота. Соотношение ширины Флага к его длине - 1:2.</p>
            <p>Голубая одноцветность Государственного флага Республики Казахстан отражает не только приверженность идее единения, но и напоминает о безоблачном небе, которое всегда и у всех было олицетворением мира, спокойствия и благополучия.</p>
            <p>На языке геральдики голубой цвет, его оттенки соответствуют таким человеческим качествам, как честность, верность надежда. Золотое солнце, купающееся в своих лучах, олицетворяет покой и богатство, а степной орел щедрость и зоркость, высоту помыслов казахстанцев.</p>
            <p>Авторам Государственного флага Республики Казахстан является художник Шакен Ниязбеков.</p>

            <div class="flag-container">
                <img class="flag-kz" src="{{asset('user/assets/img/gerb-350px.jpg')}}" alt="gerb of QAZAQSTAN">
            </div>
            <p class="text-center">ГОСУДАРСТВЕННЫЙ ГЕРБ РЕСПУБЛИКИ КАЗАХСТАН</p>
            <p class="justify">Государственный Герб Республики Казахстан имеет форму круга и представляет собой изображение шанырака (верхняя сводчатая часть юрты) на голубом фоне, от которого во все стороны в виде солнечных лучей расходятся уыки (опоры). Справа и слева от шанырака расположены изображения мифических крылатых коней. В верхней части расположена объемная пятиконечная звезда, а в нижней части - надпись "Қазақстан". Изображение звезды, шанырака, уыков, мифических крылатых коней, а также надписи "Қазақстан" - цвета золота.<br>
                В основе Государственного герба Республики Казахстан лежит шанырак. Он стал сердцем герба.<br>
                Это очаг, целостность мира, символ первоосновы государства семьи.<br>
                Крылатый тулпар образ бессмертия, бесконечное развитие и духовное богатство народов, проживающих в Казахстане под одним шаныраком. Тулпар – символ сохранения строя суверенного Казахстана. Крылатый тулпар это полет, мечта, молодое поколение, с которым всегда связаны надежды.<br>
                Пятиконечная звездочка венчает герб. У каждого человека есть своя, путеводная звезда. Такая звезда должна быть и у государства.<br>
                Авторами Государственного герба Республики Казахстан являются архитекторы Шота Уалиханов и Жандарбек Малибеков.</p>
            <p class="text-center">ГОСУДАРСТВЕННЫЙ ГИМН РЕСПУБЛИКИ КАЗАХСТАН</p>
            <p >Авторы слов:<strong>Жумекен Нажимеденов, Нурсултан Назарбаев</strong></p>
            <p >Автор музыки:<strong>Шамши Калдаяков</strong></p>
            <p align="center" style="text-align:center; margin:0cm 0cm 10pt"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif;sans-serif&quot;"><span style="font-size:12.0pt"><span style="font-family:Times New Roman,sans-serif;;,&quot;serif&quot;">Алтын күн аспаны,&nbsp;<br>
Алтын дән даласы,<br>
Ерліктің дастаны,<br>
Еліме қарашы!<br>
Ежелден ер деген,<br>
Даңқымыз шықты ғой.<br>
Намысын бермеген,<br>
Қазағым мықты ғой!</span></span></span></span></span>
            </p>
            <p align="center" style="margin-bottom:.0001pt; text-align:center; margin:0cm 0cm 10pt">&nbsp;</p>
            <p><p align="center" style="text-align:center; margin:0cm 0cm 10pt"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif;;sans-serif&quot;"><span style="font-size:12.0pt"><span style="font-family:Times New Roman,sans-serif;;,&quot;serif&quot;">Қайырмасы:</span></span></span></span></span></p>
            <p align="center" style="text-align:center; margin:0cm 0cm 10pt"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif;;sans-serif&quot;"><span style="font-size:12.0pt"><span style="font-family:Times New Roman,sans-serif;;,&quot;serif&quot;">Менің елім, менің елім,<br>
Гүлің болып егілемін,<br>
Жырың болып төгілемін, елім!<br>
Туған жерім менің - Қазақстаным!</span></span></span></span></span></p>
            <p align="center" style="margin-bottom:.0001pt; text-align:center; margin:0cm 0cm 10pt">&nbsp;</p>

            <p align="center" style="text-align:center; margin:0cm 0cm 10pt"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif;;sans-serif&quot;"><span style="font-size:12.0pt"><span style="font-family:Times New Roman,sans-serif;,&quot;serif&quot;">Ұрпаққа жол ашқан,<br>
Кең байтақ жерім бар.<br>
Бірлігі жарасқан,&nbsp;<br>
Тәуелсіз елім бар.<br>
Қарсы алған уақытты,<br>
Мәңгілік досындай,<br>
Біздің ел – бақытты,<br>
Біздің ел – осындай!</span></span></span></span></span></p>
            <p align="center" style="margin-bottom:.0001pt; text-align:center; margin:0cm 0cm 10pt">&nbsp;</p>
            <p align="center" style="text-align:center; margin:0cm 0cm 10pt"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif;"><span style="font-size:12.0pt"><span style="font-family:Times New Roman,sans-serif;">Қайырмасы:</span></span></span></span></span></p>
            <p align="center" style="text-align:center; margin:0cm 0cm 10pt"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif;"><span style="font-size:12.0pt"><span style="font-family:Times New Roman,sans-serif;">Менің елім, менің елім,<br>
Гүлің болып егілемін,<br>
Жырың болып төгілемін, елім!<br>
Туған жерім менің - Қазақстаным!</span></span></span></span></span></p>

        </div>
        <p  style="text-align:center; margin:0 0 10pt">&nbsp;</p>

        <p class="text-primary" style="margin:0 0 10pt;"><a class="text-primary" href="https://adilet.zan.kz/rus/docs/U960002797_">О государственных символах Республики Казахстан</a></p>

        <p class="text-bg-primary" style="margin:0 0 10pt; color:#F29646"><a  class="text-primary" href="https://adilet.zan.kz/rus/docs/C1500000005/history">Об утверждении Плана по модернизации системы использования и продвижения государственных символов, символики населенных пунктов, городов, районов, гг. Астаны и Алматы, областей на 2015-2016 годы</a></p>

        <p class="text-primary" style="margin:0 0 10pt; color:#F29646"><a  class="text-primary" href="https://adilet.zan.kz/rus/docs/P070000862_">Об утверждении Правил замены и уничтожения Государственного Флага, Государственного Герба Республики Казахстан, не соответствующих национальным стандартам</a></p>

        <p class="text-primary" style="margin:0 0 10pt; color:#F29646"><a  class="text-primary" href="https://adilet.zan.kz/rus/docs/P070000873_">Об утверждении Правил использования (установления, размещения) Государственного Флага, Государственного Герба Республики Казахстан и их изображений, а также текста Государственного Гимна Республики Казахстан</a></p>

        <p class="text-primary" style="margin:0 0 10pt; color:#F29646"><a  class="text-primary" href="https://adilet.zan.kz/rus/docs/P1500001186">Об утверждении Правил празднования Дня государственных символов Республики Казахстан</a></p>


    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
    <script>
        $(function() {
            $("#tabs").tabs({
                active: 'tab-1',
                activate: function(event, ui) {
                    $(".reports__tab").removeClass("tab__active");

                    $a = ui.newTab.find("a").addClass("tab__active");
                    console.log($a);
                }
            });
        });
        $(function() {
            $("#financetab").tabs({
                active: 'financetab-1',
                activate: function(event, ui) {
                    $(".reports__tab").removeClass("tab__active");

                    $a = ui.newTab.find("a").addClass("tab__active");
                    console.log($a);
                }
            });
        });

        $(function() {
            $("#financetab").tabs({
                active: 'financetab-1',
                activate: function(event, ui) {
                    $(".reports__tab").removeClass("tab__active");

                    $a = ui.newTab.find("a").addClass("tab__active");
                    console.log($a);
                }
            });
        });
        $(function() {
            $("#invest").tabs({
                active: 'financetab-1',
                activate: function(event, ui) {
                    $(".reports__tab").removeClass("tab__active");

                    $a = ui.newTab.find("a").addClass("tab__active");
                    console.log($a);
                }
            });
        });
        $(function() {
            // Initialize the first set of tabs and make the first item active by default
            $("#tabs").tabs({
                active: 0,
                activate: function(event, ui) {
                    $(".reports__tab").removeClass("tab__active");
                    var $a = ui.newTab.find("a").addClass("tab__active");
                }
            });

            // Handle the dropdown toggle button click
            $(".reports__item-content").not(":first").hide(); // Hide all content except the first

            $(".reports__item").click(function() {
                var $content = $(this).next(".reports__item-content");

                // Toggle the clicked item's content
                $content.slideToggle();

                // Ensure only the clicked item's content is visible, and others are hidden
                $(".reports__item-content").not($content).slideUp();
            });
        });


    </script>
@endsection