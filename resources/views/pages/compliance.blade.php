@extends('layouts.app')
@section('title', 'Комплаенс')
@section('content')
    <section class="report">
        <div class="container-md">
            <div class="container-md">
                @if(app()->getLocale() == 'ru')
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
                @else
                    <h2>«Астана-Энергия» АҚ Комплаенс-офицері</h2>
                    <div class="gov__description">
                        <p>Асқар Амангелдіұлы</p>
                        <p><strong>тел.</strong> 8 7172 644082 (ішк. 540)</p>
                        <p><strong>ұялы тел.</strong> 8 777 772 22 32</p>
                        <p><strong>эл.мекенжайы:</strong> <a class="text-primary" href="mailto:a.amangeldiuly@astana-energy.kz">a.amangeldiuly@astana-energy.kz</a></p>
                        <p><strong>Комплаенс-офицер қызметінің мақсаты</strong></p>
                        <p>Сыбайлас жемқорлыққа қарсы іс-қимыл туралы заңнаманың сақталуын қамтамасыз ету, сыбайлас жемқорлыққа қарсы іс-шаралардың іске асырылуына мониторинг жүргізу, сыбайлас жемқорлықтан бас тартатын және өзінің лауазымдық міндеттерін атқару кезінде адалдық пен сатылмайтындық қағидаттарын қамтамасыз ететін, Қоғамның ішкі құқықтық және корпоративтік мәдениетін қалыптастыру.</p>
                        <p><strong>Міндеттері.</strong></p>
                        <p>сыбайлас жемқорлыққа қарсы іс-қимыл саласында бірыңғай саясат жүргізу;<br>

                            Қоғамның лауазымды тұлғалары мен қызметкерлерінде кез келген сыбайлас жемқорлық көріністеріне мүлдем төзбеушілік түсінігін қалыптастыру;<br>

                            Қоғамның лауазымды адамдары мен қызметкерлерін, сондай-ақ үшінші тұлғаларды сыбайлас жемқорлық қызметіне тарту тәуекелін барынша азайту;<br>

                            сыбайлас жемқорлықтың алдын алуға және оған қарсы іс-қимылға, сыбайлас жемқорлық әрекеттерінің салдарын азайтуға және жоюға бағытталған сыбайлас жемқорлыққа қарсы стандарттарды әзірлеу және енгізу.<br>

                            қызметкерлерді сыбайлас жемқорлыққа қарсы заңнаманы, сондай-ақ Қоғамның сыбайлас жемқорлыққа қарсы іс-қимыл саласындағы қызметін регламенттейтін ішкі нормативтік құжаттарды қатаң сақтауға тәрбиелеу;<br>

                            Қоғамның ішкі нормативтік құжаттарында сыбайлас жемқорлық факторларының болуына жол бермеу;<br>

                            жұмысты орындау және қызмет көрсету кезінде ашықтықты, адал бәсекелестікті және объективтілікті қамтамасыз ету.
                        </p>
                        <p><strong><a name="bookmark4">Сыбайлас жемқорлықтың алдын алу және оған қарсы іс-қимыл жөніндегі шаралар</a></strong></p>

                        <p>Сыбайлас жемқорлық тәуекелінің туындауы мүмкін Қоғам қызметінің бағыттары.</p>

                        <p>1. сыйлықтар және өкілдік шығындар;<br>

                            2. сыбайлас жемқорлыққа қарсы іс-қимыл мәселелерінде үшінші тұлғаларды тарту;<br>

                            3. жауапты мемлекеттік лауазымды атқаратын адамдарға, мемлекеттік функцияларды жүзеге асыруға уәкілеттік берілген адамдарға, сондай-ақ оларға теңестірілген адамдарға төлемдер;<br>

                            4. демеушілік және қайырымдылық көмек көрсету;<br>

                            5. Қоғам қызметі шеңберінде мәмілелер жасау, тауарларды, жұмыстар мен көрсетілетін қызметтерді мемлекеттік сатып алуды жүргізу;<br>

                            6. персоналды басқару;<br>
                            7. ішкі құжаттардың қаржылық және құқықтық сараптамасы.</p>
                    </div>
                @endif
            </div>
            @if(app()->getLocale() == 'ru')
                <h4 class="docs__header-title">ДОКУМЕНТЫ</h4>
                <div class="docs__items">
                    <div class="docs">
                        <img src="{{asset('user/assets/img/docx.png')}}" style="width: 26px;height: 26px">
                        <div class="docs__property">
                            <a class="docs__title" href="{{asset('user/assets/files/politic.docx')}}">СЫБАЙЛАС ЖЕМҚОРЛЫҚҚА ҚАРСЫ САЯСАТ</a>
                            <p class="docs__file-text">DOCX (178 KB)</p>
                        </div>
                    </div>
                    <div class="docs">
                        <img src="{{asset('user/assets/img/docx.png')}}" style="width: 26px;height: 26px">
                        <div class="docs__property">
                            <a class="docs__title" href="{{asset('user/assets/files/plan.docx')}}">
                                ПОЛИТИКА ПРОТИВОДЕЙСТВИЯ КОРРУПЦИИ</a>
                            <p class="docs__file-text">DOCX (182 KB)</p>
                        </div>
                    </div>
                    <div class="docs">
                        <img src="{{asset('user/assets/img/docx.png')}}" style="width: 26px;height: 26px">
                        <div class="docs__property">
                            <a class="docs__title" href="{{asset('user/assets/files/politic.docx')}}">
                                ПЛАН МЕРОПРИЯТИЙ ПО ПРОТИВОДЕЙСТВИЮ КОРРУПЦИИ</a>
                            <p class="docs__file-text">DOCX (158 KB)</p>
                        </div>
                    </div>
                    <div class="docs">
                        <img src="{{asset('user/assets/img/docx.png')}}" style="width: 26px;height: 26px">
                        <div class="docs__property">
                            <a class="docs__title" href="{{asset('user/assets/files/rules1.docx')}}">
                                ПРАВИЛА УРЕГУЛИРОВАНИЯ КОНФЛИКТА</a>
                            <p class="docs__file-text">DOCX (278 KB)</p>
                        </div>
                    </div>
                    <div class="docs">
                        <img src="{{asset('user/assets/img/icons/pdf.jpg')}}" style="width: 26px;height: 26px">
                        <div class="docs__property">
                            <a class="docs__title" href="{{asset('user/assets/files/polozheniye.pdf')}}">ПРАВИЛА ПРОВЕДЕНИЯ ВНУТРЕННЕГО АНАЛИЗА КОРРУПЦИОННЫХ РИСКОВ</a>
                            <p class="docs__file-text">PDF (423 KB)</p>
                        </div>
                    </div>

                    <div class="docs">
                        <img src="{{asset('user/assets/img/icons/pdf.jpg')}}" style="width: 26px;height: 26px">
                        <div class="docs__property">
                            <a class="docs__title" href="{{asset('user/assets/files/codex1.pdf')}}">ПОЛОЖЕНИЕ О КОМПЛАЕНС-ОФИЦЕРЕ АО "АСТАНА-ЭНЕРГИЯ"</a>
                            <p class="docs__file-text">PDF (478 KB)</p>
                        </div>
                    </div>
                    <div class="docs">
                        <img src="{{asset('user/assets/img/icons/pdf.jpg')}}" style="width: 26px;height: 26px">
                        <div class="docs__property">
                            <a class="docs__title" href="{{asset('user/assets/files/planmt3.pdf')}}">КОДЕКС ДЕЛОВОЙ ЭТИКИ</a>
                            <p class="docs__file-text">PDF (538 KB)</p>
                        </div>
                    </div>

                    <div class="docs">
                        <img src="{{asset('user/assets/img/icons/pdf.jpg')}}" style="width: 26px;height: 26px">
                        <div class="docs__property">
                            <a class="docs__title" href="{{asset('user/assets/files/prp3.pdf')}}">
                                ПРОТОКОЛ СОВЕЩАНИЯ ОТ 29.06.2023</a>
                            <p class="docs__file-text">PDF (456 KB)</p>
                        </div>
                    </div>
                </div>
            @else
                <h4 class="docs__header-title">Құжаттар</h4>
                <div class="docs__items">
                    <div class="docs">
                        <img src="{{asset('user/assets/img/docx.png')}}" style="width: 26px;height: 26px">
                        <div class="docs__property">
                            <a class="docs__title" href="{{asset('user/assets/files/politic.docx')}}">СЫБАЙЛАС ЖЕМҚОРЛЫҚҚА ҚАРСЫ САЯСАТ</a>
                            <p class="docs__file-text">DOCX (178 KB)</p>
                        </div>
                    </div>
                    <div class="docs">
                        <img src="{{asset('user/assets/img/docx.png')}}" style="width: 26px;height: 26px">
                        <div class="docs__property">
                            <a class="docs__title" href="{{asset('user/assets/files/plan.docx')}}">СЫБАЙЛАС ЖЕМҚОРЛЫҚҚА ҚАРСЫ ІС-ШАРАЛАР ЖОСПАРЫ</a>
                            <p class="docs__file-text">DOCX (182 KB)</p>
                        </div>
                    </div>
                    <div class="docs">
                        <img src="{{asset('user/assets/img/docx.png')}}" style="width: 26px;height: 26px">
                        <div class="docs__property">
                            <a class="docs__title" href="{{asset('user/assets/files/politic.docx')}}">ЖАНЖАЛДЫ РЕТТЕУ ЕРЕЖЕЛЕРІ</a>
                            <p class="docs__file-text">DOCX (158 KB)</p>
                        </div>
                    </div>
                    <div class="docs">
                        <img src="{{asset('user/assets/img/docx.png')}}" style="width: 26px;height: 26px">
                        <div class="docs__property">
                            <a class="docs__title" href="{{asset('user/assets/files/rules1.docx')}}">СЫБАЙЛАС ЖЕМҚОРЛЫҚ ТӘУЕКЕЛДЕРІНЕ ІШКІ ТАЛДАУ ЖҮРГІЗУ ҚАҒИДАЛАРЫ</a>
                            <p class="docs__file-text">DOCX (278 KB)</p>
                        </div>
                    </div>
                    <div class="docs">
                        <img src="{{asset('user/assets/img/icons/pdf.jpg')}}" style="width: 26px;height: 26px">
                        <div class="docs__property">
                            <a class="docs__title" href="{{asset('user/assets/files/polozheniye.pdf')}}">"АСТАНА-ЭНЕРГИЯ"АҚ КОМПЛАЕНС-ОФИЦЕРІ ТУРАЛЫ ЕРЕЖЕ</a>
                            <p class="docs__file-text">PDF (423 KB)</p>
                        </div>
                    </div>

                    <div class="docs">
                        <img src="{{asset('user/assets/img/icons/pdf.jpg')}}" style="width: 26px;height: 26px">
                        <div class="docs__property">
                            <a class="docs__title" href="{{asset('user/assets/files/codex1.pdf')}}">ІСКЕРЛІК ЭТИКА КОДЕКСІ</a>
                            <p class="docs__file-text">PDF (478 KB)</p>
                        </div>
                    </div>
                    <div class="docs">
                        <img src="{{asset('user/assets/img/icons/pdf.jpg')}}" style="width: 26px;height: 26px">
                        <div class="docs__property">
                            <a class="docs__title" href="{{asset('user/assets/files/planmt3.pdf')}}"> ІС-ШАРАЛАР ЖОСПАРЫ</a>
                            <p class="docs__file-text">PDF (538 KB)</p>
                        </div>
                    </div>

                    <div class="docs">
                        <img src="{{asset('user/assets/img/icons/pdf.jpg')}}" style="width: 26px;height: 26px">
                        <div class="docs__property">
                            <a class="docs__title" href="{{asset('user/assets/files/prp3.pdf')}}"> КЕҢЕСТІҢ 29.06.2023 ЖЫЛҒЫ ХАТТАМАСЫ</a>
                            <p class="docs__file-text">PDF (456 KB)</p>
                        </div>
                    </div>
                </div>
            @endif

        </div>
    </section>
@endsection