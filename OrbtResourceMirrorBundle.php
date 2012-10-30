<?php

namespace Orbt\Bundle\ResourceMirrorBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;
use Symfony\Component\DependencyInjection\Compiler\PassConfig;
use Symfony\Component\DependencyInjection\ContainerBuilder;

class OrbtResourceMirrorBundle extends Bundle
{
    public function build(ContainerBuilder $container)
    {
        parent::build($container);

        $container->addCompilerPass(new DependencyInjection\Compiler\RegisterResourceSubscribersPass(), PassConfig::TYPE_BEFORE_REMOVING);
    }
}
