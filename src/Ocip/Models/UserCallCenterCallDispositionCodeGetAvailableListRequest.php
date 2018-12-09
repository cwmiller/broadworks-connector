<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserCallCenterCallDispositionCodeGetAvailableListRequest
 *
 * Get the list of available Call Center Call Disposition Codes to be used by a client.
 *         The response is either UserCallCenterCallDispositionCodeGetAvailableListResponse or ErrorResponse.
 *
 * @see UserCallCenterCallDispositionCodeGetAvailableListResponse
 * @see ErrorResponse
 * @Groups [{"id":"3ac5f05d969bc771d6ba8d344d95aa72:6018","type":"sequence"}]
 */
class UserCallCenterCallDispositionCodeGetAvailableListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceUserId
     * @Type string
     * @Group 3ac5f05d969bc771d6ba8d344d95aa72:6018
     * @var string|null
     */
    private $serviceUserId = null;

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

