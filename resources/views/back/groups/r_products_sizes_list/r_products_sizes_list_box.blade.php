<div class="box-wrapper col-lg-4 col-md-6 development__gallery"> 
    <div class="box">
        <div class="box-header with-border">
            <div class="col-xs-6 no-padding">
                <h3 class="box-title pull-left">Размер №{{ $block->sorter }}</h3>
            </div>
            <div class="col-xs-3 no-padding">
                <div class="form-group">
                    <input class="form-control int"
                           type="number"
                           step="1"
                           value="{{ $block->sorter }}"
                           data-name="sorter"
                           data-type="int"
                           data-block="{{ $block->name }}"
                           data-id="{{ $block->getType()->fieldExist('id') ? $block->id : '0' }}">
                </div>
            </div>
            <div class="col-xs-3 no-padding">
                <button type="submit" class="btn btn-primary pull-right remove-flat-item" data-id="{{ $block->id }}"
                        data-block="{{ $block->name }}">Удалить</button>
            </div>

            <br>
            <br>
            <div class="well">
                <div class="box-body">
                    @include('back.tpls.string', [
                    'title' => 'Текст',
                    'field_name' => 'size_name',
                    ])

                    @include('back.tpls.checkbox', [
                    'title' => 'Размера нет в наличии?',
                    'string' => 'Нет в наличии',
                    'field_name' => 'checkbox',
                    ])
                </div>
            </div>
        </div>
    </div>
</div>

