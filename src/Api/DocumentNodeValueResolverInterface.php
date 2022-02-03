<?php declare(strict_types=1);

namespace MateuszMesek\Document\Api;

interface DocumentNodeValueResolverInterface
{
    /**
     * @param $input
     * @return mixed
     */
    public function resolve($input);
}
