<?php declare(strict_types=1);

namespace MateuszMesek\Document\Api\Command;

use MateuszMesek\Document\Api\Data\DocumentNodeInterface;
use MateuszMesek\Document\Api\InputInterface;

interface GetDocumentNodeValueInterface
{
    /**
     * @param DocumentNodeInterface $documentNode
     * @param InputInterface $input
     * @return mixed
     */
    public function execute(DocumentNodeInterface $documentNode, InputInterface $input);
}
