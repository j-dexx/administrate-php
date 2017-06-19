<?php
namespace Jdexx\Administrate\Fields;

class Base
{
    public $attribute;
    public $data;
    public $page;

    /**
     * @param string $attribute - Attribute name
     * @param mixed $data - The data from the database
     * @param string $page - The page it's being rendered on
     */
    public function __construct($attribute, $data, $page)
    {
        $this->attribute = $attribute;
        $this->data = $data;
        $this->page = $page;
    }

    public function viewPath()
    {
        $field_type = static::fieldType();

        return "administrate::fields.{$field_type}.{$this->page}";
    }

    public static function fieldType()
    {
        $class_basename = class_basename(get_called_class());
        $field_type = str_replace('Field', '', $class_basename);
        return snake_case($field_type);
    }
}
