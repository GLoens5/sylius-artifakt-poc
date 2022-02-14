<?php

namespace Symfony\Config\SyliusResource;


use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help creating config.
 */
class SettingsConfig 
{
    private $paginate;
    private $limit;
    private $allowedPaginate;
    private $defaultPageSize;
    private $sortable;
    private $sorting;
    private $filterable;
    private $criteria;
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function paginate($value = NULL): self
    {
        $this->paginate = $value;
    
        return $this;
    }
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function limit($value = NULL): self
    {
        $this->limit = $value;
    
        return $this;
    }
    
    /**
     * @param ParamConfigurator|list<int|ParamConfigurator> $value
     * @return $this
     */
    public function allowedPaginate($value): self
    {
        $this->allowedPaginate = $value;
    
        return $this;
    }
    
    /**
     * @default 10
     * @param ParamConfigurator|int $value
     * @return $this
     */
    public function defaultPageSize($value): self
    {
        $this->defaultPageSize = $value;
    
        return $this;
    }
    
    /**
     * @default false
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function sortable($value): self
    {
        $this->sortable = $value;
    
        return $this;
    }
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function sorting($value = NULL): self
    {
        $this->sorting = $value;
    
        return $this;
    }
    
    /**
     * @default false
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function filterable($value): self
    {
        $this->filterable = $value;
    
        return $this;
    }
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function criteria($value = NULL): self
    {
        $this->criteria = $value;
    
        return $this;
    }
    
    public function __construct(array $value = [])
    {
    
        if (isset($value['paginate'])) {
            $this->paginate = $value['paginate'];
            unset($value['paginate']);
        }
    
        if (isset($value['limit'])) {
            $this->limit = $value['limit'];
            unset($value['limit']);
        }
    
        if (isset($value['allowed_paginate'])) {
            $this->allowedPaginate = $value['allowed_paginate'];
            unset($value['allowed_paginate']);
        }
    
        if (isset($value['default_page_size'])) {
            $this->defaultPageSize = $value['default_page_size'];
            unset($value['default_page_size']);
        }
    
        if (isset($value['sortable'])) {
            $this->sortable = $value['sortable'];
            unset($value['sortable']);
        }
    
        if (isset($value['sorting'])) {
            $this->sorting = $value['sorting'];
            unset($value['sorting']);
        }
    
        if (isset($value['filterable'])) {
            $this->filterable = $value['filterable'];
            unset($value['filterable']);
        }
    
        if (isset($value['criteria'])) {
            $this->criteria = $value['criteria'];
            unset($value['criteria']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    public function toArray(): array
    {
        $output = [];
        if (null !== $this->paginate) {
            $output['paginate'] = $this->paginate;
        }
        if (null !== $this->limit) {
            $output['limit'] = $this->limit;
        }
        if (null !== $this->allowedPaginate) {
            $output['allowed_paginate'] = $this->allowedPaginate;
        }
        if (null !== $this->defaultPageSize) {
            $output['default_page_size'] = $this->defaultPageSize;
        }
        if (null !== $this->sortable) {
            $output['sortable'] = $this->sortable;
        }
        if (null !== $this->sorting) {
            $output['sorting'] = $this->sorting;
        }
        if (null !== $this->filterable) {
            $output['filterable'] = $this->filterable;
        }
        if (null !== $this->criteria) {
            $output['criteria'] = $this->criteria;
        }
    
        return $output;
    }

}
