<?php

namespace Application\Bundle\AppBundle\DependencyInjection;


use Symfony\Component\Config\Definition\Builder\ArrayNodeDefinition;
use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

class Configuration implements ConfigurationInterface
{
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();
//        $rootNote = $treeBuilder->root('');
//
//        $this->addApp($rootNode);
    }

    private function addApp(ArrayNodeDefinition $node)
    {

    }
}