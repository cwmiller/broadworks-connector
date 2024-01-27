<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemCallTypeModifyMappingRequest
 *
 * Modify the ignoreASEmergencyRoute entry of the specified country code, digitMap.
 *         The response is either SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"da582a1f8028404e70d260cf1f891033:5358","type":"sequence"}]
 */
class SystemCallTypeModifyMappingRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName countryCode
     * @Type string
     * @Group da582a1f8028404e70d260cf1f891033:5358
     * @MaxLength 3
     * @Pattern [0-9]|[1-9][0-9]{1,2}
     * @var string|null
     */
    protected $countryCode = null;

    /**
     * @ElementName digitMap
     * @Type string
     * @Group da582a1f8028404e70d260cf1f891033:5358
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    protected $digitMap = null;

    /**
     * @ElementName ignoreASEmergencyRoute
     * @Type bool
     * @Optional
     * @Group da582a1f8028404e70d260cf1f891033:5358
     * @var bool|null
     */
    protected $ignoreASEmergencyRoute = null;

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

    /**
     * Getter for ignoreASEmergencyRoute
     *
     * @return bool
     */
    public function getIgnoreASEmergencyRoute()
    {
        return $this->ignoreASEmergencyRoute instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->ignoreASEmergencyRoute;
    }

    /**
     * Setter for ignoreASEmergencyRoute
     *
     * @param bool $ignoreASEmergencyRoute
     * @return $this
     */
    public function setIgnoreASEmergencyRoute($ignoreASEmergencyRoute)
    {
        $this->ignoreASEmergencyRoute = $ignoreASEmergencyRoute;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetIgnoreASEmergencyRoute()
    {
        $this->ignoreASEmergencyRoute = null;
        return $this;
    }
}

