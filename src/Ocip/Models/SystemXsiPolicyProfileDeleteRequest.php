<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemXsiPolicyProfileDeleteRequest
 *
 * Delete an entry from system Xsi application Id list.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"da582a1f8028404e70d260cf1f891033:19774","type":"sequence"}]
 */
class SystemXsiPolicyProfileDeleteRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName xsiPolicyProfile
     * @Type \CWM\BroadWorksConnector\Ocip\Models\XsiPolicyProfileKey
     * @Group da582a1f8028404e70d260cf1f891033:19774
     * @var \CWM\BroadWorksConnector\Ocip\Models\XsiPolicyProfileKey|null
     */
    protected $xsiPolicyProfile = null;

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

