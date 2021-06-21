<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SearchCriteriaExactUserType
 *
 * Criteria for searching for a particular User Type.
 *
 * @Groups [{"id":"f0ada2681ca347fa83b464734259b304:1360","type":"sequence"}]
 */
class SearchCriteriaExactUserType extends SearchCriteria
{

    /**
     * @ElementName userType
     * @Type \CWM\BroadWorksConnector\Ocip\Models\UserType
     * @Group f0ada2681ca347fa83b464734259b304:1360
     * @var \CWM\BroadWorksConnector\Ocip\Models\UserType|null
     */
    private $userType = null;

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

