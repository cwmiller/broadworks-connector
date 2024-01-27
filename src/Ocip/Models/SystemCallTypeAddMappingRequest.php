<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemCallTypeAddMappingRequest
 *
 * Add a system call type mapping.
 *         The response is either SuccessResponse or ErrorResponse.
 *         The following element is used only in AS mode:
 *         ignoreASEmergencyRoute
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"da582a1f8028404e70d260cf1f891033:5259","type":"sequence"}]
 */
class SystemCallTypeAddMappingRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName countryCode
     * @Type string
     * @Group da582a1f8028404e70d260cf1f891033:5259
     * @MaxLength 3
     * @Pattern [0-9]|[1-9][0-9]{1,2}
     * @var string|null
     */
    protected $countryCode = null;

    /**
     * @ElementName digitMap
     * @Type string
     * @Group da582a1f8028404e70d260cf1f891033:5259
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    protected $digitMap = null;

    /**
     * @ElementName callType
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SystemCallType
     * @Group da582a1f8028404e70d260cf1f891033:5259
     * @var \CWM\BroadWorksConnector\Ocip\Models\SystemCallType|null
     */
    protected $callType = null;

    /**
     * @ElementName ignoreASEmergencyRoute
     * @Type bool
     * @Optional
     * @Group da582a1f8028404e70d260cf1f891033:5259
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
     * Getter for callType
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\SystemCallType
     */
    public function getCallType()
    {
        return $this->callType instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->callType;
    }

    /**
     * Setter for callType
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SystemCallType $callType
     * @return $this
     */
    public function setCallType(\CWM\BroadWorksConnector\Ocip\Models\SystemCallType $callType)
    {
        $this->callType = $callType;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetCallType()
    {
        $this->callType = null;
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

