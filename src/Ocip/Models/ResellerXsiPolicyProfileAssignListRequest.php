<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ResellerXsiPolicyProfileAssignListRequest
 *
 * Assign a list of Xsi policy profile to a reseller.
 *         It contains the service provider, group, user level Xsi policy profile. 
 *         Each level has one default Xsi policy profile assigned.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"d45e381d6dbac771631649063122a42e:962","type":"sequence"}]
 */
class ResellerXsiPolicyProfileAssignListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName resellerId
     * @Type string
     * @Group d45e381d6dbac771631649063122a42e:962
     * @MinLength 1
     * @MaxLength 36
     * @var string|null
     */
    protected $resellerId = null;

    /**
     * @ElementName spXsiPolicyProfile
     * @Type \CWM\BroadWorksConnector\Ocip\Models\XsiPolicyProfileAssignEntry
     * @Optional
     * @Group d45e381d6dbac771631649063122a42e:962
     * @var \CWM\BroadWorksConnector\Ocip\Models\XsiPolicyProfileAssignEntry|null
     */
    protected $spXsiPolicyProfile = null;

    /**
     * @ElementName groupXsiPolicyProfile
     * @Type \CWM\BroadWorksConnector\Ocip\Models\XsiPolicyProfileAssignEntry
     * @Optional
     * @Group d45e381d6dbac771631649063122a42e:962
     * @var \CWM\BroadWorksConnector\Ocip\Models\XsiPolicyProfileAssignEntry|null
     */
    protected $groupXsiPolicyProfile = null;

    /**
     * @ElementName userXsiPolicyProfile
     * @Type \CWM\BroadWorksConnector\Ocip\Models\XsiPolicyProfileAssignEntry
     * @Optional
     * @Group d45e381d6dbac771631649063122a42e:962
     * @var \CWM\BroadWorksConnector\Ocip\Models\XsiPolicyProfileAssignEntry|null
     */
    protected $userXsiPolicyProfile = null;

    /**
     * Getter for resellerId
     *
     * @return string
     */
    public function getResellerId()
    {
        return $this->resellerId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->resellerId;
    }

    /**
     * Setter for resellerId
     *
     * @param string $resellerId
     * @return $this
     */
    public function setResellerId($resellerId)
    {
        $this->resellerId = $resellerId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetResellerId()
    {
        $this->resellerId = null;
        return $this;
    }

    /**
     * Getter for spXsiPolicyProfile
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\XsiPolicyProfileAssignEntry
     */
    public function getSpXsiPolicyProfile()
    {
        return $this->spXsiPolicyProfile instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->spXsiPolicyProfile;
    }

    /**
     * Setter for spXsiPolicyProfile
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\XsiPolicyProfileAssignEntry $spXsiPolicyProfile
     * @return $this
     */
    public function setSpXsiPolicyProfile(\CWM\BroadWorksConnector\Ocip\Models\XsiPolicyProfileAssignEntry $spXsiPolicyProfile)
    {
        $this->spXsiPolicyProfile = $spXsiPolicyProfile;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSpXsiPolicyProfile()
    {
        $this->spXsiPolicyProfile = null;
        return $this;
    }

    /**
     * Getter for groupXsiPolicyProfile
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\XsiPolicyProfileAssignEntry
     */
    public function getGroupXsiPolicyProfile()
    {
        return $this->groupXsiPolicyProfile instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->groupXsiPolicyProfile;
    }

    /**
     * Setter for groupXsiPolicyProfile
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\XsiPolicyProfileAssignEntry $groupXsiPolicyProfile
     * @return $this
     */
    public function setGroupXsiPolicyProfile(\CWM\BroadWorksConnector\Ocip\Models\XsiPolicyProfileAssignEntry $groupXsiPolicyProfile)
    {
        $this->groupXsiPolicyProfile = $groupXsiPolicyProfile;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetGroupXsiPolicyProfile()
    {
        $this->groupXsiPolicyProfile = null;
        return $this;
    }

    /**
     * Getter for userXsiPolicyProfile
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\XsiPolicyProfileAssignEntry
     */
    public function getUserXsiPolicyProfile()
    {
        return $this->userXsiPolicyProfile instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->userXsiPolicyProfile;
    }

    /**
     * Setter for userXsiPolicyProfile
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\XsiPolicyProfileAssignEntry $userXsiPolicyProfile
     * @return $this
     */
    public function setUserXsiPolicyProfile(\CWM\BroadWorksConnector\Ocip\Models\XsiPolicyProfileAssignEntry $userXsiPolicyProfile)
    {
        $this->userXsiPolicyProfile = $userXsiPolicyProfile;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUserXsiPolicyProfile()
    {
        $this->userXsiPolicyProfile = null;
        return $this;
    }
}

