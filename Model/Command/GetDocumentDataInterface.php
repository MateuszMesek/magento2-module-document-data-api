<?php declare(strict_types=1);

namespace MateuszMesek\DocumentDataApi\Model\Command;

use MateuszMesek\DocumentDataApi\Model\Data\DocumentDataInterface;
use MateuszMesek\DocumentDataApi\Model\InputInterface;

interface GetDocumentDataInterface
{
    /**
     * @param string $documentName
     * @param \MateuszMesek\DocumentDataApi\Model\InputInterface $input
     * @return \MateuszMesek\DocumentDataApi\Model\Data\DocumentDataInterface|null
     */
    public function execute(string $documentName, InputInterface $input): ?DocumentDataInterface;
}
