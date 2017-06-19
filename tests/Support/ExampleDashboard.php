<?php
namespace Tests\Support;
use Jdexx\Administrate\BaseDashboard;

class ExampleDashboard
{
    const ATTRIBUTE_TYPES = [
        'name' => StringField::class,
    ];

    const COLLECTION_ATTRIBUTES = [
        'name',
    ];

    const FORM_ATTRIBUTES = [
        'name',
    ];

    public function editRouteName()
    {
    }
}
