<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SearchCriteriaExactDeviceServiceProvider
 *
 * Criteria for searching for a particular fully specified service provider associated with a device.
 *
 * @Groups [{"id":"f0ada2681ca347fa83b464734259b304:850","type":"sequence"}]
 */
class SearchCriteriaExactDeviceServiceProvider extends SearchCriteria
{

    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group f0ada2681ca347fa83b464734259b304:850
     * @MinLength 1
     * @MaxLength 30
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

