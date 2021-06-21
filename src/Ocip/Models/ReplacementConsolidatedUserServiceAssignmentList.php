<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ReplacementConsolidatedUserServiceAssignmentList
 *
 * A list of user services that replaces existing user services assigned to the user.
 *         If a service is not authorized to the group, the service will be authorized. The authorizedQuantity will be used if provided; otherwise, the service quantity will be set to unlimited. The command will fail if the authorized Quantity set at the service provider is insufficient. 
 *         If a service is already authorized to the group, the service quantity will be ignored if included.
 *
 * @Groups [{"id":"c0d21ef9ba207c335d8347e5172fce1d:3895","type":"sequence"}]
 */
class ReplacementConsolidatedUserServiceAssignmentList
{

    /**
     * @ElementName userServiceServiceName
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ConsolidatedUserServiceAssignment
     * @Array
     * @Group c0d21ef9ba207c335d8347e5172fce1d:3895
     * @var \CWM\BroadWorksConnector\Ocip\Models\ConsolidatedUserServiceAssignment[]
     */
    private $userServiceServiceName = array(
        
    );

    /**
     * Getter for userServiceServiceName
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\ConsolidatedUserServiceAssignment[]
     */
    public function getUserServiceServiceName()
    {
        return $this->userServiceServiceName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->userServiceServiceName;
    }

    /**
     * Setter for userServiceServiceName
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\ConsolidatedUserServiceAssignment[] $userServiceServiceName
     * @return $this
     */
    public function setUserServiceServiceName(array $userServiceServiceName)
    {
        $this->userServiceServiceName = $userServiceServiceName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUserServiceServiceName()
    {
        $this->userServiceServiceName = null;
        return $this;
    }

    /**
     * Adder for userServiceServiceName
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\ConsolidatedUserServiceAssignment $userServiceServiceName
     * @return $this
     */
    public function addUserServiceServiceName($userServiceServiceName)
    {
        $this->userServiceServiceName[] = $userServiceServiceName;
        return $this;
    }


}

