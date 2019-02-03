<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ConsolidatedServicePackAssignment
 *
 * Assign a service pack to user. If the service pack has not been authorized to 
 *         the group, it will be authorized.
 *         The authorizedQuantity will be used at the group level if provided; otherwise, the service quantity will be set to unlimited. 
 *         The command will fail if the authorized quantity set at the service provider level is insufficient.
 *
 * @Groups [{"id":"c0d21ef9ba207c335d8347e5172fce1d:1557","type":"sequence"}]
 */
class ConsolidatedServicePackAssignment
{

    /**
     * @ElementName servicePackName
     * @Type string
     * @Group c0d21ef9ba207c335d8347e5172fce1d:1557
     * @var string|null
     */
    private $servicePackName = null;

    /**
     * @ElementName authorizedQuantity
     * @Type \CWM\BroadWorksConnector\Ocip\Models\UnboundedPositiveInt
     * @Optional
     * @Group c0d21ef9ba207c335d8347e5172fce1d:1557
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

