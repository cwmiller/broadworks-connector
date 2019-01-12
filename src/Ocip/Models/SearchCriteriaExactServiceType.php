<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SearchCriteriaExactServiceType
 *
 * Criteria for searching for a particular fully specified service type.
 *
 * @Groups [{"id":"f0ada2681ca347fa83b464734259b304:1135","type":"sequence"}]
 */
class SearchCriteriaExactServiceType extends SearchCriteria
{

    /**
     * @ElementName serviceType
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ServiceType
     * @Group f0ada2681ca347fa83b464734259b304:1135
     * @var \CWM\BroadWorksConnector\Ocip\Models\ServiceType|null
     */
    private $serviceType = null;

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

