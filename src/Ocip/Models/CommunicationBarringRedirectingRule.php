<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * CommunicationBarringRedirectingRule
 *
 * Communication Barring Redirecting Rule
 */
class CommunicationBarringRedirectingRule
{

    /**
     * @ElementName criteria
     * @var string|null
     */
    private $criteria = null;

    /**
     * @ElementName action
     * @var string|null
     */
    private $action = null;

    /**
     * @ElementName callTimeoutSeconds
     * @var int|null
     */
    private $callTimeoutSeconds = null;

    /**
     * Getter for criteria
     *
     * @ElementName criteria
     * @return string|null
     */
    public function getCriteria()
    {
        return $this->criteria;
    }

    /**
     * Setter for criteria
     *
     * @ElementName criteria
     * @param string|null $criteria
     * @return $this
     */
    public function setCriteria($criteria)
    {
        $this->criteria = $criteria;
        return $this;
    }

    /**
     * Getter for action
     *
     * @ElementName action
     * @return string|null
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * Setter for action
     *
     * @ElementName action
     * @param string|null $action
     * @return $this
     */
    public function setAction($action)
    {
        $this->action = $action;
        return $this;
    }

    /**
     * Getter for callTimeoutSeconds
     *
     * @ElementName callTimeoutSeconds
     * @return int|null
     */
    public function getCallTimeoutSeconds()
    {
        return $this->callTimeoutSeconds;
    }

    /**
     * Setter for callTimeoutSeconds
     *
     * @ElementName callTimeoutSeconds
     * @param int|null $callTimeoutSeconds
     * @return $this
     */
    public function setCallTimeoutSeconds($callTimeoutSeconds)
    {
        $this->callTimeoutSeconds = $callTimeoutSeconds;
        return $this;
    }


}

