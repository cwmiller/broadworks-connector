<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SearchCriteriaExactServiceProviderAdminType
 *
 * Criteria for searching for a particular service provider administrator type.
 *
 * @Groups [{"id":"f0ada2681ca347fa83b464734259b304:1209","type":"sequence"}]
 */
class SearchCriteriaExactServiceProviderAdminType extends SearchCriteria
{

    /**
     * @ElementName type
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminType
     * @Group f0ada2681ca347fa83b464734259b304:1209
     * @var \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminType|null
     */
    private $type = null;

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

