<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SearchCriteriaExactUserInTrunkGroup
 *
 * Criteria for searching for user in/not in a trunk group.
 *
 * @Groups [{"id":"f0ada2681ca347fa83b464734259b304:1300","type":"sequence"}]
 */
class SearchCriteriaExactUserInTrunkGroup extends SearchCriteria
{

    /**
     * @ElementName userInTrunkGroup
     * @Type bool
     * @Group f0ada2681ca347fa83b464734259b304:1300
     * @var bool|null
     */
    protected $userInTrunkGroup = null;

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

