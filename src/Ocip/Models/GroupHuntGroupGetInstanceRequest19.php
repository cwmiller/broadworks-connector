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
 * @Groups [{"id":"499b56264fbe226bfef3c338c8d4750d:1191","type":"sequence"}]
 */
class GroupHuntGroupGetInstanceRequest19 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceUserId
     * @Type string
     * @Group 499b56264fbe226bfef3c338c8d4750d:1191
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

