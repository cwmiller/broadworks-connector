<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupBroadWorksAnywhereGetInstanceRequest19sp1
 *
 * Request to get all the information of a BroadWorks Anywhere instance.
 *         The response is either GroupBroadWorksAnywhereGetInstanceResponse19sp1 or ErrorResponse.
 *
 * @see GroupBroadWorksAnywhereGetInstanceResponse19sp1
 * @see ErrorResponse
 * @Groups [{"id":"72f634ecc58842ce9d362ca629a47ea9:141","type":"sequence"}]
 */
class GroupBroadWorksAnywhereGetInstanceRequest19sp1 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceUserId
     * @Type string
     * @Group 72f634ecc58842ce9d362ca629a47ea9:141
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

