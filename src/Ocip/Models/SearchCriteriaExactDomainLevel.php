<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SearchCriteriaExactDomainLevel
 *
 * Criteria for searching for a particular domain level.
 *
 * @Groups [{"id":"972fbf832439609ec8f2765c5637c3f1:1033","type":"sequence"}]
 */
class SearchCriteriaExactDomainLevel extends SearchCriteria
{
    /**
     * @ElementName domainLevel
     * @Type \CWM\BroadWorksConnector\Ocip\Models\DomainLevel
     * @Group 972fbf832439609ec8f2765c5637c3f1:1033
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

