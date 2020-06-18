<?php
namespace Magenest\SearchApi\Api;
use Api\SearchApi\Api\Data\ProductInterface;
use Magento\Framework\Exception\NoSuchEntityException;


interface ProductRepositoryInterface
{

    public function getProductById($id);

}
