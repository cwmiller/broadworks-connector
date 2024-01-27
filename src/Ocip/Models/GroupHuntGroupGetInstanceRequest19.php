<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupHuntGroupGetInstanceRequest19
 *
 * Request to get all the information of a Hunt Group instance.
 *         The response is either GroupHuntGroupGetInstanceResponse19 or ErrorResponse.
 *         
 *         Replaced by: GroupHuntGroupGetInstanceRequest19sp1 in AS data mode
 *
 * @see GroupHuntGroupGetInstanceResponse19
 * @see ErrorResponse
 * @see GroupHuntGroupGetInstanceRequest19sp1
 * @Groups [{"id":"240b50f54d060859e5e275082fdf49f9:3325","type":"sequence"}]
 */
class GroupHuntGroupGetInstanceRequest19 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName serviceUserId
     * @Type string
     * @Group 240b50f54d060859e5e275082fdf49f9:3325
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

