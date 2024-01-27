<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemOutgoingCallingPlanCallTypeAddMappingRequest
 *
 * Add a system outgoing calling plan call type mapping.
 *         The response is either SuccessResponse or ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"a63afa661ee5c74f4700e562e88c66d0:875","type":"sequence"}]
 */
class SystemOutgoingCallingPlanCallTypeAddMappingRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName countryCode
     * @Type string
     * @Group a63afa661ee5c74f4700e562e88c66d0:875
     * @MaxLength 3
     * @Pattern [0-9]|[1-9][0-9]{1,2}
     * @var string|null
     */
    protected $countryCode = null;

    /**
     * @ElementName digitMap
     * @Type string
     * @Group a63afa661ee5c74f4700e562e88c66d0:875
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    protected $digitMap = null;

    /**
     * @ElementName callType
     * @Type \CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanCallType
     * @Group a63afa661ee5c74f4700e562e88c66d0:875
     * @var \CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanCallType|null
     */
    protected $callType = null;

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
     * @return \CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanCallType
     */
    public function getCallType()
    {
        return $this->callType instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->callType;
    }

    /**
     * Setter for callType
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanCallType $callType
     * @return $this
     */
    public function setCallType(\CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanCallType $callType)
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
}

