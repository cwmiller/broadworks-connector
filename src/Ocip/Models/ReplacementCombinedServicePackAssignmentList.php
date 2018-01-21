<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ReplacementCombinedServicePackAssignmentList
 *
 * A list of service packs that replaces existing service packs assgined to the
 * user.
 *       
 *       If a service pack is already assigned to the user, the service quantitiy
 * will be updated if included.
 */
class ReplacementCombinedServicePackAssignmentList
{

    /**
     * @ElementName servicePack
     * @var \CWM\BroadWorksConnector\Ocip\Models\CombinedServicePackAssignment[]
     */
    private $servicePack = array(
        
    );

    /**
     * Getter for servicePack
     *
     * @ElementName servicePack
     * @return \CWM\BroadWorksConnector\Ocip\Models\CombinedServicePackAssignment[]
     */
    public function getServicePack()
    {
        return $this->servicePack;
    }

    /**
     * Setter for servicePack
     *
     * @ElementName servicePack
     * @param \CWM\BroadWorksConnector\Ocip\Models\CombinedServicePackAssignment[] $servicePack
     * @return $this
     */
    public function setServicePack($servicePack)
    {
        $this->servicePack = $servicePack;
        return $this;
    }

    /**
     * Adder for servicePack
     *
     * @ElementName servicePack
     * @param \CWM\BroadWorksConnector\Ocip\Models\CombinedServicePackAssignment $servicePack
     * @return $this
     */
    public function addServicePack($servicePack)
    {
        $this->servicePack []= $servicePack;
        return $this;
    }


}

