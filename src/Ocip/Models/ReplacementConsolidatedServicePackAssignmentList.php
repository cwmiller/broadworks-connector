<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ReplacementConsolidatedServicePackAssignmentList
 *
 * A list of service packs that replaces existing service packs assigned to the
 * user.
 *         If a service pack is not authorized to the group, the service will be
 * authorized. The authorizedQuantity will be used if provided; otherwise, the
 * service quantity will be set to unlimited. The command will fail if the
 * authorized Quantity set at the service provider is insufficient
 *         If a service pack is already authorized to the group, the service
 * quantity will be ignored if included.
 */
class ReplacementConsolidatedServicePackAssignmentList
{

    /**
     * @ElementName servicePack
     * @var \CWM\BroadWorksConnector\Ocip\Models\ConsolidatedServicePackAssignment[]
     */
    private $servicePack = array(
        
    );

    /**
     * Getter for servicePack
     *
     * @ElementName servicePack
     * @return \CWM\BroadWorksConnector\Ocip\Models\ConsolidatedServicePackAssignment[]
     */
    public function getServicePack()
    {
        return $this->servicePack;
    }

    /**
     * Setter for servicePack
     *
     * @ElementName servicePack
     * @param \CWM\BroadWorksConnector\Ocip\Models\ConsolidatedServicePackAssignment[] $servicePack
     * @return $this
     */
    public function setServicePack(array $servicePack)
    {
        $this->servicePack = $servicePack;
        return $this;
    }

    /**
     * Adder for servicePack
     *
     * @ElementName servicePack
     * @param \CWM\BroadWorksConnector\Ocip\Models\ConsolidatedServicePackAssignment $servicePack
     * @return $this
     */
    public function addServicePack($servicePack)
    {
        $this->servicePack []= $servicePack;
        return $this;
    }


}

