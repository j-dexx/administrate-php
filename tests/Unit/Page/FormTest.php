<?php
namespace Tests\Unit\Page;
use PHPUnit\Framework\TestCase;
use Jdexx\Administrate\Fields\StringField;
use Jdexx\Administrate\Page\Form;
use Tests\Support\ExampleDashboard;

class Resource
{
}

class FormTest extends TestCase
{
    public function testAttributes()
    {
        $dashboard = new ExampleDashboard();
        $resource = new Resource();
        $form = new Form($dashboard, $resource);

        $this->assertEquals(ExampleDashboard::FORM_ATTRIBUTES, $form->attributeNames());
    }
}
