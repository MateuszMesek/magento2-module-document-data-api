<?php declare(strict_types=1);

namespace MateuszMesek\DocumentDataApi\Model;

interface DocumentNodeValueResolverInterface
{
    /**
     * @param \MateuszMesek\DocumentDataApi\Model\InputInterface $input
     * @return mixed
     */
    public function resolve(InputInterface $input): mixed;
}
