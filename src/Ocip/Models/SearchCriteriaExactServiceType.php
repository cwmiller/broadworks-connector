<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SearchCriteriaExactServiceType
 *
 * Criteria for searching for a particular fully specified service type.
 */
class SearchCriteriaExactServiceType extends SearchCriteria
{

    /**
     * @ElementName serviceType
     * @var \CWM\BroadWorksConnector\Ocip\Models\ServiceType|null
     */
    private $serviceType = null;

    /**
     * Getter for serviceType
     *
     * @ElementName serviceType
     * @return \CWM\BroadWorksConnector\Ocip\Models\ServiceType|null
     */
    public function getServiceType()
    {
        return $this->serviceType;
    }

    /**
     * Setter for serviceType
     *
     * @ElementName serviceType
     * @param \CWM\BroadWorksConnector\Ocip\Models\ServiceType|null $serviceType
     * @return $this
     */
    public function setServiceType(\CWM\BroadWorksConnector\Ocip\Models\ServiceType $serviceType)
    {
        $this->serviceType = $serviceType;
        return $this;
    }


}

