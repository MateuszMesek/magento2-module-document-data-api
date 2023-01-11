<?php declare(strict_types=1);

namespace MateuszMesek\DocumentDataApi\Model\Command;

use Traversable;

interface GetDocumentNodesInterface
{
    /**
     * @param string $documentName
     * @return \Traversable
     */
    public function execute(string $documentName): Traversable;
}
