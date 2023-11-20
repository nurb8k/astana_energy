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
                <form class="row g-3 fv-plugins-bootstrap5 fv-plugins-framework" wire:submit.prevent="create">
                    <div class="col-md-6 fv-plugins-icon-container">
                        <label class="form-label" >Название на казахском</label>
                        <input type="text" class="input form-control" wire:model="name_kz" id="date">
                        <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div>
                    </div>
                    <div class="col-md-6 fv-plugins-icon-container">
                        <label class="form-label" >Название на русском</label>
                        <input type="text" class="form-control" required wire:model="name_ru" id="output">
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
                    <th>Название на казахском</th>
                    <th>Название на русском</th>
                    <th>Действия</th>
                </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                @foreach($tags as $t)
                    @if($tagID == $t->id)
                        <tr>
                            <td style="width: 200px">
                                <input type="text" required name="name_kz" class="form-control w-100" wire:model="name_kz">
                            </td>
                            <td>
                                <input type="text" required name="name_kz" class="form-control w-100" wire:model="name_ru">
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
                                {{ $t->id }}
                            </td>
                            <td>
                                {{ $t->name_kz }}
                            </td>
                            <td>
                                {{ $t->name_ru}}
                            </td>
                            <td>
                                <a class="btn btn-sm btn-warning text-white"   wire:click="edit({{$t->id}})"><i class="bx bx-edit-alt me-1"></i> Изменить</a>
                                <a class="btn btn-sm btn-danger text-white"   type="button"
                                   wire:confirm="Вы точно хотите удалить?" wire:click="delete({{$t->id}})"><i class="bx bx-trash me-1"></i> Удалить</a>
                            </td>
                        </tr>
                    @endif
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
