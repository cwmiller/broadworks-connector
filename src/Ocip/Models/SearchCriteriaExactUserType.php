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
     * @var string|null
     */
    private $userType = null;

    /**
     * Getter for userType
     *
     * @ElementName userType
     * @return string|null
     */
    public function getUserType()
    {
        return $this->userType;
    }

    /**
     * Setter for userType
     *
     * @ElementName userType
     * @param string|null $userType
     * @return $this
     */
    public function setUserType($userType)
    {
        $this->userType = $userType;
        return $this;
    }


}

