<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * CombinedServicePackAssignment
 *
 * Assign a service pack to user. If the service pack has not been authorized to
 * service provider or 
 *       group, it will be authorized.
 *             
 *       If the service pack needs to be authorized at group/service provider
 * levels, the authorizedQuantity
 *       will be used. Otherwise, it will be ignored. If the authorizedQuantity is
 * not included, the
 *       quantity will come from the group template for the service pack. If a
 * template does 
 *       not exist, the service quantity will be set to unlimited.
 */
class CombinedServicePackAssignment
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
    public function setAuthorizedQuantity(\CWM\BroadWorksConnector\Ocip\Models\UnboundedPositiveInt $authorizedQuantity)
    {
        $this->authorizedQuantity = $authorizedQuantity;
        return $this;
    }


}

