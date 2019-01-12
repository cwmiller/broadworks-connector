<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * EnterpriseEnterpriseTrunkAddRequestOrderedRouting
 *
 * @Groups [{"id":"ab0042aa512abc10edb3c55e4b416b0b:31902","type":"sequence"}]
 */
class EnterpriseEnterpriseTrunkAddRequestOrderedRouting
{

    /**
     * @ElementName trunkGroup
     * @Type \CWM\BroadWorksConnector\Ocip\Models\EnterpriseTrunkTrunkGroupKey
     * @Array
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:31902
     * @var \CWM\BroadWorksConnector\Ocip\Models\EnterpriseTrunkTrunkGroupKey[]
     */
    private $trunkGroup = array(
        
    );

    /**
     * @ElementName orderingAlgorithm
     * @Type \CWM\BroadWorksConnector\Ocip\Models\EnterpriseTrunkOrderingAlgorithm
     * @Group ab0042aa512abc10edb3c55e4b416b0b:31902
     * @var \CWM\BroadWorksConnector\Ocip\Models\EnterpriseTrunkOrderingAlgorithm|null
     */
    private $orderingAlgorithm = null;

    /**
     * Getter for trunkGroup
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\EnterpriseTrunkTrunkGroupKey[]
     */
    public function getTrunkGroup()
    {
        return $this->trunkGroup instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->trunkGroup;
    }

    /**
     * Setter for trunkGroup
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\EnterpriseTrunkTrunkGroupKey[] $trunkGroup
     * @return $this
     */
    public function setTrunkGroup(array $trunkGroup)
    {
        $this->trunkGroup = $trunkGroup;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetTrunkGroup()
    {
        $this->trunkGroup = null;
        return $this;
    }

    /**
     * Adder for trunkGroup
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\EnterpriseTrunkTrunkGroupKey $trunkGroup
     * @return $this
     */
    public function addTrunkGroup($trunkGroup)
    {
        $this->trunkGroup[] = $trunkGroup;
        return $this;
    }

    /**
     * Getter for orderingAlgorithm
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\EnterpriseTrunkOrderingAlgorithm
     */
    public function getOrderingAlgorithm()
    {
        return $this->orderingAlgorithm instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->orderingAlgorithm;
    }

    /**
     * Setter for orderingAlgorithm
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\EnterpriseTrunkOrderingAlgorithm $orderingAlgorithm
     * @return $this
     */
    public function setOrderingAlgorithm(\CWM\BroadWorksConnector\Ocip\Models\EnterpriseTrunkOrderingAlgorithm $orderingAlgorithm)
    {
        $this->orderingAlgorithm = $orderingAlgorithm;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetOrderingAlgorithm()
    {
        $this->orderingAlgorithm = null;
        return $this;
    }


}

