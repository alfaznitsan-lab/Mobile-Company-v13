<?php
declare(strict_types=1);

namespace Nitsan\MobileCompany\Domain\Model;

class ExtendedPage extends \TYPO3\CMS\Frontend\Domain\Model\Page
{
    protected ?\TYPO3\CMS\Extbase\Domain\Model\FileReference $coverImage = null;
    protected bool $isFeatured = false;

    public function getCoverImage(): ?\TYPO3\CMS\Extbase\Domain\Model\FileReference
    {
        return $this->coverImage;
    }

    public function setCoverImage(?\TYPO3\CMS\Extbase\Domain\Model\FileReference $coverImage): void
    {
        $this->coverImage = $coverImage;
    }

    public function getIsFeatured(): bool
    {
        return $this->isFeatured;
    }

    public function setIsFeatured(bool $isFeatured): void
    {
        $this->isFeatured = $isFeatured;
    }
}
