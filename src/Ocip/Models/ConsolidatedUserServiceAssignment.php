<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ConsolidatedUserServiceAssignment
 *
 * Assign a user service. If the service has not been authorized to the group, it
 * will be authorized.
 *         The authorizedQuantity will be used at the group level if provided;
 * otherwise, the service quantity will be set to unlimited. 
 *         The command will fail if the authorized quantity set at the service
 * provider level is insufficient.
 */
class ConsolidatedUserServiceAssignment
{

    /**
     * @ElementName userServiceName
     * @var \CWM\BroadWorksConnector\Ocip\Models\UserService|null
     */
    private $userServiceName = null;

    /**
     * @ElementName authorizedQuantity
     * @var \CWM\BroadWorksConnector\Ocip\Models\UnboundedPositiveInt|null
     */
    private $authorizedQuantity = null;

    /**
     * Getter for userServiceName
     *
     * @ElementName userServiceName
     * @return \CWM\BroadWorksConnector\Ocip\Models\UserService|null
     */
    public function getUserServiceName()
    {
        return $this->userServiceName;
    }

    /**
     * Setter for userServiceName
     *
     * @ElementName userServiceName
     * @param \CWM\BroadWorksConnector\Ocip\Models\UserService|null $userServiceName
     * @return $this
     */
    public function setUserServiceName(\CWM\BroadWorksConnector\Ocip\Models\UserService $userServiceName)
    {
        $this->userServiceName = $userServiceName;
        return $this;
    }

    /**
     * Getter for authorizedQuantity
     *
     * @ElementName authorizedQuantity
     * @return \CWM\BroadWorksConnector\Ocip\Models\UnboundedPositiveInt|null
     */
    public function getAuthorizedQuantity()
    {
        return $this->authorizedQuantity;
    }

    /**
     * Setter for authorizedQuantity
     *
     * @ElementName authorizedQuantity
     * @param \CWM\BroadWorksConnector\Ocip\Models\UnboundedPositiveInt|null $authorizedQuantity
     * @return $this
     */
    public function setAuthorizedQuantity(\CWM\BroadWorksConnector\Ocip\Models\UnboundedPositiveInt $authorizedQuantity)
    {
        $this->authorizedQuantity = $authorizedQuantity;
        return $this;
    }


}

