<?php
/**
 * @copyright Copyright © 2022 BeastBytes - All rights reserved
 * @license BSD 3-Clause
 */

declare(strict_types=1);

namespace BeastBytes\PhoneNumber\N6l;

interface N6lPhoneNumberDataInterface
{
    /**
     * @return array ISO 3116 alpha-2 codes of supported countries
     */
    public function getCountries(): array;

    /**
     * @return bool Whether the country is in the list of supported countries
     */
    public function hasCountry(string $country): bool;

    /**
     * @param string $country ISO 3116 alpha-2 country code
     * @return string Regex to match the national phone number format for the country
     */
    public function getPattern(string $country): string;

    /**
     * @param string $country ISO 3116 alpha-2 country code
     * @return string Replacement pattern for the country
     */
    public function getReplacement(string $country): string;

    /**
     * @param string $country ISO 3116 alpha-2 country code
     * @return bool Whether the country has a replacement pattern
     */
    public function hasReplacement(string $country): bool;
}
