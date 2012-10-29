<?php

namespace Orbt\Bundle\ResourceMirrorBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

/**
 * This is the class that validates and merges configuration from your app/config files
 *
 * To learn more see {@link http://symfony.com/doc/current/cookbook/bundles/extension.html#cookbook-bundles-extension-config-class}
 */
class Configuration implements ConfigurationInterface
{
    /**
     * {@inheritDoc}
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();
        $rootNode = $treeBuilder->root('orbt_resource_mirror');

        $rootNode->children()
            // TODO Create service for deriving base URL based on request.
            ->scalarNode('base_url')->isRequired()->end()
            ->scalarNode('directory')->isRequired()->end();

        return $treeBuilder;
    }
}