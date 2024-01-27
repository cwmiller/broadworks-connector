<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SearchCriteriaExactUserType
 *
 * Criteria for searching for a particular User Type.
 *
 * @Groups [{"id":"972fbf832439609ec8f2765c5637c3f1:1409","type":"sequence"}]
 */
class SearchCriteriaExactUserType extends SearchCriteria
{
    /**
     * @ElementName userType
     * @Type \CWM\BroadWorksConnector\Ocip\Models\UserType
     * @Group 972fbf832439609ec8f2765c5637c3f1:1409
     * @var \CWM\BroadWorksConnector\Ocip\Models\UserType|null
     */
    protected $userType = null;

    /**
     * Getter for userType
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\UserType
     */
    public function getUserType()
    {
        return $this->userType instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->userType;
    }

    /**
     * Setter for userType
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\UserType $userType
     * @return $this
     */
    public function setUserType(\CWM\BroadWorksConnector\Ocip\Models\UserType $userType)
    {
        $this->userType = $userType;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUserType()
    {
        $this->userType = null;
        return $this;
    }
}

