<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ConsolidatedGroupServiceAssignment
 *
 * Authorize and assign a group service.
 *
 *         The authorizedQuantity will be used at the group level if provided;
 * otherwise, the service quantity will be set to unlimited. 
 *         The command will fail if the authorized quantity set at the service
 * provider level is insufficient.
 */
class ConsolidatedGroupServiceAssignment
{

    /**
     * @ElementName groupServiceName
     * @Type \CWM\BroadWorksConnector\Ocip\Models\GroupService
     * @var \CWM\BroadWorksConnector\Ocip\Models\GroupService|null
     */
    private $groupServiceName = null;

    /**
     * @ElementName authorizedQuantity
     * @Type \CWM\BroadWorksConnector\Ocip\Models\UnboundedPositiveInt
     * @var \CWM\BroadWorksConnector\Ocip\Models\UnboundedPositiveInt|null
     */
    private $authorizedQuantity = null;

    /**
     * Getter for groupServiceName
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\GroupService
     */
    public function getGroupServiceName()
    {
        return $this->groupServiceName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->groupServiceName;
    }

    /**
     * Setter for groupServiceName
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\GroupService $groupServiceName
     * @return $this
     */
    public function setGroupServiceName(\CWM\BroadWorksConnector\Ocip\Models\GroupService $groupServiceName)
    {
        $this->groupServiceName = $groupServiceName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetGroupServiceName()
    {
        $this->groupServiceName = null;
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

