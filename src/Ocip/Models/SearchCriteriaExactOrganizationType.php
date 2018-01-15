<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SearchCriteriaExactOrganizationType
 *
 * Criteria for searching for an organization type.
 */
class SearchCriteriaExactOrganizationType extends SearchCriteria
{

    /**
     * @ElementName organizationType
     * @var string|null
     */
    private $organizationType = null;

    /**
     * Getter for organizationType
     *
     * @ElementName organizationType
     * @return string|null
     */
    public function getOrganizationType()
    {
        return $this->organizationType;
    }

    /**
     * Setter for organizationType
     *
     * @ElementName organizationType
     * @param string|null $organizationType
     * @return $this
     */
    public function setOrganizationType($organizationType)
    {
        $this->organizationType = $organizationType;
        return $this;
    }


}

