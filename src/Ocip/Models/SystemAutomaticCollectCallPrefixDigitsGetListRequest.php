<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemAutomaticCollectCallPrefixDigitsGetListRequest
 *
 * Get the system automatic collect call prefix digits lists.
 *         The response is either SystemAutomaticCollectCallPrefixDigitsGetListResponse or ErrorResponse.
 *
 * @see SystemAutomaticCollectCallPrefixDigitsGetListResponse
 * @see ErrorResponse
 * @Groups [{"id":"af1b47d7cab3335a81456e64e42371b0:129","type":"sequence"}]
 */
class SystemAutomaticCollectCallPrefixDigitsGetListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName countryCode
     * @Type string
     * @Optional
     * @Group af1b47d7cab3335a81456e64e42371b0:129
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

