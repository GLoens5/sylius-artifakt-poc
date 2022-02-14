<?php

namespace Symfony\Config\SyliusPayum;


use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help creating config.
 */
class TemplateConfig 
{
    private $layout;
    private $obtainCreditCard;
    
    /**
     * @default '@SyliusPayum/layout.html.twig'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function layout($value): self
    {
        $this->layout = $value;
    
        return $this;
    }
    
    /**
     * @default '@SyliusPayum/Action/obtainCreditCard.html.twig'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function obtainCreditCard($value): self
    {
        $this->obtainCreditCard = $value;
    
        return $this;
    }
    
    public function __construct(array $value = [])
    {
    
        if (isset($value['layout'])) {
            $this->layout = $value['layout'];
            unset($value['layout']);
        }
    
        if (isset($value['obtain_credit_card'])) {
            $this->obtainCreditCard = $value['obtain_credit_card'];
            unset($value['obtain_credit_card']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    public function toArray(): array
    {
        $output = [];
        if (null !== $this->layout) {
            $output['layout'] = $this->layout;
        }
        if (null !== $this->obtainCreditCard) {
            $output['obtain_credit_card'] = $this->obtainCreditCard;
        }
    
        return $output;
    }

}
