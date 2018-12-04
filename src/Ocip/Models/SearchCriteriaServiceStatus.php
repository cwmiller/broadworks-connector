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
 * @Groups [{"id":"d37849f5e289836ccd316323a7a3799a:1908","type":"sequence"}]
 */
class SearchCriteriaServiceStatus extends SearchCriteria
{

    /**
     * @ElementName isActive
     * @Type bool
     * @Group d37849f5e289836ccd316323a7a3799a:1908
     * @var bool|null
     */
    private $isActive = null;

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

