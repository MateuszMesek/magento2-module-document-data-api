<?php declare(strict_types=1);

namespace MateuszMesek\Document\Api\Command;

use Generator;

interface GetDocumentNodesInterface
{
    public function execute(string $document): Generator;
}
