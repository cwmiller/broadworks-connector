<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * OcpCallTypeEntry
 *
 * The outgoing call plan call type entry.
 */
class OcpCallTypeEntry
{

    /**
     * @ElementName countryCode
     * @var string|null
     */
    private $countryCode = null;

    /**
     * @ElementName digitMap
     * @var string|null
     */
    private $digitMap = null;

    /**
     * @ElementName callType
     * @var \CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanCallType|null
     */
    private $callType = null;

    /**
     * Getter for countryCode
     *
     * @ElementName countryCode
     * @return string|null
     */
    public function getCountryCode()
    {
        return $this->countryCode;
    }

    /**
     * Setter for countryCode
     *
     * @ElementName countryCode
     * @param string|null $countryCode
     * @return $this
     */
    public function setCountryCode($countryCode)
    {
        $this->countryCode = $countryCode;
        return $this;
    }

    /**
     * Getter for digitMap
     *
     * @ElementName digitMap
     * @return string|null
     */
    public function getDigitMap()
    {
        return $this->digitMap;
    }

    /**
     * Setter for digitMap
     *
     * @ElementName digitMap
     * @param string|null $digitMap
     * @return $this
     */
    public function setDigitMap($digitMap)
    {
        $this->digitMap = $digitMap;
        return $this;
    }

    /**
     * Getter for callType
     *
     * @ElementName callType
     * @return \CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanCallType|null
     */
    public function getCallType()
    {
        return $this->callType;
    }

    /**
     * Setter for callType
     *
     * @ElementName callType
     * @param \CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanCallType|null $callType
     * @return $this
     */
    public function setCallType(\CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanCallType $callType)
    {
        $this->callType = $callType;
        return $this;
    }


}

