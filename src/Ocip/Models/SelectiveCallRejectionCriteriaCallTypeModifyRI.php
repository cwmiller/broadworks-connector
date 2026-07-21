<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SelectiveCallRejectionCriteriaCallTypeModifyRI
 *
 * The call type criteria used within a modify request.
 *
 * @Groups [{"id":"b3553d7704f59ff8de2f730be450316f:246","type":"sequence"}]
 */
class SelectiveCallRejectionCriteriaCallTypeModifyRI
{
    /**
     * @ElementName fromDnCriteriaSelection
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SelectiveCallRejectionCriteriaCallTypeSelection
     * @Optional
     * @Group b3553d7704f59ff8de2f730be450316f:246
     * @var \CWM\BroadWorksConnector\Ocip\Models\SelectiveCallRejectionCriteriaCallTypeSelection|null
     */
    protected $fromDnCriteriaSelection = null;

    /**
     * @ElementName includeAnonymousCallers
     * @Type bool
     * @Optional
     * @Group b3553d7704f59ff8de2f730be450316f:246
     * @var bool|null
     */
    protected $includeAnonymousCallers = null;

    /**
     * @ElementName includeUnavailableCallers
     * @Type bool
     * @Optional
     * @Group b3553d7704f59ff8de2f730be450316f:246
     * @var bool|null
     */
    protected $includeUnavailableCallers = null;

    /**
     * @ElementName includeInternalCallers
     * @Type bool
     * @Optional
     * @Group b3553d7704f59ff8de2f730be450316f:246
     * @var bool|null
     */
    protected $includeInternalCallers = null;

    /**
     * @ElementName includeExternalCallers
     * @Type bool
     * @Optional
     * @Group b3553d7704f59ff8de2f730be450316f:246
     * @var bool|null
     */
    protected $includeExternalCallers = null;

    /**
     * @ElementName phoneNumberList
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CriteriaReplacementDNList
     * @Nillable
     * @Optional
     * @Group b3553d7704f59ff8de2f730be450316f:246
     * @var \CWM\BroadWorksConnector\Ocip\Models\CriteriaReplacementDNList|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $phoneNumberList = null;

    /**
     * Getter for fromDnCriteriaSelection
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\SelectiveCallRejectionCriteriaCallTypeSelection
     */
    public function getFromDnCriteriaSelection()
    {
        return $this->fromDnCriteriaSelection instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->fromDnCriteriaSelection;
    }

    /**
     * Setter for fromDnCriteriaSelection
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SelectiveCallRejectionCriteriaCallTypeSelection $fromDnCriteriaSelection
     * @return $this
     */
    public function setFromDnCriteriaSelection(\CWM\BroadWorksConnector\Ocip\Models\SelectiveCallRejectionCriteriaCallTypeSelection $fromDnCriteriaSelection)
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
     * Getter for includeInternalCallers
     *
     * @return bool
     */
    public function getIncludeInternalCallers()
    {
        return $this->includeInternalCallers instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->includeInternalCallers;
    }

    /**
     * Setter for includeInternalCallers
     *
     * @param bool $includeInternalCallers
     * @return $this
     */
    public function setIncludeInternalCallers($includeInternalCallers)
    {
        $this->includeInternalCallers = $includeInternalCallers;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetIncludeInternalCallers()
    {
        $this->includeInternalCallers = null;
        return $this;
    }

    /**
     * Getter for includeExternalCallers
     *
     * @return bool
     */
    public function getIncludeExternalCallers()
    {
        return $this->includeExternalCallers instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->includeExternalCallers;
    }

    /**
     * Setter for includeExternalCallers
     *
     * @param bool $includeExternalCallers
     * @return $this
     */
    public function setIncludeExternalCallers($includeExternalCallers)
    {
        $this->includeExternalCallers = $includeExternalCallers;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetIncludeExternalCallers()
    {
        $this->includeExternalCallers = null;
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

