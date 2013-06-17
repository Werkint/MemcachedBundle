<?php
namespace Werkint\Bundle\MemcachedBundle;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\Bundle\Bundle;
use Werkint\Bundle\MemcachedBundle\Service\CacheCompilerPass;

class WerkintMemcachedBundle extends Bundle
{
    public function build(ContainerBuilder $container)
    {
        parent::build($container);
        // Кеш
        $container->addCompilerPass(new CacheCompilerPass);
    }
}
