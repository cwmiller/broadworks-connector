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
     * @Type string
     * @var string|null
     */
    private $userId = null;

    /**
     * @ElementName treatOriginationsAndPBXRedirectionsAsScreened
     * @Type bool
     * @var bool|null
     */
    private $treatOriginationsAndPBXRedirectionsAsScreened = null;

    /**
     * @ElementName useRouteListIdentityForNonEmergencyCalls
     * @Type bool
     * @var bool|null
     */
    private $useRouteListIdentityForNonEmergencyCalls = null;

    /**
     * @ElementName useRouteListIdentityForEmergencyCalls
     * @Type bool
     * @var bool|null
     */
    private $useRouteListIdentityForEmergencyCalls = null;

    /**
     * @ElementName assignedNumberRangeStartList
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ReplacementDNList
     * @Nillable
     * @var \CWM\BroadWorksConnector\Ocip\Models\ReplacementDNList|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $assignedNumberRangeStartList = null;

    /**
     * @ElementName assignedNumberPrefixList
     * @Type \CWM\BroadWorksConnector\Ocip\Models\EnterpriseTrunkReplacementNumberPrefixList
     * @Nillable
     * @var \CWM\BroadWorksConnector\Ocip\Models\EnterpriseTrunkReplacementNumberPrefixList|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $assignedNumberPrefixList = null;

    /**
     * Getter for userId
     *
     * @return string
     */
    public function getUserId()
    {
        return $this->userId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->userId;
    }

    /**
     * Setter for userId
     *
     * @param string $userId
     * @return $this
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUserId()
    {
        $this->userId = null;
        return $this;
    }

    /**
     * Getter for treatOriginationsAndPBXRedirectionsAsScreened
     *
     * @return bool
     */
    public function getTreatOriginationsAndPBXRedirectionsAsScreened()
    {
        return $this->treatOriginationsAndPBXRedirectionsAsScreened instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->treatOriginationsAndPBXRedirectionsAsScreened;
    }

    /**
     * Setter for treatOriginationsAndPBXRedirectionsAsScreened
     *
     * @param bool $treatOriginationsAndPBXRedirectionsAsScreened
     * @return $this
     */
    public function setTreatOriginationsAndPBXRedirectionsAsScreened($treatOriginationsAndPBXRedirectionsAsScreened)
    {
        $this->treatOriginationsAndPBXRedirectionsAsScreened = $treatOriginationsAndPBXRedirectionsAsScreened;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetTreatOriginationsAndPBXRedirectionsAsScreened()
    {
        $this->treatOriginationsAndPBXRedirectionsAsScreened = null;
        return $this;
    }

    /**
     * Getter for useRouteListIdentityForNonEmergencyCalls
     *
     * @return bool
     */
    public function getUseRouteListIdentityForNonEmergencyCalls()
    {
        return $this->useRouteListIdentityForNonEmergencyCalls instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->useRouteListIdentityForNonEmergencyCalls;
    }

    /**
     * Setter for useRouteListIdentityForNonEmergencyCalls
     *
     * @param bool $useRouteListIdentityForNonEmergencyCalls
     * @return $this
     */
    public function setUseRouteListIdentityForNonEmergencyCalls($useRouteListIdentityForNonEmergencyCalls)
    {
        $this->useRouteListIdentityForNonEmergencyCalls = $useRouteListIdentityForNonEmergencyCalls;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUseRouteListIdentityForNonEmergencyCalls()
    {
        $this->useRouteListIdentityForNonEmergencyCalls = null;
        return $this;
    }

    /**
     * Getter for useRouteListIdentityForEmergencyCalls
     *
     * @return bool
     */
    public function getUseRouteListIdentityForEmergencyCalls()
    {
        return $this->useRouteListIdentityForEmergencyCalls instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->useRouteListIdentityForEmergencyCalls;
    }

    /**
     * Setter for useRouteListIdentityForEmergencyCalls
     *
     * @param bool $useRouteListIdentityForEmergencyCalls
     * @return $this
     */
    public function setUseRouteListIdentityForEmergencyCalls($useRouteListIdentityForEmergencyCalls)
    {
        $this->useRouteListIdentityForEmergencyCalls = $useRouteListIdentityForEmergencyCalls;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUseRouteListIdentityForEmergencyCalls()
    {
        $this->useRouteListIdentityForEmergencyCalls = null;
        return $this;
    }

    /**
     * Getter for assignedNumberRangeStartList
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\ReplacementDNList|null
     */
    public function getAssignedNumberRangeStartList()
    {
        return $this->assignedNumberRangeStartList instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->assignedNumberRangeStartList;
    }

    /**
     * Setter for assignedNumberRangeStartList
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\ReplacementDNList|null $assignedNumberRangeStartList
     * @return $this
     */
    public function setAssignedNumberRangeStartList(\CWM\BroadWorksConnector\Ocip\Models\ReplacementDNList $assignedNumberRangeStartList)
    {
        if ($assignedNumberRangeStartList === null) {
            $this->assignedNumberRangeStartList = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->assignedNumberRangeStartList = $assignedNumberRangeStartList;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAssignedNumberRangeStartList()
    {
        $this->assignedNumberRangeStartList = null;
        return $this;
    }

    /**
     * Getter for assignedNumberPrefixList
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\EnterpriseTrunkReplacementNumberPrefixList|null
     */
    public function getAssignedNumberPrefixList()
    {
        return $this->assignedNumberPrefixList instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->assignedNumberPrefixList;
    }

    /**
     * Setter for assignedNumberPrefixList
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\EnterpriseTrunkReplacementNumberPrefixList|null $assignedNumberPrefixList
     * @return $this
     */
    public function setAssignedNumberPrefixList(\CWM\BroadWorksConnector\Ocip\Models\EnterpriseTrunkReplacementNumberPrefixList $assignedNumberPrefixList)
    {
        if ($assignedNumberPrefixList === null) {
            $this->assignedNumberPrefixList = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->assignedNumberPrefixList = $assignedNumberPrefixList;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAssignedNumberPrefixList()
    {
        $this->assignedNumberPrefixList = null;
        return $this;
    }


}

