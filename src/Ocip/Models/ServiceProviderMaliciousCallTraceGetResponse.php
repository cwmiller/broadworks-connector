<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderMaliciousCallTraceGetResponse
 *
 * Response to the ServiceProviderMaliciousCallTraceGetRequest.
 *         The response contains the service provider Malicious Call Trace 
 *         settings.
 *
 * @see ServiceProviderMaliciousCallTraceGetRequest
 */
class ServiceProviderMaliciousCallTraceGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName useSystemPlayMCTWarningAnnouncement
     * @var bool|null
     */
    private $useSystemPlayMCTWarningAnnouncement = null;

    /**
     * @ElementName playMCTWarningAnnouncement
     * @var bool|null
     */
    private $playMCTWarningAnnouncement = null;

    /**
     * Getter for useSystemPlayMCTWarningAnnouncement
     *
     * @ElementName useSystemPlayMCTWarningAnnouncement
     * @return bool|null
     */
    public function getUseSystemPlayMCTWarningAnnouncement()
    {
        return $this->useSystemPlayMCTWarningAnnouncement;
    }

    /**
     * Setter for useSystemPlayMCTWarningAnnouncement
     *
     * @ElementName useSystemPlayMCTWarningAnnouncement
     * @param bool|null $useSystemPlayMCTWarningAnnouncement
     * @return $this
     */
    public function setUseSystemPlayMCTWarningAnnouncement($useSystemPlayMCTWarningAnnouncement)
    {
        $this->useSystemPlayMCTWarningAnnouncement = $useSystemPlayMCTWarningAnnouncement;
        return $this;
    }

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

