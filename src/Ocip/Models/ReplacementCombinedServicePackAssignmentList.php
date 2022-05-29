<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ReplacementCombinedServicePackAssignmentList
 *
 * A list of service packs that replaces existing service packs assgined to the user.
 *       
 *       If a service pack is already assigned to the user, the service quantitiy will be updated if included.
 *
 * @Groups [{"id":"c0d21ef9ba207c335d8347e5172fce1d:3762","type":"sequence"}]
 */
class ReplacementCombinedServicePackAssignmentList
{

    /**
     * @ElementName servicePack
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CombinedServicePackAssignment
     * @Array
     * @Group c0d21ef9ba207c335d8347e5172fce1d:3762
     * @var \CWM\BroadWorksConnector\Ocip\Models\CombinedServicePackAssignment[]
     */
    protected $servicePack = array(
        
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

