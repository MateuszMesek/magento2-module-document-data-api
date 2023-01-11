<?php declare(strict_types=1);

namespace MateuszMesek\DocumentDataApi\Model\Command;

use MateuszMesek\DocumentDataApi\Model\Data\DocumentNodeInterface;
use MateuszMesek\DocumentDataApi\Model\InputInterface;

interface GetDocumentNodeValueInterface
{
    /**
     * @param \MateuszMesek\DocumentDataApi\Model\Data\DocumentNodeInterface $documentNode
     * @param \MateuszMesek\DocumentDataApi\Model\InputInterface $input
     * @return mixed
     */
    public function execute(DocumentNodeInterface $documentNode, InputInterface $input): mixed;
}
