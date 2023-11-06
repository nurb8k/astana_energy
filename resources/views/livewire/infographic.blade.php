<div>

    <main>
        <section class="graphic">
            <div class="container-md">
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
                            @foreach($data as $item)
                                <div class="graphic-list-row">
                                    <div class="graphic-list-item">
                                        <div class="graphic-date">
                                            {{$item->date->format('d.m.Y')}}
                                        </div>
                                    </div>
                                    <div class="graphic-list-item">
                                        {{$item->output}}
                                    </div>
                                    <div class="graphic-list-item">
                                       {{$item->contacted}}
                                    </div>
                                    <div class="graphic-list-item">
                                        {{$item->centred}}
                                    </div>
                                    <div class="graphic-list-item">
                                        {{$item->free}}
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    {{ $data->links() }}
{{--                    <div class="pagination">--}}

{{--                        <div class="pagination-item pagination-item-prev">--}}
{{--                            <img src="{{asset('user/assets/img/icons/prev.svg')}}" alt="">--}}
{{--                        </div>--}}
{{--                        <div class="pagination-item active">--}}
{{--                            1--}}
{{--                        </div>--}}
{{--                        <div class="pagination-item">--}}
{{--                            2--}}
{{--                        </div>--}}
{{--                        <div class="pagination-item">--}}
{{--                            3--}}
{{--                        </div>--}}
{{--                        <div class="pagination-item pagination-item-next">--}}
{{--                            <img src="{{asset('user/assets/img/icons/next.svg')}}" alt="">--}}
{{--                        </div>--}}
{{--                    </div>--}}
                </div>
            </div>
        </section>
    </main>
</div>
