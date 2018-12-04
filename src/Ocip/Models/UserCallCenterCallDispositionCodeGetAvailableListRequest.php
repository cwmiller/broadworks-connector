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
 * @Groups [{"id":"69c2aeb1186dc97a4f4c36d9609ddb49:6018","type":"sequence"}]
 */
class UserCallCenterCallDispositionCodeGetAvailableListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceUserId
     * @Type string
     * @Group 69c2aeb1186dc97a4f4c36d9609ddb49:6018
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

