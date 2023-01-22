<?php
namespace TresdTech\FinalProject\Controller\Index;

use Magento\Framework\App\Action\Context;
use Magento\Framework\View\Result\PageFactory;
use TresdTech\FinalProject\Model\FinalProject;
use Magento\Framework\Controller\ResultFactory;
use Magento\Framework\App\Action\Action;

class Submit extends Action
{
    protected $resultPageFactory;
    protected $extensionFactory;

    public function __construct(
        Context          $context,
        PageFactory      $resultPageFactory,
        FinalProject $extensionFactory
    )
    {
        $this->resultPageFactory = $resultPageFactory;
        $this->extensionFactory = $extensionFactory;
        parent::__construct($context);
    }

    public function execute()
    {
        try {
            $data = (array)$this->getRequest()->getPost();
            if ($data) {
                $model = $this->extensionFactory;
                $model->setData($data)->save();
                $this->messageManager->addSuccessMessage(__("Data Saved Successfully323."));
            }
        } catch (\Exception $e) {
            $this->messageManager->addErrorMessage($e, __("We can\'t submit your request, Please try again."));
        }
        $resultRedirect = $this->resultFactory->create(ResultFactory::TYPE_REDIRECT);
        $resultRedirect->setUrl($this->_redirect->getRefererUrl());
        return $resultRedirect;

    }
}
