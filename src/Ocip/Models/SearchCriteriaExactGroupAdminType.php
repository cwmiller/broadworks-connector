<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SearchCriteriaExactGroupAdminType
 *
 * Criteria for searching for a particular group administrator type.
 *
 * @Groups [{"id":"972fbf832439609ec8f2765c5637c3f1:1063","type":"sequence"}]
 */
class SearchCriteriaExactGroupAdminType extends SearchCriteria
{
    /**
     * @ElementName type
     * @Type \CWM\BroadWorksConnector\Ocip\Models\GroupAdminType
     * @Group 972fbf832439609ec8f2765c5637c3f1:1063
     * @var \CWM\BroadWorksConnector\Ocip\Models\GroupAdminType|null
     */
    protected $type = null;

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

