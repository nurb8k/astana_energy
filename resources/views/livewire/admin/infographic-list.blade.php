
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
            <table class="table">
                <thead>
                <tr>
                    <th>Дата</th>
                    <th>
                        Отпуск с шин:
                    </th>
                    <th>Законтрактованная:</th>
                    <th>На централизованные торги:</th>
                    <th>Свободная:</th>
                    <th>Действия</th>
                </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                @foreach($infos as $i)
                    @if($infoID == $i->id)
                        <tr>
                            <td style="width: 200px">  <input type="text" required name="date" class="form-control w-100" wire:model="infoDate"></td>
                            <td>  <input type="number" required name="output"  class="form-control" wire:model="infoOutput"></td>
                            <td>  <input type="number" required name="contacted" class="form-control" wire:model="infoContacted"></td>
                            <td>  <input type="number" required name="centred"  class="form-control" wire:model="infoCentred"></td>
                            <td>  <input type="number" required name="free" class="form-control" wire:model="infoFree" ></td>
                            <td>  <div class="dropdown">
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
                                {{ $i->date->format('d.m.Y') }}
                            </td>
                            <td>
                                {{ $i->output}}
                            </td>
                            <td>
                                {{$i->contacted}}
                            </td>
                            <td>
                                {{$i->centred}}

                            </td>
                            <td>
                                {{$i->free}}
                            </td>
                            <td>

                                        <a class="btn btn-sm btn-warning text-white"   wire:click="edit({{$i->id}})"><i class="bx bx-edit-alt me-1"></i> Изменить</a>
                                        <a class="btn btn-sm btn-danger text-white"   type="button"
                                           wire:confirm="Вы точно хотите удалить?" wire:click="delete({{$i->id}})"><i class="bx bx-trash me-1"></i> Удалить</a>


                            </td>
                        </tr>
                    @endif
                @endforeach

                </tbody>
            </table>
            <div class="p-3 border-top align-items-center">
                {{ $infos->links() }}
            </div>
        </div>
    </div>
</div>


