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
     * @var string|null
     */
    private $endpointType = null;

    /**
     * Getter for endpointType
     *
     * @ElementName endpointType
     * @return string|null
     */
    public function getEndpointType()
    {
        return $this->endpointType;
    }

    /**
     * Setter for endpointType
     *
     * @ElementName endpointType
     * @param string|null $endpointType
     * @return $this
     */
    public function setEndpointType($endpointType)
    {
        $this->endpointType = $endpointType;
        return $this;
    }


}

