<?php

namespace Eufony\Inflector\Tests;

use Doctrine\Inflector\Inflector;
use Eufony\Inflector\DoctrineInflector;
use Eufony\Inflector\InflectorInterface;

/**
 * Unit tests for `\Eufony\Inflector\DoctrineInflector`.
 */
class DoctrineInflectorTest extends AbstractInflectorTest
{
    /**
     * @inheritDoc
     */
    public function getInflector(): InflectorInterface
    {
        return new DoctrineInflector();
    }

    public function testInflector()
    {
        $this->assertEquals(Inflector::class, get_class($this->inflector->inflector()));
    }
}
