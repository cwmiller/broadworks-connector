<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * CombinedUserServiceAssignment
 *
 * Assign a service user. If the service has not been authorized to service provider or group, it will
 *       be authorized.
 *       
 *       If the service needs to be authorized at group/service provider levels, the authorizedQuantity
 *       will be used. Otherwise, it will be ignored. If the authorizedQuantity is not included, the
 *       quantity will come from the group template for the service. If a template does 
 *       not exist, the service quantity will be set to unlimited.
 *
 * @Groups [{"id":"8e629edbac315ae7889caca732382c44:1040","type":"sequence"}]
 */
class CombinedUserServiceAssignment
{

    /**
     * @ElementName userService
     * @Type \CWM\BroadWorksConnector\Ocip\Models\UserService
     * @Group 8e629edbac315ae7889caca732382c44:1040
     * @var \CWM\BroadWorksConnector\Ocip\Models\UserService|null
     */
    private $userService = null;

    /**
     * @ElementName authorizedQuantity
     * @Type \CWM\BroadWorksConnector\Ocip\Models\UnboundedPositiveInt
     * @Optional
     * @Group 8e629edbac315ae7889caca732382c44:1040
     * @var \CWM\BroadWorksConnector\Ocip\Models\UnboundedPositiveInt|null
     */
    private $authorizedQuantity = null;

    /**
     * Getter for userService
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\UserService
     */
    public function getUserService()
    {
        return $this->userService instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->userService;
    }

    /**
     * Setter for userService
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\UserService $userService
     * @return $this
     */
    public function setUserService(\CWM\BroadWorksConnector\Ocip\Models\UserService $userService)
    {
        $this->userService = $userService;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUserService()
    {
        $this->userService = null;
        return $this;
    }

    /**
     * Getter for authorizedQuantity
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\UnboundedPositiveInt
     */
    public function getAuthorizedQuantity()
    {
        return $this->authorizedQuantity instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->authorizedQuantity;
    }

    /**
     * Setter for authorizedQuantity
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\UnboundedPositiveInt $authorizedQuantity
     * @return $this
     */
    public function setAuthorizedQuantity(\CWM\BroadWorksConnector\Ocip\Models\UnboundedPositiveInt $authorizedQuantity)
    {
        $this->authorizedQuantity = $authorizedQuantity;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAuthorizedQuantity()
    {
        $this->authorizedQuantity = null;
        return $this;
    }


}

