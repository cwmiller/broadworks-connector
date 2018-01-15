<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupDnGetActivationListRequest
 *
 * Get the list of activated and deactivated DNs in a group. 
 *         Ranges of DNs with identical assignment and activation properties are
 * coalesced 
 *         to a single table row entry.  
 *         Only DNs assigned to a users are listed in the response when the number
 *         activation Mode is set to "User Activation Enabled"
 *         Dns assigned to the IMRN pool are not listed in the response.
 *         The response is either a GroupDnGetActivationListResponse or an
 * ErrorResponse.
 */
class GroupDnGetActivationListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @var string|null
     */
    private $serviceProviderId = null;

    /**
     * @ElementName groupId
     * @var string|null
     */
    private $groupId = null;

    /**
     * Getter for serviceProviderId
     *
     * @ElementName serviceProviderId
     * @return string|null
     */
    public function getServiceProviderId()
    {
        return $this->serviceProviderId;
    }

    /**
     * Setter for serviceProviderId
     *
     * @ElementName serviceProviderId
     * @param string|null $serviceProviderId
     * @return $this
     */
    public function setServiceProviderId($serviceProviderId)
    {
        $this->serviceProviderId = $serviceProviderId;
        return $this;
    }

    /**
     * Getter for groupId
     *
     * @ElementName groupId
     * @return string|null
     */
    public function getGroupId()
    {
        return $this->groupId;
    }

    /**
     * Setter for groupId
     *
     * @ElementName groupId
     * @param string|null $groupId
     * @return $this
     */
    public function setGroupId($groupId)
    {
        $this->groupId = $groupId;
        return $this;
    }


}

