<?php

namespace Platform\Bundle\AdminBundle\Twig\Extension;

use Symfony\Component\Intl\Intl;
use Twig\Extension\AbstractExtension;
use Twig\TwigFilter;

class CurrencyExtension extends AbstractExtension
{
    /**
     * {@inheritdoc}
     */
    public function getFilters()
    {
        return [
            new TwigFilter('sylius_currency_symbol', [$this, 'convertCurrencyCodeToSymbol']),
        ];
    }

    /**
     * @param string $code
     *
     * @return null|string
     */
    public function convertCurrencyCodeToSymbol($code)
    {
        return Intl::getCurrencyBundle()->getCurrencySymbol($code);
    }
}
