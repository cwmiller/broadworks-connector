<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SearchCriteriaExactDnActivation
 *
 * Criteria for searching for a particular Dn activation state.
 */
class SearchCriteriaExactDnActivation extends SearchCriteria
{

    /**
     * @ElementName activated
     * @var bool|null
     */
    private $activated = null;

    /**
     * Getter for activated
     *
     * @ElementName activated
     * @return bool|null
     */
    public function getActivated()
    {
        return $this->activated;
    }

    /**
     * Setter for activated
     *
     * @ElementName activated
     * @param bool|null $activated
     * @return $this
     */
    public function setActivated($activated)
    {
        $this->activated = $activated;
        return $this;
    }


}

