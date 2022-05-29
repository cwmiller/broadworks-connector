<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SearchCriteriaExactDomainLevel
 *
 * Criteria for searching for a particular domain level.
 *
 * @Groups [{"id":"f0ada2681ca347fa83b464734259b304:999","type":"sequence"}]
 */
class SearchCriteriaExactDomainLevel extends SearchCriteria
{

    /**
     * @ElementName domainLevel
     * @Type \CWM\BroadWorksConnector\Ocip\Models\DomainLevel
     * @Group f0ada2681ca347fa83b464734259b304:999
     * @var \CWM\BroadWorksConnector\Ocip\Models\DomainLevel|null
     */
    protected $domainLevel = null;

    /**
     * Getter for domainLevel
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\DomainLevel
     */
    public function getDomainLevel()
    {
        return $this->domainLevel instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->domainLevel;
    }

    /**
     * Setter for domainLevel
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\DomainLevel $domainLevel
     * @return $this
     */
    public function setDomainLevel(\CWM\BroadWorksConnector\Ocip\Models\DomainLevel $domainLevel)
    {
        $this->domainLevel = $domainLevel;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDomainLevel()
    {
        $this->domainLevel = null;
        return $this;
    }


}

