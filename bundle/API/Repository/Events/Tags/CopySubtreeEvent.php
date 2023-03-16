<?php

declare(strict_types=1);

namespace Netgen\TagsBundle\API\Repository\Events\Tags;

use Ibexa\Contracts\Core\Repository\Event\AfterEvent;
use Netgen\TagsBundle\API\Repository\Values\Tags\Tag;

final class CopySubtreeEvent extends AfterEvent
{
    public function __construct(private Tag $tag, private Tag $copiedTag, private ?Tag $parentTag = null)
    {
    }

    public function getTag(): Tag
    {
        return $this->tag;
    }

    public function getCopiedTag(): Tag
    {
        return $this->copiedTag;
    }

    public function getParentTag(): ?Tag
    {
        return $this->parentTag;
    }
}
