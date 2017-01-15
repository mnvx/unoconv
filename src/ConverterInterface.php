<?php

namespace Mnvx\Unoconv;

interface ConverterInterface
{
    /**
     * Convert formats
     * @param UnoconvParameters $parameters
     * @return mixed
     * @throws UnoconvException
     */
    public function convert(UnoconvParameters $parameters);
}