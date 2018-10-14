<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SearchCriteriaExactEndpointType
 *
 * Criteria for searching for a particular endpoint type.
 */
class SearchCriteriaExactEndpointType extends SearchCriteria
{

    /**
     * @ElementName endpointType
     * @var \CWM\BroadWorksConnector\Ocip\Models\EndpointType|null
     */
    private $endpointType = null;

    /**
     * Getter for endpointType
     *
     * @ElementName endpointType
     * @return \CWM\BroadWorksConnector\Ocip\Models\EndpointType|null
     */
    public function getEndpointType()
    {
        return $this->endpointType;
    }

    /**
     * Setter for endpointType
     *
     * @ElementName endpointType
     * @param \CWM\BroadWorksConnector\Ocip\Models\EndpointType|null $endpointType
     * @return $this
     */
    public function setEndpointType(\CWM\BroadWorksConnector\Ocip\Models\EndpointType $endpointType)
    {
        $this->endpointType = $endpointType;
        return $this;
    }


}

