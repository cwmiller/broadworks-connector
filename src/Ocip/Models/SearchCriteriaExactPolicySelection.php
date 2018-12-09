<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SearchCriteriaExactPolicySelection
 *
 * Criteria for searching for a particular Voice VPN policy selection.
 *
 * @Groups [{"id":"e446bfcbd1f39cbef57d1547014f2bb9:962","type":"sequence"}]
 */
class SearchCriteriaExactPolicySelection extends SearchCriteria
{

    /**
     * @ElementName policySelection
     * @Type \CWM\BroadWorksConnector\Ocip\Models\EnterpriseVoiceVPNPolicySelection
     * @Group e446bfcbd1f39cbef57d1547014f2bb9:962
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

