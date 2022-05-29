<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SearchCriteriaExactDnActivation
 *
 * Criteria for searching for a particular Dn activation state.
 *
 * @Groups [{"id":"f0ada2681ca347fa83b464734259b304:954","type":"sequence"}]
 */
class SearchCriteriaExactDnActivation extends SearchCriteria
{

    /**
     * @ElementName activated
     * @Type bool
     * @Group f0ada2681ca347fa83b464734259b304:954
     * @var bool|null
     */
    protected $activated = null;

    /**
     * Getter for activated
     *
     * @return bool
     */
    public function getActivated()
    {
        return $this->activated instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->activated;
    }

    /**
     * Setter for activated
     *
     * @param bool $activated
     * @return $this
     */
    public function setActivated($activated)
    {
        $this->activated = $activated;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetActivated()
    {
        $this->activated = null;
        return $this;
    }


}

