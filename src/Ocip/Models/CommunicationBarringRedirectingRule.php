<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * CommunicationBarringRedirectingRule
 *
 * Communication Barring Redirecting Rule
 *
 * @Groups [{"id":"6337d0cfba4de1c83587203c5b0bae54:1563","type":"sequence"}]
 */
class CommunicationBarringRedirectingRule
{
    /**
     * @ElementName criteria
     * @Type string
     * @Group 6337d0cfba4de1c83587203c5b0bae54:1563
     * @MinLength 1
     * @MaxLength 40
     * @var string|null
     */
    protected $criteria = null;

    /**
     * @ElementName action
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CommunicationBarringRedirectingAction
     * @Group 6337d0cfba4de1c83587203c5b0bae54:1563
     * @var \CWM\BroadWorksConnector\Ocip\Models\CommunicationBarringRedirectingAction|null
     */
    protected $action = null;

    /**
     * @ElementName callTimeoutSeconds
     * @Type int
     * @Nillable
     * @Optional
     * @Group 6337d0cfba4de1c83587203c5b0bae54:1563
     * @MinInclusive 60
     * @MaxInclusive 86400
     * @var int|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $callTimeoutSeconds = null;

    /**
     * Getter for criteria
     *
     * @return string
     */
    public function getCriteria()
    {
        return $this->criteria instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->criteria;
    }

    /**
     * Setter for criteria
     *
     * @param string $criteria
     * @return $this
     */
    public function setCriteria($criteria)
    {
        $this->criteria = $criteria;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetCriteria()
    {
        $this->criteria = null;
        return $this;
    }

    /**
     * Getter for action
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\CommunicationBarringRedirectingAction
     */
    public function getAction()
    {
        return $this->action instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->action;
    }

    /**
     * Setter for action
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CommunicationBarringRedirectingAction $action
     * @return $this
     */
    public function setAction(\CWM\BroadWorksConnector\Ocip\Models\CommunicationBarringRedirectingAction $action)
    {
        $this->action = $action;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAction()
    {
        $this->action = null;
        return $this;
    }

    /**
     * Getter for callTimeoutSeconds
     *
     * @return int|null
     */
    public function getCallTimeoutSeconds()
    {
        return $this->callTimeoutSeconds instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->callTimeoutSeconds;
    }

    /**
     * Setter for callTimeoutSeconds
     *
     * @param int|null $callTimeoutSeconds
     * @return $this
     */
    public function setCallTimeoutSeconds($callTimeoutSeconds = null)
    {
        if ($callTimeoutSeconds === null) {
            $this->callTimeoutSeconds = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->callTimeoutSeconds = $callTimeoutSeconds;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetCallTimeoutSeconds()
    {
        $this->callTimeoutSeconds = null;
        return $this;
    }
}

