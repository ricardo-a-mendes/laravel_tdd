<?php

namespace CodeCategory\Tests\Models;

use CodePress\CodeCategory\Models\Category;
use CodePress\CodeCategory\Tests\AbstractTestCase;

class CategoryTest extends AbstractTestCase
{
    public function setUp()
    {
        parent::setUp();
        $this->migrate();
    }

    public function test_if_category_is_persisted()
    {
        $category = new Category();
        $category->name = 'Category Test';
        //$category->save();

        //$all = Category::all();
        //var_dump($all);
//        $category = Category::created([
//           'name' => 'Category Test',
           //'active' => false
//        ]);

        //$this->assertEquals('Category Test', $category->name);
    }
}