<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * EnterprisePreAlertingAnnouncementGetRequest
 *
 * Get the Enterprise pre-alerting service settings.
 *         The response is either a EnterprisePreAlertingAnnouncementGetResponse or
 * an ErrorResponse.
 *
 * @see EnterprisePreAlertingAnnouncementGetResponse
 * @see ErrorResponse
 */
class EnterprisePreAlertingAnnouncementGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @var string|null
     */
    private $serviceProviderId = null;

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


}

