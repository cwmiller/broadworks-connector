<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ReplacementCombinedServicePackAssignmentList
 *
 * A list of service packs that replaces existing service packs assgined to the user.
 *       
 *       If a service pack is already assigned to the user, the service quantitiy will be updated if included.
 *
 * @Groups [{"id":"6337d0cfba4de1c83587203c5b0bae54:4251","type":"sequence"}]
 */
class ReplacementCombinedServicePackAssignmentList
{
    /**
     * @ElementName servicePack
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CombinedServicePackAssignment
     * @Array
     * @Group 6337d0cfba4de1c83587203c5b0bae54:4251
     * @var \CWM\BroadWorksConnector\Ocip\Models\CombinedServicePackAssignment[]
     */
    protected $servicePack = [
        
    ];

    /**
     * Getter for servicePack
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\CombinedServicePackAssignment[]
     */
    public function getServicePack()
    {
        return $this->servicePack instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->servicePack;
    }

    /**
     * Setter for servicePack
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CombinedServicePackAssignment[] $servicePack
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
     * @param \CWM\BroadWorksConnector\Ocip\Models\CombinedServicePackAssignment $servicePack
     * @return $this
     */
    public function addServicePack($servicePack)
    {
        $this->servicePack[] = $servicePack;
        return $this;
    }
}

