<?php
namespace Seepos\NewSorting\Plugin\Model;

use Magento\Store\Model\StoreManagerInterface;

class Config  {


    protected $_storeManager;

    public function __construct(
        StoreManagerInterface $storeManager
    ) {
        $this->_storeManager = $storeManager;
    }


    public function afterGetAttributeUsedForSortByArray(\Magento\Catalog\Model\Config $catalogConfig, $options)
    {
        $customOption['created_at'] = __('New Product');
        $options = array_merge($customOption, $options);
        return $options;
    }
}