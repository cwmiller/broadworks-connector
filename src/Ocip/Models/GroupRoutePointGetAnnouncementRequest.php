<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupRoutePointGetAnnouncementRequest
 *
 * Get a route point's announcement settings.
 *         The response is either a GroupRoutePointGetAnnouncementResponse or an
 * ErrorResponse.
 * 				
 * 	    Replaced by: GroupRoutePointGetAnnouncementRequest19.
 */
class GroupRoutePointGetAnnouncementRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
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

