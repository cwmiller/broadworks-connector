<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SearchCriteriaExactServiceProviderAdminType
 *
 * Criteria for searching for a particular service provider administrator type.
 *
 * @Groups [{"id":"e446bfcbd1f39cbef57d1547014f2bb9:1037","type":"sequence"}]
 */
class SearchCriteriaExactServiceProviderAdminType extends SearchCriteria
{

    /**
     * @ElementName type
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminType
     * @Group e446bfcbd1f39cbef57d1547014f2bb9:1037
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

