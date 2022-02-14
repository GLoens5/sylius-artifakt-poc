<?php

namespace Symfony\Config\SyliusCore\Resources\AvatarImage;


use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help creating config.
 */
class ClassesConfig 
{
    private $model;
    private $interface;
    private $repository;
    private $factory;
    
    /**
     * @default 'Sylius\\Component\\Core\\Model\\AvatarImage'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function model($value): self
    {
        $this->model = $value;
    
        return $this;
    }
    
    /**
     * @default 'Sylius\\Component\\Core\\Model\\AvatarImageInterface'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function interface($value): self
    {
        $this->interface = $value;
    
        return $this;
    }
    
    /**
     * @default 'Sylius\\Bundle\\CoreBundle\\Doctrine\\ORM\\AvatarImageRepository'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function repository($value): self
    {
        $this->repository = $value;
    
        return $this;
    }
    
    /**
     * @default 'Sylius\\Component\\Resource\\Factory\\Factory'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function factory($value): self
    {
        $this->factory = $value;
    
        return $this;
    }
    
    public function __construct(array $value = [])
    {
    
        if (isset($value['model'])) {
            $this->model = $value['model'];
            unset($value['model']);
        }
    
        if (isset($value['interface'])) {
            $this->interface = $value['interface'];
            unset($value['interface']);
        }
    
        if (isset($value['repository'])) {
            $this->repository = $value['repository'];
            unset($value['repository']);
        }
    
        if (isset($value['factory'])) {
            $this->factory = $value['factory'];
            unset($value['factory']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    public function toArray(): array
    {
        $output = [];
        if (null !== $this->model) {
            $output['model'] = $this->model;
        }
        if (null !== $this->interface) {
            $output['interface'] = $this->interface;
        }
        if (null !== $this->repository) {
            $output['repository'] = $this->repository;
        }
        if (null !== $this->factory) {
            $output['factory'] = $this->factory;
        }
    
        return $output;
    }

}
