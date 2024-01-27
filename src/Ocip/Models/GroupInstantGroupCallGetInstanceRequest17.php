<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupInstantGroupCallGetInstanceRequest17
 *
 * Request to get all the information of an Instant Group Call service instance.
 *         The response is either GroupInstantGroupCallGetInstanceResponse17 or ErrorResponse.
 *         
 *         Replaced by: GroupInstantGroupCallGetInstanceRequest19sp1
 *
 * @see GroupInstantGroupCallGetInstanceResponse17
 * @see ErrorResponse
 * @see GroupInstantGroupCallGetInstanceRequest19sp1
 * @Groups [{"id":"d8f04177e438f303b41c211e518706bf:10908","type":"sequence"}]
 */
class GroupInstantGroupCallGetInstanceRequest17 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName serviceUserId
     * @Type string
     * @Group d8f04177e438f303b41c211e518706bf:10908
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

