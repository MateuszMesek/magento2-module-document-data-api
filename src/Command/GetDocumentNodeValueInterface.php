<?php declare(strict_types=1);

namespace MateuszMesek\DocumentDataApi\Command;

use MateuszMesek\DocumentDataApi\Data\DocumentNodeInterface;
use MateuszMesek\DocumentDataApi\InputInterface;

interface GetDocumentNodeValueInterface
{
    /**
     * @param DocumentNodeInterface $documentNode
     * @param InputInterface $input
     * @return mixed
     */
    public function execute(DocumentNodeInterface $documentNode, InputInterface $input);
}
