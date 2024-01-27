<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserXsiPolicyProfileModifyRequest
 *
 * Modifies the default Xsi policy profile for a group.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"fb73488c2ef4ac4400ab213b637d79a9:4200","type":"sequence"}]
 */
class UserXsiPolicyProfileModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName userId
     * @Type string
     * @Group fb73488c2ef4ac4400ab213b637d79a9:4200
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    protected $userId = null;

    /**
     * @ElementName xsiPolicyProfile
     * @Type \CWM\BroadWorksConnector\Ocip\Models\XsiPolicyProfileKey
     * @Optional
     * @Group fb73488c2ef4ac4400ab213b637d79a9:4200
     * @var \CWM\BroadWorksConnector\Ocip\Models\XsiPolicyProfileKey|null
     */
    protected $xsiPolicyProfile = null;

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
     * Getter for xsiPolicyProfile
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\XsiPolicyProfileKey
     */
    public function getXsiPolicyProfile()
    {
        return $this->xsiPolicyProfile instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->xsiPolicyProfile;
    }

    /**
     * Setter for xsiPolicyProfile
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\XsiPolicyProfileKey $xsiPolicyProfile
     * @return $this
     */
    public function setXsiPolicyProfile(\CWM\BroadWorksConnector\Ocip\Models\XsiPolicyProfileKey $xsiPolicyProfile)
    {
        $this->xsiPolicyProfile = $xsiPolicyProfile;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetXsiPolicyProfile()
    {
        $this->xsiPolicyProfile = null;
        return $this;
    }
}

