<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemCallTypeGetMappingListRequest
 *
 * Get a list of system call type mappings.
 *         The response is either SystemCallTypeGetMappingListResponse or ErrorResponse.
 *
 * @see SystemCallTypeGetMappingListResponse
 * @see ErrorResponse
 * @Groups [{"id":"da582a1f8028404e70d260cf1f891033:5324","type":"sequence"}]
 */
class SystemCallTypeGetMappingListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName countryCode
     * @Type string
     * @Optional
     * @Group da582a1f8028404e70d260cf1f891033:5324
     * @MaxLength 3
     * @Pattern [0-9]|[1-9][0-9]{1,2}
     * @var string|null
     */
    protected $countryCode = null;

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

