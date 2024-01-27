<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupCallCenterGetInstanceRequest14sp9
 *
 * Request to get all the information of a Call Center instance.
 *         The response is either GroupCallCenterGetInstanceResponse14sp9 or ErrorResponse.
 *         
 *         Replaced By: GroupCallCenterGetInstanceRequest16
 *
 * @see GroupCallCenterGetInstanceResponse14sp9
 * @see ErrorResponse
 * @see GroupCallCenterGetInstanceRequest16
 * @Groups [{"id":"d8f04177e438f303b41c211e518706bf:5766","type":"sequence"}]
 */
class GroupCallCenterGetInstanceRequest14sp9 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName serviceUserId
     * @Type string
     * @Group d8f04177e438f303b41c211e518706bf:5766
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    protected $serviceUserId = null;

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

