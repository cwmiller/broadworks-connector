<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * PriorityAlertCriteriaFromDnModify
 *
 * The from dn criteria used within a modify request.
 *
 * @Groups [{"id":"750c600a9467af6ee77c0dbca839453e:219","type":"sequence"}]
 */
class PriorityAlertCriteriaFromDnModify
{

    /**
     * @ElementName fromDnCriteriaSelection
     * @Type \CWM\BroadWorksConnector\Ocip\Models\PriorityAlertCriteriaFromDnSelection
     * @Optional
     * @Group 750c600a9467af6ee77c0dbca839453e:219
     * @var \CWM\BroadWorksConnector\Ocip\Models\PriorityAlertCriteriaFromDnSelection|null
     */
    private $fromDnCriteriaSelection = null;

    /**
     * @ElementName includeAnonymousCallers
     * @Type bool
     * @Optional
     * @Group 750c600a9467af6ee77c0dbca839453e:219
     * @var bool|null
     */
    private $includeAnonymousCallers = null;

    /**
     * @ElementName includeUnavailableCallers
     * @Type bool
     * @Optional
     * @Group 750c600a9467af6ee77c0dbca839453e:219
     * @var bool|null
     */
    private $includeUnavailableCallers = null;

    /**
     * @ElementName phoneNumberList
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CriteriaReplacementDNList
     * @Nillable
     * @Optional
     * @Group 750c600a9467af6ee77c0dbca839453e:219
     * @var \CWM\BroadWorksConnector\Ocip\Models\CriteriaReplacementDNList|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $phoneNumberList = null;

    /**
     * Getter for fromDnCriteriaSelection
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\PriorityAlertCriteriaFromDnSelection
     */
    public function getFromDnCriteriaSelection()
    {
        return $this->fromDnCriteriaSelection instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->fromDnCriteriaSelection;
    }

    /**
     * Setter for fromDnCriteriaSelection
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\PriorityAlertCriteriaFromDnSelection $fromDnCriteriaSelection
     * @return $this
     */
    public function setFromDnCriteriaSelection(\CWM\BroadWorksConnector\Ocip\Models\PriorityAlertCriteriaFromDnSelection $fromDnCriteriaSelection)
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

