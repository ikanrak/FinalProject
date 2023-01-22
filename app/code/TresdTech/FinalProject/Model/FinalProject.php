<?php
namespace TresdTech\FinalProject\Model;

use Magento\Framework\Model\AbstractModel;
use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class FinalProject extends AbstractModel
{
    protected function _construct()
    {
        $this->_init('TresdTech\FinalProject\Model\ResourceModel\FinalProject');
    }
}
