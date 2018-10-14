<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SearchCriteriaExactGroupAdminType
 *
 * Criteria for searching for a particular group administrator type.
 */
class SearchCriteriaExactGroupAdminType extends SearchCriteria
{

    /**
     * @ElementName type
     * @var \CWM\BroadWorksConnector\Ocip\Models\GroupAdminType|null
     */
    private $type = null;

    /**
     * Getter for type
     *
     * @ElementName type
     * @return \CWM\BroadWorksConnector\Ocip\Models\GroupAdminType|null
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Setter for type
     *
     * @ElementName type
     * @param \CWM\BroadWorksConnector\Ocip\Models\GroupAdminType|null $type
     * @return $this
     */
    public function setType(\CWM\BroadWorksConnector\Ocip\Models\GroupAdminType $type)
    {
        $this->type = $type;
        return $this;
    }


}

