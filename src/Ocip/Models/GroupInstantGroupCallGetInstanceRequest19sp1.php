<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupInstantGroupCallGetInstanceRequest19sp1
 *
 * Request to get all the information of an Instant Group Call service instance.
 *         The response is either GroupInstantGroupCallGetInstanceResponse19sp1 or ErrorResponse.
 *
 * @see GroupInstantGroupCallGetInstanceResponse19sp1
 * @see ErrorResponse
 * @Groups [{"id":"6c8b59f80404b6283b25be24c263cb12:122","type":"sequence"}]
 */
class GroupInstantGroupCallGetInstanceRequest19sp1 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName serviceUserId
     * @Type string
     * @Group 6c8b59f80404b6283b25be24c263cb12:122
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

