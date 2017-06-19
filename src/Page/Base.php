<?php
namespace Jdexx\Administrate\Page;

class Base {
    public $dashboard;

    public function __construct($dashboard)
    {
        $this->dashboard = $dashboard;
    }

    /**
     * Returns a field for the attribute
     *
     * @param mixed $dashboard
     * @param mixed $resource
     * @param string $attribute_name
     * @param string $page
     *
     * @return mixed
     */
    protected function attributeField($dashboard, $resource, $attribute_name, $page)
    {
        $value = $this->getAttributeValue($resource, $attribute_name);
        $field = $dashboard->attributeTypeFor($attribute_name);
        return new $field($attribute_name, $value, $page);
    }

    /**
     * Returns this attribute value for the supplied resource
     *
     * @param mixed $resource
     * @param mixed $attribute_name
     *
     * @return mixed
     */
    protected function getAttributeValue($resource, $attribute_name)
    {
        return $resource->$attribute_name;
    }
}

