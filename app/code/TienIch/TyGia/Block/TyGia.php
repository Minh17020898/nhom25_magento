<?php


namespace TienIch\TyGia\Block;

use Magento\Framework\View\Element\Template;
use TienIch\TyGia\Cron\NgoaiTe;
use TienIch\TyGia\Model\InsertRecordFactory;

class TyGia extends Template
{
    private $factory;

    public function __construct(
        Template\Context $context,
        InsertRecordFactory $factory
    )
    {
        parent::__construct($context);
        $this->factory = $factory;
    }

    public function getRate()
    {
       $factory = $this->factory->create();
        $rate = $factory
            ->getCollection()
            ->addOrder('created_at', 'ASC')
            ->getLastItem();

        if ($rate->isEmpty()) {
            return null;
        }

        return $rate;
    }
}