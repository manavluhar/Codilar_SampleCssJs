<?php

namespace Codilar\SampleCssJs\Controller\Index;

use Magento\Framework\App\ActionInterface as FrontendActionInterface;
use Magento\Framework\Controller\ResultFactory;

/**
 * class Index
 *
 * A Demo Controller called samplecssjs/index/index
 */

class Index implements FrontendActionInterface
{
    private $resultFactory;

    /**
     * Index constructor.
     * @param ResultFactory $resultFactory
     */
    public function __construct(
        ResultFactory $resultFactory
    ) {
        $this->resultFactory  = $resultFactory;
    }

    /**
     * @inheritDoc
     */
    public function execute()
    {
        return $this->resultFactory->create(ResultFactory::TYPE_PAGE);
    }
}
