<?php
declare(strict_types=1);

namespace Nitsan\MobileCompany\Domain\Model;

class Author extends T3G\AgencyPack\Blog\Domain\Model\Author
{
    protected ?string $companyName = '';

    public function getCompanyName(): ?string
    {
        return $this->companyName;
    }

    public function setCompanyName(?string $companyName): void
    {
        $this->companyName = $companyName;
    }
}
