<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SearchCriteriaExactEndpointType21sp1
 *
 * Criteria for searching for a particular endpoint type.
 *
 * @Groups [{"id":"972fbf832439609ec8f2765c5637c3f1:1048","type":"sequence"}]
 */
class SearchCriteriaExactEndpointType21sp1 extends SearchCriteria
{
    /**
     * @ElementName endpointType
     * @Type \CWM\BroadWorksConnector\Ocip\Models\EndpointType21sp1
     * @Group 972fbf832439609ec8f2765c5637c3f1:1048
     * @var \CWM\BroadWorksConnector\Ocip\Models\EndpointType21sp1|null
     */
    protected $endpointType = null;

    /**
     * Getter for endpointType
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\EndpointType21sp1
     */
    public function getEndpointType()
    {
        return $this->endpointType instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->endpointType;
    }

    /**
     * Setter for endpointType
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\EndpointType21sp1 $endpointType
     * @return $this
     */
    public function setEndpointType(\CWM\BroadWorksConnector\Ocip\Models\EndpointType21sp1 $endpointType)
    {
        $this->endpointType = $endpointType;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEndpointType()
    {
        $this->endpointType = null;
        return $this;
    }
}

