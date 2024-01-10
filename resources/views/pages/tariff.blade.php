@extends('layouts.app')
@section('title', 'Тарифы')
@section('content')
    <link rel="stylesheet" href="{{asset('user/assets/css/infographic-page.css')}}">
    <div>
        <main>
            <section class="graphic">
                <div class="container-md">
                    <div class="graphic-inner">
                        <div class="graphic-top">
                            <h5 class="graphic-top-title">
                                {!! __('messages.tarify')  !!}
                            </h5>
                        </div>
                        <div class="graphic-list">
                            @if((new \Jenssegers\Agent\Agent())->isMobile())
                                <div class="graphic-list-header bg-grey">
                                    <div class="graphic-list-item">
                                        <span>{{__('messages.tarif.name')}}</span>
                                    </div>
                                    <div class="graphic-list-item">
                                        <span> Период </span>
                                        <img src="{{asset('user/assets/img/icons/calendar.svg')}}" alt="sort icon" class="sort-icon">
                                    </div>
                                    <div class="graphic-list-item">
                                        <span>{{__('messages.tarif.tarif')}}</span>
                                    </div>
                                    <div class="graphic-list-item">
                                        <span>{{__('messages.tarif.doc')}}</span>
                                    </div>
                                </div>
                            @else
                                <div class="graphic-list-header bg-grey">
                                    <div class="vacancy-list-item" style="text-align: center">
                                        <span style="text-align: center">{{__('messages.tarif.name')}}</span>
                                    </div>
                                    <div class="vacancy-list-item" style="text-align: center">
                                        <span> Период </span>
                                    </div>
                                    <div class="vacancy-list-item" style="text-align: center">
                                        <span style="text-align: center">{{__('messages.tarif.tarif')}}</span>
                                    </div>
                                    <div style="text-align: center" class="vacancy-list-item">
                                        <span style="text-align: center">{{__('messages.tarif.doc')}}</span>
                                    </div>

                                </div>
                            @endif
                            <div class="graphic-list-content">
                                @foreach($data as $item)
                                    <div class="graphic-list-row">
                                        <div class="vacancy-list-item">
                                            {{$item->name}}
                                        </div>
                                        <div class="vacancy-list-item">
                                            {{$item->date}}
                                        </div>
                                        <div class="vacancy-list-item">
                                            {{$item->tarif}}
                                        </div>
                                        <div class="vacancy-list-item">
                                            <div class="graphic-date">
                                                <a href=" {{$item->doc}}">{{__('messages.download')}}</a>
                                            </div>
                                        </div>

                                    </div>
                                @endforeach
                            </div>
                        </div>

                    </div>
                </div>
            </section>
        </main>
    </div>
@endsection
