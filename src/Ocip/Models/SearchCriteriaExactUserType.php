<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SearchCriteriaExactUserType
 *
 * Criteria for searching for a particular User Type.
 */
class SearchCriteriaExactUserType extends SearchCriteria
{

    /**
     * @ElementName userType
     * @var \CWM\BroadWorksConnector\Ocip\Models\UserType|null
     */
    private $userType = null;

    /**
     * Getter for userType
     *
     * @ElementName userType
     * @return \CWM\BroadWorksConnector\Ocip\Models\UserType|null
     */
    public function getUserType()
    {
        return $this->userType;
    }

    /**
     * Setter for userType
     *
     * @ElementName userType
     * @param \CWM\BroadWorksConnector\Ocip\Models\UserType|null $userType
     * @return $this
     */
    public function setUserType(\CWM\BroadWorksConnector\Ocip\Models\UserType $userType)
    {
        $this->userType = $userType;
        return $this;
    }


}

