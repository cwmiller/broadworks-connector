<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupServiceAuthorization
 *
 * Authorize (with quantity) or unauthorize a group service.
 */
class GroupServiceAuthorization
{

    /**
     * @ElementName serviceName
     * @var string|null
     */
    private $serviceName = null;

    /**
     * @ElementName authorizedQuantity
     * @var \CWM\BroadWorksConnector\Ocip\Models\UnboundedPositiveInt|null
     */
    private $authorizedQuantity = null;

    /**
     * @ElementName unauthorized
     * @var bool|null
     */
    private $unauthorized = null;

    /**
     * Getter for serviceName
     *
     * @ElementName serviceName
     * @return string|null
     */
    public function getServiceName()
    {
        return $this->serviceName;
    }

    /**
     * Setter for serviceName
     *
     * @ElementName serviceName
     * @param string|null $serviceName
     * @return $this
     */
    public function setServiceName($serviceName)
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
    public function setAuthorizedQuantity($authorizedQuantity)
    {
        $this->authorizedQuantity = $authorizedQuantity;
        return $this;
    }

    /**
     * Getter for unauthorized
     *
     * @ElementName unauthorized
     * @return bool|null
     */
    public function getUnauthorized()
    {
        return $this->unauthorized;
    }

    /**
     * Setter for unauthorized
     *
     * @ElementName unauthorized
     * @param bool|null $unauthorized
     * @return $this
     */
    public function setUnauthorized($unauthorized)
    {
        $this->unauthorized = $unauthorized;
        return $this;
    }


}

