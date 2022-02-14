<?php

namespace Symfony\Config\SyliusOrder;


use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help creating config.
 */
class ExpirationConfig 
{
    private $cart;
    private $order;
    
    /**
     * @default '2 days'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function cart($value): self
    {
        $this->cart = $value;
    
        return $this;
    }
    
    /**
     * @default '5 days'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function order($value): self
    {
        $this->order = $value;
    
        return $this;
    }
    
    public function __construct(array $value = [])
    {
    
        if (isset($value['cart'])) {
            $this->cart = $value['cart'];
            unset($value['cart']);
        }
    
        if (isset($value['order'])) {
            $this->order = $value['order'];
            unset($value['order']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    public function toArray(): array
    {
        $output = [];
        if (null !== $this->cart) {
            $output['cart'] = $this->cart;
        }
        if (null !== $this->order) {
            $output['order'] = $this->order;
        }
    
        return $output;
    }

}
