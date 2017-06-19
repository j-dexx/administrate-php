<?php
namespace Tests\Unit;
use PHPUnit\Framework\TestCase;
use Jdexx\Administrate\BaseDashboard;
use Jdexx\Administrate\Fields\StringField;

class MyDashboard extends BaseDashboard
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

class DashboardTest extends TestCase
{
    public function testAttributeTypes()
    {
        $dashboard = new MyDashboard();

        $this->assertEquals(MyDashboard::ATTRIBUTE_TYPES, $dashboard->attributeTypes());
    }

    public function testCollectionAttributes()
    {
        $dashboard = new MyDashboard();

        $this->assertEquals(MyDashboard::COLLECTION_ATTRIBUTES, $dashboard->collectionAttributes());
    }

    public function testFormAttributes()
    {
        $dashboard = new MyDashboard();

        $this->assertEquals(MyDashboard::FORM_ATTRIBUTES, $dashboard->formAttributes());
    }

    public function testAttributeTypeForDefinedAttributeType()
    {
        $dashboard = new MyDashboard();

        $this->assertEquals(StringField::class, $dashboard->attributeTypeFor('name'));
    }

    public function testAttributeTypeForUndefinedAttributeType()
    {
        $this->expectException(\Exception::class);

        $dashboard = new MyDashboard();
        $dashboard->attributeTypeFor('Undefined');
    }
}
