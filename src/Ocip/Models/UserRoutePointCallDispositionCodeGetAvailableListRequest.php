<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserRoutePointCallDispositionCodeGetAvailableListRequest
 *
 * Get the list of available Route Point Call Disposition Codes to be used by a client.
 *         The response is either UserRoutePointCallDispositionCodeGetAvailableListResponse or ErrorResponse.
 *
 * @see UserRoutePointCallDispositionCodeGetAvailableListResponse
 * @see ErrorResponse
 * @Groups [{"id":"08c06bb3683a696d340b1644025134a4:1199","type":"sequence"}]
 */
class UserRoutePointCallDispositionCodeGetAvailableListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceUserId
     * @Type string
     * @Group 08c06bb3683a696d340b1644025134a4:1199
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

