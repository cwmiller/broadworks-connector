<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ReplacementConsolidatedUserServiceAssignmentList
 *
 * A list of user services that replaces existing user services assigned to the
 * user.
 *         If a service is not authorized to the group, the service will be
 * authorized. The authorizedQuantity will be used if provided; otherwise, the
 * service quantity will be set to unlimited. The command will fail if the
 * authorized Quantity set at the service provider is insufficient. 
 *         If a service is already authorized to the group, the service quantity
 * will be ignored if included.
 */
class ReplacementConsolidatedUserServiceAssignmentList
{

    /**
     * @ElementName userServiceServiceName
     * @var \CWM\BroadWorksConnector\Ocip\Models\ConsolidatedUserServiceAssignment[]
     */
    private $userServiceServiceName = array(
        
    );

    /**
     * Getter for userServiceServiceName
     *
     * @ElementName userServiceServiceName
     * @return \CWM\BroadWorksConnector\Ocip\Models\ConsolidatedUserServiceAssignment[]
     */
    public function getUserServiceServiceName()
    {
        return $this->userServiceServiceName;
    }

    /**
     * Setter for userServiceServiceName
     *
     * @ElementName userServiceServiceName
     * @param \CWM\BroadWorksConnector\Ocip\Models\ConsolidatedUserServiceAssignment[] $userServiceServiceName
     * @return $this
     */
    public function setUserServiceServiceName(array $userServiceServiceName)
    {
        $this->userServiceServiceName = $userServiceServiceName;
        return $this;
    }

    /**
     * Adder for userServiceServiceName
     *
     * @ElementName userServiceServiceName
     * @param \CWM\BroadWorksConnector\Ocip\Models\ConsolidatedUserServiceAssignment $userServiceServiceName
     * @return $this
     */
    public function addUserServiceServiceName($userServiceServiceName)
    {
        $this->userServiceServiceName []= $userServiceServiceName;
        return $this;
    }


}

