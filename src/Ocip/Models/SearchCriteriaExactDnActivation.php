<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SearchCriteriaExactDnActivation
 *
 * Criteria for searching for a particular Dn activation state.
 *
 * @Groups [{"id":"d37849f5e289836ccd316323a7a3799a:797","type":"sequence"}]
 */
class SearchCriteriaExactDnActivation extends SearchCriteria
{

    /**
     * @ElementName activated
     * @Type bool
     * @Group d37849f5e289836ccd316323a7a3799a:797
     * @var bool|null
     */
    private $activated = null;

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

