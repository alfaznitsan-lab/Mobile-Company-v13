<?php
declare(strict_types=1);

namespace Nitsan\MobileCompany\Domain\Model;

class ExtendedTag extends \T3G\AgencyPack\Blog\Domain\Model\Tag
{
    protected ?string $metaKeywords = '';

    public function getMetaKeywords(): ?string
    {
        return $this->metaKeywords;
    }

    public function setMetaKeywords(?string $metaKeywords): void
    {
        $this->metaKeywords = $metaKeywords;
    }
}
