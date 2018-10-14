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
     * @var \CWM\BroadWorksConnector\Ocip\Models\OrganizationType|null
     */
    private $organizationType = null;

    /**
     * Getter for organizationType
     *
     * @ElementName organizationType
     * @return \CWM\BroadWorksConnector\Ocip\Models\OrganizationType|null
     */
    public function getOrganizationType()
    {
        return $this->organizationType;
    }

    /**
     * Setter for organizationType
     *
     * @ElementName organizationType
     * @param \CWM\BroadWorksConnector\Ocip\Models\OrganizationType|null $organizationType
     * @return $this
     */
    public function setOrganizationType(\CWM\BroadWorksConnector\Ocip\Models\OrganizationType $organizationType)
    {
        $this->organizationType = $organizationType;
        return $this;
    }


}

