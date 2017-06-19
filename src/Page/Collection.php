<?php
namespace Jdexx\Administrate\Page;

class Collection extends Base
{
    public function attributeNames()
    {
        return $this->dashboard->collectionAttributes();
    }

    /**
     * Returns an array of fields for the resource provided
     *
     * @param mixed $resource
     *
     * @return array
     */
    public function attributesFor($resource)
    {
        $attributes = [];
        foreach ($this->attributeNames() as $attribute_name)
        {
            $attributes[] = $this->attributeField($this->dashboard, $resource, $attribute_name, 'index');
        }
        return $attributes;
    }

    /**
     * Returns an array of attribute types for the resource
     *
     * @return array
     */
    public function attributeTypes()
    {
        return $this->dashboard->attributeTypesFor($this->attributeNames());
    }
}
