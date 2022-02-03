<?php declare(strict_types=1);

namespace MateuszMesek\Document\Api\Data;

interface DocumentNodeInterface
{
    /**
     * @return string
     */
    public function getDocument(): string;

    /**
     * @return string
     */
    public function getPath(): string;

    /**
     * @return mixed
     */
    public function getResolver();
}
