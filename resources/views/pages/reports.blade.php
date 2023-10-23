@extends('layouts.app')
@section('title', 'Отчетность')
@section('content')
    <main>
        <section class="report">
            <div class="container-md">
                <h2>Отчетность</h2>
                <div  class="reports__items">
                    <div class="reports__item active">
                        <p class="reports__item-text">Годовая финансовая отчетность</p>
                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="8" viewBox="0 0 12 8" fill="none">
                            <path d="M1 6.79681L6 2L8.6087 4.3984L11 6.79681" stroke="#ABACB4" stroke-width="2" stroke-linecap="round"/>
                        </svg>
                    </div>
                    <div class="reports__item-content" id="tabs">
                        <ul class="reports__tabs">
                            <li><a class="reports__tab tab__active" href="#tabs-1">2023</a></li>
                            <li><a class="reports__tab" href="#tabs-2">2022</a></li>
                            <li><a class="reports__tab" href="#tabs-3">2021</a></li>
                        </ul>
                        <div class="report__files" id="tabs-1">
                            <div class="docs">
                                <img src="{{asset('user/assets/img/icons/pdf.jpg')}}" style="width: 26px;height: 26px">
                                <div class="docs__property">
                                    <a class="docs__title" href="{{asset('user/assets/files/reports/1. Инфо об исполнении инвест.программы по итогам 1 пг.2023.pdf')}}">Информация об исполнении инвестиционной программы по итогам 1 полугодия 2023 года</a>
                                    <p class="docs__file-text">PDF (988 KB)</p>
                                </div>
                            </div>
                            <div class="docs">
                                <img src="{{asset('user/assets/img/icons/pdf.jpg')}}" style="width: 26px;height: 26px">
                                <div class="docs__property">
                                    <a class="docs__title" href="{{asset('user/assets/files/reports/2. Инфо об исполнении утв ТС по итогам полугодия 2023 года.pdf')}}">Инфо об исполнении утв ТС по итогам полугодия 2023 года</a>
                                    <p class="docs__file-text">PDF (888 KB)</p>
                                </div>
                            </div>
                            <div class="docs">
                                <img src="{{asset('user/assets/img/icons/pdf.jpg')}}" style="width: 26px;height: 26px">
                                <div class="docs__property">
                                    <a class="docs__title" href="{{asset('user/assets/files/reports/3.Инфо о собл показ кач-ва и надежн в 1 пг 2023г.pdf')}}">Информация о соблюдении показателей качества и надежности в 1 полугодии 2023 года</a>
                                    <p class="docs__file-text">PDF (478 KB)</p>
                                </div>
                            </div>
                            <div class="docs">
                                <img src="{{asset('user/assets/img/icons/pdf.jpg')}}" style="width: 26px;height: 26px">
                                <div class="docs__property">
                                    <a class="docs__title" href="{{asset('user/assets/files/reports/4.Инфо о достиж показ эф-сти в 1 пг 2023г.pdf')}}">Информация о достижении показателей эфективности в 1 полугодии 2023 года
                                    </a>
                                    <p class="docs__file-text">PDF (178 KB)</p>
                                </div>
                            </div>
                        </div>
                        <div class="report__files" id="tabs-2">
                            <div class="docs">
                                <img src="{{asset('user/assets/img/icons/pdf.jpg')}}" style="width: 26px;height: 26px">
                                <div class="docs__property">
                                    <a class="docs__title" href="{{asset('user/assets/files/reports/3.Инфо о собл показ кач-ва и надежн в 1 пг 2023г.pdf')}}">Информация о соблюдении показателей качества и надежности в 1 полугодии 2023 года</a>
                                    <p class="docs__file-text">PDF (478 KB)</p>
                                </div>
                            </div>
                            <div class="docs">
                                <img src="{{asset('user/assets/img/icons/pdf.jpg')}}" style="width: 26px;height: 26px">
                                <div class="docs__property">
                                    <a class="docs__title" href="{{asset('user/assets/files/reports/4.Инфо о достиж показ эф-сти в 1 пг 2023г.pdf')}}">Информация о достижении показателей эфективности в 1 полугодии 2023 года
                                    </a>
                                    <p class="docs__file-text">PDF (178 KB)</p>
                                </div>
                            </div>

                        </div>
                        <div class="report__files" id="tabs-3">
                            <div class="docs">
                                <img src="{{asset('user/assets/img/icons/pdf.jpg')}}" style="width: 26px;height: 26px">
                                <div class="docs__property">
                                    <a class="docs__title" href="http://localhost:8000/user/assets/files/politic.docx">Политика противодействия коррупции</a>
                                    <p class="docs__file-text">DOCX (178 KB)</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="reports__item" >
                        <p class="reports__item-text">Отчеты по исполнению тарифной сметы</p>

                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="8" viewBox="0 0 12 8" fill="none">
                            <path d="M1 6.79681L6 2L8.6087 4.3984L11 6.79681" stroke="#ABACB4" stroke-width="2" stroke-linecap="round"/>
                        </svg>
                    </div>
                    <div class="reports__item-content" id="financetab" >
                        <ul class="reports__tabs">
                            <li><a class="reports__tab" href="#financetab-1">2020</a></li>

                        </ul>
                        <div class="report__files" id="financetab-1">
                            <div class="docs">
                                <img src="{{asset('user/assets/img/icons/pdf.jpg')}}" style="width: 26px;height: 26px">
                                <div class="docs__property">
                                    <a class="docs__title" href="{{asset('user/assets/files/reports/finance1.pdf')}}">Исполнение утвержденной тарифной сметы по итогам 2020 года</a>
                                    <p class="docs__file-text">PDF (1.7 MB)</p>
                                </div>
                            </div>
                            <div class="docs">
                                <img src="{{asset('user/assets/img/icons/pdf.jpg')}}" style="width: 26px;height: 26px">
                                <div class="docs__property">
                                    <a class="docs__title" href="{{asset('user/assets/files/reports/finance2.pdf')}}">Исполнение утвержденной инвестиционной программы по итогам 2020 года</a>
                                    <p class="docs__file-text">PDF (4.9 MB)</p>
                                </div>
                            </div>
                            <div class="docs">
                                <img src="{{asset('user/assets/img/icons/pdf.jpg')}}" style="width: 26px;height: 26px">
                                <div class="docs__property">
                                    <a class="docs__title" href="{{asset('user/assets/files/reports/finance3.pdf')}}">Показатели качества и надежности по итогам 2020 года</a>
                                    <p class="docs__file-text">PDF (148 KB)</p>
                                </div>
                            </div>
                            <div class="docs">
                                <img src="{{asset('user/assets/img/icons/pdf.jpg')}}" style="width: 26px;height: 26px">
                                <div class="docs__property">
                                    <a class="docs__title" href="{{asset('user/assets/files/reports/finance4.pdf')}}">Показатели эффективности по итогам 2020 года</a>
                                    <p class="docs__file-text">PDF (124 KB)</p>
                                </div>
                            </div>
                        </div>


                    </div>

                    <div class="reports__item" >
                        <p class="reports__item-text">Отчеты по исполнение инвестиционной программы</p>
                        <!-- appear when dropdown opened -->
                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="8" viewBox="0 0 12 8" fill="none">
                            <path d="M1 6.79681L6 2L8.6087 4.3984L11 6.79681" stroke="#ABACB4" stroke-width="2" stroke-linecap="round"/>
                        </svg>
                    </div>
                    <div class="reports__item-content" id="invest" >
                        <ul class="reports__tabs">
                            <li><a class="reports__tab tab__active" href="#invest-1">2022</a></li>
                            <li><a class="reports__tab" href="#invest-2">2021</a></li>
                            <li><a class="reports__tab" href="#invest-3">2020</a></li>
                            <li><a class="reports__tab" href="#invest-4">2019</a></li>
                        </ul>
                        <div class="report__files" id="invest-1">
                            <div class="docs">
                                <img src="{{asset('user/assets/img/excel.jpg')}}" style="width: 26px;height: 26px">
                                <div class="docs__property">
                                    <a class="docs__title" href="{{asset('user/assets/files/reports/Информация о ходе исполнения утвержденной ИП.pptx')}}">Информация о ходе исполнения утвержденной ИП</a>
                                    <p class="docs__file-text">XLSX (4.7 MB)</p>
                                </div>
                            </div>
                            <div class="docs">
                                <img src="{{asset('user/assets/img/icons/pdf.jpg')}}" style="width: 26px;height: 26px">
                                <div class="docs__property">
                                    <a class="docs__title" href="{{asset('user/assets/files/reports/Информация о ходе исполнения ИП за I квартал 2022 года.pdf')}}">Информация о ходе исполнения утвержденной Инвестиционной программы за I квартал 2022 года по АО Астана-Энергия</a>
                                    <p class="docs__file-text">PDF (1.5 MB)</p>
                                </div>
                            </div>
                        </div>
                        <div class="report__files" id="invest-2">
                            <div class="docs">
                                <img src="{{asset('user/assets/img/excel.jpg')}}" style="width: 26px;height: 26px">
                                <div class="docs__property">
                                    <a class="docs__title" href="{{asset('user/assets/files/reports/Информация о ходе исполнения утвержденной ИП 1.pptx')}}">Информация о ходе исполнения утвержденной Инвестиционной программы по производству тепловой энергии за IV квартал 2021 года по АО "Астана-Энергия"</a>
                                    <p class="docs__file-text">XLSX (6.3 MB)</p>
                                </div>
                            </div>
                            <div class="docs">
                                <img src="{{asset('user/assets/img/icons/pdf.jpg')}}" style="width: 26px;height: 26px">
                                <div class="docs__property">
                                    <a class="docs__title" href="{{asset('user/assets/files/reports/Отчет за 3 квартал 2021 год.pdf')}}">Информация о ходе исполнения утвержденной Инвестиционной программы по производству тепловой энергии за III квартал 2021 года по АО "Астана-Энергия</a>
                                    <p class="docs__file-text">PDF (988 KB)</p>
                                </div>
                            </div>

                        </div>
                        <div class="report__files" id="invest-3">
                            <div class="docs">
                                <img src="{{asset('user/assets/img/icons/pdf.jpg')}}" style="width: 26px;height: 26px">
                                <div class="docs__property">
                                    <a class="docs__title" href="http://localhost:8000/user/assets/files/politic.docx">Политика противодействия коррупции</a>
                                    <p class="docs__file-text">DOCX (178 KB)</p>
                                </div>
                            </div>
                        </div>
                        <div class="report__files" id="invest-4">
                            <div class="docs">
                                <img src="{{asset('user/assets/img/icons/pdf.jpg')}}" style="width: 26px;height: 26px">
                                <div class="docs__property">
                                    <a class="docs__title" href="http://localhost:8000/user/assets/files/politic.docx">Политика противодействия коррупции</a>
                                    <p class="docs__file-text">DOCX (178 KB)</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
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