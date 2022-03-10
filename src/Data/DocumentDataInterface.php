<?php declare(strict_types=1);

namespace MateuszMesek\DocumentDataApi\Data;

interface DocumentDataInterface
{
    /**
     * @param string $path
     * @param mixed $value
     * @return void
     */
    public function set(string $path, $value): void;

    /**
     * @param string $path
     * @return mixed
     */
    public function get(string $path);

    /**
     * @return array
     */
    public function getData(): array;
}
