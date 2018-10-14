<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SearchCriteriaExactEndpointType21sp1
 *
 * Criteria for searching for a particular endpoint type.
 */
class SearchCriteriaExactEndpointType21sp1 extends SearchCriteria
{

    /**
     * @ElementName endpointType
     * @var \CWM\BroadWorksConnector\Ocip\Models\EndpointType21sp1|null
     */
    private $endpointType = null;

    /**
     * Getter for endpointType
     *
     * @ElementName endpointType
     * @return \CWM\BroadWorksConnector\Ocip\Models\EndpointType21sp1|null
     */
    public function getEndpointType()
    {
        return $this->endpointType;
    }

    /**
     * Setter for endpointType
     *
     * @ElementName endpointType
     * @param \CWM\BroadWorksConnector\Ocip\Models\EndpointType21sp1|null $endpointType
     * @return $this
     */
    public function setEndpointType(\CWM\BroadWorksConnector\Ocip\Models\EndpointType21sp1 $endpointType)
    {
        $this->endpointType = $endpointType;
        return $this;
    }


}

