<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupBroadWorksAnywhereGetInstanceRequest17
 *
 * Request to get all the information of a BroadWorks Anywhere instance.
 *         The response is either GroupBroadWorksAnywhereGetInstanceResponse17 or ErrorResponse.
 *         
 *         Replaced by: GroupBroadWorksAnywhereGetInstanceRequest19sp1 in AS data mode
 *
 * @see GroupBroadWorksAnywhereGetInstanceResponse17
 * @see ErrorResponse
 * @see GroupBroadWorksAnywhereGetInstanceRequest19sp1
 * @Groups [{"id":"499b56264fbe226bfef3c338c8d4750d:677","type":"sequence"}]
 */
class GroupBroadWorksAnywhereGetInstanceRequest17 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceUserId
     * @Type string
     * @Group 499b56264fbe226bfef3c338c8d4750d:677
     * @var string|null
     */
    private $serviceUserId = null;

    /**
     * Getter for serviceUserId
     *
     * @return string
     */
    public function getServiceUserId()
    {
        return $this->serviceUserId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->serviceUserId;
    }

    /**
     * Setter for serviceUserId
     *
     * @param string $serviceUserId
     * @return $this
     */
    public function setServiceUserId($serviceUserId)
    {
        $this->serviceUserId = $serviceUserId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetServiceUserId()
    {
        $this->serviceUserId = null;
        return $this;
    }


}

