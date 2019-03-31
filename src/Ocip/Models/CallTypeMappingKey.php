<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * CallTypeMappingKey
 *
 * The call type mapping Key.
 *
 * @Groups [{"id":"7f663d5135470c33ca64b0eed3c3aa0c:18497","type":"sequence"}]
 */
class CallTypeMappingKey
{

    /**
     * @ElementName countryCode
     * @Type string
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:18497
     * @MaxLength 3
     * @Pattern [0-9]|[1-9][0-9]{1,2}
     * @var string|null
     */
    private $countryCode = null;

    /**
     * @ElementName digitMap
     * @Type string
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:18497
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    private $digitMap = null;

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
     * Getter for digitMap
     *
     * @return string
     */
    public function getDigitMap()
    {
        return $this->digitMap instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->digitMap;
    }

    /**
     * Setter for digitMap
     *
     * @param string $digitMap
     * @return $this
     */
    public function setDigitMap($digitMap)
    {
        $this->digitMap = $digitMap;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDigitMap()
    {
        $this->digitMap = null;
        return $this;
    }


}

