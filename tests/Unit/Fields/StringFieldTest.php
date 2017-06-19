<?php
namespace Tests\Unit\Page;
use PHPUnit\Framework\TestCase;
use Jdexx\Administrate\Fields\StringField;

class StringFieldTest extends TestCase
{
    public function testFieldType()
    {
        $field_type = StringField::fieldType();
        $this->assertEquals('string', $field_type);
    }

    public function testViewPath()
    {
        $field = new StringField('name', 'some data', 'index');

        $this->assertEquals('administrate::fields.string.index', $field->viewPath());
    }

    public function testTruncatedWithLimit()
    {
        $field = new StringField('name', 'some data some data some data some data some data some data some data some data some data', 'index');
        $length = strlen($field->truncated());

        // 52 because laravel's str_limit replaces the last character of the length with ...
        $this->assertEquals(52, $length);
    }
}
