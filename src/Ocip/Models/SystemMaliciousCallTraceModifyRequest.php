<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemMaliciousCallTraceModifyRequest
 *
 * Modify a Malicious Call Trace system parameter.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemMaliciousCallTraceModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName playMCTWarningAnnouncement
     * @var bool|null
     */
    private $playMCTWarningAnnouncement = null;

    /**
     * Getter for playMCTWarningAnnouncement
     *
     * @ElementName playMCTWarningAnnouncement
     * @return bool|null
     */
    public function getPlayMCTWarningAnnouncement()
    {
        return $this->playMCTWarningAnnouncement;
    }

    /**
     * Setter for playMCTWarningAnnouncement
     *
     * @ElementName playMCTWarningAnnouncement
     * @param bool|null $playMCTWarningAnnouncement
     * @return $this
     */
    public function setPlayMCTWarningAnnouncement($playMCTWarningAnnouncement)
    {
        $this->playMCTWarningAnnouncement = $playMCTWarningAnnouncement;
        return $this;
    }


}

