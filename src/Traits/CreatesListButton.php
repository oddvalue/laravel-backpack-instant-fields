<?php

namespace Webfactor\Laravel\Backpack\InstantFields;

trait CreatesListButton
{
    public function addInstantCreateButtonToList(
        string $foreignAjaxEntity,
        string $content,
        string $entity = 'entity_id',
        string $class = 'btn btn-xs btn-default'
    ) {
        $this->crud->instantCreateButton = [
            'name'    => $foreignAjaxEntity,
            'entity'  => $entity,
            'class'   => $class,
            'content' => $content,
        ];

        $this->crud->addButton('line', $foreignAjaxEntity, 'view', 'webfactor::buttons.create');
        $this->crud->addButton('bottom', $foreignAjaxEntity, 'view', 'webfactor::buttons.fake');
    }
}
