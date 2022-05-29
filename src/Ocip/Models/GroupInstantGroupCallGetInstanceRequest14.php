<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupInstantGroupCallGetInstanceRequest14
 *
 * Request to get all the information of an Instant Group Call service instance.
 *         The response is either GroupInstantGroupCallGetInstanceResponse14 or ErrorResponse.
 *
 * @see GroupInstantGroupCallGetInstanceResponse14
 * @see ErrorResponse
 * @Groups [{"id":"ab0042aa512abc10edb3c55e4b416b0b:10714","type":"sequence"}]
 */
class GroupInstantGroupCallGetInstanceRequest14 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceUserId
     * @Type string
     * @Group ab0042aa512abc10edb3c55e4b416b0b:10714
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

