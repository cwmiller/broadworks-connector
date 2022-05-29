<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ResellerXsiPolicyProfileModifyDefaultRequest
 *
 * Modifies the default Xsi policy profile for a reseller.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"b009175f2a2a9d38115e319a6ad64d7f:1041","type":"sequence"}]
 */
class ResellerXsiPolicyProfileModifyDefaultRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName resellerId
     * @Type string
     * @Group b009175f2a2a9d38115e319a6ad64d7f:1041
     * @MinLength 1
     * @MaxLength 36
     * @var string|null
     */
    protected $resellerId = null;

    /**
     * @ElementName spDefaultXsiPolicyProfile
     * @Type string
     * @Optional
     * @Group b009175f2a2a9d38115e319a6ad64d7f:1041
     * @MinLength 1
     * @MaxLength 40
     * @var string|null
     */
    protected $spDefaultXsiPolicyProfile = null;

    /**
     * @ElementName groupDefaultXsiPolicyProfile
     * @Type string
     * @Optional
     * @Group b009175f2a2a9d38115e319a6ad64d7f:1041
     * @MinLength 1
     * @MaxLength 40
     * @var string|null
     */
    protected $groupDefaultXsiPolicyProfile = null;

    /**
     * @ElementName userDefaultXsiPolicyProfile
     * @Type string
     * @Optional
     * @Group b009175f2a2a9d38115e319a6ad64d7f:1041
     * @MinLength 1
     * @MaxLength 40
     * @var string|null
     */
    protected $userDefaultXsiPolicyProfile = null;

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
     * Getter for spDefaultXsiPolicyProfile
     *
     * @return string
     */
    public function getSpDefaultXsiPolicyProfile()
    {
        return $this->spDefaultXsiPolicyProfile instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->spDefaultXsiPolicyProfile;
    }

    /**
     * Setter for spDefaultXsiPolicyProfile
     *
     * @param string $spDefaultXsiPolicyProfile
     * @return $this
     */
    public function setSpDefaultXsiPolicyProfile($spDefaultXsiPolicyProfile)
    {
        $this->spDefaultXsiPolicyProfile = $spDefaultXsiPolicyProfile;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSpDefaultXsiPolicyProfile()
    {
        $this->spDefaultXsiPolicyProfile = null;
        return $this;
    }

    /**
     * Getter for groupDefaultXsiPolicyProfile
     *
     * @return string
     */
    public function getGroupDefaultXsiPolicyProfile()
    {
        return $this->groupDefaultXsiPolicyProfile instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->groupDefaultXsiPolicyProfile;
    }

    /**
     * Setter for groupDefaultXsiPolicyProfile
     *
     * @param string $groupDefaultXsiPolicyProfile
     * @return $this
     */
    public function setGroupDefaultXsiPolicyProfile($groupDefaultXsiPolicyProfile)
    {
        $this->groupDefaultXsiPolicyProfile = $groupDefaultXsiPolicyProfile;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetGroupDefaultXsiPolicyProfile()
    {
        $this->groupDefaultXsiPolicyProfile = null;
        return $this;
    }

    /**
     * Getter for userDefaultXsiPolicyProfile
     *
     * @return string
     */
    public function getUserDefaultXsiPolicyProfile()
    {
        return $this->userDefaultXsiPolicyProfile instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->userDefaultXsiPolicyProfile;
    }

    /**
     * Setter for userDefaultXsiPolicyProfile
     *
     * @param string $userDefaultXsiPolicyProfile
     * @return $this
     */
    public function setUserDefaultXsiPolicyProfile($userDefaultXsiPolicyProfile)
    {
        $this->userDefaultXsiPolicyProfile = $userDefaultXsiPolicyProfile;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUserDefaultXsiPolicyProfile()
    {
        $this->userDefaultXsiPolicyProfile = null;
        return $this;
    }


}

