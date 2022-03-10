<?php declare(strict_types=1);

namespace MateuszMesek\DocumentDataApi\Command;

use MateuszMesek\DocumentDataApi\InputInterface;

interface GetDocumentDataInterface
{
    public function execute(string $documentName, InputInterface $input): array;
}
