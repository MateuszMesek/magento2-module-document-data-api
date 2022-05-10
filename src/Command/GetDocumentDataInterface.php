<?php declare(strict_types=1);

namespace MateuszMesek\DocumentDataApi\Command;

use MateuszMesek\DocumentDataApi\Data\DocumentDataInterface;
use MateuszMesek\DocumentDataApi\InputInterface;

interface GetDocumentDataInterface
{
    public function execute(string $documentName, InputInterface $input): ?DocumentDataInterface;
}
