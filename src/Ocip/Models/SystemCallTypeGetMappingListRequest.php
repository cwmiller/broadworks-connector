<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemCallTypeGetMappingListRequest
 *
 * Get a list of system call type mappings.
 *         The response is either SystemCallTypeGetMappingListResponse or
 * ErrorResponse.
 */
class SystemCallTypeGetMappingListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName countryCode
     * @var string|null
     */
    private $countryCode = null;

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


}

