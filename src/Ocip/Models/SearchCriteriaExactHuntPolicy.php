<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SearchCriteriaExactHuntPolicy
 *
 * Criteria for searching for a particular fully specified hunt policy.
 *
 * @Groups [{"id":"f0ada2681ca347fa83b464734259b304:1044","type":"sequence"}]
 */
class SearchCriteriaExactHuntPolicy extends SearchCriteria
{

    /**
     * @ElementName huntPolicy
     * @Type \CWM\BroadWorksConnector\Ocip\Models\HuntPolicy
     * @Group f0ada2681ca347fa83b464734259b304:1044
     * @var \CWM\BroadWorksConnector\Ocip\Models\HuntPolicy|null
     */
    private $huntPolicy = null;

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

