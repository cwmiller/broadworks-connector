<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupAutoAttendantGetInstanceRequest19sp1
 *
 * Request to get all the information of a Auto Attendant instance.
 *         The response is either GroupAutoAttendantGetInstanceResponse19sp1 or ErrorResponse.
 *         
 *         Replaced by: GroupAutoAttendantGetInstanceRequest20 in AS data mode
 *
 * @see GroupAutoAttendantGetInstanceResponse19sp1
 * @see ErrorResponse
 * @see GroupAutoAttendantGetInstanceRequest20
 * @Groups [{"id":"bb12a3589ab4748963f28f7ac9310f70:459","type":"sequence"}]
 */
class GroupAutoAttendantGetInstanceRequest19sp1 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceUserId
     * @Type string
     * @Group bb12a3589ab4748963f28f7ac9310f70:459
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

