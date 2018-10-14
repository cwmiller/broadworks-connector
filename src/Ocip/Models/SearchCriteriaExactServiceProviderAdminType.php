<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SearchCriteriaExactServiceProviderAdminType
 *
 * Criteria for searching for a particular service provider administrator type.
 */
class SearchCriteriaExactServiceProviderAdminType extends SearchCriteria
{

    /**
     * @ElementName type
     * @var \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminType|null
     */
    private $type = null;

    /**
     * Getter for type
     *
     * @ElementName type
     * @return \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminType|null
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Setter for type
     *
     * @ElementName type
     * @param \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminType|null $type
     * @return $this
     */
    public function setType(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminType $type)
    {
        $this->type = $type;
        return $this;
    }


}

