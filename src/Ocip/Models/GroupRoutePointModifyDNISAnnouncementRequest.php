<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupRoutePointModifyDNISAnnouncementRequest
 *
 * Modify a route point DNIS announcement settings.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 */
class GroupRoutePointModifyDNISAnnouncementRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName dnisKey
     * @Type \CWM\BroadWorksConnector\Ocip\Models\DNISKey
     * @var \CWM\BroadWorksConnector\Ocip\Models\DNISKey|null
     */
    private $dnisKey = null;

    /**
     * @ElementName mediaOnHoldSource
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CallCenterMediaOnHoldSourceModify17
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterMediaOnHoldSourceModify17|null
     */
    private $mediaOnHoldSource = null;

    /**
     * Getter for dnisKey
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\DNISKey
     */
    public function getDnisKey()
    {
        return $this->dnisKey instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->dnisKey;
    }

    /**
     * Setter for dnisKey
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\DNISKey $dnisKey
     * @return $this
     */
    public function setDnisKey(\CWM\BroadWorksConnector\Ocip\Models\DNISKey $dnisKey)
    {
        $this->dnisKey = $dnisKey;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDnisKey()
    {
        $this->dnisKey = null;
        return $this;
    }

    /**
     * Getter for mediaOnHoldSource
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallCenterMediaOnHoldSourceModify17
     */
    public function getMediaOnHoldSource()
    {
        return $this->mediaOnHoldSource instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->mediaOnHoldSource;
    }

    /**
     * Setter for mediaOnHoldSource
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCenterMediaOnHoldSourceModify17 $mediaOnHoldSource
     * @return $this
     */
    public function setMediaOnHoldSource(\CWM\BroadWorksConnector\Ocip\Models\CallCenterMediaOnHoldSourceModify17 $mediaOnHoldSource)
    {
        $this->mediaOnHoldSource = $mediaOnHoldSource;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMediaOnHoldSource()
    {
        $this->mediaOnHoldSource = null;
        return $this;
    }


}

