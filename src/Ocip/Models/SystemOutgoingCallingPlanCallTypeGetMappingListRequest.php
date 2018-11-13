<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemOutgoingCallingPlanCallTypeGetMappingListRequest
 *
 * Get a list of system outgoing calling plan call type mappings.
 *         The response is either
 * SystemOutgoingCallingPlanCallTypeGetMappingListResponse or ErrorResponse.
 *
 * @see SystemOutgoingCallingPlanCallTypeGetMappingListResponse
 * @see ErrorResponse
 */
class SystemOutgoingCallingPlanCallTypeGetMappingListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName countryCode
     * @Type string
     * @var string|null
     */
    private $countryCode = null;

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


}

