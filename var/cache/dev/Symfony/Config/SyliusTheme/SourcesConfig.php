<?php

namespace Symfony\Config\SyliusTheme;

require_once __DIR__.\DIRECTORY_SEPARATOR.'Sources'.\DIRECTORY_SEPARATOR.'FilesystemConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Sources'.\DIRECTORY_SEPARATOR.'TestConfig.php';

use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help creating config.
 */
class SourcesConfig 
{
    private $filesystem;
    private $test;
    
    public function filesystem(array $value = []): \Symfony\Config\SyliusTheme\Sources\FilesystemConfig
    {
        if (null === $this->filesystem) {
            $this->filesystem = new \Symfony\Config\SyliusTheme\Sources\FilesystemConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "filesystem()" has already been initialized. You cannot pass values the second time you call filesystem().');
        }
    
        return $this->filesystem;
    }
    
    public function test(array $value = []): \Symfony\Config\SyliusTheme\Sources\TestConfig
    {
        if (null === $this->test) {
            $this->test = new \Symfony\Config\SyliusTheme\Sources\TestConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "test()" has already been initialized. You cannot pass values the second time you call test().');
        }
    
        return $this->test;
    }
    
    public function __construct(array $value = [])
    {
    
        if (isset($value['filesystem'])) {
            $this->filesystem = new \Symfony\Config\SyliusTheme\Sources\FilesystemConfig($value['filesystem']);
            unset($value['filesystem']);
        }
    
        if (isset($value['test'])) {
            $this->test = new \Symfony\Config\SyliusTheme\Sources\TestConfig($value['test']);
            unset($value['test']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    public function toArray(): array
    {
        $output = [];
        if (null !== $this->filesystem) {
            $output['filesystem'] = $this->filesystem->toArray();
        }
        if (null !== $this->test) {
            $output['test'] = $this->test->toArray();
        }
    
        return $output;
    }

}
