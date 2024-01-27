<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ReplacementConsolidatedServicePackAssignmentList
 *
 * A list of service packs that replaces existing service packs assigned to the user.
 *         If a service pack is not authorized to the group, the service will be authorized. The authorizedQuantity will be used if provided; otherwise, the service quantity will be set to unlimited. The command will fail if the authorized Quantity set at the service provider is insufficient
 *         If a service pack is already authorized to the group, the service quantity will be ignored if included.
 *
 * @Groups [{"id":"6337d0cfba4de1c83587203c5b0bae54:4349","type":"sequence"}]
 */
class ReplacementConsolidatedServicePackAssignmentList
{
    /**
     * @ElementName servicePack
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ConsolidatedServicePackAssignment
     * @Array
     * @Group 6337d0cfba4de1c83587203c5b0bae54:4349
     * @var \CWM\BroadWorksConnector\Ocip\Models\ConsolidatedServicePackAssignment[]
     */
    protected $servicePack = [
        
    ];

    /**
     * Getter for servicePack
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\ConsolidatedServicePackAssignment[]
     */
    public function getServicePack()
    {
        return $this->servicePack instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->servicePack;
    }

    /**
     * Setter for servicePack
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\ConsolidatedServicePackAssignment[] $servicePack
     * @return $this
     */
    public function setServicePack(array $servicePack)
    {
        $this->servicePack = $servicePack;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetServicePack()
    {
        $this->servicePack = null;
        return $this;
    }

    /**
     * Adder for servicePack
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\ConsolidatedServicePackAssignment $servicePack
     * @return $this
     */
    public function addServicePack($servicePack)
    {
        $this->servicePack[] = $servicePack;
        return $this;
    }
}

