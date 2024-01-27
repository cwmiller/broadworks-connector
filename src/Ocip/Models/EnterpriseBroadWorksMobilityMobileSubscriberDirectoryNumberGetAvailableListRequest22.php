<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * EnterpriseBroadWorksMobilityMobileSubscriberDirectoryNumberGetAvailableListRequest22
 *
 * Request a list of available Mobile Subscriber Directory Numbers not yet assigned to any user.
 *         The response is either EnterpriseBroadWorksMobilityMobileSubscriberDirectoryNumberGetAvailableListResponse22 or ErrorResponse.
 *
 * @see EnterpriseBroadWorksMobilityMobileSubscriberDirectoryNumberGetAvailableListResponse22
 * @see ErrorResponse
 * @Groups [{"id":"9ae9f7d53e566e21347e23e20e2a2a39:219","type":"sequence"}]
 */
class EnterpriseBroadWorksMobilityMobileSubscriberDirectoryNumberGetAvailableListRequest22 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group 9ae9f7d53e566e21347e23e20e2a2a39:219
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

