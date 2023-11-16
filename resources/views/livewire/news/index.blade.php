<div>
    <link rel="stylesheet" href="{{asset('user/assets/css/news-page.css')}}" />
    <main>
        <section class="single-news">
            <div class="container-md">
                <div class="single-news-inner">
                    <div class="single-news-preview"  style="background-image: @if(!empty($latest->image))  url({{asset('storage/' . $latest->image)}}); @else  url({{asset('user/assets/img/news-default.jpg')}}) @endif"></div>
                    <div class="single-news-article">
                        <h3>{{$latest->title}}</h3>
                        <div class="single-news-date">{{__('messages.published')}}: {{ $latest->publish }} г.</div>
                        @if(!$latest->tags->isEmpty())
                            <div class="tags-section">
                                <div class="tags__icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="21" height="22" viewBox="0 0 21 22" fill="none">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M1.5902 0.557979C0.844497 0.760203 0.26207 1.35171 0.0657703 2.10608C0.0100244 2.32034 7.28336e-05 2.92935 7.28336e-05 6.13187C7.28336e-05 10.3707 -0.0132693 10.1855 0.321207 10.5841C0.630936 10.9532 11.6558 21.2845 11.8407 21.3789C12.2642 21.5952 12.712 21.5192 13.0646 21.1712C13.3707 20.8692 20.6987 12.8868 20.8172 12.7263C21.0275 12.4414 21.059 12.044 20.8979 11.7063C20.8129 11.5281 19.7606 10.4539 15.4052 6.09921C10.9533 1.64799 9.9794 0.69497 9.79745 0.611665L9.57729 0.510817L5.70237 0.502222C2.42388 0.49495 1.79095 0.503545 1.5902 0.557979ZM1.81336 1.97337C1.73291 2.01304 1.61402 2.11516 1.54916 2.20032L1.43115 2.35516L1.41939 6.02622L1.40764 9.69732L6.85106 14.8173L12.2945 19.9373L12.5492 19.6564C12.6892 19.502 14.3007 17.7492 16.1301 15.7613L19.4563 12.1471L14.3407 7.02314L9.22515 1.89923L5.59237 1.90025C2.31899 1.90113 1.94506 1.90836 1.81336 1.97337ZM5.25213 4.08275C4.24434 4.35443 3.52273 5.28247 3.52273 6.3069C3.52273 7.76958 4.95702 8.89746 6.35393 8.53325C7.36449 8.26976 8.10398 7.33776 8.10151 6.3307C8.09786 4.83844 6.65916 3.70342 5.25213 4.08275ZM5.4117 5.54807C5.2217 5.64742 5.15363 5.71557 5.05438 5.90576C4.89779 6.20583 4.89779 6.40797 5.05438 6.70804C5.15363 6.89823 5.2217 6.96637 5.4117 7.06572C5.5475 7.13673 5.71633 7.18843 5.81245 7.18843C5.90857 7.18843 6.0774 7.13673 6.2132 7.06572C6.4032 6.96637 6.47127 6.89823 6.57053 6.70804C6.64146 6.57211 6.69311 6.40312 6.69311 6.3069C6.69311 6.21068 6.64146 6.04169 6.57053 5.90576C6.47127 5.71557 6.4032 5.64742 6.2132 5.54807C6.0774 5.47707 5.90857 5.42536 5.81245 5.42536C5.71633 5.42536 5.5475 5.47707 5.4117 5.54807Z" fill="#1D4189"/>
                                    </svg>
                                </div>
                                <div class="tags">
                                    @foreach($latest->tags as $tag)
                                        <p class="tag">
                                            {{ $tag->name }}
                                        </p>
                                    @endforeach
                                </div>
                            </div>
                        @endif
                        <p class="single-news-description">{!! Str::limit($latest->desc, 180, '...') !!}</p>
                        <a href="{{route('news.show',$latest->id)}}" class="btn btn-outline btn-icon-right btn-hover-fil" style="margin-top: 15px;">
                            <span>{{__('messages.more')}}</span>
                            <svg class="btn-icon" width="19" height="16" viewBox="0 0 19 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                        d="M18.7071 8.70711C19.0976 8.31658 19.0976 7.68342 18.7071 7.29289L12.3431 0.928932C11.9526 0.538408 11.3195 0.538408 10.9289 0.928932C10.5384 1.31946 10.5384 1.95262 10.9289 2.34315L16.5858 8L10.9289 13.6569C10.5384 14.0474 10.5384 14.6805 10.9289 15.0711C11.3195 15.4616 11.9526 15.4616 12.3431 15.0711L18.7071 8.70711ZM0 9H18V7H0L0 9Z"
                                        fill="#F29646"
                                />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <section class="news">
            <div class="container-md">
                <div class="news-inner">
                    <div class="graphic-top">
                        <h3 class="text-blue text-left">{{__('messages.all_news')}}</h3>
                        <div style="display: flex;gap:15px;width: calc(30%)">
                            <select id="tagSelect" wire:model.live="tag" style="background:#fff url({{asset('user/assets/img/icons/tag.svg')}})  85% 50% no-repeat;width: 55%" class="calendar-input bd-primary" >
                                <option name="tag" value="" selected hidden>Поиск по тегам</option>
                                @foreach($tags as $tag)
                                    <option name="tag" value="{{$tag->id}}">{{$tag->name}}</option>
                                @endforeach
                                <option name="tag" value="">Все новости</option>
                            </select>
                            <input wire:model.live="date" type="date" style="background:#fff url({{asset('user/assets/img/icons/calendar.svg')}})  85% 50% no-repeat ;" class="calendar-input bd-primary" name="date" id="date" />
                        </div>

                    </div>
                    <div class="news-list" style="margin-bottom: 0;">
                        @if($other_news->isEmpty())
                            По вашему запросу новостей не найдено
                        @endif
                        @foreach($other_news as $n)
                            <div class="news-item bg-grey">
                                <div class="news-item-preview" style=" background-image: @if(!empty($n->image))  url({{asset('storage/' . $n->image)}}); @else  url({{asset('user/assets/img/news-default.jpg')}}) @endif"></div>
                                <div class="news-item-article">
                                    <h5 class="news-item-title">{{$n->title}}</h5>
                                    <div class="news-item-date">{{ $n->publish }} г</div>
                                    <a href="{{route('news.show',$n->id)}}" class="detail-link">
                                        <span>{{__('messages.open')}}</span>
                                        <img src="{{asset('/user/assets/img/icons/right-arrow.svg')}}" alt="News link icon" class="detail-link-icon" />
                                    </a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div style="display:flex;justify-content:center;margin-top: 20px;">
                        <button wire:click='loadMore' href="{{route('news.index')}}" class="btn @if($noMore) disabled @endif"> {{__('messages.show.more')}} </button>
                    </div>
                </div>
            </div>
        </section>
        <section class="news" style="padding-top: 0;">
            <div class="container-md" style="border-top: 1px solid #abacb4;">
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
                                            <div class="news-item bg-grey" style="width: 100%; height: 200px;">
                                                <div class="news-item-preview" style="background-image: @if(!empty($n->image))  url({{asset('storage/' . $n->image)}}); @else  url({{asset('user/assets/img/news-default.jpg')}}) @endif"></div>
                                                <div class="news-item-article">
                                                    <h5 class="news-item-title">{{ Str::limit($n->title, 25, '...') }}</h5>
                                                    <div class="news-item-date">{{ $n->publish }} г</div>
                                                    <a href="{{route('news.show',$n->id)}}" class="detail-link">
                                                        <span>{{__('messages.open')}}</span>
                                                        <img src="{{asset('/user/assets/img/icons/right-arrow.svg')}}" alt="News link icon" class="detail-link-icon" />
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <script src="{{asset('user/assets/js/slider.js')}}"></script>
</div>
