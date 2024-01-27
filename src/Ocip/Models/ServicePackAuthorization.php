<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServicePackAuthorization
 *
 * Authorize (with quantity) or unauthorize a service pack.
 *
 * @Groups [{"id":"6337d0cfba4de1c83587203c5b0bae54:4883","type":"sequence","children":[{"id":"6337d0cfba4de1c83587203c5b0bae54:4885","type":"choice"}]}]
 */
class ServicePackAuthorization
{
    /**
     * @ElementName servicePackName
     * @Type string
     * @Group 6337d0cfba4de1c83587203c5b0bae54:4883
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    protected $servicePackName = null;

    /**
     * @ElementName authorizedQuantity
     * @Type \CWM\BroadWorksConnector\Ocip\Models\UnboundedPositiveInt
     * @Group 6337d0cfba4de1c83587203c5b0bae54:4885
     * @var \CWM\BroadWorksConnector\Ocip\Models\UnboundedPositiveInt|null
     */
    protected $authorizedQuantity = null;

    /**
     * @ElementName unauthorized
     * @Type bool
     * @Group 6337d0cfba4de1c83587203c5b0bae54:4885
     * @var bool|null
     */
    protected $unauthorized = null;

    /**
     * Getter for servicePackName
     *
     * @return string
     */
    public function getServicePackName()
    {
        return $this->servicePackName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->servicePackName;
    }

    /**
     * Setter for servicePackName
     *
     * @param string $servicePackName
     * @return $this
     */
    public function setServicePackName($servicePackName)
    {
        $this->servicePackName = $servicePackName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetServicePackName()
    {
        $this->servicePackName = null;
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

    /**
     * Getter for unauthorized
     *
     * @return bool
     */
    public function getUnauthorized()
    {
        return $this->unauthorized instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->unauthorized;
    }

    /**
     * Setter for unauthorized
     *
     * @param bool $unauthorized
     * @return $this
     */
    public function setUnauthorized($unauthorized)
    {
        $this->unauthorized = $unauthorized;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUnauthorized()
    {
        $this->unauthorized = null;
        return $this;
    }
}

