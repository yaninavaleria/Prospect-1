<?php

namespace Versionable\Tests\Prospect\Parameter;

use Versionable\Prospect\Parameter\Collection;
use Versionable\Prospect\Parameter\Parameter;

/**
 * Test class for Collection.
 * Generated by PHPUnit on 2011-04-08 at 08:43:11.
 */
class CollectionTest extends \PHPUnit_Framework_TestCase
{

  /**
   * @var Collection
   */
  protected $object;

  /**
   * Sets up the fixture, for example, opens a network connection.
   * This method is called before a test is executed.
   */
  protected function setUp()
  {
    $this->object = new Collection;
  }

  /**
   * Tears down the fixture, for example, closes a network connection.
   * This method is called after a test is executed.
   */
  protected function tearDown()
  {
    
  }

  /**
   * @todo Implement testAdd().
   */
  public function testAdd()
  {
    $parameter = new Parameter('foo', 'bar');
    $this->object->add($parameter);
    
    $elements = $this->readAttribute($this->object, 'elements');
    $this->assertEquals($parameter, $elements['foo']);
  }

  /**
   * @todo Implement test__toString().
   */
  public function test__toString()
  {
    // Remove the following lines when you implement this test.
    $this->markTestIncomplete(
    'This test has not been implemented yet.'
    );
  }

  /**
   * @todo Implement testToString().
   */
  public function testToString()
  {
    // Remove the following lines when you implement this test.
    $this->markTestIncomplete(
    'This test has not been implemented yet.'
    );
  }


}
