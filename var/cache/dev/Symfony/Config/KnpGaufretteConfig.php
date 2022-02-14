<?php

namespace Symfony\Config;

require_once __DIR__.\DIRECTORY_SEPARATOR.'KnpGaufrette'.\DIRECTORY_SEPARATOR.'AdapterConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'KnpGaufrette'.\DIRECTORY_SEPARATOR.'FilesystemConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'KnpGaufrette'.\DIRECTORY_SEPARATOR.'StreamWrapperConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'KnpGaufrette'.\DIRECTORY_SEPARATOR.'FactoriesConfig.php';

use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help creating config.
 */
class KnpGaufretteConfig implements \Symfony\Component\Config\Builder\ConfigBuilderInterface
{
    private $adapters;
    private $filesystems;
    private $streamWrapper;
    private $factories;
    
    public function adapter(string $name, array $value = []): \Symfony\Config\KnpGaufrette\AdapterConfig
    {
        if (!isset($this->adapters[$name])) {
            return $this->adapters[$name] = new \Symfony\Config\KnpGaufrette\AdapterConfig($value);
        }
        if ([] === $value) {
            return $this->adapters[$name];
        }
    
        throw new InvalidConfigurationException('The node created by "adapter()" has already been initialized. You cannot pass values the second time you call adapter().');
    }
    
    public function filesystem(string $name, array $value = []): \Symfony\Config\KnpGaufrette\FilesystemConfig
    {
        if (!isset($this->filesystems[$name])) {
            return $this->filesystems[$name] = new \Symfony\Config\KnpGaufrette\FilesystemConfig($value);
        }
        if ([] === $value) {
            return $this->filesystems[$name];
        }
    
        throw new InvalidConfigurationException('The node created by "filesystem()" has already been initialized. You cannot pass values the second time you call filesystem().');
    }
    
    public function streamWrapper(array $value = []): \Symfony\Config\KnpGaufrette\StreamWrapperConfig
    {
        if (null === $this->streamWrapper) {
            $this->streamWrapper = new \Symfony\Config\KnpGaufrette\StreamWrapperConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "streamWrapper()" has already been initialized. You cannot pass values the second time you call streamWrapper().');
        }
    
        return $this->streamWrapper;
    }
    
    public function factories(array $value = []): \Symfony\Config\KnpGaufrette\FactoriesConfig
    {
        if (null === $this->factories) {
            $this->factories = new \Symfony\Config\KnpGaufrette\FactoriesConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "factories()" has already been initialized. You cannot pass values the second time you call factories().');
        }
    
        return $this->factories;
    }
    
    public function getExtensionAlias(): string
    {
        return 'knp_gaufrette';
    }
    
    public function __construct(array $value = [])
    {
    
        if (isset($value['adapters'])) {
            $this->adapters = array_map(function ($v) { return new \Symfony\Config\KnpGaufrette\AdapterConfig($v); }, $value['adapters']);
            unset($value['adapters']);
        }
    
        if (isset($value['filesystems'])) {
            $this->filesystems = array_map(function ($v) { return new \Symfony\Config\KnpGaufrette\FilesystemConfig($v); }, $value['filesystems']);
            unset($value['filesystems']);
        }
    
        if (isset($value['stream_wrapper'])) {
            $this->streamWrapper = new \Symfony\Config\KnpGaufrette\StreamWrapperConfig($value['stream_wrapper']);
            unset($value['stream_wrapper']);
        }
    
        if (isset($value['factories'])) {
            $this->factories = new \Symfony\Config\KnpGaufrette\FactoriesConfig($value['factories']);
            unset($value['factories']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    public function toArray(): array
    {
        $output = [];
        if (null !== $this->adapters) {
            $output['adapters'] = array_map(function ($v) { return $v->toArray(); }, $this->adapters);
        }
        if (null !== $this->filesystems) {
            $output['filesystems'] = array_map(function ($v) { return $v->toArray(); }, $this->filesystems);
        }
        if (null !== $this->streamWrapper) {
            $output['stream_wrapper'] = $this->streamWrapper->toArray();
        }
        if (null !== $this->factories) {
            $output['factories'] = $this->factories->toArray();
        }
    
        return $output;
    }

}
