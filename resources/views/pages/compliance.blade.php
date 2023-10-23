@extends('layouts.app')
@section('title', 'Комплаенс')
@section('content')
    <section class="report">
        <div class="container-md">
            <div class="container-md">
                <h2>Комплаенс-офицер АО «Астана-Энергия»</h2>
                <div class="gov__description">
                    <p>Асқар Амангелдіұлы</p>
                    <p><strong>тел.</strong> 8 7172 644082 (вн. 540)</p>
                    <p><strong>моб.</strong> 8 777 772 22 32</p>
                    <p><strong>эл.адрес:</strong> <a class="text-primary" href="mailto:a.amangeldiuly@astana-energy.kz">a.amangeldiuly@astana-energy.kz</a></p>
                    <p><strong>Цель деятельности Комплаенс-офицера</strong></p>
                    <p>Обеспечение соблюдения законодательства о противодействии коррупции, мониторинг за реализацией мероприятий по противодействию коррупции, формирование внутренней правовой и корпоративной культуры Общества, отвергающей коррупцию и обеспечивающей принципы честности и неподкупности при исполнении своих должностных обязанностей.</p>
                    <p><strong>Задачи.</strong></p>
                    <p>проведение единой политики в области противодействия коррупции;<br>

                     формирование у должностных лиц и работников Общества понимания нулевой терпимости к любым коррупционным проявлениям;<br>

                     минимизация риска вовлечения должностных лиц и работников Общества, а также третьих лиц в коррупционную деятельность;<br>

                    разработка и внедрение антикоррупционных стандартов, направленных на предупреждение и противодействие коррупции, минимизацию и ликвидацию последствий коррупционных действий.<br>

                    воспитание у работников строгого соблюдения антикоррупционного законодательства, а также внутренних нормативных документов, регламентирующих деятельность Общества в сфере противодействия коррупции;<br>

                     недопущение наличия коррупциогенных факторов во внутренних нормативных документах Общества;<br>

                     обеспечение открытости, добросовестной конкуренции и объективности при выполнении работ и оказании услуг.
                    </p>
                    <p><strong><a name="bookmark4">Меры по предупреждению и противодействию коррупции</a></strong></p>

                    <p>Направления деятельности Общества, где возможно возникновение коррупционного риска.</p>

                    <p>1. подарки и представительские расходы; <br>

                    2. привлечение третьих лиц в вопросах противодействия коррупции;<br>

                    3. платежи лицам, занимающим ответственную государственную должность, лицам, уполномоченным на осуществление государственных функций, а также лицам, приравненным к ним;<br>

                    4. оказание спонсорской и благотворительной помощи;<br>

                    5. совершение сделок, проведение государственных закупок товаров, работ и услуг в рамках деятельности Общества;<br>

                    6. управление персоналом;<br>
                    7. финансовая и юридическая экспертиза внутренних документов.</p>
                </div>
            </div>
            <h4 class="docs__header-title">ДОКУМЕНТЫ</h4>
            <div class="docs__items">
                <div class="docs">
                    <img src="{{asset('user/assets/img/docx.png')}}" style="width: 26px;height: 26px">
                    <div class="docs__property">
                        <a class="docs__title" href="{{asset('user/assets/files/politic.docx')}}">Политика противодействия коррупции</a>
                        <p class="docs__file-text">DOCX (178 KB)</p>
                    </div>
                </div>
                <div class="docs">
                    <img src="{{asset('user/assets/img/docx.png')}}" style="width: 26px;height: 26px">
                    <div class="docs__property">
                        <a class="docs__title" href="{{asset('user/assets/files/plan.docx')}}">План мероприятий по противодействию коррупции</a>
                        <p class="docs__file-text">DOCX (182 KB)</p>
                    </div>
                </div>
                <div class="docs">
                    <img src="{{asset('user/assets/img/docx.png')}}" style="width: 26px;height: 26px">
                    <div class="docs__property">
                        <a class="docs__title" href="{{asset('user/assets/files/politic.docx')}}">Правила урегулирования конфликта</a>
                        <p class="docs__file-text">DOCX (158 KB)</p>
                    </div>
                </div>
                <div class="docs">
                    <img src="{{asset('user/assets/img/docx.png')}}" style="width: 26px;height: 26px">
                    <div class="docs__property">
                        <a class="docs__title" href="{{asset('user/assets/files/rules1.docx')}}">Правила проведения внутреннего анализа коррупционных рисков</a>
                        <p class="docs__file-text">DOCX (278 KB)</p>
                    </div>
                </div>
                <div class="docs">
                    <img src="{{asset('user/assets/img/icons/pdf.jpg')}}" style="width: 26px;height: 26px">
                    <div class="docs__property">
                        <a class="docs__title" href="{{asset('user/assets/files/polozheniye.pdf')}}">Положение о комплаенс-офицере АО 'Астана-Энергия</a>
                        <p class="docs__file-text">PDF (423 KB)</p>
                    </div>
                </div>

                <div class="docs">
                    <img src="{{asset('user/assets/img/icons/pdf.jpg')}}" style="width: 26px;height: 26px">
                    <div class="docs__property">
                        <a class="docs__title" href="{{asset('user/assets/files/codex1.pdf')}}">Кодекс деловой этики</a>
                        <p class="docs__file-text">PDF (478 KB)</p>
                    </div>
                </div>
                <div class="docs">
                    <img src="{{asset('user/assets/img/icons/pdf.jpg')}}" style="width: 26px;height: 26px">
                    <div class="docs__property">
                        <a class="docs__title" href="{{asset('user/assets/files/planmt3.pdf')}}">План мероприятий ВАКР</a>
                        <p class="docs__file-text">PDF (538 KB)</p>
                    </div>
                </div>

                <div class="docs">
                    <img src="{{asset('user/assets/img/icons/pdf.jpg')}}" style="width: 26px;height: 26px">
                    <div class="docs__property">
                        <a class="docs__title" href="{{asset('user/assets/files/prp3.pdf')}}">Протокол совещания от 29.06.2023</a>
                        <p class="docs__file-text">PDF (456 KB)</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
    <script>
        $(function() {
            $(".reports__item-content").not(":first").hide(); // Hide all content except the first

            $(".reports__item").click(function() {
                var $content = $(this).next(".reports__item-content");
                var $icon = $(this).find(".custom-icon"); // Get the custom icon within the clicked item

                $content.slideToggle();


                if ($content.is(":visible")) {
                    $icon.removeClass("bi-chevron-down").addClass("bi-chevron-up");
                } else {
                    $icon.removeClass("bi-chevron-up").addClass("bi-chevron-down");
                }

                $(".reports__item-content").not($content).slideUp();
            });
        });
    </script>
@endsection