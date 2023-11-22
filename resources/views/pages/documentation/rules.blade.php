@extends('layouts.app')
@section('title', 'Комплаенс')

@section('content')
    @if(app()->getLocale() == 'kz')
        <div class="govs-inner">
            <h2>Заң шығару және нормативтiк актiлер</h2>
            <div class="gov__description">
                <p><a class="text-primary" href="https://adilet.zan.kz/kaz/docs/Z1500000401#z1" target="_blank">Ақпаратқа қол жеткізу туралы</a></p>

                <p><a class="text-primary" href="https://adilet.zan.kz/kaz/docs/Z1500000402#z33" target="_blank">Қайырымдылық туралы</a></p>

                <p><a class="text-primary" href="https://adilet.zan.kz/kaz/docs/Z1300000088" target="_blank">Мемлекеттік көрсетілетін қызметтер туралы</a></p>

                <p><a class="text-primary" href="https://adilet.zan.kz/kaz/docs/Z040000586_" target="_blank">
                        Қазақстан Республикасының кейбір заңнамалық актілеріне зияткерлік меншік мәселелері бойынша өзгерістер мен толықтырулар енгізу туралы
                    </a></p>

                <p><a class="text-primary" href="https://adilet.zan.kz/kaz/docs/V1800017561" target="_blank">Мемлекет кепілдік берген заң көмегі туралы

                    </a></p>

                <p><a class="text-primary" href="https://adilet.zan.kz/kaz/docs/Z000000107_" target="_blank">Әкімшілік рәсімдер туралы</a></p>

                <p><a class="text-primary" href="https://adilet.zan.kz/kaz/docs/Z1500000418" target="_blank">Ақпараттандыру туралы</a></p>

                <p><a class="text-primary" href="https://adilet.zan.kz/kaz/docs/Z990000451_" target="_blank">
                        Бұқаралық ақпарат құралдары туралы</a></p>

                <p><a class="text-primary" href="https://adilet.zan.kz/kaz/docs/Z070000221_" target="_blank">Жеке және заңды тұлғалардың өтiнiштерiн қарау тәртiбi туралы</a></p>

                <p><a class="text-primary" href="https://adilet.zan.kz/kaz/docs/Z1500000434" target="_blank">Мемлекеттiк сатып алу туралы</a></p>

                <p><a class="text-primary" href="https://adilet.zan.kz/kaz/docs/K1500000414" target="_blank">Қазақстан Республикасының Еңбек Кодексі</a></p>

                <p><a  class="text-primary" href="https://adilet.zan.kz/kaz/docs/Z1500000410" target="_blank">Сыбайлас жемқорлыққа қарсы күрес туралы</a></p>

                <p><a class="text-primary" href="https://adilet.zan.kz/kaz/docs/K080000095_" target="_top">Қазақстан Республикасының Бюджет кодексі</a></p>

                <p><a class="text-primary" href="https://adilet.zan.kz/kaz/docs/K950001000_" target="_blank">ҚР Конституциясы</a></p>

                <p><a class="text-primary" href="https://adilet.zan.kz/kaz/docs/Z970000151_" target="_blank">Қазақстан Республикасындағы тiл туралы</a></p>

                <p><a class="text-primary" href="https://adilet.zan.kz/kaz/docs/Z1500000416" target="_blank">ҚР "Мемлекеттік қызмет туралы" заңы

                    </a></p>
            </div>
        </div>
    @else
        <div class="govs-inner">
            <h2>Законодательные и нормативные акты</h2>
            <div class="gov__description">
                <p><a class="text-primary" href="https://adilet.zan.kz/rus/docs/Z1500000401#z1" target="_blank">О доступе к информации</a></p>

                <p><a class="text-primary" href="https://adilet.zan.kz/rus/docs/Z1500000402#z33" target="_blank">О благотворительности</a></p>

                <p><a class="text-primary" href="https://adilet.zan.kz/rus/docs/Z1300000088" target="_blank">О государственных услугах</a></p>

                <p><a class="text-primary" href="https://adilet.zan.kz/rus/docs/Z040000586_" target="_blank">О внесении изменений и дополнений в некоторые законодательные акты Республики Казахстан по вопросам интеллектуальной собственности</a></p>

                <p><a class="text-primary" href="https://adilet.zan.kz/rus/docs/V1800017561" target="_blank">О гарантированной государством юридической помощи</a></p>

                <p><a class="text-primary" href="https://adilet.zan.kz/rus/docs/Z000000107_" target="_blank">Об административных процедурах</a></p>

                <p><a class="text-primary" href="https://adilet.zan.kz/rus/docs/Z1500000418" target="_blank">Об информатизации</a></p>

                <p><a class="text-primary" href="https://adilet.zan.kz/rus/docs/Z990000451_" target="_blank">О средствах массовой информации</a></p>

                <p><a class="text-primary" href="https://adilet.zan.kz/rus/docs/Z070000221_" target="_blank">О порядке рассмотрения обращений физических и юридических лиц</a></p>

                <p><a class="text-primary" href="https://adilet.zan.kz/rus/docs/Z1500000434" target="_blank">О государственных закупках</a></p>

                <p><a class="text-primary" href="https://adilet.zan.kz/rus/docs/K1500000414" target="_blank">Трудовой кодекс Республики Казахстан</a></p>

                <p><a  class="text-primary" href="https://adilet.zan.kz/rus/docs/Z1500000410" target="_blank">О борьбе с коррупцией</a></p>

                <p><a class="text-primary" href="https://adilet.zan.kz/rus/docs/K080000095_" target="_top">Бюджетный кодекс Республики Казахстан</a></p>

                <p><a class="text-primary" href="https://adilet.zan.kz/rus/docs/K950001000_" target="_blank">Конституция РК</a></p>

                <p><a class="text-primary" href="https://adilet.zan.kz/rus/docs/Z970000151_" target="_blank">О языках в Республике Казахстан</a></p>

                <p><a class="text-primary" href="https://adilet.zan.kz/rus/docs/Z1500000416" target="_blank">О государственной службе</a></p>
            </div>
        </div>
    @endif


@endsection