<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupCallCenterGetDistinctiveRingingRequest
 *
 * Get the distinctive ringing configuration values for call center.
 *         The response is either a GroupCallCenterGetDistinctiveRingingResponse 
 *         or an ErrorResponse.
 *
 * @see GroupCallCenterGetDistinctiveRingingResponse
 * @see ErrorResponse
 * @Groups [{"id":"69c2aeb1186dc97a4f4c36d9609ddb49:3809","type":"sequence"}]
 */
class GroupCallCenterGetDistinctiveRingingRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceUserId
     * @Type string
     * @Group 69c2aeb1186dc97a4f4c36d9609ddb49:3809
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

