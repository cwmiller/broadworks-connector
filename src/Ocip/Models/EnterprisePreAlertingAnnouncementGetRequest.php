<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * EnterprisePreAlertingAnnouncementGetRequest
 *
 * Get the Enterprise pre-alerting service settings.
 *         The response is either a EnterprisePreAlertingAnnouncementGetResponse or an ErrorResponse.
 *
 * @see EnterprisePreAlertingAnnouncementGetResponse
 * @see ErrorResponse
 * @Groups [{"id":"89722c6a28e608e15bce28b0cd73fa11:51","type":"sequence"}]
 */
class EnterprisePreAlertingAnnouncementGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group 89722c6a28e608e15bce28b0cd73fa11:51
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    protected $serviceProviderId = null;

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
}

