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
 * @Groups [{"id":"0da7c658f240cdc10c3f9cb328db57d8:63","type":"sequence"}]
 */
class ServiceProviderMaliciousCallTraceGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName useSystemPlayMCTWarningAnnouncement
     * @Type bool
     * @Group 0da7c658f240cdc10c3f9cb328db57d8:63
     * @var bool|null
     */
    protected $useSystemPlayMCTWarningAnnouncement = null;

    /**
     * @ElementName playMCTWarningAnnouncement
     * @Type bool
     * @Group 0da7c658f240cdc10c3f9cb328db57d8:63
     * @var bool|null
     */
    protected $playMCTWarningAnnouncement = null;

    /**
     * Getter for useSystemPlayMCTWarningAnnouncement
     *
     * @return bool
     */
    public function getUseSystemPlayMCTWarningAnnouncement()
    {
        return $this->useSystemPlayMCTWarningAnnouncement instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->useSystemPlayMCTWarningAnnouncement;
    }

    /**
     * Setter for useSystemPlayMCTWarningAnnouncement
     *
     * @param bool $useSystemPlayMCTWarningAnnouncement
     * @return $this
     */
    public function setUseSystemPlayMCTWarningAnnouncement($useSystemPlayMCTWarningAnnouncement)
    {
        $this->useSystemPlayMCTWarningAnnouncement = $useSystemPlayMCTWarningAnnouncement;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUseSystemPlayMCTWarningAnnouncement()
    {
        $this->useSystemPlayMCTWarningAnnouncement = null;
        return $this;
    }

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

