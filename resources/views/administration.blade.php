@extends('layouts.app')

@section('title','Пресс-центр' )
@section('content')
    <div class="header">
        <img class="header__bg" src="{{ asset('images/IMG_2151.jpg')}}"  style="filter:brightness(82%);"  alt="bg photo">
        <p class="header__title">Руководство</p>
    </div>
    <div class="breadcrumbs">
        <a class="breadcrumb" href="#">О компании</a> /
        <span>Структура компании</span>
    </div>
    <div class="content employees">
        <div class="employees__block">
            <div class="employee">
                <img class="employee__img" src="{{asset('images/a1.png')}}" alt="administration">
                <div class="employee_data">
                    <div class="employee_asd">
                        <p class="employee__name">Кажкенов Казбек Алимсуринович</p>
                        <p class="employee__work">Председатель Правления АО "Астана-Энергия"</p>
                    </div>
                    <p class="employee__phone">Тел: +7 (7172) 64-40-28</p>
                </div>
            </div>
            <div class="employee">
                <img class="employee__img" src="{{asset('images/Rectangle 39.png')}}" alt="administration">
                <div class="employee_data">
                    <div class="employee_asd">
                        <p class="employee__name">Гармонщиков Олег Геннадьевич</p>
                        <p class="employee__work">Заместитель Председателя Правления по производству</p>
                    </div>
                </div>
            </div>
            <div class="employee">
                <img class="employee__img" src="{{asset('images/Rectangle 40.png')}}" alt="administration">
                <div class="employee_data">
                    <div class="employee_asd">
                        <p class="employee__name">Жетписов Сагатбек Идирисович</p>
                        <p class="employee__work">Заместитель Председателя Правления по снабжению</p>
                    </div>
                    <p class="employee__phone">Тел.: +7 (7172) 64-40-31</p>
                </div>
            </div>
            <div class="employee">
                <img class="employee__img" src="{{asset('images/Rectangle 41.png')}}" alt="administration">
                <div class="employee_data">
                    <div class="employee_asd">
                        <p class="employee__name">Шияпов Аслан Жаскайратович</p>
                        <p class="employee__work">Заместитель Председателя Правления по экономике и финансам</p>
                    </div>
                </div>
            </div>
            <div class="employee">
                <img class="employee__img" src="{{asset('images/Rectangle 41.png')}}" alt="administration">
                <div class="employee_data">
                    <div class="employee_asd">
                        <p class="employee__name">Мукашев Адильбек Оралбекулы</p>
                        <p class="employee__work">Заместитель Председателя Правления по развитию</p>
                    </div>
                    <p class="employee__phone">Тел.: +7 (7172) 64-40-80</p>
                </div>
            </div>
            <div class="employee">
                <img class="employee__img" src="{{asset('images/Rectangle 41.png')}}" alt="administration">
                <div class="employee_data">
                    <div class="employee_asd">
                        <p class="employee__name">Султанбеков Нурлан Сарсенбекович</p>
                        <p class="employee__work">Директор ТЭЦ-1</p>
                    </div>
                    <p class="employee__phone">Тел.: +7 (7172) 64-40-11</p>
                </div>
            </div>
            <div class="employee">
                <img class="employee__img" src="{{asset('images/Rectangle 43.png')}}" alt="administration">
                <div class="employee_data">
                    <div class="employee_asd">
                        <p class="employee__name">Аскарбеков Уалихан Дайрашевич</p>
                        <p class="employee__work">Директор ТЭЦ-2</p>
                    </div>
                    <p class="employee__phone">Тел.: +7 (7172) 64-40-57</p>
                </div>
            </div>
            <div class="employee">
                <img class="employee__img" src="{{asset('images/Rectangle 41.png')}}" alt="administration">
                <div class="employee_data">
                    <div class="employee_asd">
                        <p class="employee__name">Селезнев Константин Александрович</p>
                        <p class="employee__work">Директор ТЭЦ-3</p>
                    </div>
                    <p class="employee__phone">Тел.: +7 (7172) 64-40-64</p>
                </div>
            </div>
            <div class="employee">
                <img class="employee__img" src="{{asset('images/Rectangle 46.png')}}" alt="administration">
                <div class="employee_data">
                    <div class="employee_asd">
                        <p class="employee__name">Актаев Жанайдар Кабашович</p>
                        <p class="employee__work">Директор Районной котельной</p>
                    </div>
                    <p class="employee__phone">Тел.: +7 (7172) 64-57-67</p>
                </div>
            </div>
            <div class="employee">
                <img class="employee__img" src="{{asset('images/Rectangle 47.png')}}" alt="administration">
                <div class="employee_data">
                    <div class="employee_asd">
                        <p class="employee__name">Мусабиев Эльдар Мусабиевич</p>
                        <p class="employee__work">Директор по внутренней безопасности</p>
                    </div>
                    <p class="employee__phone">Тел.: +7 (7172) 64-40-83</p>
                </div>
            </div>

            
        </div>
    </div>

@endsection