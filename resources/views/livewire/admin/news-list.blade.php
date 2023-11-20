<div>
    <link rel="stylesheet" href="{{asset('user/assets/css/infographic-page.css')}}">
    <div class="card">
        <div class="table-responsive text-nowrap">
            @if (session()->has('message'))
                <div class="alert alert-success">
                    {{ session('message') }}
                </div>
            @endif
            <table class="table">
                <thead>
                <tr>
                    <th>Заголовка</th>
                    <th>
                        <svg xmlns="http://www.w3.org/2000/svg" width="21" height="22" viewBox="0 0 21 22" fill="none">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M1.5902 0.557979C0.844497 0.760203 0.26207 1.35171 0.0657703 2.10608C0.0100244 2.32034 7.28336e-05 2.92935 7.28336e-05 6.13187C7.28336e-05 10.3707 -0.0132693 10.1855 0.321207 10.5841C0.630936 10.9532 11.6558 21.2845 11.8407 21.3789C12.2642 21.5952 12.712 21.5192 13.0646 21.1712C13.3707 20.8692 20.6987 12.8868 20.8172 12.7263C21.0275 12.4414 21.059 12.044 20.8979 11.7063C20.8129 11.5281 19.7606 10.4539 15.4052 6.09921C10.9533 1.64799 9.9794 0.69497 9.79745 0.611665L9.57729 0.510817L5.70237 0.502222C2.42388 0.49495 1.79095 0.503545 1.5902 0.557979ZM1.81336 1.97337C1.73291 2.01304 1.61402 2.11516 1.54916 2.20032L1.43115 2.35516L1.41939 6.02622L1.40764 9.69732L6.85106 14.8173L12.2945 19.9373L12.5492 19.6564C12.6892 19.502 14.3007 17.7492 16.1301 15.7613L19.4563 12.1471L14.3407 7.02314L9.22515 1.89923L5.59237 1.90025C2.31899 1.90113 1.94506 1.90836 1.81336 1.97337ZM5.25213 4.08275C4.24434 4.35443 3.52273 5.28247 3.52273 6.3069C3.52273 7.76958 4.95702 8.89746 6.35393 8.53325C7.36449 8.26976 8.10398 7.33776 8.10151 6.3307C8.09786 4.83844 6.65916 3.70342 5.25213 4.08275ZM5.4117 5.54807C5.2217 5.64742 5.15363 5.71557 5.05438 5.90576C4.89779 6.20583 4.89779 6.40797 5.05438 6.70804C5.15363 6.89823 5.2217 6.96637 5.4117 7.06572C5.5475 7.13673 5.71633 7.18843 5.81245 7.18843C5.90857 7.18843 6.0774 7.13673 6.2132 7.06572C6.4032 6.96637 6.47127 6.89823 6.57053 6.70804C6.64146 6.57211 6.69311 6.40312 6.69311 6.3069C6.69311 6.21068 6.64146 6.04169 6.57053 5.90576C6.47127 5.71557 6.4032 5.64742 6.2132 5.54807C6.0774 5.47707 5.90857 5.42536 5.81245 5.42536C5.71633 5.42536 5.5475 5.47707 5.4117 5.54807Z" fill="#1D4189"/>
                        </svg>
                    </th>
                    <th>Описание</th>
                    <th>Главный изображение новости</th>

                    <th>Действия</th>
                </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                @foreach($news as $n)
                    <tr>
                        <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{Str::limit($n->title,30)}}</strong></td>
                        <td>
                            @foreach($n->tags as $tag)
                                <p style="display: flex;gap: 5px;margin-bottom: 5px;" class="tag">
                                    {{ $tag->name }}
                                </p>
                            @endforeach
                        </td>
                        <td>
                            {!! Str::limit($n->desc, 35, '...') !!}
                        </td>
                        <td>
                            <div style="display: flex;justify-content:center;">
                                @if(!empty($n->image))
                                    <img class="news-img" style="width: 120px" src="{{ asset('storage/' . $n->image) }}" alt="news img">
                                @else
                                    <p class="text-warning">Фото не загружена</p>
                                @endif
                            </div>
                        </td>

                        <td>
                            <div class="dropdown">
                                    <a class="btn btn-sm btn-primary text-white" wire:click="edit({{$n->id}})"><i class="bx bx-edit-alt me-1"></i> Изменить</a>
                                    <a class="btn btn-sm btn-danger text-white"   type="button"
                                       wire:confirm="Вы точно хотите удалить этот новости?" wire:click="delete({{$n->id}})"><i class="bx bx-trash me-1"></i> Удалить</a>
                            </div>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>

        </div>
    </div>
    <div class="my-2">
        {{$news->links()}}
    </div>
</div>
