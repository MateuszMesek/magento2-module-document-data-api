<?php declare(strict_types=1);

namespace MateuszMesek\DocumentDataApi\Model;

use Traversable;

interface DocumentNodesResolverInterface
{
    /**
     * @return \Traversable
     */
    public function resolve(): Traversable;
}
