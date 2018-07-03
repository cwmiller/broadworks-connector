<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderMaliciousCallTraceModifyRequest
 *
 * Modify the service provider's Malicious Call Trace settings.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 */
class ServiceProviderMaliciousCallTraceModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @var string|null
     */
    private $serviceProviderId = null;

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
     * Getter for serviceProviderId
     *
     * @ElementName serviceProviderId
     * @return string|null
     */
    public function getServiceProviderId()
    {
        return $this->serviceProviderId;
    }

    /**
     * Setter for serviceProviderId
     *
     * @ElementName serviceProviderId
     * @param string|null $serviceProviderId
     * @return $this
     */
    public function setServiceProviderId($serviceProviderId)
    {
        $this->serviceProviderId = $serviceProviderId;
        return $this;
    }

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

