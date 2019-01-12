<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemMaliciousCallTraceModifyRequest
 *
 * Modify a Malicious Call Trace system parameter.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"0da7c658f240cdc10c3f9cb328db57d8:136","type":"sequence"}]
 */
class SystemMaliciousCallTraceModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName playMCTWarningAnnouncement
     * @Type bool
     * @Optional
     * @Group 0da7c658f240cdc10c3f9cb328db57d8:136
     * @var bool|null
     */
    private $playMCTWarningAnnouncement = null;

    /**
     * Getter for playMCTWarningAnnouncement
     *
     * @return bool
     */
    public function getPlayMCTWarningAnnouncement()
    {
        return $this->playMCTWarningAnnouncement instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->playMCTWarningAnnouncement;
    }

    /**
     * Setter for playMCTWarningAnnouncement
     *
     * @param bool $playMCTWarningAnnouncement
     * @return $this
     */
    public function setPlayMCTWarningAnnouncement($playMCTWarningAnnouncement)
    {
        $this->playMCTWarningAnnouncement = $playMCTWarningAnnouncement;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetPlayMCTWarningAnnouncement()
    {
        $this->playMCTWarningAnnouncement = null;
        return $this;
    }


}

