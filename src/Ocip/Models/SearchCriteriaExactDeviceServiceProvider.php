<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SearchCriteriaExactDeviceServiceProvider
 *
 * Criteria for searching for a particular fully specified service provider
 * associated with a device.
 */
class SearchCriteriaExactDeviceServiceProvider extends SearchCriteria
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

