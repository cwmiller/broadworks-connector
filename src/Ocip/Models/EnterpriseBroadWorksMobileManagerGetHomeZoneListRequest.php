<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * EnterpriseBroadWorksMobileManagerGetHomeZoneListRequest
 *
 * Get the list of home zones of the BroadWorks Mobile Manager.
 *         The response is either
 * EnterpriseBroadWorksMobileManagerGetHomeZoneListResponse or ErrorResponse.
 */
class EnterpriseBroadWorksMobileManagerGetHomeZoneListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
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

