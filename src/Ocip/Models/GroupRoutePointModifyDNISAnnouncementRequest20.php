<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupRoutePointModifyDNISAnnouncementRequest20
 *
 * Modify a route point DNIS announcement settings.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"e474d11df9a1d1d1041e589793e40de8:769","type":"sequence"}]
 */
class GroupRoutePointModifyDNISAnnouncementRequest20 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName dnisKey
     * @Type \CWM\BroadWorksConnector\Ocip\Models\DNISKey
     * @Group e474d11df9a1d1d1041e589793e40de8:769
     * @var \CWM\BroadWorksConnector\Ocip\Models\DNISKey|null
     */
    protected $dnisKey = null;

    /**
     * @ElementName mediaOnHoldSource
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CallCenterMediaOnHoldSourceModify20
     * @Optional
     * @Group e474d11df9a1d1d1041e589793e40de8:769
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterMediaOnHoldSourceModify20|null
     */
    protected $mediaOnHoldSource = null;

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
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallCenterMediaOnHoldSourceModify20
     */
    public function getMediaOnHoldSource()
    {
        return $this->mediaOnHoldSource instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->mediaOnHoldSource;
    }

    /**
     * Setter for mediaOnHoldSource
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCenterMediaOnHoldSourceModify20 $mediaOnHoldSource
     * @return $this
     */
    public function setMediaOnHoldSource(\CWM\BroadWorksConnector\Ocip\Models\CallCenterMediaOnHoldSourceModify20 $mediaOnHoldSource)
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

