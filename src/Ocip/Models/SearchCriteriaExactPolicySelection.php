<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SearchCriteriaExactPolicySelection
 *
 * Criteria for searching for a particular Voice VPN policy selection.
 *
 * @Groups [{"id":"f0ada2681ca347fa83b464734259b304:1045","type":"sequence"}]
 */
class SearchCriteriaExactPolicySelection extends SearchCriteria
{

    /**
     * @ElementName policySelection
     * @Type \CWM\BroadWorksConnector\Ocip\Models\EnterpriseVoiceVPNPolicySelection
     * @Group f0ada2681ca347fa83b464734259b304:1045
     * @var \CWM\BroadWorksConnector\Ocip\Models\EnterpriseVoiceVPNPolicySelection|null
     */
    private $policySelection = null;

    /**
     * Getter for policySelection
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\EnterpriseVoiceVPNPolicySelection
     */
    public function getPolicySelection()
    {
        return $this->policySelection instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->policySelection;
    }

    /**
     * Setter for policySelection
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\EnterpriseVoiceVPNPolicySelection $policySelection
     * @return $this
     */
    public function setPolicySelection(\CWM\BroadWorksConnector\Ocip\Models\EnterpriseVoiceVPNPolicySelection $policySelection)
    {
        $this->policySelection = $policySelection;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetPolicySelection()
    {
        $this->policySelection = null;
        return $this;
    }


}

