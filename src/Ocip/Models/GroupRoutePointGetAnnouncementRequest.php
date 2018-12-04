<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupRoutePointGetAnnouncementRequest
 *
 * Get a route point's announcement settings.
 *         The response is either a GroupRoutePointGetAnnouncementResponse or an ErrorResponse.
 *         
 *       Replaced by: GroupRoutePointGetAnnouncementRequest19.
 *
 * @see GroupRoutePointGetAnnouncementResponse
 * @see ErrorResponse
 * @see GroupRoutePointGetAnnouncementRequest19
 * @Groups [{"id":"1a79c7896cb04feac6eff47a5321756e:10401","type":"sequence"}]
 */
class GroupRoutePointGetAnnouncementRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceUserId
     * @Type string
     * @Group 1a79c7896cb04feac6eff47a5321756e:10401
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

