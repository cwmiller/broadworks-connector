<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SearchCriteriaExactUserInTrunkGroup
 *
 * Criteria for searching for user in/not in a trunk group.
 *
 * @Groups [{"id":"d37849f5e289836ccd316323a7a3799a:1128","type":"sequence"}]
 */
class SearchCriteriaExactUserInTrunkGroup extends SearchCriteria
{

    /**
     * @ElementName userInTrunkGroup
     * @Type bool
     * @Group d37849f5e289836ccd316323a7a3799a:1128
     * @var bool|null
     */
    private $userInTrunkGroup = null;

    /**
     * Getter for userInTrunkGroup
     *
     * @return bool
     */
    public function getUserInTrunkGroup()
    {
        return $this->userInTrunkGroup instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->userInTrunkGroup;
    }

    /**
     * Setter for userInTrunkGroup
     *
     * @param bool $userInTrunkGroup
     * @return $this
     */
    public function setUserInTrunkGroup($userInTrunkGroup)
    {
        $this->userInTrunkGroup = $userInTrunkGroup;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUserInTrunkGroup()
    {
        $this->userInTrunkGroup = null;
        return $this;
    }


}

