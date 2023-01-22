<?php
namespace TresdTech\FinalProject\Model\ResourceModel\FinalProject;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    protected function _construct()
    {
        $this->_init('TresdTech\FinalProject\Model\FinalProject', 'TresdTech\FinalProject\Model\ResourceModel\FinalProject');
    }
}
