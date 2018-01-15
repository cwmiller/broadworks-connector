<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemOutgoingCallingPlanCallTypeDeleteMappingRequest
 *
 * Delete a system outgoing calling plan call type mapping.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class SystemOutgoingCallingPlanCallTypeDeleteMappingRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
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


}

