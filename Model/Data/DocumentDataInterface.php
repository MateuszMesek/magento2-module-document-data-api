<?php declare(strict_types=1);

namespace MateuszMesek\DocumentDataApi\Model\Data;

interface DocumentDataInterface
{
    /**
     * @param string $path
     * @param mixed $value
     * @return void
     */
    public function set(string $path, mixed $value): void;

    /**
     * @param string $path
     * @return mixed
     */
    public function get(string $path): mixed;

    /**
     * @return array
     */
    public function getData(): array;
}
