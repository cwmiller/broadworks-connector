<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ReplacementCombinedUserServiceAssignmentList
 *
 * A list of user services that replaces existing user services assgined to the user.
 *       
 *       If a service is already assigned to the user, the service quantitiy will be updated if included.
 *
 * @Groups [{"id":"18b369af88e42ffdb4166615c670ce2c:2789","type":"sequence"}]
 */
class ReplacementCombinedUserServiceAssignmentList
{

    /**
     * @ElementName serviceName
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CombinedUserServiceAssignment
     * @Array
     * @Group 18b369af88e42ffdb4166615c670ce2c:2789
     * @var \CWM\BroadWorksConnector\Ocip\Models\CombinedUserServiceAssignment[]
     */
    private $serviceName = array(
        
    );

    /**
     * Getter for serviceName
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\CombinedUserServiceAssignment[]
     */
    public function getServiceName()
    {
        return $this->serviceName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->serviceName;
    }

    /**
     * Setter for serviceName
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CombinedUserServiceAssignment[] $serviceName
     * @return $this
     */
    public function setServiceName(array $serviceName)
    {
        $this->serviceName = $serviceName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetServiceName()
    {
        $this->serviceName = null;
        return $this;
    }

    /**
     * Adder for serviceName
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CombinedUserServiceAssignment $serviceName
     * @return $this
     */
    public function addServiceName($serviceName)
    {
        $this->serviceName[] = $serviceName;
        return $this;
    }


}

