<?php
namespace Tests\Unit\Page;
use PHPUnit\Framework\TestCase;
use Jdexx\Administrate\BaseDashboard;
use Jdexx\Administrate\Fields\StringField;
use Jdexx\Administrate\Page\Collection;

class MyDashboard extends BaseDashboard
{
    const ATTRIBUTE_TYPES = [
        'name' => StringField::class,
    ];

    const COLLECTION_ATTRIBUTES = [
        'name',
    ];

    public function editRouteName()
    {
    }
}

class CollectionTest extends TestCase
{
    public function testAttributeNames()
    {
        $dashboard = new MyDashboard();
        $collection = new Collection($dashboard);

        $this->assertEquals(MyDashboard::COLLECTION_ATTRIBUTES, $collection->attributeNames());
    }


}
