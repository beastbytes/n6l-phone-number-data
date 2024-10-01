<?php
/**
 * @copyright Copyright © 2024 BeastBytes - All rights reserved
 * @license BSD 3-Clause
 */

declare(strict_types=1);

namespace BeastBytes\PhoneNumber\N6l;

interface N6lPhoneNumberDataInterface
{
    /**
     * @return array<int, string> ISO 3116 alpha-2 codes of supported countries
     * @psalm-return list<string>
     */
    public function getCountries(): array;

    /**
     * @return bool Whether the country is in the list of supported countries
     */
    public function hasCountry(string $country): bool;

    /**
     * @param string $country ISO 3116 alpha-2 country code
     * @return array(pattern?: string, idc: string)
     * pattern: Regex to strip non-digits and any unwanted leading digits from national formatted number,
     * idc: country International Dialling Code
     */
    public function getEpp(string $country): array;

    /**
     * @param string $country ISO 3116 alpha-2 country code
     * @return array(pattern: string, replacement?: string)
     * pattern: Regex to match typical input formats,
     * replacement: replacement to generate national formatted number
     */
    public function getN6l(string $country): array;
}
