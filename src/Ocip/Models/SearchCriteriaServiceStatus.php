<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SearchCriteriaServiceStatus
 *
 * Criteria for searching for services that are active or not.
 *         This search criteria data type is only intended to be used by the
 * commands 
 *         introduced by BW-2301. 
 *         The commands are EnterpriseUserCallWaitingSettingsGetListRequest 
 *         and GroupUserCallWaitingSettingsGetListRequest.
 */
class SearchCriteriaServiceStatus extends SearchCriteria
{

    /**
     * @ElementName isActive
     * @var bool|null
     */
    private $isActive = null;

    /**
     * Getter for isActive
     *
     * @ElementName isActive
     * @return bool|null
     */
    public function getIsActive()
    {
        return $this->isActive;
    }

    /**
     * Setter for isActive
     *
     * @ElementName isActive
     * @param bool|null $isActive
     * @return $this
     */
    public function setIsActive($isActive)
    {
        $this->isActive = $isActive;
        return $this;
    }


}

