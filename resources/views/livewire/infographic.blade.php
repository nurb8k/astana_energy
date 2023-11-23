<div>
    <main>
        <section class="graphic">
            <div class="container-md">
                <div class="graphic-inner">
                    <div class="graphic-top">
                        <h5 class="graphic-top-title">

                            {!! __('messages.infographic.info')  !!}
                        </h5>
                        <input wire:model.live="date" type="date" style="background:#fff url({{asset('user/assets/img/icons/calendar.svg')}})  85% 50% no-repeat ;" class="calendar-input bd-primary" name="date" id="date">
                    </div>
                    <div class="graphic-list">
                        <div class="graphic-list-header bg-grey">
                            <div class="graphic-list-item">
                                <span>{{__('messages.data')}}</span>
                                <img src="{{asset('user/assets/img/icons/calendar.svg')}}" alt="sort icon" class="sort-icon">
                            </div>
                            <div class="graphic-list-item">
                                <span> {{__('messages.output')}}
                                  <br>
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
                                    {{__('messages.centred')}}<br>
                                    <div class="graphic-grey">
                                        ({{__('messages.perHour')}})
                                    </div>
                                </span>
                            </div>
                            <div class="graphic-list-item">
                                <span>
                                    {{__('messages.free')}} <br>
                                    <div class="graphic-grey">
                                      ({{__('messages.perHour')}})
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
                </div>
            </div>
        </section>
    </main>

</div>
