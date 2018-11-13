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
 */
class SystemMaliciousCallTraceModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName playMCTWarningAnnouncement
     * @Type bool
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

