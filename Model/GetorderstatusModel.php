<?php

namespace RH\OrderStatus\Model;

use RH\OrderStatus\Api\Getorderstatus;

class GetorderstatusModel implements Getorderstatus
{

  protected $statusCollectionFactory;
  public function __construct(
    \Magento\Sales\Model\ResourceModel\Order\Status\CollectionFactory $statusCollectionFactory
  ) {
    $this->statusCollectionFactory = $statusCollectionFactory;
  }

  public function getorderstatusarray()
  {
    $options = $this->statusCollectionFactory->create()->toOptionArray();
    return $options;
  }
}
