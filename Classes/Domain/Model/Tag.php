<?php
declare(strict_types=1);

namespace Nitsan\MobileCompany\Domain\Model;

class Tag extends \T3G\AgencyPack\Blog\Domain\Model\Tag
{
    protected ?string $MetaKeywords = '';

    public function getMetaKeywords(): ?string
    {
        return $this->MetaKeywords;
    }

    public function setMetaKeywords(?string $MetaKeywords): void
    {
        $this->MetaKeywords = $MetaKeywords;
    }
}
