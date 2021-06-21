<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ConsolidatedUserServiceAssignment
 *
 * Assign a user service. If the service has not been authorized to the group, it will be authorized.
 *         The authorizedQuantity will be used at the group level if provided; otherwise, the service quantity will be set to unlimited. 
 *         The command will fail if the authorized quantity set at the service provider level is insufficient.
 *
 * @Groups [{"id":"c0d21ef9ba207c335d8347e5172fce1d:1808","type":"sequence"}]
 */
class ConsolidatedUserServiceAssignment
{

    /**
     * @ElementName userServiceName
     * @Type \CWM\BroadWorksConnector\Ocip\Models\UserService
     * @Group c0d21ef9ba207c335d8347e5172fce1d:1808
     * @var \CWM\BroadWorksConnector\Ocip\Models\UserService|null
     */
    private $userServiceName = null;

    /**
     * @ElementName authorizedQuantity
     * @Type \CWM\BroadWorksConnector\Ocip\Models\UnboundedPositiveInt
     * @Optional
     * @Group c0d21ef9ba207c335d8347e5172fce1d:1808
     * @var \CWM\BroadWorksConnector\Ocip\Models\UnboundedPositiveInt|null
     */
    private $authorizedQuantity = null;

    /**
     * Getter for userServiceName
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\UserService
     */
    public function getUserServiceName()
    {
        return $this->userServiceName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->userServiceName;
    }

    /**
     * Setter for userServiceName
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\UserService $userServiceName
     * @return $this
     */
    public function setUserServiceName(\CWM\BroadWorksConnector\Ocip\Models\UserService $userServiceName)
    {
        $this->userServiceName = $userServiceName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUserServiceName()
    {
        $this->userServiceName = null;
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

