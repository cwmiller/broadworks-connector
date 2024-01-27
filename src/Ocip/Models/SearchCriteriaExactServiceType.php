<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SearchCriteriaExactServiceType
 *
 * Criteria for searching for a particular fully specified service type.
 *
 * @Groups [{"id":"972fbf832439609ec8f2765c5637c3f1:1258","type":"sequence"}]
 */
class SearchCriteriaExactServiceType extends SearchCriteria
{
    /**
     * @ElementName serviceType
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ServiceType
     * @Group 972fbf832439609ec8f2765c5637c3f1:1258
     * @var \CWM\BroadWorksConnector\Ocip\Models\ServiceType|null
     */
    protected $serviceType = null;

    /**
     * Getter for serviceType
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\ServiceType
     */
    public function getServiceType()
    {
        return $this->serviceType instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->serviceType;
    }

    /**
     * Setter for serviceType
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\ServiceType $serviceType
     * @return $this
     */
    public function setServiceType(\CWM\BroadWorksConnector\Ocip\Models\ServiceType $serviceType)
    {
        $this->serviceType = $serviceType;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetServiceType()
    {
        $this->serviceType = null;
        return $this;
    }
}

