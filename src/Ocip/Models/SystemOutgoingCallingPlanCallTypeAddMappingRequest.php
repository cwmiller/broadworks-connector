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
 * @Groups [{"id":"8366f5f5d1fbfb9742236aba282c1dab:876","type":"sequence"}]
 */
class SystemOutgoingCallingPlanCallTypeAddMappingRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName countryCode
     * @Type string
     * @Group 8366f5f5d1fbfb9742236aba282c1dab:876
     * @var string|null
     */
    private $countryCode = null;

    /**
     * @ElementName digitMap
     * @Type string
     * @Group 8366f5f5d1fbfb9742236aba282c1dab:876
     * @var string|null
     */
    private $digitMap = null;

    /**
     * @ElementName callType
     * @Type \CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanCallType
     * @Group 8366f5f5d1fbfb9742236aba282c1dab:876
     * @var \CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanCallType|null
     */
    private $callType = null;

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

