<?php

namespace Application\Bundle\AppBundle\DependencyInjection;

use Havvg\Bundle\DRYBundle\DependencyInjection\Loader\ServicesLoader;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Extension\Extension;
use Symfony\Component\DependencyInjection\Extension\ExtensionInterface;

class AppExtension extends Extension
{
    /**
     * {@inheritdoc}
     */
    public function load(array $configs, ContainerBuilder $container)
    {
        $servicesLoader = new ServicesLoader(__DIR__.'/../Resources/config/services', $container);
        $servicesLoader->load();

        $configuration = new Configuration();
        $config = $this->processConfiguration($configuration, $configs);

        if (empty($config)) {
            return;
        }

//        $this->loadApp($config, $container);


    }

//    private function loadApp(array $configs, ContainerBuilder $container)
//    {
//
//    }
}