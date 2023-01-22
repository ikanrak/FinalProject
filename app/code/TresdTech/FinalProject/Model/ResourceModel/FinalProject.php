<?php
namespace TresdTech\FinalProject\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class FinalProject extends AbstractDb
{
    protected function _construct()
    {
        $this->_init('finalproject', 'id');
    }
}
