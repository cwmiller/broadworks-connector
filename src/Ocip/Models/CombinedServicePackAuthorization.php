<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * CombinedServicePackAuthorization
 *
 * Authorize a service pack.
 *
 * @Groups [{"id":"6337d0cfba4de1c83587203c5b0bae54:1376","type":"sequence"}]
 */
class CombinedServicePackAuthorization
{
    /**
     * @ElementName servicePackName
     * @Type string
     * @Group 6337d0cfba4de1c83587203c5b0bae54:1376
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    protected $servicePackName = null;

    /**
     * @ElementName authorizedQuantity
     * @Type \CWM\BroadWorksConnector\Ocip\Models\UnboundedPositiveInt
     * @Optional
     * @Group 6337d0cfba4de1c83587203c5b0bae54:1376
     * @var \CWM\BroadWorksConnector\Ocip\Models\UnboundedPositiveInt|null
     */
    protected $authorizedQuantity = null;

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
}

