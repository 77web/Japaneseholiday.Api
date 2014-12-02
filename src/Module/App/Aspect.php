<?php

namespace Japaneseholiday\Api\Module\App;

use BEAR\Package;
use Ray\Di\AbstractModule;

class Aspect extends AbstractModule
{
    /**
     * {@inheritdoc}
     */
    protected function configure()
    {
        /*
        $this->bindInterceptor(
             $this->matcher->any(),
             $this->matcher->annotatedWith('Japaneseholiday\Api\Annotation\Bar'),
             [$this->requestInjection('Japaneseholiday\Api\Interceptor\FooInterceptor')]
        );
        */
    }
}
