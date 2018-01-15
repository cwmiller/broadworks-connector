<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * EnterpriseCallCenterEnhancedReportingGetRequest
 *
 * Request to get an enterprise level call center enhanced reporting setting.
 *         The response is either an
 * EnterpriseCallCenterEnhancedReportingGetResponse or an ErrorResponse.
 *         
 *         Replaced by EnterpriseCallCenterEnhancedReportingGetRequest19
 */
class EnterpriseCallCenterEnhancedReportingGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
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

