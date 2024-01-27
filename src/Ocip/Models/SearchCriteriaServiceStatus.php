<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SearchCriteriaServiceStatus
 *
 * Criteria for searching for services that are active or not.
 *         This search criteria data type is only intended to be used by the commands 
 *         introduced by BW-2301. 
 *         The commands are EnterpriseUserCallWaitingSettingsGetListRequest 
 *         and GroupUserCallWaitingSettingsGetListRequest.
 *
 * @see EnterpriseUserCallWaitingSettingsGetListRequest
 * @see GroupUserCallWaitingSettingsGetListRequest
 * @Groups [{"id":"972fbf832439609ec8f2765c5637c3f1:2161","type":"sequence"}]
 */
class SearchCriteriaServiceStatus extends SearchCriteria
{
    /**
     * @ElementName isActive
     * @Type bool
     * @Group 972fbf832439609ec8f2765c5637c3f1:2161
     * @var bool|null
     */
    protected $isActive = null;

    /**
     * Getter for isActive
     *
     * @return bool
     */
    public function getIsActive()
    {
        return $this->isActive instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->isActive;
    }

    /**
     * Setter for isActive
     *
     * @param bool $isActive
     * @return $this
     */
    public function setIsActive($isActive)
    {
        $this->isActive = $isActive;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetIsActive()
    {
        $this->isActive = null;
        return $this;
    }
}

