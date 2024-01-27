<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServicePack
 *
 * The common Service Pack elements.
 *
 * @Groups [{"id":"6337d0cfba4de1c83587203c5b0bae54:4868","type":"sequence"}]
 */
class ServicePack
{
    /**
     * @ElementName servicePackName
     * @Type string
     * @Group 6337d0cfba4de1c83587203c5b0bae54:4868
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    protected $servicePackName = null;

    /**
     * @ElementName servicePackDescription
     * @Type string
     * @Optional
     * @Group 6337d0cfba4de1c83587203c5b0bae54:4868
     * @MinLength 1
     * @MaxLength 256
     * @var string|null
     */
    protected $servicePackDescription = null;

    /**
     * @ElementName isAvailableForUse
     * @Type bool
     * @Group 6337d0cfba4de1c83587203c5b0bae54:4868
     * @var bool|null
     */
    protected $isAvailableForUse = null;

    /**
     * @ElementName servicePackQuantity
     * @Type \CWM\BroadWorksConnector\Ocip\Models\UnboundedPositiveInt
     * @Group 6337d0cfba4de1c83587203c5b0bae54:4868
     * @var \CWM\BroadWorksConnector\Ocip\Models\UnboundedPositiveInt|null
     */
    protected $servicePackQuantity = null;

    /**
     * @ElementName serviceName
     * @Type \CWM\BroadWorksConnector\Ocip\Models\UserService
     * @Array
     * @Optional
     * @Group 6337d0cfba4de1c83587203c5b0bae54:4868
     * @var \CWM\BroadWorksConnector\Ocip\Models\UserService[]
     */
    protected $serviceName = [
        
    ];

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
     * Getter for servicePackDescription
     *
     * @return string
     */
    public function getServicePackDescription()
    {
        return $this->servicePackDescription instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->servicePackDescription;
    }

    /**
     * Setter for servicePackDescription
     *
     * @param string $servicePackDescription
     * @return $this
     */
    public function setServicePackDescription($servicePackDescription)
    {
        $this->servicePackDescription = $servicePackDescription;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetServicePackDescription()
    {
        $this->servicePackDescription = null;
        return $this;
    }

    /**
     * Getter for isAvailableForUse
     *
     * @return bool
     */
    public function getIsAvailableForUse()
    {
        return $this->isAvailableForUse instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->isAvailableForUse;
    }

    /**
     * Setter for isAvailableForUse
     *
     * @param bool $isAvailableForUse
     * @return $this
     */
    public function setIsAvailableForUse($isAvailableForUse)
    {
        $this->isAvailableForUse = $isAvailableForUse;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetIsAvailableForUse()
    {
        $this->isAvailableForUse = null;
        return $this;
    }

    /**
     * Getter for servicePackQuantity
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\UnboundedPositiveInt
     */
    public function getServicePackQuantity()
    {
        return $this->servicePackQuantity instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->servicePackQuantity;
    }

    /**
     * Setter for servicePackQuantity
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\UnboundedPositiveInt $servicePackQuantity
     * @return $this
     */
    public function setServicePackQuantity(\CWM\BroadWorksConnector\Ocip\Models\UnboundedPositiveInt $servicePackQuantity)
    {
        $this->servicePackQuantity = $servicePackQuantity;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetServicePackQuantity()
    {
        $this->servicePackQuantity = null;
        return $this;
    }

    /**
     * Getter for serviceName
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\UserService[]
     */
    public function getServiceName()
    {
        return $this->serviceName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->serviceName;
    }

    /**
     * Setter for serviceName
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\UserService[] $serviceName
     * @return $this
     */
    public function setServiceName(array $serviceName)
    {
        $this->serviceName = $serviceName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetServiceName()
    {
        $this->serviceName = null;
        return $this;
    }

    /**
     * Adder for serviceName
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\UserService $serviceName
     * @return $this
     */
    public function addServiceName($serviceName)
    {
        $this->serviceName[] = $serviceName;
        return $this;
    }
}

