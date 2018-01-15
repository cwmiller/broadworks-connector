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
     * @var string|null
     */
    private $serviceType = null;

    /**
     * Getter for serviceType
     *
     * @ElementName serviceType
     * @return string|null
     */
    public function getServiceType()
    {
        return $this->serviceType;
    }

    /**
     * Setter for serviceType
     *
     * @ElementName serviceType
     * @param string|null $serviceType
     * @return $this
     */
    public function setServiceType($serviceType)
    {
        $this->serviceType = $serviceType;
        return $this;
    }


}

