<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SearchCriteriaExactUserInTrunkGroup
 *
 * Criteria for searching for user in/not in a trunk group.
 */
class SearchCriteriaExactUserInTrunkGroup extends SearchCriteria
{

    /**
     * @ElementName userInTrunkGroup
     * @var bool|null
     */
    private $userInTrunkGroup = null;

    /**
     * Getter for userInTrunkGroup
     *
     * @ElementName userInTrunkGroup
     * @return bool|null
     */
    public function getUserInTrunkGroup()
    {
        return $this->userInTrunkGroup;
    }

    /**
     * Setter for userInTrunkGroup
     *
     * @ElementName userInTrunkGroup
     * @param bool|null $userInTrunkGroup
     * @return $this
     */
    public function setUserInTrunkGroup($userInTrunkGroup)
    {
        $this->userInTrunkGroup = $userInTrunkGroup;
        return $this;
    }


}

