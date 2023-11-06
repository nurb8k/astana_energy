@extends('layouts.app')
@section('title', 'Новости')
<link rel="stylesheet" href="{{asset('user/assets/css/news-page.css')}}">
<style>
    /* slider обертка */
    .slider {
        position: relative;
        height: 100%;
        width: 100%;
        overflow:hidden;
    }

    /*Окно со слайдами*/
    .slider-content {
        position: relative;
        width: 100%;
    }

    /*Контейнер для слайдов (передвигаем)*/
    .slider-content-wrapper {
        display: flex;
        height:300px;
        transition: transform 0.5s ease-in-out;
    }

    /*Слайд*/
    .slider-content__item {
        flex: 1 0 580px;
        width: 580px;
        height: 100%;
        background-repeat: no-repeat;
        background-position: center;
        background-size: contain;
        font-size: 100px;

        display: flex;
        align-items: center;
        justify-content: center;
    }

    /* Блок с контролами */
    .slider-controls {
        padding:20px;
        text-align: center;
    }

    /* Блок с контролами внутри окна */
    .slider-content__controls {
        position:absolute;
        top:0;left:0;
        width: 100%;
        height: 100%;
        z-index:1;
        /*transform: translateY(-50%);*/
        /*padding:0 15px;*/
    }

    /* Arrows */
    .prev-arrow, .next-arrow {
        position:absolute;
        top:50%;
        transform: translateY(-50%);
        cursor: pointer;
        color:rgba(0,0,0, 0.3);
        width: 20px;
        transition: all 0.3s;
    }
    .prev-arrow {left: 20px;}
    .next-arrow {right: 20px;}

    .prev-arrow:hover,
    .next-arrow:hover {
        cursor: pointer;
        color:rgba(0,0,0, 0.7);
    }

    /* Dots */
    .dots {
        position:absolute;
        display: flex;
        left:50%;
        transform: translateX(-50%);
        bottom: 0;
    }

    .dot {
        cursor: pointer;
        width: 16px;
        height: 16px;
        margin-right: 4px;
        background-color: #d5d3d3;
        /*box-shadow: 0 0 5px 0px rgba(0,0,0,0.9);*/
        border-radius: 50%;
        transition:all 0.3s;
    }

    .dot:last-child {margin-right: 0;}
    .dot:hover {background-color: #949494
    }
    .dot--active {background-color: #7e7e7e
    }

    /* Buttons */
    button {
        cursor: pointer;
        margin-right: 8px;
        border:none;
        border-radius: 4px;
        padding:10px;
        background-color: #3066BE;
        color:#FFF;
        transition: all 0.5s;
    }
    button:last-child {margin-right: 0;}
    button:hover {background-color: #60AFFF;}
    button:focus {outline: none;}

    /* Mods */
    .disabled {
        background-color: #DCCFCF;
        color:#B0A8A8;
        cursor: default;
        pointer-events:none;
    }

    .d-none {display: none;}
    .active {opacity: 1;}
    .centered {
        position:relative;
        top:50%;
        left:50%;
        transform:translate(-50%,-50%);
    }
</style>
@section('content')

    <main>
        <section class="single-news">
            <div class="container-md">
                <div class="single-news-inner">
                    <div class="single-news-preview" style="background-image: url({{asset('storage/' . $latest->image)}});"></div>
                    <div class="single-news-article">
                        <h3>{{$latest->title}}</h3>
                        <div class="single-news-date">{{__('messages.published')}}: {{ $latest->publish }}
                            г.</div>
                        <p class="single-news-description">{!! Str::limit($latest->desc, 180, '...') !!}</p>
                        <a href="{{route('news.show',$latest->id)}}" class="btn btn-outline btn-icon-right btn-hover-fil" style="margin-top: 15px;">
                            <span>{{__('messages.more')}}</span>
                            <svg class="btn-icon" width="19" height="16" viewBox="0 0 19 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M18.7071 8.70711C19.0976 8.31658 19.0976 7.68342 18.7071 7.29289L12.3431 0.928932C11.9526 0.538408 11.3195 0.538408 10.9289 0.928932C10.5384 1.31946 10.5384 1.95262 10.9289 2.34315L16.5858 8L10.9289 13.6569C10.5384 14.0474 10.5384 14.6805 10.9289 15.0711C11.3195 15.4616 11.9526 15.4616 12.3431 15.0711L18.7071 8.70711ZM0 9H18V7H0L0 9Z" fill="#F29646"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <section class="news">
            <div class="container-md">
                <div class="news-inner">
                    <div class="news-article">
                        <h3 class="text-blue text-center">{{__('messages.all_news')}}</h3>
                    </div>
                    <div class="news-list">
                        @foreach($other_news as $n)
                            <div class="news-item bg-grey">
                                <div class="news-item-preview" style="background-image: url({{asset('storage/' . $n->image)}}); "></div>
                                <div class="news-item-article">
                                    <h5 class="news-item-title">{{$n->title}}</h5>
                                    <div class="news-item-date">{{ $n->publish }} г</div>
                                    <a href="{{route('news.show',$n->id)}}" class="detail-link">
                                        <span>{{__('messages.open')}}</span>
                                        <img src="{{asset('/user/assets/img/icons/right-arrow.svg')}}" alt="News link icon" class="detail-link-icon">
                                    </a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
        <section class="news" style="padding-top: 0;">
            <div class="container-md" style="border-top: 1px solid #ABACB4;">
                <div class="news-inner">
                    <div class="news-article">
                        <h3 class="text-blue text-center">{{__('messages.pop_news')}}</h3>
                    </div>
                    <div class="news-list">
                        <div id="slider" class="slider">
                            <div class="slider-content">
                                <div class="slider-content-wrapper">

                                    @foreach($pop_news as $n)
                                        <div class="slider-content__item news-item">
                                            <div class="news-item bg-grey" style="width: 100%">
                                                <div class="news-item-preview" style="background-image: url({{asset('storage/' . $n->image)}});height:140px;"></div>
                                                <div class="news-item-article">
                                                    <h5 class="news-item-title">{{$n->title}}</h5>
                                                    <div class="news-item-date">{{ $n->publish }} г</div>
                                                    <a href="{{route('news.show',$n->id)}}" class="detail-link">
                                                        <span>{{__('messages.open')}}</span>
                                                        <img src="{{asset('/user/assets/img/icons/right-arrow.svg')}}" alt="News link icon" class="detail-link-icon">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
{{--                        @foreach($pop_news as $n)--}}
{{--                            <div class="news-item bg-grey">--}}
{{--                                <div class="news-item-preview" style="background-image: url({{asset('storage/' . $n->image)}});"></div>--}}
{{--                                <div class="news-item-article">--}}
{{--                                    <h5 class="news-item-title">{{$n->title}}</h5>--}}
{{--                                    <div class="news-item-date">{{ $n->publish }} г</div>--}}
{{--                                    <a href="{{route('news.show',$n->id)}}" class="detail-link">--}}
{{--                                        <span>{{__('messages.open')}}</span>--}}
{{--                                        <img src="{{asset('/user/assets/img/icons/right-arrow.svg')}}" alt="News link icon" class="detail-link-icon">--}}
{{--                                    </a>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        @endforeach--}}
                    </div>
                </div>
            </div>
        </section>
    </main>
<script>
    const slider = (function(){

        //const
        const slider = document.getElementById("slider"); // основная обертка

        const sliderContent = document.querySelector(".slider-content"); // обертка для контейнера слайдов и контролов

        const sliderWrapper = document.querySelector(".slider-content-wrapper"); // контейнер для слайдов
        const elements = document.querySelectorAll(".slider-content__item"); // обертка для слайда
        const sliderContentControls = createHTMLElement("div", "slider-content__controls"); // блок контролов внутри sliderContent
        let dotsWrapper = null; // Обертка dots
        let prevButton = null; // Кнопки
        let nextButton = null;
        let autoButton = null;
        let leftArrow = null; // Стрелки
        let rightArrow = null;
        let intervalId = null; // идентификатор setInterval

        // data
        const itemsInfo = {
            offset: 0, // смещение контейнера со слайдами относительно начальной точки (первый слайд)
            position: {
                current: 0, // номер текущего слайда
                min: 0, // первый слайд
                max: elements.length - 1 // последний слайд
            },
            intervalSpeed: 2000, // Скорость смены слайдов в авторежиме

            update: function(value) {
                this.position.current = value;
                this.offset = -value;
            },
            reset: function() {
                this.position.current = 0;
                this.offset = 0;
            }
        };

        const controlsInfo = {
            buttonsEnabled: false,
            dotsEnabled: false,
            prevButtonDisabled: true,
            nextButtonDisabled: false
        };

        // Инициализация слайдера
        function init(props) {
            // let {buttonsEnabled, dotsEnabled} = controlsInfo;
            let {intervalSpeed, position, offset} = itemsInfo;

            // Проверка наличия элементов разметки
            if (slider && sliderContent && sliderWrapper && elements) {
                // Проверка входных параметров
                if (props && props.intervalSpeed) {
                    intervalSpeed = props.intervalSpeed;
                }
                if (props && props.currentItem) {
                    if ( parseInt(props.currentItem) >= position.min && parseInt(props.currentItem) <= position.max ) {
                        position.current = props.currentItem;
                        offset = - props.currentItem;
                    }
                }
                if (props && props.buttons) {
                    controlsInfo.buttonsEnabled = true;
                }
                if (props && props.dots) {
                    controlsInfo.dotsEnabled = true;
                }

                _updateControlsInfo();
                _createControls(controlsInfo.dotsEnabled, controlsInfo.buttonsEnabled);
                _render();
            } else {
                console.log("Разметка слайдера задана неверно. Проверьте наличие всех необходимых классов 'slider/slider-content/slider-wrapper/slider-content__item'");
            }
        }

        // Обновить свойства контролов
        function _updateControlsInfo() {
            const {current, min, max} = itemsInfo.position;
            controlsInfo.prevButtonDisabled = current > min ? false : true;
            controlsInfo.nextButtonDisabled = current < max ? false : true;
        }

        // Создание элементов разметки
        function _createControls(dots = false, buttons = false) {

            //Обертка для контролов
            sliderContent.append(sliderContentControls);

            dots ? createDots() : null;

            // Dots function
            function createDots() {
                dotsWrapper = createHTMLElement("div", "dots");

                for(let i = 0; i <  (itemsInfo.position.max + 1) / 2; i++) {
                    const dot = document.createElement("div");
                    dot.className = "dot";
                    dot.addEventListener("click", function() {
                        updateItemsInfo(i);
                    })
                    dotsWrapper.append(dot);
                }
                sliderContentControls.append(dotsWrapper);
            }



        }

        // Задать класс для контролов (buttons, arrows)
        function setClass(options) {
            if (options) {
                options.forEach(({element, className, disabled}) => {
                    if (element) {
                        disabled ? element.classList.add(className) : element.classList.remove(className)
                    } else {
                        console.log("Error: function setClass(): element = ", element);
                    }
                })
            }
        }

        // Обновить значения слайдера
        function updateItemsInfo(value) {
            itemsInfo.update(value);
            _slideItem(true);
        }

        // Отобразить элементы
        function _render() {
            const {prevButtonDisabled, nextButtonDisabled} = controlsInfo;
            let controlsArray = [
                {element: leftArrow, className: "d-none", disabled: prevButtonDisabled},
                {element: rightArrow, className: "d-none", disabled: nextButtonDisabled}
            ];
            if (controlsInfo.buttonsEnabled) {
                controlsArray = [
                    ...controlsArray,
                    {element:prevButton, className: "disabled", disabled: prevButtonDisabled},
                    {element:nextButton, className: "disabled", disabled: nextButtonDisabled}
                ];
            }

            // Отображаем/скрываем контроллы
            setClass(controlsArray);

            // Передвигаем слайдер
            sliderWrapper.style.transform = `translateX(${itemsInfo.offset*100}%)`;

            // Задаем активный элемент для точек (dot)
            if (controlsInfo.dotsEnabled) {
                if (document.querySelector(".dot--active")) {
                    document.querySelector(".dot--active").classList.remove("dot--active");
                }
                dotsWrapper.children[itemsInfo.position.current].classList.add("dot--active");
            }
        }

        // Переместить слайд
        function _slideItem(autoMode = false) {
            if (autoMode && intervalId) {
                clearInterval(intervalId);
            }
            _updateControlsInfo();
            _render();
        }

        // Создать HTML разметку для элемента
        function createHTMLElement(tagName="div", className, innerHTML) {
            const element = document.createElement(tagName);
            className ? element.className = className : null;
            innerHTML ? element.innerHTML = innerHTML : null;
            return element;
        }

        // Доступные методы
        return {init};
    }())

    slider.init({
        // intervalSpeed: 1000,
        currentItem: 0,
        buttons: true,
        dots: true
    });
</script>
@endsection