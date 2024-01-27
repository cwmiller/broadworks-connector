<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SearchCriteriaExactHuntPolicy
 *
 * Criteria for searching for a particular fully specified hunt policy.
 *
 * @Groups [{"id":"972fbf832439609ec8f2765c5637c3f1:1078","type":"sequence"}]
 */
class SearchCriteriaExactHuntPolicy extends SearchCriteria
{
    /**
     * @ElementName huntPolicy
     * @Type \CWM\BroadWorksConnector\Ocip\Models\HuntPolicy
     * @Group 972fbf832439609ec8f2765c5637c3f1:1078
     * @var \CWM\BroadWorksConnector\Ocip\Models\HuntPolicy|null
     */
    protected $huntPolicy = null;

    /**
     * Getter for huntPolicy
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\HuntPolicy
     */
    public function getHuntPolicy()
    {
        return $this->huntPolicy instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->huntPolicy;
    }

    /**
     * Setter for huntPolicy
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\HuntPolicy $huntPolicy
     * @return $this
     */
    public function setHuntPolicy(\CWM\BroadWorksConnector\Ocip\Models\HuntPolicy $huntPolicy)
    {
        $this->huntPolicy = $huntPolicy;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetHuntPolicy()
    {
        $this->huntPolicy = null;
        return $this;
    }
}

