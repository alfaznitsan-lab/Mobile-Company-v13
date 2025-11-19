<?php

declare(strict_types=1);

namespace Nitsan\MobileCompany\Controller;

use TYPO3\CMS\Core\Type\ContextualFeedbackSeverity;

/**
 * This file is part of the "Mobile Company" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * (c) 2025 Nitsan <nit@example.com>, Nitsan
 */

/**
 * CompanyController
 */
class CompanyController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{

    /**
     * action list
     *
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function listAction(): \Psr\Http\Message\ResponseInterface
    {
        $companies = $this->companyRepository->findAll();
        $this->view->assign('companies', $companies);
        return $this->htmlResponse();
    }

    /**
     * action show
     *
     * @param \Nitsan\MobileCompany\Domain\Model\Company $company
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function showAction(\Nitsan\MobileCompany\Domain\Model\Company $company): \Psr\Http\Message\ResponseInterface
    {
        $this->view->assign('company', $company);
        return $this->htmlResponse();
    }

    /**
     * action new
     *
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function newAction(): \Psr\Http\Message\ResponseInterface
    {
        return $this->htmlResponse();
    }

    /**
     * action create
     *
     * @param \Nitsan\MobileCompany\Domain\Model\Company $newCompany
     */
    public function createAction(\Nitsan\MobileCompany\Domain\Model\Company $newCompany)
    {
        $this->addFlashMessage('The object was created.', '', ContextualFeedbackSeverity::OK);
        $this->companyRepository->add($newCompany);
        return $this->redirect('list');
    }

    /**
     * action edit
     *
     * @param \Nitsan\MobileCompany\Domain\Model\Company $company
     * @TYPO3\CMS\Extbase\Annotation\IgnoreValidation("company")
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function editAction(\Nitsan\MobileCompany\Domain\Model\Company $company): \Psr\Http\Message\ResponseInterface
    {
        $this->view->assign('company', $company);
        return $this->htmlResponse();
    }

    /**
     * action update
     *
     * @param \Nitsan\MobileCompany\Domain\Model\Company $company
     */
    public function updateAction(\Nitsan\MobileCompany\Domain\Model\Company $company)
    {
        $this->addFlashMessage('The object was updated.', '', ContextualFeedbackSeverity::INFO);
        $this->companyRepository->update($company);
        return $this->redirect('list');
        
    }

    /**
     * action delete
     *
     * @param \Nitsan\MobileCompany\Domain\Model\Company $company
     */
    public function deleteAction(\Nitsan\MobileCompany\Domain\Model\Company $company)
    {
        $this->addFlashMessage('The object was deleted.', '', ContextualFeedbackSeverity::ERROR);
        $this->companyRepository->remove($company);
        return $this->redirect('list');
    }

    /**
     * action index
     *
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function indexAction(): \Psr\Http\Message\ResponseInterface
    {
        return $this->htmlResponse();
    }
}
