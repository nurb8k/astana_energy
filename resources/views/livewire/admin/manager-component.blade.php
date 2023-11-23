<div>
    <div class="card">
        <div class="table-responsive text-nowrap">
            @if($errors->any())
                @foreach($errors->all() as $error)
                    <div class="alert alert-danger">
                        {{ $error }}
                    </div>
                @endforeach
            @endif
            @if(session('message'))
                <div class="alert alert-primary">
                    {{ session('message') }}
                </div>
            @endif
            <!-- Add a form for creating new tags -->
            <div class="container">
                <h3 class="mt-2">Добавление</h3>
                <form class="row g-3 fv-plugins-bootstrap5 fv-plugins-framework" wire:submit.prevent="create" enctype="multipart/form-data">
                    <div class="col-md-6 fv-plugins-icon-container">
                        <label class="form-label" >ФИО</label>
                        <input type="text" class="form-control" required wire:model="name" id="output">
                        <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div>
                    </div>
                    <div class="col-md-6 fv-plugins-icon-container">
                        <label class="form-label" >Должность на казахском</label>
                        <input type="text" class="input form-control" wire:model="pos_kz" id="date">
                        <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div>
                    </div>
                    <div class="col-md-6 fv-plugins-icon-container">
                        <label class="form-label" >Должность на русском</label>
                        <input type="text" class="form-control" required wire:model="pos_ru" id="output">
                        <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div>
                    </div>
                    <div class="col-md-6 fv-plugins-icon-container">
                        <label class="form-label" >Фотография</label>
                        <input type="file" class="form-control" required wire:model="img">
                        <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div>
                    </div>


                    <button type="submit" class="btn btn-success btn-sm col-3 ml-2">Создать</button>
                </form>
            </div>
            <hr>
            <br>
            <div class="container">
                <h3>Список тегов</h3>
            </div>
            <table class="table">
                <thead>
                <tr>
                    <th>id</th>
                    <th>Фотография</th>
                    <th>ФИО</th>
                    <th>Должность на казахском</th>
                    <th>Должность на русском</th>
                    <th>Действия</th>
                </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                @foreach($managers as $m)
                    @if($id == $m->id)
                        <tr>
                            <td>
                                <input type="text" disabled required name="pos_kz" class="form-control w-20" wire:model="id">
                            </td>
                            <td>
                                <img wire:model="img" alt="">
                            </td>
                            <td>
                                <input type="text" required name="name" class="form-control w-100" wire:model="name">
                            </td>
                            <td style="width: 200px">
                                <input type="text" required name="pos_kz" class="form-control w-100" wire:model="pos_kz">
                            </td>
                            <td>
                                <input type="text" required name="pos_ru" class="form-control w-100" wire:model="pos_ru">
                            </td>
                            <td>
                                <div class="dropdown">
                                    <button type="button" wire:click="updateInfo" class="btn btn-sm btn-success">
                                        Сохранить
                                    </button>
                                    <button type="button" wire:click="cancelEdit" class="btn btn-sm btn-warning">
                                        Отменить
                                    </button>
                                </div>
                            </td>
                        </tr>
                    @else
                        <tr>
                            <td>
                                {{ $m->id }}
                            </td>
                            <td>
                                <img width="120" src="{{asset($m->image)}}" alt="">
                            </td>
                            <td>
                                {{ $m->name }}
                            </td>
                            <td>
                                {{ $m->position_kz }}
                            </td>
                            <td>
                                {{ $m->position_ru }}
                            </td>
                            <td>
                                <a class="btn btn-sm btn-warning text-white"   wire:click="edit({{$m->id}})"><i class="bx bx-edit-alt me-1"></i> Изменить</a>
                                <a class="btn btn-sm btn-danger text-white"   type="button"
                                   wire:confirm="Вы точно хотите удалить?" wire:click="delete({{$m->id}})"><i class="bx bx-trash me-1"></i> Удалить</a>
                            </td>
                        </tr>
                    @endif
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
