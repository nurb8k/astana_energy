
@extends('layouts.app')
@section('title', 'Инфографика')

@section('content')
<main>
    <section class="graphic">
        <div class="container-md">
            @if(app()->getLocale() == 'ru')
            <div class="graphic-inner">
                <div class="graphic-top">
                    <h5 class="graphic-top-title">Информация по отпуску <br> электрической энергии</h5>
                    <label class="calendar-input bd-primary">
                        <input type="date" style="display: none;">
                        <span>По дате</span>
                        <img src="{{asset('user/assets/img/icons/calendar.svg')}}" alt="calendar icon">
                    </label>
                </div>
                <div class="graphic-list">
                    <div class="graphic-list-header bg-grey">
                        <div class="graphic-list-item">
                            <span>Дата</span>
                            <img src="{{asset('user/assets/img/icons/calendar.svg')}}" alt="sort icon" class="sort-icon">
                        </div>
                        <div class="graphic-list-item">
                                <span>
                                    Отпуск с шин <br>
                                    <div class="graphic-grey">
                                        (тыс.кВтч)
                                    </div>
                                </span>
                        </div>
                        <div class="graphic-list-item">
                                <span>
                                    Законтрактованная <br>
                                    <div class="graphic-grey">
                                        (тыс.кВтч)
                                    </div>
                                </span>
                        </div>
                        <div class="graphic-list-item">
                                <span>
                                    На централизованные торги<br>
                                    <div class="graphic-grey">
                                        (тыс.кВтч)
                                    </div>
                                </span>
                        </div>
                        <div class="graphic-list-item">
                                <span>
                                    Свободная <br>
                                    <div class="graphic-grey">
                                        (тыс.кВтч)
                                    </div>
                                </span>
                        </div>
                    </div>
                    <div class="graphic-list-content">
                        <div class="graphic-list-row">
                            <div class="graphic-list-item">
                                <div class="graphic-date">
                                    31.10.2023
                                </div>
                            </div>
                            <div class="graphic-list-item">
                                10063
                            </div>
                            <div class="graphic-list-item">
                                10063
                            </div>
                            <div class="graphic-list-item">
                                0
                            </div>
                            <div class="graphic-list-item">
                                0
                            </div>
                        </div>
                        <div class="graphic-list-row">
                            <div class="graphic-list-item">
                                <div class="graphic-date">
                                    30.10.2023
                                </div>
                            </div>
                            <div class="graphic-list-item">
                                10560
                            </div>
                            <div class="graphic-list-item">
                                10560
                            </div>
                            <div class="graphic-list-item">
                                0
                            </div>
                            <div class="graphic-list-item">
                                0
                            </div>
                        </div>
                        <div class="graphic-list-row">
                            <div class="graphic-list-item">
                                <div class="graphic-date">
                                    29.10.2023
                                </div>
                            </div>
                            <div class="graphic-list-item">
                                10560
                            </div>
                            <div class="graphic-list-item">
                                10560
                            </div>
                            <div class="graphic-list-item">
                                0
                            </div>
                            <div class="graphic-list-item">
                                0
                            </div>
                        </div>
                        <div class="graphic-list-row">
                            <div class="graphic-list-item">
                                <div class="graphic-date">
                                    28.10.2023
                                </div>
                            </div>
                            <div class="graphic-list-item">
                                10920
                            </div>
                            <div class="graphic-list-item">
                                10920
                            </div>
                            <div class="graphic-list-item">
                                0
                            </div>
                            <div class="graphic-list-item">
                                0
                            </div>
                        </div>
                        <div class="graphic-list-row">
                            <div class="graphic-list-item">
                                <div class="graphic-date">
                                    27.10.2023
                                </div>
                            </div>
                            <div class="graphic-list-item">
                                11040
                            </div>
                            <div class="graphic-list-item">
                                11040
                            </div>
                            <div class="graphic-list-item">
                                0
                            </div>
                            <div class="graphic-list-item">
                                0
                            </div>
                        </div>
                        <div class="graphic-list-row">
                            <div class="graphic-list-item">
                                <div class="graphic-date">
                                    26.10.2023
                                </div>
                            </div>
                            <div class="graphic-list-item">
                                11040
                            </div>
                            <div class="graphic-list-item">
                                11040
                            </div>
                            <div class="graphic-list-item">
                                0
                            </div>
                            <div class="graphic-list-item">
                                0
                            </div>
                        </div>
                        <div class="graphic-list-row">
                            <div class="graphic-list-item">
                                <div class="graphic-date">
                                    25.10.2023
                                </div>
                            </div>
                            <div class="graphic-list-item">
                                11040
                            </div>
                            <div class="graphic-list-item">
                                11040
                            </div>
                            <div class="graphic-list-item">
                                0
                            </div>
                            <div class="graphic-list-item">
                                0
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pagination">
                    <div class="pagination-item pagination-item-prev">
                        <img src="{{asset('user/assets/img/icons/prev.svg')}}" alt="">
                    </div>
                    <div class="pagination-item active">
                        1
                    </div>
                    <div class="pagination-item">
                        2
                    </div>
                    <div class="pagination-item">
                        3
                    </div>
                    <div class="pagination-item pagination-item-next">
                        <img src="{{asset('user/assets/img/icons/next.svg')}}" alt="">
                    </div>
                </div>
            </div>
            @else
                <div class="graphic-inner">
                    <div class="graphic-top">
                        <h5 class="graphic-top-title">Электрэнергиясын беру <br>  бойынша ақпарат</h5>
                        <label class="calendar-input bd-primary">
                            <input type="date" style="display: none;">
                            <span>Күні бойынша</span>
                            <img src="{{asset('user/assets/img/icons/calendar.svg')}}" alt="calendar icon">
                        </label>
                    </div>
                    <div class="graphic-list">
                        <div class="graphic-list-header bg-grey">
                            <div class="graphic-list-item">
                                <span>Күні</span>
                                <img src="{{asset('user/assets/img/icons/calendar.svg')}}" alt="sort icon" class="sort-icon">
                            </div>
                            <div class="graphic-list-item">
                                <span>
                                    {{__('messages.output')}}<br>
                                    <div class="graphic-grey">
                                        ({{__('messages.perHour')}})
                                    </div>
                                </span>
                            </div>
                            <div class="graphic-list-item">
                                <span>
                                    {{__('messages.zakontrak')}} <br>
                                    <div class="graphic-grey">
                                       ({{__('messages.perHour')}})
                                    </div>
                                </span>
                            </div>
                            <div class="graphic-list-item">
                                <span>
                                    Орталықтандырылған сауда-саттықтарға:<br>
                                    <div class="graphic-grey">
                                        ({{__('messages.perHour')}})
                                    </div>
                                </span>
                            </div>
                            <div class="graphic-list-item">
                                <span>
                                    Еркін <br>
                                    <div class="graphic-grey">
                                      ({{__('messages.perHour')}})
                                    </div>
                                </span>
                            </div>
                        </div>
                        <div class="graphic-list-content">
                            <div class="graphic-list-row">
                                <div class="graphic-list-item">
                                    <div class="graphic-date">
                                        31.10.2023
                                    </div>
                                </div>
                                <div class="graphic-list-item">
                                    10063
                                </div>
                                <div class="graphic-list-item">
                                    10063
                                </div>
                                <div class="graphic-list-item">
                                    0
                                </div>
                                <div class="graphic-list-item">
                                    0
                                </div>
                            </div>
                            <div class="graphic-list-row">
                                <div class="graphic-list-item">
                                    <div class="graphic-date">
                                        30.10.2023
                                    </div>
                                </div>
                                <div class="graphic-list-item">
                                    10560
                                </div>
                                <div class="graphic-list-item">
                                    10560
                                </div>
                                <div class="graphic-list-item">
                                    0
                                </div>
                                <div class="graphic-list-item">
                                    0
                                </div>
                            </div>
                            <div class="graphic-list-row">
                                <div class="graphic-list-item">
                                    <div class="graphic-date">
                                        29.10.2023
                                    </div>
                                </div>
                                <div class="graphic-list-item">
                                    10560
                                </div>
                                <div class="graphic-list-item">
                                    10560
                                </div>
                                <div class="graphic-list-item">
                                    0
                                </div>
                                <div class="graphic-list-item">
                                    0
                                </div>
                            </div>
                            <div class="graphic-list-row">
                                <div class="graphic-list-item">
                                    <div class="graphic-date">
                                        28.10.2023
                                    </div>
                                </div>
                                <div class="graphic-list-item">
                                    10920
                                </div>
                                <div class="graphic-list-item">
                                    10920
                                </div>
                                <div class="graphic-list-item">
                                    0
                                </div>
                                <div class="graphic-list-item">
                                    0
                                </div>
                            </div>
                            <div class="graphic-list-row">
                                <div class="graphic-list-item">
                                    <div class="graphic-date">
                                        27.10.2023
                                    </div>
                                </div>
                                <div class="graphic-list-item">
                                    11040
                                </div>
                                <div class="graphic-list-item">
                                    11040
                                </div>
                                <div class="graphic-list-item">
                                    0
                                </div>
                                <div class="graphic-list-item">
                                    0
                                </div>
                            </div>
                            <div class="graphic-list-row">
                                <div class="graphic-list-item">
                                    <div class="graphic-date">
                                        26.10.2023
                                    </div>
                                </div>
                                <div class="graphic-list-item">
                                    11040
                                </div>
                                <div class="graphic-list-item">
                                    11040
                                </div>
                                <div class="graphic-list-item">
                                    0
                                </div>
                                <div class="graphic-list-item">
                                    0
                                </div>
                            </div>
                            <div class="graphic-list-row">
                                <div class="graphic-list-item">
                                    <div class="graphic-date">
                                        25.10.2023
                                    </div>
                                </div>
                                <div class="graphic-list-item">
                                    11040
                                </div>
                                <div class="graphic-list-item">
                                    11040
                                </div>
                                <div class="graphic-list-item">
                                    0
                                </div>
                                <div class="graphic-list-item">
                                    0
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="pagination">
                        <div class="pagination-item pagination-item-prev">
                            <img src="{{asset('user/assets/img/icons/prev.svg')}}" alt="">
                        </div>
                        <div class="pagination-item active">
                            1
                        </div>
                        <div class="pagination-item">
                            2
                        </div>
                        <div class="pagination-item">
                            3
                        </div>
                        <div class="pagination-item pagination-item-next">
                            <img src="{{asset('user/assets/img/icons/next.svg')}}" alt="">
                        </div>
                    </div>
                </div>
            @endif
        </div>
    </section>
</main>
@endsection