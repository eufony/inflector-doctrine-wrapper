<?php

namespace Eufony\Inflector;

use Doctrine\Inflector\Inflector;
use Doctrine\Inflector\InflectorFactory;
use Doctrine\Inflector\Language;

/**
 * Provides an Inflector implementation using the Doctrine inflector.
 */
class DoctrineInflector implements InflectorInterface
{
    /**
     * The Doctrine Inflector object used internally to implement the inflector
     * interface.
     *
     * @var \Doctrine\Inflector\Inflector
     */
    protected Inflector $inflector;

    /**
     * Class constructor.
     * Initializes the Doctrine Inflector with the default setup and for the given
     * language.
     *
     * @param string $language
     */
    public function __construct(string $language = Language::ENGLISH)
    {
        $this->inflector = InflectorFactory::createForLanguage($language)->build();
    }

    /**
     * Returns the internal Doctrine inflector object.
     *
     * @return \Doctrine\Inflector\Inflector
     */
    public function inflector(): Inflector
    {
        return $this->inflector;
    }

    /**
     * @inheritDoc
     */
    public function toPascalCase(string $string): string
    {
        return $this->inflector->classify($string);
    }

    /**
     * @inheritDoc
     */
    public function toSnakeCase(string $string): string
    {
        return $this->inflector->tableize($string);
    }

    /**
     * @inheritDoc
     */
    public function toCamelCase(string $string): string
    {
        return $this->inflector->camelize($string);
    }

    /**
     * @inheritDoc
     */
    public function pluralize(string $string): string
    {
        return $this->inflector->pluralize($string);
    }

    /**
     * @inheritDoc
     */
    public function singularize(string $string): string
    {
        return $this->inflector->singularize($string);
    }
}
