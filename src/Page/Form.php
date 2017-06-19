<?php
namespace Jdexx\Administrate\Page;
use Jdexx\Administrate\Page\Base;

class Form extends Base {
    public $resource;

    public function __construct($dashboard, $resource)
    {
        parent::__construct($dashboard);
        $this->resource = $resource;
    }

    public function attributes()
    {
        $attributes = [];
        foreach ($this->attributeNames() as $attr) {
            $attributes[] = $this->attributeField($this->dashboard, $this->resource, $attr, 'form');
        }
    }

    public function attributeNames()
    {
        $this->dashboard->formAttributes();
    }
}
