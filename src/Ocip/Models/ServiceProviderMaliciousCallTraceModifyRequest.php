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
 * @Groups [{"id":"0da7c658f240cdc10c3f9cb328db57d8:80","type":"sequence"}]
 */
class ServiceProviderMaliciousCallTraceModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group 0da7c658f240cdc10c3f9cb328db57d8:80
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    protected $serviceProviderId = null;

    /**
     * @ElementName useSystemPlayMCTWarningAnnouncement
     * @Type bool
     * @Optional
     * @Group 0da7c658f240cdc10c3f9cb328db57d8:80
     * @var bool|null
     */
    protected $useSystemPlayMCTWarningAnnouncement = null;

    /**
     * @ElementName playMCTWarningAnnouncement
     * @Type bool
     * @Optional
     * @Group 0da7c658f240cdc10c3f9cb328db57d8:80
     * @var bool|null
     */
    protected $playMCTWarningAnnouncement = null;

    /**
     * Getter for serviceProviderId
     *
     * @return string
     */
    public function getServiceProviderId()
    {
        return $this->serviceProviderId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->serviceProviderId;
    }

    /**
     * Setter for serviceProviderId
     *
     * @param string $serviceProviderId
     * @return $this
     */
    public function setServiceProviderId($serviceProviderId)
    {
        $this->serviceProviderId = $serviceProviderId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetServiceProviderId()
    {
        $this->serviceProviderId = null;
        return $this;
    }

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

