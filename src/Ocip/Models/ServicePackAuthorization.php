<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServicePackAuthorization
 *
 * Authorize (with quantity) or unauthorize a service pack.
 *
 * @Groups [{"id":"c0d21ef9ba207c335d8347e5172fce1d:4406","type":"sequence","children":[{"id":"c0d21ef9ba207c335d8347e5172fce1d:4408","type":"choice"}]}]
 */
class ServicePackAuthorization
{

    /**
     * @ElementName servicePackName
     * @Type string
     * @Group c0d21ef9ba207c335d8347e5172fce1d:4406
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    protected $servicePackName = null;

    /**
     * @ElementName authorizedQuantity
     * @Type \CWM\BroadWorksConnector\Ocip\Models\UnboundedPositiveInt
     * @Group c0d21ef9ba207c335d8347e5172fce1d:4408
     * @var \CWM\BroadWorksConnector\Ocip\Models\UnboundedPositiveInt|null
     */
    protected $authorizedQuantity = null;

    /**
     * @ElementName unauthorized
     * @Type bool
     * @Group c0d21ef9ba207c335d8347e5172fce1d:4408
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

