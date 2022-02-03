<?php declare(strict_types=1);

namespace MateuszMesek\Document\Api\Command;

use MateuszMesek\Document\Api\InputInterface;

interface GetDocumentDataInterface
{
    public function execute(string $document, InputInterface $input): array;
}
