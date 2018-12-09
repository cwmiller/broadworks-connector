<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SearchCriteriaExactGroupAdminType
 *
 * Criteria for searching for a particular group administrator type.
 *
 * @Groups [{"id":"e446bfcbd1f39cbef57d1547014f2bb9:872","type":"sequence"}]
 */
class SearchCriteriaExactGroupAdminType extends SearchCriteria
{

    /**
     * @ElementName type
     * @Type \CWM\BroadWorksConnector\Ocip\Models\GroupAdminType
     * @Group e446bfcbd1f39cbef57d1547014f2bb9:872
     * @var \CWM\BroadWorksConnector\Ocip\Models\GroupAdminType|null
     */
    private $type = null;

    /**
     * Getter for type
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\GroupAdminType
     */
    public function getType()
    {
        return $this->type instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->type;
    }

    /**
     * Setter for type
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\GroupAdminType $type
     * @return $this
     */
    public function setType(\CWM\BroadWorksConnector\Ocip\Models\GroupAdminType $type)
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

