<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SelectiveCallRejectionCriteriaCallType
 *
 * The call type criteria used within an add/get request.
 */
class SelectiveCallRejectionCriteriaCallType
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
     * @ElementName phoneNumber
     * @var string[]
     */
    private $phoneNumber = array(
        
    );

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
     * Getter for phoneNumber
     *
     * @ElementName phoneNumber
     * @return string[]
     */
    public function getPhoneNumber()
    {
        return $this->phoneNumber;
    }

    /**
     * Setter for phoneNumber
     *
     * @ElementName phoneNumber
     * @param string[] $phoneNumber
     * @return $this
     */
    public function setPhoneNumber($phoneNumber)
    {
        $this->phoneNumber = $phoneNumber;
        return $this;
    }

    /**
     * Adder for phoneNumber
     *
     * @ElementName phoneNumber
     * @param string $phoneNumber
     * @return $this
     */
    public function addPhoneNumber($phoneNumber)
    {
        $this->phoneNumber []= $phoneNumber;
        return $this;
    }


}

