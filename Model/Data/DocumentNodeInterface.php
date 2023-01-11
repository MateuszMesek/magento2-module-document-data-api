<?php declare(strict_types=1);

namespace MateuszMesek\DocumentDataApi\Model\Data;

interface DocumentNodeInterface
{
    /**
     * @return string
     */
    public function getDocumentName(): string;

    /**
     * @return string
     */
    public function getPath(): string;

    /**
     * @return mixed
     */
    public function getValueResolver(): mixed;
}
