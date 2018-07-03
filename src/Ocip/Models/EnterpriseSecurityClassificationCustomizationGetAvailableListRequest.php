<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * EnterpriseSecurityClassificationCustomizationGetAvailableListRequest
 *
 * Get the enterprise security classification list. If it is not customized, it
 * returns the system default list.
 *         The response is either an
 * EnterpriseSecurityClassificationCustomizationGetAvailableListResponse or an
 * ErrorResponse.
 *
 * @see EnterpriseSecurityClassificationCustomizationGetAvailableListResponse
 * @see ErrorResponse
 */
class EnterpriseSecurityClassificationCustomizationGetAvailableListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
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

