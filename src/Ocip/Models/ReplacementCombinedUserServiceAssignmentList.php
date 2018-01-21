<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ReplacementCombinedUserServiceAssignmentList
 *
 * A list of user services that replaces existing user services assgined to the
 * user.
 *       
 *       If a service is already assigned to the user, the service quantitiy will
 * be updated if included.
 */
class ReplacementCombinedUserServiceAssignmentList
{

    /**
     * @ElementName serviceName
     * @var \CWM\BroadWorksConnector\Ocip\Models\CombinedUserServiceAssignment[]
     */
    private $serviceName = array(
        
    );

    /**
     * Getter for serviceName
     *
     * @ElementName serviceName
     * @return \CWM\BroadWorksConnector\Ocip\Models\CombinedUserServiceAssignment[]
     */
    public function getServiceName()
    {
        return $this->serviceName;
    }

    /**
     * Setter for serviceName
     *
     * @ElementName serviceName
     * @param \CWM\BroadWorksConnector\Ocip\Models\CombinedUserServiceAssignment[] $serviceName
     * @return $this
     */
    public function setServiceName($serviceName)
    {
        $this->serviceName = $serviceName;
        return $this;
    }

    /**
     * Adder for serviceName
     *
     * @ElementName serviceName
     * @param \CWM\BroadWorksConnector\Ocip\Models\CombinedUserServiceAssignment $serviceName
     * @return $this
     */
    public function addServiceName($serviceName)
    {
        $this->serviceName []= $serviceName;
        return $this;
    }


}

