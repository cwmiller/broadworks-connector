<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserCallCenterCallDispositionCodeGetAvailableListRequest
 *
 * Get the list of available Call Center Call Disposition Codes to be used by a
 * client.
 *         The response is either
 * UserCallCenterCallDispositionCodeGetAvailableListResponse or ErrorResponse.
 *
 * @see UserCallCenterCallDispositionCodeGetAvailableListResponse
 * @see ErrorResponse
 */
class UserCallCenterCallDispositionCodeGetAvailableListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceUserId
     * @var string|null
     */
    private $serviceUserId = null;

    /**
     * Getter for serviceUserId
     *
     * @ElementName serviceUserId
     * @return string|null
     */
    public function getServiceUserId()
    {
        return $this->serviceUserId;
    }

    /**
     * Setter for serviceUserId
     *
     * @ElementName serviceUserId
     * @param string|null $serviceUserId
     * @return $this
     */
    public function setServiceUserId($serviceUserId)
    {
        $this->serviceUserId = $serviceUserId;
        return $this;
    }


}

