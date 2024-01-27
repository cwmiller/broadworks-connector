<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserXsiPolicyProfileGetResponse
 *
 * Response to UserXsiPolicyProfileGetRequest.
 *
 * @see UserXsiPolicyProfileGetRequest
 * @Groups [{"id":"fb73488c2ef4ac4400ab213b637d79a9:4184","type":"sequence"}]
 */
class UserXsiPolicyProfileGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName xsiPolicyProfile
     * @Type string
     * @Group fb73488c2ef4ac4400ab213b637d79a9:4184
     * @MinLength 1
     * @MaxLength 40
     * @var string|null
     */
    protected $xsiPolicyProfile = null;

    /**
     * Getter for xsiPolicyProfile
     *
     * @return string
     */
    public function getXsiPolicyProfile()
    {
        return $this->xsiPolicyProfile instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->xsiPolicyProfile;
    }

    /**
     * Setter for xsiPolicyProfile
     *
     * @param string $xsiPolicyProfile
     * @return $this
     */
    public function setXsiPolicyProfile($xsiPolicyProfile)
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

