<?php
namespace Tests\Unit\Page;
use PHPUnit\Framework\TestCase;
use Jdexx\Administrate\Fields\SelectField;

class SelectFieldTest extends TestCase
{
    public function testFieldType()
    {
        $field_type = SelectField::fieldType();
        $this->assertEquals('select', $field_type);
    }

    public function testViewPath()
    {
        $field = new SelectField('name', 'some data', 'index');

        $this->assertEquals('administrate::fields.select.index', $field->viewPath());
    }
}
