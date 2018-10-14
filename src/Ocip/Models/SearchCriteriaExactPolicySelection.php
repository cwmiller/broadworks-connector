<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SearchCriteriaExactPolicySelection
 *
 * Criteria for searching for a particular Voice VPN policy selection.
 */
class SearchCriteriaExactPolicySelection extends SearchCriteria
{

    /**
     * @ElementName policySelection
     * @var \CWM\BroadWorksConnector\Ocip\Models\EnterpriseVoiceVPNPolicySelection|null
     */
    private $policySelection = null;

    /**
     * Getter for policySelection
     *
     * @ElementName policySelection
     * @return \CWM\BroadWorksConnector\Ocip\Models\EnterpriseVoiceVPNPolicySelection|null
     */
    public function getPolicySelection()
    {
        return $this->policySelection;
    }

    /**
     * Setter for policySelection
     *
     * @ElementName policySelection
     * @param \CWM\BroadWorksConnector\Ocip\Models\EnterpriseVoiceVPNPolicySelection|null $policySelection
     * @return $this
     */
    public function setPolicySelection(\CWM\BroadWorksConnector\Ocip\Models\EnterpriseVoiceVPNPolicySelection $policySelection)
    {
        $this->policySelection = $policySelection;
        return $this;
    }


}

