<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupCallCenterDistinctiveRingingGetRequest
 *
 * Get the distinctive ringing configuration values for call center.
 *         The response is either a GroupCallCenterDistinctiveRingingGetResponse 
 *         or an ErrorResponse.
 *
 * @see GroupCallCenterDistinctiveRingingGetResponse
 * @see ErrorResponse
 * @Groups [{"id":"e2c537e3e39483b96620673a7012ffdd:3224","type":"sequence"}]
 */
class GroupCallCenterDistinctiveRingingGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceUserId
     * @Type string
     * @Group e2c537e3e39483b96620673a7012ffdd:3224
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

