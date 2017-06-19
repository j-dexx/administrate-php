<?php
namespace Jdexx\Administrate\Fields;

class StringField extends Base
{
    public function truncated()
    {
        return str_limit($this->data, 50);
    }
}
