<?php

namespace Salecto\Cps\Model\Collector\CspWhitelistXml;

use Magento\Csp\Model\Collector\CspWhitelistXml\Converter;
use Magento\Framework\App\Config\ScopeConfigInterface;

/**
 * Plugin class to append the whitelist cps from admin
 */
class ConverterPlugin extends \Magento\Framework\App\Helper\AbstractHelper
{
	/**
	 * Salecto CSP config path
	 */
   	const STYLE_SRC = 'salecto_csp/styleSsrc/role';

	/**
     * @var \Magento\Framework\App\Config\ScopeConfigInterface
     */
    protected $_scopeConfig;

	/**
     * Constructor
     *
     * @param \Magento\Backend\Block\Widget\Context $context
     * @param \Salecto\Advertisment\Model\GridModelFactory $adverts
     * @param \Magento\Catalog\Model\ProductFactory $storeManager
     * @param \Magento\Framework\Stdlib\DateTime\DateTime $DateTime
     */
    public function __construct(
       ScopeConfigInterface $scopeConfig 
    ) {
        $this->_scopeConfig = $scopeConfig;
    }

	 /**
     * Appends the whitelist cps from admin
     * 
     * @inheritDoc
     * @param  Magento\Csp\Model\Collector\CspWhitelistXml\Converter $subject
     * @param  Parent function output $result
     * @param  Inherit arugment $saurce
     * @return Array|null
     */
	public function afterConvert(
		Converter $subject,
		$result,
		$source
	) {
		$style_src = $this->getConfig();
		//array_push($result['style-src']['hosts'],$style_src);
		return $result;
	}

	/**
     * Fetches value from admin configuration
     * 
     * @param  string $config_path
     * @return string|null
     */
	public function getConfig()
	{
    	$storeScope = \Magento\Store\Model\ScopeInterface::SCOPE_STORE;
     	return $this->_scopeConfig->getValue(self::STYLE_SRC, $storeScope);
	}
}
