<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ReplacementCombinedServicePackAssignmentList
 *
 * A list of service packs that replaces existing service packs assgined to the user.
 *       
 *       If a service pack is already assigned to the user, the service quantitiy will be updated if included.
 *
 * @Groups [{"id":"8e629edbac315ae7889caca732382c44:2754","type":"sequence"}]
 */
class ReplacementCombinedServicePackAssignmentList
{

    /**
     * @ElementName servicePack
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CombinedServicePackAssignment
     * @Array
     * @Group 8e629edbac315ae7889caca732382c44:2754
     * @var \CWM\BroadWorksConnector\Ocip\Models\CombinedServicePackAssignment[]
     */
    private $servicePack = array(
        
    );

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

