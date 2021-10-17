<?php

namespace NF\Scope\ViewModel;


class Scope implements \Magento\Framework\View\Element\Block\ArgumentInterface
{

	protected $scopeConfig;


    function __construct(
        \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig
    )
    {

    	$this->scopeConfig = $scopeConfig;

    }

    public function getConfig($config_path)
    {
        return $this->scopeConfig->getValue(
            $config_path,
            \Magento\Store\Model\ScopeInterface::SCOPE_STORE
            );
    }



}
