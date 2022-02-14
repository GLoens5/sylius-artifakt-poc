<?php

namespace Symfony\Config\SyliusUser\ResourcesConfig;

require_once __DIR__.\DIRECTORY_SEPARATOR.'User'.\DIRECTORY_SEPARATOR.'ResettingConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'User'.\DIRECTORY_SEPARATOR.'VerificationConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'User'.\DIRECTORY_SEPARATOR.'ClassesConfig.php';

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help creating config.
 */
class UserConfig 
{
    private $templates;
    private $encoder;
    private $options;
    private $resetting;
    private $verification;
    private $classes;
    
    /**
     * @default 'SyliusUserBundle:User'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function templates($value): self
    {
        $this->templates = $value;
    
        return $this;
    }
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function encoder($value): self
    {
        $this->encoder = $value;
    
        return $this;
    }
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function options($value): self
    {
        $this->options = $value;
    
        return $this;
    }
    
    public function resetting(array $value = []): \Symfony\Config\SyliusUser\ResourcesConfig\User\ResettingConfig
    {
        if (null === $this->resetting) {
            $this->resetting = new \Symfony\Config\SyliusUser\ResourcesConfig\User\ResettingConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "resetting()" has already been initialized. You cannot pass values the second time you call resetting().');
        }
    
        return $this->resetting;
    }
    
    public function verification(array $value = []): \Symfony\Config\SyliusUser\ResourcesConfig\User\VerificationConfig
    {
        if (null === $this->verification) {
            $this->verification = new \Symfony\Config\SyliusUser\ResourcesConfig\User\VerificationConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "verification()" has already been initialized. You cannot pass values the second time you call verification().');
        }
    
        return $this->verification;
    }
    
    public function classes(array $value = []): \Symfony\Config\SyliusUser\ResourcesConfig\User\ClassesConfig
    {
        if (null === $this->classes) {
            $this->classes = new \Symfony\Config\SyliusUser\ResourcesConfig\User\ClassesConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "classes()" has already been initialized. You cannot pass values the second time you call classes().');
        }
    
        return $this->classes;
    }
    
    public function __construct(array $value = [])
    {
    
        if (isset($value['templates'])) {
            $this->templates = $value['templates'];
            unset($value['templates']);
        }
    
        if (isset($value['encoder'])) {
            $this->encoder = $value['encoder'];
            unset($value['encoder']);
        }
    
        if (isset($value['options'])) {
            $this->options = $value['options'];
            unset($value['options']);
        }
    
        if (isset($value['resetting'])) {
            $this->resetting = new \Symfony\Config\SyliusUser\ResourcesConfig\User\ResettingConfig($value['resetting']);
            unset($value['resetting']);
        }
    
        if (isset($value['verification'])) {
            $this->verification = new \Symfony\Config\SyliusUser\ResourcesConfig\User\VerificationConfig($value['verification']);
            unset($value['verification']);
        }
    
        if (isset($value['classes'])) {
            $this->classes = new \Symfony\Config\SyliusUser\ResourcesConfig\User\ClassesConfig($value['classes']);
            unset($value['classes']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    public function toArray(): array
    {
        $output = [];
        if (null !== $this->templates) {
            $output['templates'] = $this->templates;
        }
        if (null !== $this->encoder) {
            $output['encoder'] = $this->encoder;
        }
        if (null !== $this->options) {
            $output['options'] = $this->options;
        }
        if (null !== $this->resetting) {
            $output['resetting'] = $this->resetting->toArray();
        }
        if (null !== $this->verification) {
            $output['verification'] = $this->verification->toArray();
        }
        if (null !== $this->classes) {
            $output['classes'] = $this->classes->toArray();
        }
    
        return $output;
    }

}
