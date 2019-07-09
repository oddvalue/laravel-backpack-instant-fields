@php($attribute = $field['on_the_fly']['attribute'] ?? json_encode($field['on_the_fly']['attributes']) ?? 'name')
<span class="input-group-btn">
    <button
            href="#"
            type="button"
            class="btn btn-primary"
            style="border-radius: 0px"
            data-toggle="modal"
            data-target="#{{ $field['on_the_fly']['entity'] ?? 'ajax_entity' }}_create_modal"
            data-load-url="{{ $field['on_the_fly']['create_modal'] ?? backpack_url($field['on_the_fly']['entity']).'/ajax/create?field_name='.$field['name'].'&attribute='.$attribute.'&create_modal_view='.($field['on_the_fly']['create_modal_view'] ?? 'webfactor::modal.create').'&attribute='.$attribute }}">
    <i class="fa fa-plus"></i>
    </button>
</span>
<div class="modal fade"
     id="{{ $field['on_the_fly']['entity'] ?? 'ajax_entity' }}_create_modal"
     role="dialog"
     aria-labelledby="{{ $field['on_the_fly']['entity'] ?? 'ajax_entity' }}_create_modal"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content"></div>
    </div>
</div>

