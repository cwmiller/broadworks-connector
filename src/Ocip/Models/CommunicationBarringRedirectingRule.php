<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * CommunicationBarringRedirectingRule
 *
 * Communication Barring Redirecting Rule
 *
 * @Groups [{"id":"c0d21ef9ba207c335d8347e5172fce1d:1426","type":"sequence"}]
 */
class CommunicationBarringRedirectingRule
{

    /**
     * @ElementName criteria
     * @Type string
     * @Group c0d21ef9ba207c335d8347e5172fce1d:1426
     * @var string|null
     */
    private $criteria = null;

    /**
     * @ElementName action
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CommunicationBarringRedirectingAction
     * @Group c0d21ef9ba207c335d8347e5172fce1d:1426
     * @var \CWM\BroadWorksConnector\Ocip\Models\CommunicationBarringRedirectingAction|null
     */
    private $action = null;

    /**
     * @ElementName callTimeoutSeconds
     * @Type int
     * @Nillable
     * @Optional
     * @Group c0d21ef9ba207c335d8347e5172fce1d:1426
     * @var int|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $callTimeoutSeconds = null;

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

