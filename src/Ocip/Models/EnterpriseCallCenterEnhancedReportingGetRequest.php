<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * EnterpriseCallCenterEnhancedReportingGetRequest
 *
 * Request to get an enterprise level call center enhanced reporting setting.
 *         The response is either an EnterpriseCallCenterEnhancedReportingGetResponse or an ErrorResponse.
 *         
 *         Replaced by EnterpriseCallCenterEnhancedReportingGetRequest19
 *
 * @see EnterpriseCallCenterEnhancedReportingGetResponse
 * @see ErrorResponse
 * @see EnterpriseCallCenterEnhancedReportingGetRequest19
 * @Groups [{"id":"ab0042aa512abc10edb3c55e4b416b0b:2108","type":"sequence"}]
 */
class EnterpriseCallCenterEnhancedReportingGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group ab0042aa512abc10edb3c55e4b416b0b:2108
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

