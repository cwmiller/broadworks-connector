<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SearchCriteriaExactEndpointType21sp1
 *
 * Criteria for searching for a particular endpoint type.
 *
 * @Groups [{"id":"f0ada2681ca347fa83b464734259b304:925","type":"sequence"}]
 */
class SearchCriteriaExactEndpointType21sp1 extends SearchCriteria
{

    /**
     * @ElementName endpointType
     * @Type \CWM\BroadWorksConnector\Ocip\Models\EndpointType21sp1
     * @Group f0ada2681ca347fa83b464734259b304:925
     * @var \CWM\BroadWorksConnector\Ocip\Models\EndpointType21sp1|null
     */
    private $endpointType = null;

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

