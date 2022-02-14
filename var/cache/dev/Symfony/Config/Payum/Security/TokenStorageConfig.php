<?php

namespace Symfony\Config\Payum\Security;

require_once __DIR__.\DIRECTORY_SEPARATOR.'TokenStorageConfig'.\DIRECTORY_SEPARATOR.'FilesystemConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'TokenStorageConfig'.\DIRECTORY_SEPARATOR.'DoctrineConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'TokenStorageConfig'.\DIRECTORY_SEPARATOR.'CustomConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'TokenStorageConfig'.\DIRECTORY_SEPARATOR.'Propel1Config.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'TokenStorageConfig'.\DIRECTORY_SEPARATOR.'Propel2Config.php';

use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help creating config.
 */
class TokenStorageConfig 
{
    private $filesystem;
    private $doctrine;
    private $custom;
    private $propel1;
    private $propel2;
    
    public function filesystem(array $value = []): \Symfony\Config\Payum\Security\TokenStorageConfig\FilesystemConfig
    {
        if (null === $this->filesystem) {
            $this->filesystem = new \Symfony\Config\Payum\Security\TokenStorageConfig\FilesystemConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "filesystem()" has already been initialized. You cannot pass values the second time you call filesystem().');
        }
    
        return $this->filesystem;
    }
    
    public function doctrine(array $value = []): \Symfony\Config\Payum\Security\TokenStorageConfig\DoctrineConfig
    {
        if (null === $this->doctrine) {
            $this->doctrine = new \Symfony\Config\Payum\Security\TokenStorageConfig\DoctrineConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "doctrine()" has already been initialized. You cannot pass values the second time you call doctrine().');
        }
    
        return $this->doctrine;
    }
    
    public function custom(array $value = []): \Symfony\Config\Payum\Security\TokenStorageConfig\CustomConfig
    {
        if (null === $this->custom) {
            $this->custom = new \Symfony\Config\Payum\Security\TokenStorageConfig\CustomConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "custom()" has already been initialized. You cannot pass values the second time you call custom().');
        }
    
        return $this->custom;
    }
    
    public function propel1(array $value = []): \Symfony\Config\Payum\Security\TokenStorageConfig\Propel1Config
    {
        if (null === $this->propel1) {
            $this->propel1 = new \Symfony\Config\Payum\Security\TokenStorageConfig\Propel1Config($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "propel1()" has already been initialized. You cannot pass values the second time you call propel1().');
        }
    
        return $this->propel1;
    }
    
    public function propel2(array $value = []): \Symfony\Config\Payum\Security\TokenStorageConfig\Propel2Config
    {
        if (null === $this->propel2) {
            $this->propel2 = new \Symfony\Config\Payum\Security\TokenStorageConfig\Propel2Config($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "propel2()" has already been initialized. You cannot pass values the second time you call propel2().');
        }
    
        return $this->propel2;
    }
    
    public function __construct(array $value = [])
    {
    
        if (isset($value['filesystem'])) {
            $this->filesystem = new \Symfony\Config\Payum\Security\TokenStorageConfig\FilesystemConfig($value['filesystem']);
            unset($value['filesystem']);
        }
    
        if (isset($value['doctrine'])) {
            $this->doctrine = new \Symfony\Config\Payum\Security\TokenStorageConfig\DoctrineConfig($value['doctrine']);
            unset($value['doctrine']);
        }
    
        if (isset($value['custom'])) {
            $this->custom = new \Symfony\Config\Payum\Security\TokenStorageConfig\CustomConfig($value['custom']);
            unset($value['custom']);
        }
    
        if (isset($value['propel1'])) {
            $this->propel1 = new \Symfony\Config\Payum\Security\TokenStorageConfig\Propel1Config($value['propel1']);
            unset($value['propel1']);
        }
    
        if (isset($value['propel2'])) {
            $this->propel2 = new \Symfony\Config\Payum\Security\TokenStorageConfig\Propel2Config($value['propel2']);
            unset($value['propel2']);
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
        if (null !== $this->doctrine) {
            $output['doctrine'] = $this->doctrine->toArray();
        }
        if (null !== $this->custom) {
            $output['custom'] = $this->custom->toArray();
        }
        if (null !== $this->propel1) {
            $output['propel1'] = $this->propel1->toArray();
        }
        if (null !== $this->propel2) {
            $output['propel2'] = $this->propel2->toArray();
        }
    
        return $output;
    }

}
