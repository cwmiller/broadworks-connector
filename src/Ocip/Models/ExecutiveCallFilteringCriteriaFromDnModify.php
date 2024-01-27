<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ExecutiveCallFilteringCriteriaFromDnModify
 *
 * The from dn criteria used within an executive call filtering criteria modify request.
 *
 * @Groups [{"id":"3a54ac906cb7002cc1a30fbb0efadb0a:460","type":"sequence"}]
 */
class ExecutiveCallFilteringCriteriaFromDnModify
{
    /**
     * @ElementName fromDnCriteriaSelection
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ExecutiveCallFilteringCriteriaDnSelection
     * @Optional
     * @Group 3a54ac906cb7002cc1a30fbb0efadb0a:460
     * @var \CWM\BroadWorksConnector\Ocip\Models\ExecutiveCallFilteringCriteriaDnSelection|null
     */
    protected $fromDnCriteriaSelection = null;

    /**
     * @ElementName includeAnonymousCallers
     * @Type bool
     * @Optional
     * @Group 3a54ac906cb7002cc1a30fbb0efadb0a:460
     * @var bool|null
     */
    protected $includeAnonymousCallers = null;

    /**
     * @ElementName includeUnavailableCallers
     * @Type bool
     * @Optional
     * @Group 3a54ac906cb7002cc1a30fbb0efadb0a:460
     * @var bool|null
     */
    protected $includeUnavailableCallers = null;

    /**
     * @ElementName phoneNumberList
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CriteriaReplacementDNList
     * @Nillable
     * @Optional
     * @Group 3a54ac906cb7002cc1a30fbb0efadb0a:460
     * @var \CWM\BroadWorksConnector\Ocip\Models\CriteriaReplacementDNList|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $phoneNumberList = null;

    /**
     * Getter for fromDnCriteriaSelection
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\ExecutiveCallFilteringCriteriaDnSelection
     */
    public function getFromDnCriteriaSelection()
    {
        return $this->fromDnCriteriaSelection instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->fromDnCriteriaSelection;
    }

    /**
     * Setter for fromDnCriteriaSelection
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\ExecutiveCallFilteringCriteriaDnSelection $fromDnCriteriaSelection
     * @return $this
     */
    public function setFromDnCriteriaSelection(\CWM\BroadWorksConnector\Ocip\Models\ExecutiveCallFilteringCriteriaDnSelection $fromDnCriteriaSelection)
    {
        $this->fromDnCriteriaSelection = $fromDnCriteriaSelection;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetFromDnCriteriaSelection()
    {
        $this->fromDnCriteriaSelection = null;
        return $this;
    }

    /**
     * Getter for includeAnonymousCallers
     *
     * @return bool
     */
    public function getIncludeAnonymousCallers()
    {
        return $this->includeAnonymousCallers instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->includeAnonymousCallers;
    }

    /**
     * Setter for includeAnonymousCallers
     *
     * @param bool $includeAnonymousCallers
     * @return $this
     */
    public function setIncludeAnonymousCallers($includeAnonymousCallers)
    {
        $this->includeAnonymousCallers = $includeAnonymousCallers;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetIncludeAnonymousCallers()
    {
        $this->includeAnonymousCallers = null;
        return $this;
    }

    /**
     * Getter for includeUnavailableCallers
     *
     * @return bool
     */
    public function getIncludeUnavailableCallers()
    {
        return $this->includeUnavailableCallers instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->includeUnavailableCallers;
    }

    /**
     * Setter for includeUnavailableCallers
     *
     * @param bool $includeUnavailableCallers
     * @return $this
     */
    public function setIncludeUnavailableCallers($includeUnavailableCallers)
    {
        $this->includeUnavailableCallers = $includeUnavailableCallers;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetIncludeUnavailableCallers()
    {
        $this->includeUnavailableCallers = null;
        return $this;
    }

    /**
     * Getter for phoneNumberList
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\CriteriaReplacementDNList|null
     */
    public function getPhoneNumberList()
    {
        return $this->phoneNumberList instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->phoneNumberList;
    }

    /**
     * Setter for phoneNumberList
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CriteriaReplacementDNList|null $phoneNumberList
     * @return $this
     */
    public function setPhoneNumberList(\CWM\BroadWorksConnector\Ocip\Models\CriteriaReplacementDNList $phoneNumberList = null)
    {
        if ($phoneNumberList === null) {
            $this->phoneNumberList = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->phoneNumberList = $phoneNumberList;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetPhoneNumberList()
    {
        $this->phoneNumberList = null;
        return $this;
    }
}

