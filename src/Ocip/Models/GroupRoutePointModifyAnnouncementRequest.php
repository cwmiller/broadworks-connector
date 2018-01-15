<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupRoutePointModifyAnnouncementRequest
 *
 * Modify a route point's announcement settings.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class GroupRoutePointModifyAnnouncementRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceUserId
     * @var string|null
     */
    private $serviceUserId = null;

    /**
     * @ElementName mediaOnHoldSource
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterMediaOnHoldSourceModify17|null
     */
    private $mediaOnHoldSource = null;

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

    /**
     * Getter for mediaOnHoldSource
     *
     * @ElementName mediaOnHoldSource
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallCenterMediaOnHoldSourceModify17|null
     */
    public function getMediaOnHoldSource()
    {
        return $this->mediaOnHoldSource;
    }

    /**
     * Setter for mediaOnHoldSource
     *
     * @ElementName mediaOnHoldSource
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCenterMediaOnHoldSourceModify17|null $mediaOnHoldSource
     * @return $this
     */
    public function setMediaOnHoldSource($mediaOnHoldSource)
    {
        $this->mediaOnHoldSource = $mediaOnHoldSource;
        return $this;
    }


}

