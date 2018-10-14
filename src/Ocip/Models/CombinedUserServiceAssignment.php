<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * CombinedUserServiceAssignment
 *
 * Assign a service user. If the service has not been authorized to service
 * provider or group, it will
 *       be authorized.
 *       
 *       If the service needs to be authorized at group/service provider levels,
 * the authorizedQuantity
 *       will be used. Otherwise, it will be ignored. If the authorizedQuantity is
 * not included, the
 *       quantity will come from the group template for the service. If a template
 * does 
 *       not exist, the service quantity will be set to unlimited.
 */
class CombinedUserServiceAssignment
{

    /**
     * @ElementName userService
     * @var \CWM\BroadWorksConnector\Ocip\Models\UserService|null
     */
    private $userService = null;

    /**
     * @ElementName authorizedQuantity
     * @var \CWM\BroadWorksConnector\Ocip\Models\UnboundedPositiveInt|null
     */
    private $authorizedQuantity = null;

    /**
     * Getter for userService
     *
     * @ElementName userService
     * @return \CWM\BroadWorksConnector\Ocip\Models\UserService|null
     */
    public function getUserService()
    {
        return $this->userService;
    }

    /**
     * Setter for userService
     *
     * @ElementName userService
     * @param \CWM\BroadWorksConnector\Ocip\Models\UserService|null $userService
     * @return $this
     */
    public function setUserService(\CWM\BroadWorksConnector\Ocip\Models\UserService $userService)
    {
        $this->userService = $userService;
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

