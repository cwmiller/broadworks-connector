<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * AutomaticCollectCallPrefixDigitsEntry
 *
 * The Automatic Collect Call prefix digits entry.
 *
 * @Groups [{"id":"0d5db1a19a0aeda6f13d1f1c609efa0a:214","type":"sequence"}]
 */
class AutomaticCollectCallPrefixDigitsEntry
{
    /**
     * @ElementName countryCode
     * @Type string
     * @Group 0d5db1a19a0aeda6f13d1f1c609efa0a:214
     * @MaxLength 3
     * @Pattern [0-9]|[1-9][0-9]{1,2}
     * @var string|null
     */
    protected $countryCode = null;

    /**
     * @ElementName prefixDigits
     * @Type string
     * @Group 0d5db1a19a0aeda6f13d1f1c609efa0a:214
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    protected $prefixDigits = null;

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

