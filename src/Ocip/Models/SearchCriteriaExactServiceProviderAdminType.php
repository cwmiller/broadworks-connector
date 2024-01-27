<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SearchCriteriaExactServiceProviderAdminType
 *
 * Criteria for searching for a particular service provider administrator type.
 *
 * @Groups [{"id":"972fbf832439609ec8f2765c5637c3f1:1243","type":"sequence"}]
 */
class SearchCriteriaExactServiceProviderAdminType extends SearchCriteria
{
    /**
     * @ElementName type
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminType
     * @Group 972fbf832439609ec8f2765c5637c3f1:1243
     * @var \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminType|null
     */
    protected $type = null;

    /**
     * Getter for type
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminType
     */
    public function getType()
    {
        return $this->type instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->type;
    }

    /**
     * Setter for type
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminType $type
     * @return $this
     */
    public function setType(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminType $type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetType()
    {
        $this->type = null;
        return $this;
    }
}

