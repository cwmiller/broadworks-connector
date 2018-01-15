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
     * @var string|null
     */
    private $policySelection = null;

    /**
     * Getter for policySelection
     *
     * @ElementName policySelection
     * @return string|null
     */
    public function getPolicySelection()
    {
        return $this->policySelection;
    }

    /**
     * Setter for policySelection
     *
     * @ElementName policySelection
     * @param string|null $policySelection
     * @return $this
     */
    public function setPolicySelection($policySelection)
    {
        $this->policySelection = $policySelection;
        return $this;
    }


}

