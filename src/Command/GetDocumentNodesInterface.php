<?php declare(strict_types=1);

namespace MateuszMesek\DocumentDataApi\Command;

use Traversable;

interface GetDocumentNodesInterface
{
    public function execute(string $documentName): Traversable;
}
