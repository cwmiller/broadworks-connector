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
     * @var string|null
     */
    private $groupServiceName = null;

    /**
     * @ElementName authorizedQuantity
     * @var \CWM\BroadWorksConnector\Ocip\Models\UnboundedPositiveInt|null
     */
    private $authorizedQuantity = null;

    /**
     * Getter for groupServiceName
     *
     * @ElementName groupServiceName
     * @return string|null
     */
    public function getGroupServiceName()
    {
        return $this->groupServiceName;
    }

    /**
     * Setter for groupServiceName
     *
     * @ElementName groupServiceName
     * @param string|null $groupServiceName
     * @return $this
     */
    public function setGroupServiceName($groupServiceName)
    {
        $this->groupServiceName = $groupServiceName;
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
    public function setAuthorizedQuantity($authorizedQuantity)
    {
        $this->authorizedQuantity = $authorizedQuantity;
        return $this;
    }


}

