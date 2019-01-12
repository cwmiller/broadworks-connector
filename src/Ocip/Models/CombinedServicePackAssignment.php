<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * CombinedServicePackAssignment
 *
 * Assign a service pack to user. If the service pack has not been authorized to service provider or 
 *       group, it will be authorized.
 *             
 *       If the service pack needs to be authorized at group/service provider levels, the authorizedQuantity
 *       will be used. Otherwise, it will be ignored. If the authorizedQuantity is not included, the
 *       quantity will come from the group template for the service pack. If a template does 
 *       not exist, the service quantity will be set to unlimited.
 *
 * @Groups [{"id":"c0d21ef9ba207c335d8347e5172fce1d:1211","type":"sequence"}]
 */
class CombinedServicePackAssignment
{

    /**
     * @ElementName servicePackName
     * @Type string
     * @Group c0d21ef9ba207c335d8347e5172fce1d:1211
     * @var string|null
     */
    private $servicePackName = null;

    /**
     * @ElementName authorizedQuantity
     * @Type \CWM\BroadWorksConnector\Ocip\Models\UnboundedPositiveInt
     * @Optional
     * @Group c0d21ef9ba207c335d8347e5172fce1d:1211
     * @var \CWM\BroadWorksConnector\Ocip\Models\UnboundedPositiveInt|null
     */
    private $authorizedQuantity = null;

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

