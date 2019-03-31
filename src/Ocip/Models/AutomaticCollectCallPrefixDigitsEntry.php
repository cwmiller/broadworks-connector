<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * AutomaticCollectCallPrefixDigitsEntry
 *
 * The Automatic Collect Call prefix digits entry.
 *
 * @Groups [{"id":"af1b47d7cab3335a81456e64e42371b0:212","type":"sequence"}]
 */
class AutomaticCollectCallPrefixDigitsEntry
{

    /**
     * @ElementName countryCode
     * @Type string
     * @Group af1b47d7cab3335a81456e64e42371b0:212
     * @MaxLength 3
     * @Pattern [0-9]|[1-9][0-9]{1,2}
     * @var string|null
     */
    private $countryCode = null;

    /**
     * @ElementName prefixDigits
     * @Type string
     * @Group af1b47d7cab3335a81456e64e42371b0:212
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    private $prefixDigits = null;

    /**
     * Getter for countryCode
     *
     * @return string
     */
    public function getCountryCode()
    {
        return $this->countryCode instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->countryCode;
    }

    /**
     * Setter for countryCode
     *
     * @param string $countryCode
     * @return $this
     */
    public function setCountryCode($countryCode)
    {
        $this->countryCode = $countryCode;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetCountryCode()
    {
        $this->countryCode = null;
        return $this;
    }

    /**
     * Getter for prefixDigits
     *
     * @return string
     */
    public function getPrefixDigits()
    {
        return $this->prefixDigits instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->prefixDigits;
    }

    /**
     * Setter for prefixDigits
     *
     * @param string $prefixDigits
     * @return $this
     */
    public function setPrefixDigits($prefixDigits)
    {
        $this->prefixDigits = $prefixDigits;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetPrefixDigits()
    {
        $this->prefixDigits = null;
        return $this;
    }


}

