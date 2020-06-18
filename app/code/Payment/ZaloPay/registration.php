<?php
 /************************************************************
  * *
  *  * Copyright © Boolfly. All rights reserved.
  *  * See COPYING.txt for license details.
  *  *
  *  * @author    info@boolfly.com
  * *  @project   ZaloPay
  */
use Magento\Framework\Component\ComponentRegistrar;

ComponentRegistrar::register(
    ComponentRegistrar::MODULE,
    'Payment_ZaloPay',
    __DIR__
);
