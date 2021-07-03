<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemXsiPolicyProfileGetListRequest
 *
 * Get the system Xsi policy profile list.
 *         The response is either SystemXsiPolicyProfileGetListResponse or ErrorResponse.
 *
 * @see SystemXsiPolicyProfileGetListResponse
 * @see ErrorResponse
 * @Groups [{"id":"7f663d5135470c33ca64b0eed3c3aa0c:19508","type":"sequence"}]
 */
class SystemXsiPolicyProfileGetListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName xsiPolicyProfileLevel
     * @Type \CWM\BroadWorksConnector\Ocip\Models\XsiPolicyProfileLevel
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:19508
     * @var \CWM\BroadWorksConnector\Ocip\Models\XsiPolicyProfileLevel|null
     */
    private $xsiPolicyProfileLevel = null;

    /**
     * Getter for xsiPolicyProfileLevel
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\XsiPolicyProfileLevel
     */
    public function getXsiPolicyProfileLevel()
    {
        return $this->xsiPolicyProfileLevel instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->xsiPolicyProfileLevel;
    }

    /**
     * Setter for xsiPolicyProfileLevel
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\XsiPolicyProfileLevel $xsiPolicyProfileLevel
     * @return $this
     */
    public function setXsiPolicyProfileLevel(\CWM\BroadWorksConnector\Ocip\Models\XsiPolicyProfileLevel $xsiPolicyProfileLevel)
    {
        $this->xsiPolicyProfileLevel = $xsiPolicyProfileLevel;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetXsiPolicyProfileLevel()
    {
        $this->xsiPolicyProfileLevel = null;
        return $this;
    }


}

