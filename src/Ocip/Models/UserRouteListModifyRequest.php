<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserRouteListModifyRequest
 *
 * Modify the route list setting and the list of number ranges and number prefixes
 * assigned to a user.
 *         The response is either SuccessResponse or ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 */
class UserRouteListModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @var string|null
     */
    private $userId = null;

    /**
     * @ElementName treatOriginationsAndPBXRedirectionsAsScreened
     * @var bool|null
     */
    private $treatOriginationsAndPBXRedirectionsAsScreened = null;

    /**
     * @ElementName useRouteListIdentityForNonEmergencyCalls
     * @var bool|null
     */
    private $useRouteListIdentityForNonEmergencyCalls = null;

    /**
     * @ElementName useRouteListIdentityForEmergencyCalls
     * @var bool|null
     */
    private $useRouteListIdentityForEmergencyCalls = null;

    /**
     * @ElementName assignedNumberRangeStartList
     * @Nillable
     * @var \CWM\BroadWorksConnector\Ocip\Models\ReplacementDNList|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $assignedNumberRangeStartList = null;

    /**
     * @ElementName assignedNumberPrefixList
     * @Nillable
     * @var \CWM\BroadWorksConnector\Ocip\Models\EnterpriseTrunkReplacementNumberPrefixList|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $assignedNumberPrefixList = null;

    /**
     * Getter for userId
     *
     * @ElementName userId
     * @return string|null
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * Setter for userId
     *
     * @ElementName userId
     * @param string|null $userId
     * @return $this
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
        return $this;
    }

    /**
     * Getter for treatOriginationsAndPBXRedirectionsAsScreened
     *
     * @ElementName treatOriginationsAndPBXRedirectionsAsScreened
     * @return bool|null
     */
    public function getTreatOriginationsAndPBXRedirectionsAsScreened()
    {
        return $this->treatOriginationsAndPBXRedirectionsAsScreened;
    }

    /**
     * Setter for treatOriginationsAndPBXRedirectionsAsScreened
     *
     * @ElementName treatOriginationsAndPBXRedirectionsAsScreened
     * @param bool|null $treatOriginationsAndPBXRedirectionsAsScreened
     * @return $this
     */
    public function setTreatOriginationsAndPBXRedirectionsAsScreened($treatOriginationsAndPBXRedirectionsAsScreened)
    {
        $this->treatOriginationsAndPBXRedirectionsAsScreened = $treatOriginationsAndPBXRedirectionsAsScreened;
        return $this;
    }

    /**
     * Getter for useRouteListIdentityForNonEmergencyCalls
     *
     * @ElementName useRouteListIdentityForNonEmergencyCalls
     * @return bool|null
     */
    public function getUseRouteListIdentityForNonEmergencyCalls()
    {
        return $this->useRouteListIdentityForNonEmergencyCalls;
    }

    /**
     * Setter for useRouteListIdentityForNonEmergencyCalls
     *
     * @ElementName useRouteListIdentityForNonEmergencyCalls
     * @param bool|null $useRouteListIdentityForNonEmergencyCalls
     * @return $this
     */
    public function setUseRouteListIdentityForNonEmergencyCalls($useRouteListIdentityForNonEmergencyCalls)
    {
        $this->useRouteListIdentityForNonEmergencyCalls = $useRouteListIdentityForNonEmergencyCalls;
        return $this;
    }

    /**
     * Getter for useRouteListIdentityForEmergencyCalls
     *
     * @ElementName useRouteListIdentityForEmergencyCalls
     * @return bool|null
     */
    public function getUseRouteListIdentityForEmergencyCalls()
    {
        return $this->useRouteListIdentityForEmergencyCalls;
    }

    /**
     * Setter for useRouteListIdentityForEmergencyCalls
     *
     * @ElementName useRouteListIdentityForEmergencyCalls
     * @param bool|null $useRouteListIdentityForEmergencyCalls
     * @return $this
     */
    public function setUseRouteListIdentityForEmergencyCalls($useRouteListIdentityForEmergencyCalls)
    {
        $this->useRouteListIdentityForEmergencyCalls = $useRouteListIdentityForEmergencyCalls;
        return $this;
    }

    /**
     * Getter for assignedNumberRangeStartList
     *
     * @ElementName assignedNumberRangeStartList
     * @Nillable
     * @return \CWM\BroadWorksConnector\Ocip\Models\ReplacementDNList|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getAssignedNumberRangeStartList()
    {
        return $this->assignedNumberRangeStartList;
    }

    /**
     * Setter for assignedNumberRangeStartList
     *
     * @ElementName assignedNumberRangeStartList
     * @Nillable
     * @param \CWM\BroadWorksConnector\Ocip\Models\ReplacementDNList|null|\CWM\BroadWorksConnector\Ocip\Nil $assignedNumberRangeStartList
     * @return $this
     */
    public function setAssignedNumberRangeStartList($assignedNumberRangeStartList)
    {
        $this->assignedNumberRangeStartList = $assignedNumberRangeStartList;
        return $this;
    }

    /**
     * Getter for assignedNumberPrefixList
     *
     * @ElementName assignedNumberPrefixList
     * @Nillable
     * @return \CWM\BroadWorksConnector\Ocip\Models\EnterpriseTrunkReplacementNumberPrefixList|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getAssignedNumberPrefixList()
    {
        return $this->assignedNumberPrefixList;
    }

    /**
     * Setter for assignedNumberPrefixList
     *
     * @ElementName assignedNumberPrefixList
     * @Nillable
     * @param \CWM\BroadWorksConnector\Ocip\Models\EnterpriseTrunkReplacementNumberPrefixList|null|\CWM\BroadWorksConnector\Ocip\Nil $assignedNumberPrefixList
     * @return $this
     */
    public function setAssignedNumberPrefixList($assignedNumberPrefixList)
    {
        $this->assignedNumberPrefixList = $assignedNumberPrefixList;
        return $this;
    }


}

