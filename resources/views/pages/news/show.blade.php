@extends('layouts.app')
@section('title', $news->title_ru)
<link rel="stylesheet" href="{{asset('user/assets/css/news-page.css')}}">
<link rel="stylesheet" href="{{asset('user/assets/css/news-show.css')}}">
@section('content')
    <main>
        <style>
            /* base */
            * {box-sizing: border-box;}
            body {
                margin:0;
                height:100vh;
                font-family: Tahoma,"sans-serif";
            }

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
                height:400px;
                transition: transform 0.5s ease-in-out;
            }

            /*Слайд*/
            .slider-content__item {
                flex: 1 0 100%;
                width: 100%;
                height: 100%;
                background-repeat: no-repeat;
                background-position: center;
                background-size: contain;
                font-size: 100px;
                color: rgba(0,0,0,0.2);
                display: flex;
                align-items: center;
                justify-content: center;
            }

            .image-1 {background-color: #963484;}
            .image-2 {background-color: #3066BE;}
            .image-3 {background-color: #60AFFF;}
            .image-4 {background-color: #28C2FF;}
            .image-5 {background-color: #2AF5FF;}
            .image-6 {background-color: navy;}


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
                bottom:2%;
            }

            .dot {
                cursor: pointer;
                width: 12px;
                height: 12px;
                margin-right: 4px;
                padding-bottom: 0;
                background-color: rgba(0,0,0, 0.3);
                /*box-shadow: 0 0 5px 0px rgba(0,0,0,0.9);*/
                border-radius: 50%;
                transition:all 0.3s;
            }

            .dot:last-child {margin-right: 0;}
            .dot:hover {background-color: #fff;border: 1px solid black}
            .dot--active {background-color: white; border: 1px solid black}

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
        <section class="news-show">

            <div class="news-inner">
                <h3 class="news-title">{{$news->title}}</h3>
                <div class="news-date">{{__('messages.published')}}: {{ \Carbon\Carbon::parse($news->time_publish)->format('d.m.Y') }} г.</div>
                @if(!$news->tags->isEmpty())
                    <div style="padding:0" class="tags-section">

                        <div class="tags__icon" alt="Тэги">
                            <svg style="padding: 0" xmlns="http://www.w3.org/2000/svg" width="21" height="22" viewBox="0 0 21 22" fill="#1D4189">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M1.5902 0.557979C0.844497 0.760203 0.26207 1.35171 0.0657703 2.10608C0.0100244 2.32034 7.28336e-05 2.92935 7.28336e-05 6.13187C7.28336e-05 10.3707 -0.0132693 10.1855 0.321207 10.5841C0.630936 10.9532 11.6558 21.2845 11.8407 21.3789C12.2642 21.5952 12.712 21.5192 13.0646 21.1712C13.3707 20.8692 20.6987 12.8868 20.8172 12.7263C21.0275 12.4414 21.059 12.044 20.8979 11.7063C20.8129 11.5281 19.7606 10.4539 15.4052 6.09921C10.9533 1.64799 9.9794 0.69497 9.79745 0.611665L9.57729 0.510817L5.70237 0.502222C2.42388 0.49495 1.79095 0.503545 1.5902 0.557979ZM1.81336 1.97337C1.73291 2.01304 1.61402 2.11516 1.54916 2.20032L1.43115 2.35516L1.41939 6.02622L1.40764 9.69732L6.85106 14.8173L12.2945 19.9373L12.5492 19.6564C12.6892 19.502 14.3007 17.7492 16.1301 15.7613L19.4563 12.1471L14.3407 7.02314L9.22515 1.89923L5.59237 1.90025C2.31899 1.90113 1.94506 1.90836 1.81336 1.97337ZM5.25213 4.08275C4.24434 4.35443 3.52273 5.28247 3.52273 6.3069C3.52273 7.76958 4.95702 8.89746 6.35393 8.53325C7.36449 8.26976 8.10398 7.33776 8.10151 6.3307C8.09786 4.83844 6.65916 3.70342 5.25213 4.08275ZM5.4117 5.54807C5.2217 5.64742 5.15363 5.71557 5.05438 5.90576C4.89779 6.20583 4.89779 6.40797 5.05438 6.70804C5.15363 6.89823 5.2217 6.96637 5.4117 7.06572C5.5475 7.13673 5.71633 7.18843 5.81245 7.18843C5.90857 7.18843 6.0774 7.13673 6.2132 7.06572C6.4032 6.96637 6.47127 6.89823 6.57053 6.70804C6.64146 6.57211 6.69311 6.40312 6.69311 6.3069C6.69311 6.21068 6.64146 6.04169 6.57053 5.90576C6.47127 5.71557 6.4032 5.64742 6.2132 5.54807C6.0774 5.47707 5.90857 5.42536 5.81245 5.42536C5.71633 5.42536 5.5475 5.47707 5.4117 5.54807Z" fill="#1D4189"/>
                            </svg>
                        </div>

                        <div class="tags">
                            @foreach($news->tags as $tag)
                                <p class="tag">
                                    {{ $tag->name }}
                                </p>
                            @endforeach
                        </div>
                    </div>
                @endif

                @if($news->images)
                    <div class="item-center">
                        <div id="slider" class="slider">
                            <div class="slider-content">
                                <div class="slider-content-wrapper">
                                    @foreach($news->images as $image)
                                        <div class="slider-content__item" >
                                            <img class="news-img"  src="{{asset('storage/' . $image)}}" alt="news img">
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                @endif

                <div class="news-text">{!! $news->desc !!}</div>
            </div>
        </section>
        <section class="news">
            <div class="container-md">
                <div class="other_news_inner">
                    <div class="news-article">
                        <h3 class="text-blue text-center">{{__('messages.other_news')}}</h3>
                    </div>
                    <div class="news-list">
                        @foreach($other_news as $on)
                            <div class="news-item bg-grey">
                                <div class="news-item-preview" style="background-image: @if(!empty($on->image))  url({{asset('storage/' . $on->image)}}); @else  url({{asset('user/assets/img/news-default.jpg')}}) @endif"></div>
                                <div class="news-item-article">
                                    <h5 class="news-item-title">{{ Str::limit($on->title, 55, '...') }}</h5>
                                    <div class="news-item-date">{{ $on->publish }} г</div>
                                    <a href="{{route('news.show',$on->id)}}" class="detail-link">
                                        <span>{{__('messages.open')}}</span>
                                        <img src="{{asset('user/assets/img/icons/right-arrow.svg')}}" alt="News link icon" class="detail-link-icon">
                                    </a>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </section>
    </main>
    <script>
        const slider = (function(){

            //const
            const slider = document.getElementById("slider"); // основная обертка
            console.log(slider);
            const sliderContent = document.querySelector(".slider-content"); // обертка для контейнера слайдов и контролов
            console.log(sliderContent);
            const sliderWrapper = document.querySelector(".slider-content-wrapper"); // контейнер для слайдов
            const elements = document.querySelectorAll(".slider-content__item"); // обертка для слайда
            const sliderContentControls = createHTMLElement("div", "slider-content__controls"); // блок контролов внутри sliderContent
            let dotsWrapper = null; // Обертка dots
            let prevButton = null; // Кнопки
            let nextButton = null;
            let autoButton = null;
            let leftArrow = null; // Стрелки
            let rightArrow = null;
            let intervalId = null; //идентификатор setInterval

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

                // Контролы
                createArrows();
                // buttons ? createButtons() : null;
                dots ? createDots() : null;

                // Arrows function
                function createArrows() {
                    const dValueLeftArrow = "M31.7 239l136-136c9.4-9.4 24.6-9.4 33.9 0l22.6 22.6c9.4 9.4 9.4 24.6 0 33.9L127.9 256l96.4 96.4c9.4 9.4 9.4 24.6 0 33.9L201.7 409c-9.4 9.4-24.6 9.4-33.9 0l-136-136c-9.5-9.4-9.5-24.6-.1-34z";
                    const dValueRightArrow = "M224.3 273l-136 136c-9.4 9.4-24.6 9.4-33.9 0l-22.6-22.6c-9.4-9.4-9.4-24.6 0-33.9l96.4-96.4-96.4-96.4c-9.4-9.4-9.4-24.6 0-33.9L54.3 103c9.4-9.4 24.6-9.4 33.9 0l136 136c9.5 9.4 9.5 24.6.1 34z";
                    const leftArrowSVG = createSVG(dValueLeftArrow);
                    const rightArrowSVG = createSVG(dValueRightArrow);

                    leftArrow = createHTMLElement("div", "prev-arrow");
                    leftArrow.append(leftArrowSVG);
                    leftArrow.addEventListener("click", () => updateItemsInfo(itemsInfo.position.current - 1))

                    rightArrow = createHTMLElement("div", "next-arrow");
                    rightArrow.append(rightArrowSVG);
                    rightArrow.addEventListener("click", () => updateItemsInfo(itemsInfo.position.current + 1))

                    sliderContentControls.append(leftArrow, rightArrow);

                    // SVG function
                    function createSVG(dValue, color="currentColor") {
                        const svg = document.createElementNS("http://www.w3.org/2000/svg", "svg");
                        svg.setAttribute("viewBox", "0 0 256 512");
                        const path = document.createElementNS("http://www.w3.org/2000/svg", "path");
                        path.setAttribute("fill", color);
                        path.setAttribute("d", dValue);
                        svg.appendChild(path);
                        return svg;
                    }
                }

                // Dots function
                function createDots() {
                    dotsWrapper = createHTMLElement("div", "dots");
                    for(let i = 0; i < itemsInfo.position.max + 1; i++) {
                        const dot = document.createElement("div");
                        dot.className = "dot";
                        dot.addEventListener("click", function() {
                            updateItemsInfo(i);
                        })
                        dotsWrapper.append(dot);
                    }
                    sliderContentControls.append(dotsWrapper);
                }

                // Buttons function
                function createButtons() {
                    const controlsWrapper = createHTMLElement("div", "slider-controls");
                    prevButton = createHTMLElement("button", "prev-control", "Prev");
                    prevButton.addEventListener("click", () => updateItemsInfo(itemsInfo.position.current - 1))

                    autoButton = createHTMLElement("button", "auto-control", "Auto");
                    autoButton.addEventListener("click", () => {
                        intervalId = setInterval(function(){
                            if (itemsInfo.position.current < itemsInfo.position.max) {
                                itemsInfo.update(itemsInfo.position.current + 1);
                            } else {
                                itemsInfo.reset();
                            }
                            _slideItem();
                        }, itemsInfo.intervalSpeed)
                    })

                    nextButton = createHTMLElement("button", "next-control", "Next");
                    nextButton.addEventListener("click", () => updateItemsInfo(itemsInfo.position.current + 1))

                    controlsWrapper.append(prevButton, autoButton, nextButton);
                    slider.append(controlsWrapper);
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
