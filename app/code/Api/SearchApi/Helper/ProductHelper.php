<?php

namespace Api\SearchApi\Helper;

use Magento\Framework\Exception\NoSuchEntityException;
use Magento\Framework\Pricing\Helper\Data;

class ProductHelper
{

    private $priceHelper;


    function __construct(Data $priceHelper)
    {
        $this->priceHelper = $priceHelper;
    }

    public function formatPrice($price)
    {
        return $this->priceHelper->currency($price, true, false);
    }

    public function getProductImagesArray($product)
    {

        $images = $product->getMediaGalleryImages();
        $imageArray = array();
        foreach ($images as $image) {

            $imageArray[] = $image->getUrl();

        }
        return $imageArray;
    }

}

