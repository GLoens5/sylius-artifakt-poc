<?php

namespace Symfony\Config;

require_once __DIR__.\DIRECTORY_SEPARATOR.'BazingaHateoas'.\DIRECTORY_SEPARATOR.'MetadataConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'BazingaHateoas'.\DIRECTORY_SEPARATOR.'SerializerConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'BazingaHateoas'.\DIRECTORY_SEPARATOR.'TwigExtensionConfig.php';

use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help creating config.
 */
class BazingaHateoasConfig implements \Symfony\Component\Config\Builder\ConfigBuilderInterface
{
    private $metadata;
    private $serializer;
    private $twigExtension;
    
    public function metadata(array $value = []): \Symfony\Config\BazingaHateoas\MetadataConfig
    {
        if (null === $this->metadata) {
            $this->metadata = new \Symfony\Config\BazingaHateoas\MetadataConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "metadata()" has already been initialized. You cannot pass values the second time you call metadata().');
        }
    
        return $this->metadata;
    }
    
    public function serializer(array $value = []): \Symfony\Config\BazingaHateoas\SerializerConfig
    {
        if (null === $this->serializer) {
            $this->serializer = new \Symfony\Config\BazingaHateoas\SerializerConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "serializer()" has already been initialized. You cannot pass values the second time you call serializer().');
        }
    
        return $this->serializer;
    }
    
    public function twigExtension(array $value = []): \Symfony\Config\BazingaHateoas\TwigExtensionConfig
    {
        if (null === $this->twigExtension) {
            $this->twigExtension = new \Symfony\Config\BazingaHateoas\TwigExtensionConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "twigExtension()" has already been initialized. You cannot pass values the second time you call twigExtension().');
        }
    
        return $this->twigExtension;
    }
    
    public function getExtensionAlias(): string
    {
        return 'bazinga_hateoas';
    }
    
    public function __construct(array $value = [])
    {
    
        if (isset($value['metadata'])) {
            $this->metadata = new \Symfony\Config\BazingaHateoas\MetadataConfig($value['metadata']);
            unset($value['metadata']);
        }
    
        if (isset($value['serializer'])) {
            $this->serializer = new \Symfony\Config\BazingaHateoas\SerializerConfig($value['serializer']);
            unset($value['serializer']);
        }
    
        if (isset($value['twig_extension'])) {
            $this->twigExtension = new \Symfony\Config\BazingaHateoas\TwigExtensionConfig($value['twig_extension']);
            unset($value['twig_extension']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    public function toArray(): array
    {
        $output = [];
        if (null !== $this->metadata) {
            $output['metadata'] = $this->metadata->toArray();
        }
        if (null !== $this->serializer) {
            $output['serializer'] = $this->serializer->toArray();
        }
        if (null !== $this->twigExtension) {
            $output['twig_extension'] = $this->twigExtension->toArray();
        }
    
        return $output;
    }

}
