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
 * @Groups [{"id":"be7f3162f133f8d7fcc75e712b0258e6:136","type":"sequence"}]
 */
class SystemMaliciousCallTraceModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName playMCTWarningAnnouncement
     * @Type bool
     * @Optional
     * @Group be7f3162f133f8d7fcc75e712b0258e6:136
     * @var bool|null
     */
    protected $playMCTWarningAnnouncement = null;

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

