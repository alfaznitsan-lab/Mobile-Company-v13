<?php

declare(strict_types=1);

namespace Nitsan\MobileCompany\Controller;

use TYPO3\CMS\Backend\Attribute\AsController;
use TYPO3\CMS\Backend\Template\ModuleTemplateFactory;
use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;
use Nitsan\MobileCompany\Domain\Repository\MobileRepository;
use Psr\Http\Message\ResponseInterface;
use TYPO3\CMS\Core\Http\HtmlResponse;

#[AsController]
final class BackendModuleController extends ActionController
{
    public function __construct(
        private readonly ModuleTemplateFactory $moduleTemplateFactory,
        protected MobileRepository $mobileRepository
    ) {}

    /**
     * action list
     */
    public function listAction(): ResponseInterface
    {
        $query = $this->mobileRepository->findAll()->getQuery();
        $storagePids = [2];
        $query->getQuerySettings()->setStoragePageIds($storagePids);
        $mobiles = $query->execute();

        $moduleTemplate = $this->moduleTemplateFactory->create($this->request);

        $moduleTemplate->assign('mobiles', $mobiles);

        return new HtmlResponse($moduleTemplate->render('BackendModule/List'));
    }

    /**
     * action show
     */
    public function showAction(\Nitsan\MobileCompany\Domain\Model\Mobile $mobile): \Psr\Http\Message\ResponseInterface
    {
        $moduleTemplate = $this->moduleTemplateFactory->create($this->request);
        $moduleTemplate->assign('mobile', $mobile);
        return new HtmlResponse($moduleTemplate->render('BackendModule/Show'));
    }
}