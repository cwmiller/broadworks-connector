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
     * @var string|null
     */
    private $serviceProviderId = null;

    /**
     * @ElementName servicePackName
     * @var string|null
     */
    private $servicePackName = null;

    /**
     * @ElementName newServicePackName
     * @var string|null
     */
    private $newServicePackName = null;

    /**
     * @ElementName servicePackDescription
     * @Nillable
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $servicePackDescription = null;

    /**
     * @ElementName isAvailableForUse
     * @var bool|null
     */
    private $isAvailableForUse = null;

    /**
     * @ElementName servicePackQuantity
     * @var \CWM\BroadWorksConnector\Ocip\Models\UnboundedPositiveInt|null
     */
    private $servicePackQuantity = null;

    /**
     * Getter for serviceProviderId
     *
     * @ElementName serviceProviderId
     * @return string|null
     */
    public function getServiceProviderId()
    {
        return $this->serviceProviderId;
    }

    /**
     * Setter for serviceProviderId
     *
     * @ElementName serviceProviderId
     * @param string|null $serviceProviderId
     * @return $this
     */
    public function setServiceProviderId($serviceProviderId)
    {
        $this->serviceProviderId = $serviceProviderId;
        return $this;
    }

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
     * Getter for newServicePackName
     *
     * @ElementName newServicePackName
     * @return string|null
     */
    public function getNewServicePackName()
    {
        return $this->newServicePackName;
    }

    /**
     * Setter for newServicePackName
     *
     * @ElementName newServicePackName
     * @param string|null $newServicePackName
     * @return $this
     */
    public function setNewServicePackName($newServicePackName)
    {
        $this->newServicePackName = $newServicePackName;
        return $this;
    }

    /**
     * Getter for servicePackDescription
     *
     * @ElementName servicePackDescription
     * @Nillable
     * @return string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getServicePackDescription()
    {
        return $this->servicePackDescription;
    }

    /**
     * Setter for servicePackDescription
     *
     * @ElementName servicePackDescription
     * @Nillable
     * @param string|null|\CWM\BroadWorksConnector\Ocip\Nil $servicePackDescription
     * @return $this
     */
    public function setServicePackDescription($servicePackDescription)
    {
        $this->servicePackDescription = $servicePackDescription;
        return $this;
    }

    /**
     * Getter for isAvailableForUse
     *
     * @ElementName isAvailableForUse
     * @return bool|null
     */
    public function getIsAvailableForUse()
    {
        return $this->isAvailableForUse;
    }

    /**
     * Setter for isAvailableForUse
     *
     * @ElementName isAvailableForUse
     * @param bool|null $isAvailableForUse
     * @return $this
     */
    public function setIsAvailableForUse($isAvailableForUse)
    {
        $this->isAvailableForUse = $isAvailableForUse;
        return $this;
    }

    /**
     * Getter for servicePackQuantity
     *
     * @ElementName servicePackQuantity
     * @return \CWM\BroadWorksConnector\Ocip\Models\UnboundedPositiveInt|null
     */
    public function getServicePackQuantity()
    {
        return $this->servicePackQuantity;
    }

    /**
     * Setter for servicePackQuantity
     *
     * @ElementName servicePackQuantity
     * @param \CWM\BroadWorksConnector\Ocip\Models\UnboundedPositiveInt|null $servicePackQuantity
     * @return $this
     */
    public function setServicePackQuantity($servicePackQuantity)
    {
        $this->servicePackQuantity = $servicePackQuantity;
        return $this;
    }


}

