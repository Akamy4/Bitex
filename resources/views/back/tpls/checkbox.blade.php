<div class="form-group">
    <label>{{$title}}</label>
    <br>
    <label >
        <input type="checkbox" class="minimal bool"
                data-name="{{ $field_name }}"
                value="{{ $block->$field_name }}"
                data-type="bool"
                data-block="{{ $block->name }}"
                data-id="{{ $block->getType()->fieldExist('id') ? $block->id : '0' }}"
                @if($block->$field_name) checked @endif>
                {{$string}}
    </label>
</div>