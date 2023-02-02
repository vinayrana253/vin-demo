<?php

namespace Seepos\Productprefix\Plugin\Catalog\Model;

class ProductTitleWithPrefix
{
    public function afterGetName(\Magento\Catalog\Model\Product $subject, $result)
    {
        $title = "Seepossible - ".$result;
        return $title;
    }
}