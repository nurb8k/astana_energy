
@extends('layouts.app')
@section('title', 'Инфографика')

@section('content')
    <main>
        <section class="graphic">
            <div class="container-md">
                <div class="graphic-inner">
                    <div class="graphic-top">
                        <h5 class="graphic-top-title">Вакансии</h5>
                        @if(app()->getLocale() == 'kz')
                            <p>26.07.2023 ж. жағдай бойынша "Астана-Энергия" АҚ ау және ЖЭО-2 бос орындарының болуы туралы ақпарат</p>
                        @else
                            <p>Информация о наличии вакантных мест АУП и ТЭЦ-2 АО "Астана-Энергия" по состоянию на 26.07.2023 г.</p>
                        @endif
                    </div>
                    @if((new \Jenssegers\Agent\Agent())->isMobile())
                        <div class="graphic-list">
                            <div class="graphic-list-header bg-grey">
                                <div class="vacancy-list-item">
                                    <span>Название отдела</span>
                                </div>
                                <div class="vacancy-list-item">
                                <span>
                                    Проф.
                                </span>
                                </div>
                                <div class="vacancy-list-item">
                                    <span>Кол-во</span>
                                </div>
                                <div class="vacancy-list-item">
                                    <span>Требования</span>
                                </div>

                            </div>
                            <div class="graphic-list-content">
                                <div class="graphic-list-row">
                                    <div class="vacancy-list-item">
                                        <div class="graphic-date">
                                            Отдел ремонтов
                                        </div>
                                    </div>
                                    <div class="vacancy-list-item">
                                        Инженер по ремонту 10 разряда
                                    </div>
                                    <div class="vacancy-list-item">
                                        1
                                    </div>
                                    <div class="vacancy-list-item">
                                        На должность инженера по ремонту ОР принимается лицо, имеющее высшее (или послевузовское) образование по соответствующей специальности и стаж работы в должности инженера по ремонту II категории не менее 2 лет.
                                    </div>

                                </div>
                                <div class="graphic-list-row">
                                    <div class="vacancy-list-item">
                                        <div class="graphic-date">
                                            Режимно - наладочная группа
                                        </div>
                                    </div>
                                    <div class="vacancy-list-item">
                                        Инженер 9 разряда
                                    </div>
                                    <div class="vacancy-list-item">
                                        1
                                    </div>
                                    <div class="vacancy-list-item">
                                        На должность инженера РНГ принимается лицо, имеющее высшее образование по специальности, связанной с энергетической отраслью, и стаж работы по обслуживанию оборудования электростанции не менее 1 года или средне специальное образование и стаж работы на инженерно-технических должностях не менее 3 лет и прошедшее медицинское освидетельствование.
                                    </div>
                                </div>
                                <div class="graphic-list-row">
                                    <div class="vacancy-list-item">
                                        <div class="graphic-date">
                                            Режимно-наладочная группа
                                        </div>
                                    </div>

                                    <div class="vacancy-list-item">
                                        Инженер-металловед 10 разряда
                                    </div>
                                    <div class="vacancy-list-item">
                                        1
                                    </div>
                                    <div class="vacancy-list-item">
                                        На должность инженера-металловеда принимается лицо, имеющее высшее образование и стаж работы по специальности не менее трех лет, прошедшее медицинское освидетельствование.
                                    </div>
                                </div>
                                <div class="graphic-list-row">
                                    <div class="vacancy-list-item">
                                        <div class="graphic-date">
                                            Лаборатория металлов
                                        </div>
                                    </div>

                                    <div class="vacancy-list-item">
                                        Инженер-металловед 10 разряда
                                    </div>
                                    <div class="vacancy-list-item">
                                        1
                                    </div>
                                    <div class="vacancy-list-item">
                                        На должность инженера-металловеда принимается лицо, имеющее высшее образование и стаж работы по специальности не менее трех лет, прошедшее медицинское освидетельствование.
                                    </div>
                                </div>
                                <div class="graphic-list-row">
                                    <div class="vacancy-list-item">
                                        <div class="graphic-date">
                                            Электрический цех ТЭЦ-1, ТЭЦ-2
                                        </div>
                                    </div>

                                    <div class="vacancy-list-item">
                                        Мастер 10 разряда
                                    </div>
                                    <div class="vacancy-list-item">
                                        1
                                    </div>
                                    <div class="vacancy-list-item">
                                        На должность мастера электроцеха по ремонту назначается лицо, имеющее высшее профессиональное (техническое) образование, стаж работы по профилю не менее двух лет (или имеющее среднее профессиональное (техническое) образование и стаж работы по профилю не менее трех лет), пятую квалификационную группу по электробезопасности.
                                    </div>
                                </div>
                                <div class="graphic-list-row">
                                    <div class="vacancy-list-item">
                                        <div class="graphic-date">
                                            Электрический цех ТЭЦ-1, ТЭЦ-2
                                        </div>
                                    </div>

                                    <div class="vacancy-list-item">
                                        Электромонтер по испытаниям и измерениям 5 разряда
                                    </div>
                                    <div class="vacancy-list-item">
                                        1
                                    </div>
                                    <div class="vacancy-list-item">
                                        На должность электромонтера принимаются лица, имеющие средне-специальное образование, прошедшие соответствующее обучение и сдавшие экзамены по должности, не моложе 18 лет.
                                    </div>
                                </div>
                                <div class="graphic-list-row">
                                    <div class="vacancy-list-item">
                                        <div class="graphic-date">
                                            Котельный цех ТЭЦ-2, Котло-турбинный цех ТЭЦ-1
                                        </div>
                                    </div>

                                    <div class="vacancy-list-item">
                                        Инженер (по АСБРЭ) 10 разряда
                                    </div>
                                    <div class="vacancy-list-item">
                                        1
                                    </div>
                                    <div class="vacancy-list-item">
                                        На должность инженера (по обслуживанию систем АСБРЭ) принимается лицо, имеющее высшее техническое образование без предъявления трудового стажа или средне-специальное образование при наличии стажа на энергопредприятиях не менее трех лет. Перед приемом на работу инженер (по обслуживанию систем АСБРЭ) должен пройти медицинское освидетельствование.
                                    </div>
                                </div>
                            </div>
                        </div>
                    @else
                        <div class="graphic-list">
                            <div class="graphic-list-header bg-grey">
                                <div class="vacancy-list-item">
                                    <span>наименование структурного подразделения</span>
                                </div>
                                <div class="vacancy-list-item">
                                <span>
                                   наименование должности (профессии)
                                </span>
                                </div>
                                <div class="vacancy-list-item">
                                    <span>кол-во вакансий</span>
                                </div>
                                <div class="vacancy-list-item">
                                    <span>Примечание, квалификационные требования</span>
                                </div>

                            </div>
                            <div class="graphic-list-content">
                                <div class="graphic-list-row">
                                    <div class="vacancy-list-item">
                                        <div class="graphic-date">
                                            Отдел ремонтов
                                        </div>
                                    </div>
                                    <div class="vacancy-list-item">
                                        Инженер по ремонту 10 разряда
                                    </div>
                                    <div class="vacancy-list-item">
                                        1
                                    </div>
                                    <div class="vacancy-list-item">
                                        На должность инженера по ремонту ОР принимается лицо, имеющее высшее (или послевузовское) образование по соответствующей специальности и стаж работы в должности инженера по ремонту II категории не менее 2 лет.
                                    </div>

                                </div>
                                <div class="graphic-list-row">
                                    <div class="vacancy-list-item">
                                        <div class="graphic-date">
                                            Режимно - наладочная группа
                                        </div>
                                    </div>
                                    <div class="vacancy-list-item">
                                        Инженер 9 разряда
                                    </div>
                                    <div class="vacancy-list-item">
                                        1
                                    </div>
                                    <div class="vacancy-list-item">
                                        На должность инженера РНГ принимается лицо, имеющее высшее образование по специальности, связанной с энергетической отраслью, и стаж работы по обслуживанию оборудования электростанции не менее 1 года или средне специальное образование и стаж работы на инженерно-технических должностях не менее 3 лет и прошедшее медицинское освидетельствование.
                                    </div>
                                </div>
                                <div class="graphic-list-row">
                                    <div class="vacancy-list-item">
                                        <div class="graphic-date">
                                            Режимно-наладочная группа
                                        </div>
                                    </div>

                                    <div class="vacancy-list-item">
                                        Инженер-металловед 10 разряда
                                    </div>
                                    <div class="vacancy-list-item">
                                        1
                                    </div>
                                    <div class="vacancy-list-item">
                                        На должность инженера-металловеда принимается лицо, имеющее высшее образование и стаж работы по специальности не менее трех лет, прошедшее медицинское освидетельствование.
                                    </div>
                                </div>
                                <div class="graphic-list-row">
                                    <div class="vacancy-list-item">
                                        <div class="graphic-date">
                                            Лаборатория металлов
                                        </div>
                                    </div>

                                    <div class="vacancy-list-item">
                                        Инженер-металловед 10 разряда
                                    </div>
                                    <div class="vacancy-list-item">
                                        1
                                    </div>
                                    <div class="vacancy-list-item">
                                        На должность инженера-металловеда принимается лицо, имеющее высшее образование и стаж работы по специальности не менее трех лет, прошедшее медицинское освидетельствование.
                                    </div>
                                </div>
                                <div class="graphic-list-row">
                                    <div class="vacancy-list-item">
                                        <div class="graphic-date">
                                            Электрический цех ТЭЦ-1, ТЭЦ-2
                                        </div>
                                    </div>

                                    <div class="vacancy-list-item">
                                        Мастер 10 разряда
                                    </div>
                                    <div class="vacancy-list-item">
                                        1
                                    </div>
                                    <div class="vacancy-list-item">
                                        На должность мастера электроцеха по ремонту назначается лицо, имеющее высшее профессиональное (техническое) образование, стаж работы по профилю не менее двух лет (или имеющее среднее профессиональное (техническое) образование и стаж работы по профилю не менее трех лет), пятую квалификационную группу по электробезопасности.
                                    </div>
                                </div>
                                <div class="graphic-list-row">
                                    <div class="vacancy-list-item">
                                        <div class="graphic-date">
                                            Электрический цех ТЭЦ-1, ТЭЦ-2
                                        </div>
                                    </div>

                                    <div class="vacancy-list-item">
                                        Электромонтер по испытаниям и измерениям 5 разряда
                                    </div>
                                    <div class="vacancy-list-item">
                                        1
                                    </div>
                                    <div class="vacancy-list-item">
                                        На должность электромонтера принимаются лица, имеющие средне-специальное образование, прошедшие соответствующее обучение и сдавшие экзамены по должности, не моложе 18 лет.
                                    </div>
                                </div>
                                <div class="graphic-list-row">
                                    <div class="vacancy-list-item">
                                        <div class="graphic-date">
                                            Котельный цех ТЭЦ-2, Котло-турбинный цех ТЭЦ-1
                                        </div>
                                    </div>

                                    <div class="vacancy-list-item">
                                        Инженер (по АСБРЭ) 10 разряда
                                    </div>
                                    <div class="vacancy-list-item">
                                        1
                                    </div>
                                    <div class="vacancy-list-item">
                                        На должность инженера (по обслуживанию систем АСБРЭ) принимается лицо, имеющее высшее техническое образование без предъявления трудового стажа или средне-специальное образование при наличии стажа на энергопредприятиях не менее трех лет. Перед приемом на работу инженер (по обслуживанию систем АСБРЭ) должен пройти медицинское освидетельствование.
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif

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
            </div>
        </section>
    </main>
@endsection