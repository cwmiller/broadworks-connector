<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServicePackAuthorization
 *
 * Authorize (with quantity) or unauthorize a service pack.
 */
class ServicePackAuthorization
{

    /**
     * @ElementName servicePackName
     * @var string|null
     */
    private $servicePackName = null;

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
     * Getter for servicePackName
     *
     * @ElementName servicePackName
     * @return string|null
     */
    public function getServicePackName()
    {
        return $this->servicePackName;
    }

    /**
     * Setter for servicePackName
     *
     * @ElementName servicePackName
     * @param string|null $servicePackName
     * @return $this
     */
    public function setServicePackName($servicePackName)
    {
        $this->servicePackName = $servicePackName;
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

