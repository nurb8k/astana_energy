@extends('layouts.app')
@section('title', 'Отчетность')
@section('content')
    <main>
        <section class="report">
            <div class="container-md">
                <h2>{{__('messages.reports')}}</h2>
                <div  class="reports__items">
                    <div class="reports__item active">
                        <p class="reports__item-text">{{__('messages.year_rep')}}</p>
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
                        <p class="reports__item-text">{{__('messages.rep_tarif')}}</p>

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
                        <p class="reports__item-text">{{__('messages.rep_ins')}}</p>
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
                                    <a class="docs__title" href="{{asset('user/assets/files/reports/Отчет за 3 квартал 2021 год.pdf')}}">Информация о ходе исполнения утвержденной Инвестиционной программы по производству тепловой энергии за I полугодие 2021 года по АО "Астана-Энергия</a>
                                    <p class="docs__file-text">PDF (988 KB)</p>
                                </div>
                            </div>

                            <div class="docs">
                                <img src="{{asset('user/assets/img/icons/pdf.jpg')}}" style="width: 26px;height: 26px">
                                <div class="docs__property">
                                    <a class="docs__title" href="{{asset('user/assets/files/reports/Отчет за 1 квартал 2021 года.pdf')}}">Информация о ходе исполнения утвержденной Инвестиционной программы по производству тепловой энергии за I квартал 2021 года по АО "Астана-Энергия</a>
                                    <p class="docs__file-text">PDF (1 MB)</p>
                                </div>
                            </div>
                            <div class="docs">
                                <img src="{{asset('user/assets/img/icons/pdf.jpg')}}" style="width: 26px;height: 26px">
                                <div class="docs__property">
                                    <a class="docs__title" href="{{asset('user/assets/files/reports/Отчет по Инвестиционной программе аз I квартал 2021 года.pdf')}}">Информация о ходе исполнения утвержденной Инвестиционной программы по производству тепловой энергии за I полугодие 2021 года по АО "Астана-Энергия</a>
                                    <p class="docs__file-text">PDF (1 MB)</p>
                                </div>
                            </div>

                        </div>
                        <div class="report__files" id="invest-3">
                            <div class="docs">
                                <img src="{{asset('user/assets/img/excel.jpg')}}" style="width: 26px;height: 26px">
                                <div class="docs__property">
                                    <a class="docs__title" href="{{asset('user/assets/files/reports/Инф. о ходе исп-ия утв. ИП 4 кв. 2020 г..pptx')}}">Информация о ходе исполнения утвержденной Инвестиционной программы за 4 квартал 2020 года</a>
                                    <p class="docs__file-text">XLSX (6 MB)</p>
                                </div>
                            </div>
                            <div class="docs">
                                <img src="{{asset('user/assets/img/excel.jpg')}}" style="width: 26px;height: 26px">
                                <div class="docs__property">
                                    <a class="docs__title" href="{{asset('user/assets/files/reports/5q$qva/Информация о ходе исполнения утвержденной ИП.pptx')}}">Информация о ходе исполнения утвержденной Инвестиционной программы за III кв. 2020 года по АО "Астана-Энергия"</a>
                                    <p class="docs__file-text">XLSX (4.7 MB)</p>
                                </div>
                            </div>
                            <div class="docs">
                                <img src="{{asset('user/assets/img/icons/pdf.jpg')}}" style="width: 26px;height: 26px">
                                <div class="docs__property">
                                    <a class="docs__title" href="{{asset('user/assets/files/reports/5q$qva/Отчет об исполнении Инвестиционной программы за I полугодие 2020 года..pdf')}}">Отчет АО "Астана-Энергия" об исполнении Инвестиционной программы по производству тепловой энергии за I полугодие 2020 года</a>
                                    <p class="docs__file-text">PDF (807 KB)</p>
                                </div>
                            </div>
                        </div>
                        <div class="report__files" id="invest-4">
                            <div class="docs">
                                <img src="{{asset('user/assets/img/excel.jpg')}}" style="width: 26px;height: 26px">
                                <div class="docs__property">
                                    <a class="docs__title" href="{{asset('user/assets/files/reports/5q$qva/2020_01_09 Отчет по тепловой энергии 2019.pptx')}}">Информацию о ходе исполнения утвержденной инвестиционной программы 2019 года (за IV квартал) по производству тепловой энергии</a>
                                    <p class="docs__file-text">XLSX (178 KB)</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="reports__item" >
                        <p class="reports__item-text">{{__('messages.rep_inv')}}</p>
                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="8" viewBox="0 0 12 8" fill="none">
                            <path d="M1 6.79681L6 2L8.6087 4.3984L11 6.79681" stroke="#ABACB4" stroke-width="2" stroke-linecap="round"/>
                        </svg>
                    </div>
                    <div class="reports__item-content" id="report" >
                        <ul class="reports__tabs">
                            <li><a class="reports__tab tab__active" href="#report-1">2023</a></li>
                            <li><a class="reports__tab" href="#report-2">2022</a></li>
                            <li><a class="reports__tab" href="#report-3">2021</a></li>
                            <li><a class="reports__tab" href="#report-4">2020</a></li>
                        </ul>
                        <div class="report__files" id="report-1">
                            <div class="docs">
                                <img src="{{asset('user/assets/img/icons/pdf.jpg')}}" style="width: 26px;height: 26px">
                                <div class="docs__property">
                                    <a class="docs__title" href="{{asset('user/assets/files/reports/2023/1. Инфо об исполнении инвест.программы по итогам 1 пг.2023.pdf')}}">Информация об исполнении инвестиционной программы по итогам 1 полугодия 2023 года</a>
                                    <p class="docs__file-text">PDF (267 KB)</p>
                                </div>
                            </div>
                            <div class="docs">
                                <img src="{{asset('user/assets/img/icons/pdf.jpg')}}" style="width: 26px;height: 26px">
                                <div class="docs__property">
                                    <a class="docs__title" href="{{asset('user/assets/files/reports/2023/2. Инфо об исполнении утв ТС по итогам полугодия 2023 года.pdf')}}">Информация об исполнении утвержденной ТС по итогам 1 полугодия 2023 года</a>
                                    <p class="docs__file-text">PDF (1 MB)</p>
                                </div>
                            </div>
                            <div class="docs">
                                <img src="{{asset('user/assets/img/icons/pdf.jpg')}}" style="width: 26px;height: 26px">
                                <div class="docs__property">
                                    <a class="docs__title" href="{{asset('user/assets/files/reports/2023/3.Инфо о собл показ кач-ва и надежн в 1 пг 2023г.pdf')}}">Информация о соблюдении показателей качества и надежности в 1 полугодии 2023 года</a>
                                    <p class="docs__file-text">PDF (69 KB)</p>
                                </div>
                            </div>
                            <div class="docs">
                                <img src="{{asset('user/assets/img/icons/pdf.jpg')}}" style="width: 26px;height: 26px">
                                <div class="docs__property">
                                    <a class="docs__title" href="{{asset('user/assets/files/reports/2023/4.Инфо о достиж показ эф-сти в 1 пг 2023г.pdf')}}">Информация о достижении показателей эффективности в 1 полугодии 2023 года</a>
                                    <p class="docs__file-text">PDF (48 KB)</p>
                                </div>
                            </div>
                        </div>
                        <div class="report__files" id="report-2">
                            <div class="docs">
                                <img src="{{asset('user/assets/img/icons/pdf.jpg')}}" style="width: 26px;height: 26px">
                                <div class="docs__property">
                                    <a class="docs__title" href="{{asset('user/assets/files/reports/2022/2.Форма 1. Информация по исполнению инвест программы 2022г.pdf')}}">Информация по исполнению инвест программы 2022г</a>
                                    <p class="docs__file-text">PDF (74 KB)</p>
                                </div>
                            </div>
                            <div class="docs">
                                <img src="{{asset('user/assets/img/icons/pdf.jpg')}}" style="width: 26px;height: 26px">
                                <div class="docs__property">
                                    <a class="docs__title" href="{{asset('user/assets/files/reports/2022/2.Форма 2. Информация по исполнению тарифной сметы 2022г.pdf')}}">Информация по исполнению тарифной сметы 2022г</a>
                                    <p class="docs__file-text">PDF (200 KB)</p>
                                </div>
                            </div>
                            <div class="docs">
                                <img src="{{asset('user/assets/img/icons/pdf.jpg')}}" style="width: 26px;height: 26px">
                                <div class="docs__property">
                                    <a class="docs__title" href="{{asset('user/assets/files/reports/2022/2.Форма 3. Информация о показателях качества 2022г.pdf')}}">Информация о показателях качества 2022г</a>
                                    <p class="docs__file-text">PDF (72 KB)</p>
                                </div>
                            </div>
                            <div class="docs">
                                <img src="{{asset('user/assets/img/icons/pdf.jpg')}}" style="width: 26px;height: 26px">
                                <div class="docs__property">
                                    <a class="docs__title" href="{{asset('user/assets/files/reports/2022/2.Форма 4. Информация о показателях эффективности 2022г.pdf')}}">Информация о показателях эффективности 2022г</a>
                                    <p class="docs__file-text">PDF (57 KB)</p>
                                </div>
                            </div>
                            <div class="docs">
                                <img src="{{asset('user/assets/img/icons/pdf.jpg')}}" style="width: 26px;height: 26px">
                                <div class="docs__property">
                                    <a class="docs__title" href="{{asset('user/assets/files/reports/2022/1.Исполнение утвержденной инвестиционной программы по итогам полугодия 2022 года.pdf')}}">Информация об исполнении инвестиционной программы по итогам полугодия 2022 года</a>
                                    <p class="docs__file-text">PDF (214 KB)</p>
                                </div>
                            </div>
                            <div class="docs">
                                <img src="{{asset('user/assets/img/icons/pdf.jpg')}}" style="width: 26px;height: 26px">
                                <div class="docs__property">
                                    <a class="docs__title" href="{{asset('user/assets/files/reports/2022/2. Информация об исполнении утвержденной тарифной сметы по итогам полугодия 2022 года.pdf')}}">Информация об исполнении утвержденной тарифной сметы по производству тепловой энергии по итогам полугодия 2022 года</a>
                                    <p class="docs__file-text">PDF (659 KB)</p>
                                </div>
                            </div>
                            <div class="docs">
                                <img src="{{asset('user/assets/img/icons/pdf.jpg')}}" style="width: 26px;height: 26px">
                                <div class="docs__property">
                                    <a class="docs__title" href="{{asset('user/assets/files/reports/2022/3.Показатели качества и надежности по итогам полугодия 2022 года.pdf')}}">Информация о соблюдении показателей качества и надежности регулируемых услуг по итогам полугодия 2022 года</a>
                                    <p class="docs__file-text">PDF (53 KB)</p>
                                </div>
                            </div>
                            <div class="docs">
                                <img src="{{asset('user/assets/img/icons/pdf.jpg')}}" style="width: 26px;height: 26px">
                                <div class="docs__property">
                                    <a class="docs__title" href="{{asset('user/assets/files/reports/2022/4.Показатели эффективности по итогам полугодия 2022 года.pdf')}}">Информация о достижении показателей эффективности СЕМ по итогам полугодия 2022 года.</a>
                                    <p class="docs__file-text">PDF (34 KB)</p>
                                </div>
                            </div>
                        </div>

                        <div class="report__files" id="report-3">
                            <div class="docs">
                                <img src="{{asset('user/assets/img/docx.png')}}" style="width: 26px;height: 26px">
                                <div class="docs__property">
                                    <a class="docs__title" href="{{asset('user/assets/files/reports/Для размещения на сайт.pdf')}}">Отчет по итогам 2021 года об исполнении утвержденной тарифной сметы, утвержденной инвестиционной программы, о соблюдении показателей качества и надежности регулируемых услуг</a>
                                    <p class="docs__file-text">PDF (9.2 MB)</p>
                                </div>
                            </div>
                            <div class="docs">
                                <img src="{{asset('user/assets/img/icons/pdf.jpg')}}" style="width: 26px;height: 26px">
                                <div class="docs__property">
                                    <a class="docs__title" href="{{asset('user/assets/files/reports/2021/1. Исполнение утвержденной инвестиционной программы по итогам 2021 года.pdf')}}">Информация об исполнении инвестиционной программы по итогам 2021 года</a>
                                    <p class="docs__file-text">PDF (201 KB)</p>
                                </div>
                            </div>
                            <div class="docs">
                                <img src="{{asset('user/assets/img/icons/pdf.jpg')}}" style="width: 26px;height: 26px">
                                <div class="docs__property">
                                    <a class="docs__title" href="{{asset('user/assets/files/reports/2021/2. Исполнение утвержденной тарифной сметы по итогам 2021 года.pdf')}}">Информация об исполнении утвержденной тарифной сметы по производству тепловой энергии по итогам 2021 года</a>
                                    <p class="docs__file-text">PDF (642 KB)</p>
                                </div>
                            </div>
                            <div class="docs">
                                <img src="{{asset('user/assets/img/icons/pdf.jpg')}}" style="width: 26px;height: 26px">
                                <div class="docs__property">
                                    <a class="docs__title" href="{{asset('user/assets/files/reports/2021/3.Показатели качества и надежности по итогам 2021 года.pdf')}}">Показатели качества и надежности по итогам 2021 года</a>
                                    <p class="docs__file-text">PDF (52 KB)</p>
                                </div>
                            </div>
                            <div class="docs">
                                <img src="{{asset('user/assets/img/icons/pdf.jpg')}}" style="width: 26px;height: 26px">
                                <div class="docs__property">
                                    <a class="docs__title" href="{{asset('user/assets/files/reports/2021/4.Показатели эффективности по итогам 2021 года.pdf')}}">Показатели эффективности по итогам 2021 года</a>
                                    <p class="docs__file-text">PDF (36 KB)</p>
                                </div>
                            </div>
                            <div class="docs">
                                <img src="{{asset('user/assets/img/icons/pdf.jpg')}}" style="width: 26px;height: 26px">
                                <div class="docs__property">
                                    <a class="docs__title" href="{{asset('user/assets/files/reports/2021/Отчет А-Э перед потребителями и иными заинтересованными лицами по итогам полугодия 2021 г..pdf')}}">Отчет АО "Астана-Энергия" перед потребителями и иными заинтересованными лицами по итогам полугодия 2021 г.</a>
                                    <p class="docs__file-text">PDF (93 KB)</p>
                                </div>
                            </div>
                            <div class="docs">
                                <img src="{{asset('user/assets/img/icons/pdf.jpg')}}" style="width: 26px;height: 26px">
                                <div class="docs__property">
                                    <a class="docs__title" href="{{asset('user/assets/files/reports/2021/27-07-2021-1. Информация об исполнении утвержденной ИП по итогам полугодия 2021 года (1).pdf')}}">Информация об исполнении утвержденной ИП по итогам полугодия 2021 года</a>
                                    <p class="docs__file-text">PDF (93 KB)</p>
                                </div>
                            </div>

                            <div class="docs">
                                <img src="{{asset('user/assets/img/icons/pdf.jpg')}}" style="width: 26px;height: 26px">
                                <div class="docs__property">
                                    <a class="docs__title" href="{{asset('user/assets/files/reports/2021/27-07-2021-1. Информация об исполнении утвержденной ИП по итогам полугодия 2021 года (1).pdf ')}}">Информация об исполнении утвержденной тарифной сметы по итогам полугодия 2021 года</a>
                                    <p class="docs__file-text">PDF (93 KB)</p>
                                </div>
                            </div>

                            <div class="docs">
                                <img src="{{asset('user/assets/img/icons/pdf.jpg')}}" style="width: 26px;height: 26px">
                                <div class="docs__property">
                                    <a class="docs__title" href="{{asset('user/assets/files/reports/2021/27-07-2021-3. Информация о достижении показателей качества и надежности по итогам полугодия 2021 года.pdf ')}}">Информация о достижении показателей качества и надежности по итогам полугодия 2021 года</a>
                                    <p class="docs__file-text">PDF (93 KB)</p>
                                </div>
                            </div>

                            <div class="docs">
                                <img src="{{asset('user/assets/img/icons/pdf.jpg')}}" style="width: 26px;height: 26px">
                                <div class="docs__property">
                                    <a class="docs__title" href="{{asset('user/assets/files/reports/2021/27-07-2021-4. Информация о соблюдении показателей качества и надежности по итогам полугодия 2021 года.pdf ')}}">Информация о соблюдении показателей качества и надежности по итогам полугодия 2021 года</a>
                                    <p class="docs__file-text">PDF (93 KB)</p>
                                </div>
                            </div>
                            <div class="docs">
                                <img src="{{asset('user/assets/img/icons/pdf.jpg')}}" style="width: 26px;height: 26px">
                                <div class="docs__property">
                                    <a class="docs__title" href="{{asset('user/assets/files/reports/2021/Доклад к отчету А-Э по итогам полугодия 2021 года 30.07..pdf ')}}">Доклад к отчету А-Э по итогам полугодия 2021 года 30.07</a>
                                    <p class="docs__file-text">PDF (93 KB)</p>
                                </div>
                            </div>
                            <div class="docs">
                                <img src="{{asset('user/assets/img/icons/pdf.jpg')}}" style="width: 26px;height: 26px">
                                <div class="docs__property">
                                    <a class="docs__title" href="{{asset('user/assets/files/reports/2021/Презентация А-Э к отчету за полуг 2021г.30.07...pptx ')}}">Презентация А-Э к отчету за полуг 2021г.30.07</a>
                                    <p class="docs__file-text">PDF (93 KB)</p>
                                </div>
                            </div>
                        </div>
                        <div class="report__files" id="report-4">
                            <div class="docs">
                                <img src="{{asset('user/assets/img/icons/pdf.jpg')}}" style="width: 26px;height: 26px">
                                <div class="docs__property">
                                    <a class="docs__title" href="{{asset('user/assets/files/reports/2021/Отчет по производству тепловой энергии за 2020 год.pdf')}}">Отчет по итогам 2020г. по предоставлению регулируемой услуги по производству тепловой энергии</a>
                                    <p class="docs__file-text">PDF (458 KB)</p>
                                </div>
                            </div>

                            <div class="docs">
                                <img src="{{asset('user/assets/img/icons/pdf.jpg')}}" style="width: 26px;height: 26px">
                                <div class="docs__property">
                                    <a class="docs__title" href="{{asset('user/assets/files/reports/2020/выступление АО Астана-Энергия.pdf')}}">Выступление АО Астана-Энергия по отчету за 2020 год</a>
                                    <p class="docs__file-text">PDF (458 KB)</p>
                                </div>
                            </div>

                            <div class="docs">
                                <img src="{{asset('user/assets/img/icons/pdf.jpg')}}" style="width: 26px;height: 26px">
                                <div class="docs__property">
                                    <a class="docs__title" href="{{asset('user/assets/files/reports/2020/1.Исполнение утвержденной инвестиционной программы по итогам 2020 года.pdf')}}">Исполнение утвержденной инвестиционной программы по итогам 2020 года</a>
                                    <p class="docs__file-text">PDF (4.9 MB)</p>
                                </div>
                            </div>
                            <div class="docs">
                                <img src="{{asset('user/assets/img/icons/pdf.jpg')}}" style="width: 26px;height: 26px">
                                <div class="docs__property">
                                    <a class="docs__title" href="{{asset('user/assets/files/reports/2020/2.Отчет об исполнении утвержд тариф сметы.pdf')}}">Отчет об исполнении утвержд тариф сметы</a>
                                    <p class="docs__file-text">PDF (1.7 MB)</p>
                                </div>
                            </div>
                            <div class="docs">
                                <img src="{{asset('user/assets/img/icons/pdf.jpg')}}" style="width: 26px;height: 26px">
                                <div class="docs__property">
                                    <a class="docs__title" href="{{asset('user/assets/files/reports/2020/3.Показатели качества и надежности по итогам 2020 года.pdf')}}">Показатели качества и надежности по итогам 2020 года</a>
                                    <p class="docs__file-text">PDF (148 KB)</p>
                                </div>
                            </div>
                            <div class="docs">
                                <img src="{{asset('user/assets/img/icons/pdf.jpg')}}" style="width: 26px;height: 26px">
                                <div class="docs__property">
                                    <a class="docs__title" href="{{asset('user/assets/files/reports/2020/4.Показатели эффективности по итогам 2020 года.pdf')}}">Показатели эффективности по итогам 2020 года</a>
                                    <p class="docs__file-text">PDF (124 KB)</p>
                                </div>
                            </div>
                            <div class="docs">
                                <img src="{{asset('user/assets/img/excel.jpg')}}" style="width: 26px;height: 26px">
                                <div class="docs__property">
                                    <a class="docs__title" href="{{asset('user/assets/files/reports/2020/Презентация к отчету А-Э за 2020г..ppt')}}">Презентация к отчету А-Э за 2020г.</a>
                                    <p class="docs__file-text">XLSX (9.6 MB)</p>
                                </div>
                            </div>
                            <div class="docs">
                                <img src="{{asset('user/assets/img/excel.jpg')}}" style="width: 26px;height: 26px">
                                <div class="docs__property">
                                    <a class="docs__title" href="{{asset('user/assets/files/reports/2020/Отчет по тепловой энергии по итогам первого полугодия 2020 года.PDF')}}">Отчет по тепловой энергии по итогам первого полугодия 2020 года</a>
                                    <p class="docs__file-text">PDF (413 KB)</p>
                                </div>
                            </div>
                            <div class="docs">
                                <img src="{{asset('user/assets/img/excel.jpg')}}" style="width: 26px;height: 26px">
                                <div class="docs__property">
                                    <a class="docs__title" href="{{asset('user/assets/files/reports/2020/Презентация по тепловой энергии по итогам первого полугодия 2020 года.pdf')}}">Презентация по тепловой энергии по итогам первого полугодия 2020 года</a>
                                    <p class="docs__file-text">XLSX (7.1 MB)</p>
                                </div>
                            </div>
                        </div>


                    </div>

                    <div class="reports__item" >
                        <p class="reports__item-text">{{__('messages.rep_map')}}</p>

                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="8" viewBox="0 0 12 8" fill="none">
                            <path d="M1 6.79681L6 2L8.6087 4.3984L11 6.79681" stroke="#ABACB4" stroke-width="2" stroke-linecap="round"/>
                        </svg>
                    </div>
                    <div class="reports__item-content" id="rezhimnaya-karta" >
                        <ul class="reports__tabs">
                            <li><a class="reports__tab tab__active" href="#rk-1">2022-2023</a></li>
                        </ul>
                        <div class="report__files" id="rk-1">
                            <div class="docs">
                                <img src="{{asset('user/assets/img/icons/pdf.jpg')}}" style="width: 26px;height: 26px">
                                <div class="docs__property">
                                    <a class="docs__title" href="{{asset('user/assets/files/reports/реж карта 2022-2023.pdf')}}">{{__('messages.rep_map')}} 2022-2023</a>
                                    <p class="docs__file-text">PDF (440 KB)</p>
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
            $("#report").tabs({
                active: 'report-1',
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