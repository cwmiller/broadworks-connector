<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderServicePackModifyRequest
 *
 * Requests to modify a service pack for a service provider.
 *         The response is either SuccessResponse or ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 */
class ServiceProviderServicePackModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @Type string
     * @var string|null
     */
    private $serviceProviderId = null;

    /**
     * @ElementName servicePackName
     * @Type string
     * @var string|null
     */
    private $servicePackName = null;

    /**
     * @ElementName newServicePackName
     * @Type string
     * @var string|null
     */
    private $newServicePackName = null;

    /**
     * @ElementName servicePackDescription
     * @Type string
     * @Nillable
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $servicePackDescription = null;

    /**
     * @ElementName isAvailableForUse
     * @Type bool
     * @var bool|null
     */
    private $isAvailableForUse = null;

    /**
     * @ElementName servicePackQuantity
     * @Type \CWM\BroadWorksConnector\Ocip\Models\UnboundedPositiveInt
     * @var \CWM\BroadWorksConnector\Ocip\Models\UnboundedPositiveInt|null
     */
    private $servicePackQuantity = null;

    /**
     * Getter for serviceProviderId
     *
     * @return string
     */
    public function getServiceProviderId()
    {
        return $this->serviceProviderId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->serviceProviderId;
    }

    /**
     * Setter for serviceProviderId
     *
     * @param string $serviceProviderId
     * @return $this
     */
    public function setServiceProviderId($serviceProviderId)
    {
        $this->serviceProviderId = $serviceProviderId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetServiceProviderId()
    {
        $this->serviceProviderId = null;
        return $this;
    }

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
     * Getter for newServicePackName
     *
     * @return string
     */
    public function getNewServicePackName()
    {
        return $this->newServicePackName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->newServicePackName;
    }

    /**
     * Setter for newServicePackName
     *
     * @param string $newServicePackName
     * @return $this
     */
    public function setNewServicePackName($newServicePackName)
    {
        $this->newServicePackName = $newServicePackName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetNewServicePackName()
    {
        $this->newServicePackName = null;
        return $this;
    }

    /**
     * Getter for servicePackDescription
     *
     * @return string|null
     */
    public function getServicePackDescription()
    {
        return $this->servicePackDescription instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->servicePackDescription;
    }

    /**
     * Setter for servicePackDescription
     *
     * @param string|null $servicePackDescription
     * @return $this
     */
    public function setServicePackDescription($servicePackDescription)
    {
        if ($servicePackDescription === null) {
            $this->servicePackDescription = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->servicePackDescription = $servicePackDescription;
        }
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


}

