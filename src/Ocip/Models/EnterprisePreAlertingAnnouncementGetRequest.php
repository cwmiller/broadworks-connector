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
 * @Groups [{"id":"6165f2b4cd549de71fe8f3171488fdd8:51","type":"sequence"}]
 */
class EnterprisePreAlertingAnnouncementGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group 6165f2b4cd549de71fe8f3171488fdd8:51
     * @var string|null
     */
    private $serviceProviderId = null;

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

