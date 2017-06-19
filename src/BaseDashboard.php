<?php

namespace Jdexx\Administrate;
use Jdexx\Administrate\RouteGenerator;

abstract class BaseDashboard
{
    public function attributeTypes()
    {
        return static::ATTRIBUTE_TYPES;
    }

    public function collectionAttributes()
    {
        return static::COLLECTION_ATTRIBUTES;
    }

    public function formAttributes()
    {
        return static::FORM_ATTRIBUTES;
    }

    /**
     * Return the attribute type from the attribute types array
     * or if the passed attribute name is not in the array throw an exception
     *
     * @param string $attribute_name
     *
     * @return mixed
     */
    public function attributeTypeFor($attribute_name)
    {
        $attribute_types = $this->attributeTypes();
        if (array_key_exists($attribute_name, $attribute_types)) {
            return $attribute_types[$attribute_name];
        }
        throw new \Exception('Field not set in dashboard attribute types');
    }

    /**
     * Given an array of attribute names return an array of the attribute types
     *
     * @param array $attribute_names
     *
     * @return array
     */
    public function attributeTypesFor($attribute_names)
    {
        $attribute_types = [];
        foreach ($attribute_names as $attribute_name)
        {
            $attribute_types[$attribute_name] = $this->attributeTypeFor($attribute_name);
        }
        return $attribute_types;
    }

    abstract public function editRouteName();

    public function editRoute($resource)
    {
        $route_generator = new RouteGenerator($this->editRouteName(), $resource);
        return $route_generator->call();
    }
}
