<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * CombinedGroupServiceAuthorization
 *
 * Authorize a group service.
 */
class CombinedGroupServiceAuthorization
{

    /**
     * @ElementName serviceName
     * @var \CWM\BroadWorksConnector\Ocip\Models\GroupService|null
     */
    private $serviceName = null;

    /**
     * @ElementName authorizedQuantity
     * @var \CWM\BroadWorksConnector\Ocip\Models\UnboundedPositiveInt|null
     */
    private $authorizedQuantity = null;

    /**
     * Getter for serviceName
     *
     * @ElementName serviceName
     * @return \CWM\BroadWorksConnector\Ocip\Models\GroupService|null
     */
    public function getServiceName()
    {
        return $this->serviceName;
    }

    /**
     * Setter for serviceName
     *
     * @ElementName serviceName
     * @param \CWM\BroadWorksConnector\Ocip\Models\GroupService|null $serviceName
     * @return $this
     */
    public function setServiceName(\CWM\BroadWorksConnector\Ocip\Models\GroupService $serviceName)
    {
        $this->serviceName = $serviceName;
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

