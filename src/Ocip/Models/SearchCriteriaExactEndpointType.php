<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SearchCriteriaExactEndpointType
 *
 * Criteria for searching for a particular endpoint type.
 *
 * @Groups [{"id":"240b50f54d060859e5e275082fdf49f9:19569","type":"sequence"}]
 */
class SearchCriteriaExactEndpointType extends SearchCriteria
{
    /**
     * @ElementName endpointType
     * @Type \CWM\BroadWorksConnector\Ocip\Models\EndpointType
     * @Group 240b50f54d060859e5e275082fdf49f9:19569
     * @var \CWM\BroadWorksConnector\Ocip\Models\EndpointType|null
     */
    protected $endpointType = null;

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

