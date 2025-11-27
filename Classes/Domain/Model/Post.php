<?php
declare(strict_types=1);

namespace Nitsan\MobileCompany\Domain\Model;
use TYPO3\CMS\Extbase\Domain\Model\FileReference;

class Post extends \T3G\AgencyPack\Blog\Domain\Model\Post
{
    protected ?FileReference $coverImage = null;

    protected bool $isFeatured = false;

    public function getCoverImage(): ?FileReference
    {
        return $this->coverImage;
    }

    public function setCoverImage(?FileReference $coverImage): self
    {
        $this->coverImage = $coverImage;
        return $this;
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
