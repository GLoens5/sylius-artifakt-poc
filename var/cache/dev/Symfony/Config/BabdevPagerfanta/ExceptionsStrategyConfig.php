<?php

namespace Symfony\Config\BabdevPagerfanta;


use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help creating config.
 */
class ExceptionsStrategyConfig 
{
    private $outOfRangePage;
    private $notValidCurrentPage;
    
    /**
     * The exception strategy if requesting a page outside the available pages in a paginated list; valid options are "custom" or "to_http_not_found"
     * @default 'to_http_not_found'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function outOfRangePage($value): self
    {
        $this->outOfRangePage = $value;
    
        return $this;
    }
    
    /**
     * The exception strategy if the current page is not an allowed value in a paginated list; valid options are "custom" or "to_http_not_found"
     * @default 'to_http_not_found'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function notValidCurrentPage($value): self
    {
        $this->notValidCurrentPage = $value;
    
        return $this;
    }
    
    public function __construct(array $value = [])
    {
    
        if (isset($value['out_of_range_page'])) {
            $this->outOfRangePage = $value['out_of_range_page'];
            unset($value['out_of_range_page']);
        }
    
        if (isset($value['not_valid_current_page'])) {
            $this->notValidCurrentPage = $value['not_valid_current_page'];
            unset($value['not_valid_current_page']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    public function toArray(): array
    {
        $output = [];
        if (null !== $this->outOfRangePage) {
            $output['out_of_range_page'] = $this->outOfRangePage;
        }
        if (null !== $this->notValidCurrentPage) {
            $output['not_valid_current_page'] = $this->notValidCurrentPage;
        }
    
        return $output;
    }

}
