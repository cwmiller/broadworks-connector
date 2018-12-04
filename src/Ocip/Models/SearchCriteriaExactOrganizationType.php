<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SearchCriteriaExactOrganizationType
 *
 * Criteria for searching for an organization type.
 *
 * @Groups [{"id":"d37849f5e289836ccd316323a7a3799a:947","type":"sequence"}]
 */
class SearchCriteriaExactOrganizationType extends SearchCriteria
{

    /**
     * @ElementName organizationType
     * @Type \CWM\BroadWorksConnector\Ocip\Models\OrganizationType
     * @Group d37849f5e289836ccd316323a7a3799a:947
     * @var \CWM\BroadWorksConnector\Ocip\Models\OrganizationType|null
     */
    private $organizationType = null;

    /**
     * Getter for organizationType
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\OrganizationType
     */
    public function getOrganizationType()
    {
        return $this->organizationType instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->organizationType;
    }

    /**
     * Setter for organizationType
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\OrganizationType $organizationType
     * @return $this
     */
    public function setOrganizationType(\CWM\BroadWorksConnector\Ocip\Models\OrganizationType $organizationType)
    {
        $this->organizationType = $organizationType;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetOrganizationType()
    {
        $this->organizationType = null;
        return $this;
    }


}

