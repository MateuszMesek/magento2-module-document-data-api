<?php declare(strict_types=1);

namespace MateuszMesek\DocumentDataApi;

use Traversable;

interface DocumentNodesResolverInterface
{
    /**
     * @return Traversable|array
     */
    public function resolve(): Traversable;
}
