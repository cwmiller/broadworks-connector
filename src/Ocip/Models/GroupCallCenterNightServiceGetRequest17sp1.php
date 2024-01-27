<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupCallCenterNightServiceGetRequest17sp1
 *
 * Get a call center's night service settings.
 *         The response is either a GroupCallCenterNightServiceGetResponse17sp1 or an ErrorResponse.
 *
 * @see GroupCallCenterNightServiceGetResponse17sp1
 * @see ErrorResponse
 * @Groups [{"id":"9bff48d8661ff401ea11b6e32b924f02:107","type":"sequence"}]
 */
class GroupCallCenterNightServiceGetRequest17sp1 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName serviceUserId
     * @Type string
     * @Group 9bff48d8661ff401ea11b6e32b924f02:107
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    protected $serviceUserId = null;

    /**
     * Getter for serviceUserId
     *
     * @return string
     */
    public function getServiceUserId()
    {
        return $this->serviceUserId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->serviceUserId;
    }

    /**
     * Setter for serviceUserId
     *
     * @param string $serviceUserId
     * @return $this
     */
    public function setServiceUserId($serviceUserId)
    {
        $this->serviceUserId = $serviceUserId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetServiceUserId()
    {
        $this->serviceUserId = null;
        return $this;
    }
}

