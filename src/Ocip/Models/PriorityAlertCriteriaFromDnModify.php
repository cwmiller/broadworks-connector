<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * PriorityAlertCriteriaFromDnModify
 *
 * The from dn criteria used within a modify request.
 */
class PriorityAlertCriteriaFromDnModify
{

    /**
     * @ElementName fromDnCriteriaSelection
     * @var string|null
     */
    private $fromDnCriteriaSelection = null;

    /**
     * @ElementName includeAnonymousCallers
     * @var bool|null
     */
    private $includeAnonymousCallers = null;

    /**
     * @ElementName includeUnavailableCallers
     * @var bool|null
     */
    private $includeUnavailableCallers = null;

    /**
     * @ElementName phoneNumberList
     * @var \CWM\BroadWorksConnector\Ocip\Models\CriteriaReplacementDNList|null
     */
    private $phoneNumberList = null;

    /**
     * Getter for fromDnCriteriaSelection
     *
     * @ElementName fromDnCriteriaSelection
     * @return string|null
     */
    public function getFromDnCriteriaSelection()
    {
        return $this->fromDnCriteriaSelection;
    }

    /**
     * Setter for fromDnCriteriaSelection
     *
     * @ElementName fromDnCriteriaSelection
     * @param string|null $fromDnCriteriaSelection
     * @return $this
     */
    public function setFromDnCriteriaSelection($fromDnCriteriaSelection)
    {
        $this->fromDnCriteriaSelection = $fromDnCriteriaSelection;
        return $this;
    }

    /**
     * Getter for includeAnonymousCallers
     *
     * @ElementName includeAnonymousCallers
     * @return bool|null
     */
    public function getIncludeAnonymousCallers()
    {
        return $this->includeAnonymousCallers;
    }

    /**
     * Setter for includeAnonymousCallers
     *
     * @ElementName includeAnonymousCallers
     * @param bool|null $includeAnonymousCallers
     * @return $this
     */
    public function setIncludeAnonymousCallers($includeAnonymousCallers)
    {
        $this->includeAnonymousCallers = $includeAnonymousCallers;
        return $this;
    }

    /**
     * Getter for includeUnavailableCallers
     *
     * @ElementName includeUnavailableCallers
     * @return bool|null
     */
    public function getIncludeUnavailableCallers()
    {
        return $this->includeUnavailableCallers;
    }

    /**
     * Setter for includeUnavailableCallers
     *
     * @ElementName includeUnavailableCallers
     * @param bool|null $includeUnavailableCallers
     * @return $this
     */
    public function setIncludeUnavailableCallers($includeUnavailableCallers)
    {
        $this->includeUnavailableCallers = $includeUnavailableCallers;
        return $this;
    }

    /**
     * Getter for phoneNumberList
     *
     * @ElementName phoneNumberList
     * @return \CWM\BroadWorksConnector\Ocip\Models\CriteriaReplacementDNList|null
     */
    public function getPhoneNumberList()
    {
        return $this->phoneNumberList;
    }

    /**
     * Setter for phoneNumberList
     *
     * @ElementName phoneNumberList
     * @param \CWM\BroadWorksConnector\Ocip\Models\CriteriaReplacementDNList|null $phoneNumberList
     * @return $this
     */
    public function setPhoneNumberList($phoneNumberList)
    {
        $this->phoneNumberList = $phoneNumberList;
        return $this;
    }


}

