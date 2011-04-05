<?php

namespace Versionable\Http\Cookie;

/**
 * Test class for Cookie.
 * Generated by PHPUnit on 2011-01-07 at 11:50:21.
 */
class CookieTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var Cookie
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp()
    {
        $this->object = new Cookie('test', 'foobar');
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown()
    {
    }
    
    public function testParse()
    {
      $this->object->parse('foo=bar; expires=Fri, 01-Apr-2011 00:00:00 GMT; path=/user/; domain=testing.com; secure; httponly;');
      
      $cookie = new Cookie('foo', 'bar', new \DateTime('01-Apr-2011 00:00:00 GMT'), '/user/', 'testing.com', true, true);
      
      $this->assertEquals($cookie, $this->object);
    }

    /**
     * @todo Implement test__toString().
     */
    public function test__toString()
    {
      $this->assertEquals($this->object->toString(), $this->object->__toString());
    }

    public function testToString()
    {
      $this->assertEquals($this->object->toString(), $this->object->__toString());
    }

    /**
     * @todo Implement testGetName().
     */
    public function testGetName()
    {
      $this->assertEquals($this->readAttribute($this->object, 'name'), $this->object->getName());
    }

    /**
     * @todo Implement testSetName().
     */
    public function testSetName()
    {
      $name = 'age';
      $this->object->setName($name);
      $this->assertEquals($this->readAttribute($this->object, 'name'), $name);
    }

    /**
     * @todo Implement testGetValue().
     */
    public function testGetValue()
    {
      $this->assertEquals($this->readAttribute($this->object, 'value'), $this->object->getValue());
    }

    /**
     * @todo Implement testSetValue().
     */
    public function testSetValue()
    {
      $value = '30';
      $this->object->setValue($value);
      $this->assertEquals($this->readAttribute($this->object, 'value'), $value);
    }

    /**
     * @todo Implement testGetExpires().
     */
    public function testGetExpires()
    {
      $this->assertEquals($this->readAttribute($this->object, 'expires'), $this->object->getExpires());
    }

    /**
     * @todo Implement testSetExpires().
     */
    public function testSetExpires()
    {
      $expires = new \DateTime();
      $this->object->setExpires($expires);
      $this->assertEquals($this->readAttribute($this->object, 'expires'), $expires);
    }

    public function testHasExpiredFalse()
    {
      $expires = new \DateTime();
      $expires->add(new \DateInterval('PT1H'));
      $this->object->setExpires($expires);
      $this->assertEquals($this->object->hasExpired(), false);
    }

    public function testHasExpiredTrue()
    {
      $expires = new \DateTime();
      $expires->sub(new \DateInterval('PT1H'));
      $this->object->setExpires($expires);
      $this->assertEquals($this->object->hasExpired(), true);
    }

    public function testHasExpiredNotSet()
    {
      $this->assertEquals($this->object->hasExpired(), false);
    }

    /**
     * @todo Implement testGetPath().
     */
    public function testGetPath()
    {
      $this->assertEquals($this->readAttribute($this->object, 'path'), $this->object->getPath());
    }

    /**
     * @todo Implement testSetPath().
     */
    public function testSetPath()
    {
      $path = '/foo/bar';
      $this->object->setPath($path);
      $this->assertEquals($this->readAttribute($this->object, 'path'), $path);
    }

    /**
     * @todo Implement testGetDomain().
     */
    public function testGetDomain()
    {
      $this->assertEquals($this->readAttribute($this->object, 'domain'), $this->object->getDomain());
    }

    /**
     * @todo Implement testSetDomain().
     */
    public function testSetDomain()
    {
      $domain = 'domain.com';
      $this->object->setDomain($domain);
      $this->assertEquals($this->readAttribute($this->object, 'domain'), $domain);
    }

    /**
     * @todo Implement testIsSecure().
     */
    public function testIsSecure()
    {
      $this->assertEquals($this->readAttribute($this->object, 'secure'), $this->object->isSecure());
    }

    /**
     * @todo Implement testSetSecure().
     */
    public function testSetSecure()
    {
      $secure = false;
      $this->object->setValue($secure);
      $this->assertEquals($this->readAttribute($this->object, 'secure'), $secure);
    }

    /**
     * @todo Implement testGetHttpOnly().
     */
    public function testIstHttpOnly()
    {
      $this->assertEquals($this->readAttribute($this->object, 'httponly'), $this->object->isHttpOnly());
    }

    /**
     * @todo Implement testSetHttpOnly().
     */
    public function testSetHttpOnly()
    {
      $httponly = false;
      $this->object->setHttpOnly($httponly);
      $this->assertEquals($this->readAttribute($this->object, 'httponly'), $httponly);
    }
}
