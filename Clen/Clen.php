<?php
class Clen
{
    /**
     * Cleans the input value by removing whitespace, converting special characters to HTML entities,
     * stripping HTML and PHP tags, and converting to lowercase.
     *
     * @param string $InputValue The input value to be cleaned.
     * @return string The cleaned input value.
     */
    public static function Clen($InputValue)
    {
        // Remove leading and trailing whitespace
        $InputValue = trim($InputValue);

        // Convert special characters to HTML entities
        $InputValue = htmlspecialchars($InputValue, ENT_QUOTES, 'UTF-8');

        // Remove HTML and PHP tags
        $InputValue = strip_tags($InputValue);

        // Convert to lowercase
        $InputValue = strtolower($InputValue);

        // Return the cleaned input value
        return $InputValue;
    }
}