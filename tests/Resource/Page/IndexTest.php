<?php
namespace Japaneseholiday\Api\Resource\Page;

use Ray\Di\Injector;
use Japaneseholiday\Api\Module\TestModule;

class IndexTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var \BEAR\Resource\ResourceInterface
     */
    private $resource;

    protected function setUp()
    {
        parent::setUp();
        $this->resource = clone $GLOBALS['RESOURCE'];
    }

    /**
     * page resource
     *
     * @test
     */
    public function resource()
    {
        // resource request
        $page = $this->resource->get->uri('page://self/index')->eager->request();
        $this->assertSame(200, $page->code);

        return $page;
    }

    /**
     * Renderable ?
     *
     * @depends resource
     */
    public function testRenderable($page)
    {
        $html = (string)$page;
        $this->assertInternalType('string', $html);
    }

    /**
     * Html Rendered ?
     *
     * @depends resource
     */
    public function testRenderedHtml($page)
    {
        $html = (string)$page;
        $this->assertContains('</html>', $html);
    }

    /**
     * @covers Japaneseholiday\Api\Resource\Page\Index::onGet
     */
    public function testOnGet()
    {
        $page = $this->resource->get->uri('page://self/index')->eager->request();
        $this->assertContains('Japanese Holiday api', (string)$page);
    }
}
