<?php

namespace FOQ\ElasticaBundle;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\Bundle\Bundle;
use FOQ\ElasticaBundle\DependencyInjection\Compiler\AddProviderPass;

class FOQElasticaBundle extends Bundle
{
    public function build(ContainerBuilder $container)
    {
        parent::build($container);

        $container->addCompilerPass(new AddProviderPass());
    }
}
