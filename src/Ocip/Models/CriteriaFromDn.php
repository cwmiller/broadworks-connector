<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * CriteriaFromDn
 *
 * The from dn criteria used within an add/get request.
 *
 * @Groups [{"id":"6337d0cfba4de1c83587203c5b0bae54:2151","type":"sequence"}]
 */
class CriteriaFromDn
{
    /**
     * @ElementName fromDnCriteriaSelection
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CriteriaDnSelection
     * @Group 6337d0cfba4de1c83587203c5b0bae54:2151
     * @var \CWM\BroadWorksConnector\Ocip\Models\CriteriaDnSelection|null
     */
    protected $fromDnCriteriaSelection = null;

    /**
     * @ElementName includeAnonymousCallers
     * @Type bool
     * @Group 6337d0cfba4de1c83587203c5b0bae54:2151
     * @var bool|null
     */
    protected $includeAnonymousCallers = null;

    /**
     * @ElementName includeUnavailableCallers
     * @Type bool
     * @Group 6337d0cfba4de1c83587203c5b0bae54:2151
     * @var bool|null
     */
    protected $includeUnavailableCallers = null;

    /**
     * @ElementName phoneNumber
     * @Type string
     * @Array
     * @Optional
     * @Group 6337d0cfba4de1c83587203c5b0bae54:2151
     * @MinLength 1
     * @MaxLength 23
     * @var string[]
     */
    protected $phoneNumber = [
        
    ];

    /**
     * Getter for fromDnCriteriaSelection
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\CriteriaDnSelection
     */
    public function getFromDnCriteriaSelection()
    {
        return $this->fromDnCriteriaSelection instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->fromDnCriteriaSelection;
    }

    /**
     * Setter for fromDnCriteriaSelection
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CriteriaDnSelection $fromDnCriteriaSelection
     * @return $this
     */
    public function setFromDnCriteriaSelection(\CWM\BroadWorksConnector\Ocip\Models\CriteriaDnSelection $fromDnCriteriaSelection)
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
     * Getter for phoneNumber
     *
     * @return string[]
     */
    public function getPhoneNumber()
    {
        return $this->phoneNumber instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->phoneNumber;
    }

    /**
     * Setter for phoneNumber
     *
     * @param string[] $phoneNumber
     * @return $this
     */
    public function setPhoneNumber(array $phoneNumber)
    {
        $this->phoneNumber = $phoneNumber;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetPhoneNumber()
    {
        $this->phoneNumber = null;
        return $this;
    }

    /**
     * Adder for phoneNumber
     *
     * @param string $phoneNumber
     * @return $this
     */
    public function addPhoneNumber(string $phoneNumber)
    {
        $this->phoneNumber[] = $phoneNumber;
        return $this;
    }
}

