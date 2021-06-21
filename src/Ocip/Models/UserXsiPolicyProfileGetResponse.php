<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserXsiPolicyProfileGetResponse
 *
 * Response to UserXsiPolicyProfileGetRequest.
 *
 * @see UserXsiPolicyProfileGetRequest
 * @Groups [{"id":"53d18cc797d03d802cbc411ad821f1d4:4175","type":"sequence"}]
 */
class UserXsiPolicyProfileGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName xsiPolicyProfile
     * @Type string
     * @Group 53d18cc797d03d802cbc411ad821f1d4:4175
     * @MinLength 1
     * @MaxLength 40
     * @var string|null
     */
    private $xsiPolicyProfile = null;

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

