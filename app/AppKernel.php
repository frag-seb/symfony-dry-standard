<?php

use Havvg\Bundle\DRYBundle\Kernel\ContainerConfigurationRegistry;
use Symfony\Component\HttpKernel\Kernel;
use Symfony\Component\Config\Loader\LoaderInterface;

class AppKernel extends Kernel
{
    public function registerBundles()
    {
        $bundles = [
            new Symfony\Bundle\FrameworkBundle\FrameworkBundle(),
            new Symfony\Bundle\SecurityBundle\SecurityBundle(),
            new Symfony\Bundle\TwigBundle\TwigBundle(),
            new Symfony\Bundle\MonologBundle\MonologBundle(),
            new Symfony\Bundle\SwiftmailerBundle\SwiftmailerBundle(),

            new Doctrine\Bundle\DoctrineBundle\DoctrineBundle(),
            new Doctrine\Bundle\DoctrineCacheBundle\DoctrineCacheBundle(),
            new Doctrine\Bundle\MigrationsBundle\DoctrineMigrationsBundle(),

            new Sensio\Bundle\FrameworkExtraBundle\SensioFrameworkExtraBundle(),
            new Havvg\Bundle\DRYBundle\HavvgDRYBundle(),

            new JMS\SerializerBundle\JMSSerializerBundle(),

            new Application\Bundle\AppBundle\AppBundle(),
        ];

        if (in_array($this->getEnvironment(), ['dev', 'test'], true)) {
            $bundles[] = new Symfony\Bundle\DebugBundle\DebugBundle();
            $bundles[] = new Symfony\Bundle\WebProfilerBundle\WebProfilerBundle();
            $bundles[] = new Sensio\Bundle\DistributionBundle\SensioDistributionBundle();
        }

        return $bundles;
    }

    /**
     * {@inheritdoc}
     */
    public function registerContainerConfiguration(LoaderInterface $loader)
    {
        $registry = new ContainerConfigurationRegistry($this);
        $registry->register($loader);
    }

    /**
     * {@inheritdoc}
     */
    public function getRootDir()
    {
        return __DIR__;
    }

    /**
     * {@inheritdoc}
     */
    public function getCacheDir()
    {
        return implode(DIRECTORY_SEPARATOR, [
            $this->getRootDir(),
            '..', 'var', 'cache',
            $this->getEnvironment(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function getLogDir()
    {
        return implode(DIRECTORY_SEPARATOR, [
            $this->getRootDir(),
            '..', 'var', 'logs',
            $this->getEnvironment(),
        ]);
    }
}
