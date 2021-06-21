<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SearchCriteriaExactEndpointType
 *
 * Criteria for searching for a particular endpoint type.
 *
 * @Groups [{"id":"de4d76f01f337fe4694212ec9f771753:14989","type":"sequence"}]
 */
class SearchCriteriaExactEndpointType extends SearchCriteria
{

    /**
     * @ElementName endpointType
     * @Type \CWM\BroadWorksConnector\Ocip\Models\EndpointType
     * @Group de4d76f01f337fe4694212ec9f771753:14989
     * @var \CWM\BroadWorksConnector\Ocip\Models\EndpointType|null
     */
    private $endpointType = null;

    /**
     * Getter for endpointType
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\EndpointType
     */
    public function getEndpointType()
    {
        return $this->endpointType instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->endpointType;
    }

    /**
     * Setter for endpointType
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\EndpointType $endpointType
     * @return $this
     */
    public function setEndpointType(\CWM\BroadWorksConnector\Ocip\Models\EndpointType $endpointType)
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

