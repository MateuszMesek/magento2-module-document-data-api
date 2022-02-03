<?php declare(strict_types=1);

namespace MateuszMesek\Document\Api;

use Generator;

interface DocumentNodesResolverInterface
{
    /**
     * @return Generator
     */
    public function resolve(): Generator;
}
