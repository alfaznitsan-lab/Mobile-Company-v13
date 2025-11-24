<?php

declare(strict_types=1);

namespace Nitsan\MobileCompany\Controller;

use TYPO3\CMS\Backend\Attribute\AsController;
use TYPO3\CMS\Backend\Template\ModuleTemplateFactory;
use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;
use Nitsan\MobileCompany\Domain\Repository\MobileRepository;
use Psr\Http\Message\ResponseInterface;

#[AsController]
final class BackendModuleController extends ActionController
{
    public function __construct(
        private readonly ModuleTemplateFactory $moduleTemplateFactory,
        protected MobileRepository $mobileRepository,
    ) {}

    protected function initializeView(\TYPO3\CMS\Core\View\ViewInterface $view): void
    {
        $moduleTemplate = $this->moduleTemplateFactory->create($this->request);
        $this->view->assign('moduleTemplate', $moduleTemplate);
    }

    /**
     * action list
     */
    public function listAction(): ResponseInterface
    {
        $mobiles = $this->mobileRepository->findAll();
        $this->view->assign('mobiles', $mobiles);
        return $this->htmlResponse();
    }

    /**
     * action show
     */
    public function showAction(\Nitsan\MobileCompany\Domain\Model\Mobile $mobile): ResponseInterface
    {
        $this->view->assignmultiple(['mobile' => $mobile, 'listPid' => $this->settings['listPid'] ?? null,]);
        return $this->htmlResponse();
    }
}