<?php declare(strict_types=1);

namespace MateuszMesek\DocumentDataApi;

interface DocumentNodeValueResolverInterface
{
    /**
     * @param \MateuszMesek\DocumentDataApi\InputInterface $input
     * @return mixed
     */
    public function resolve(InputInterface $input);
}
