<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * CommunicationBarringRedirectingRule15sp2
 *
 * Communication Barring Redirecting Rule
 *
 * @Groups [{"id":"d8f04177e438f303b41c211e518706bf:48692","type":"sequence"}]
 */
class CommunicationBarringRedirectingRule15sp2
{
    /**
     * @ElementName criteria
     * @Type string
     * @Group d8f04177e438f303b41c211e518706bf:48692
     * @MinLength 1
     * @MaxLength 40
     * @var string|null
     */
    protected $criteria = null;

    /**
     * @ElementName action
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CommunicationBarringRedirectingAction15sp2
     * @Group d8f04177e438f303b41c211e518706bf:48692
     * @var \CWM\BroadWorksConnector\Ocip\Models\CommunicationBarringRedirectingAction15sp2|null
     */
    protected $action = null;

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
     * @return \CWM\BroadWorksConnector\Ocip\Models\CommunicationBarringRedirectingAction15sp2
     */
    public function getAction()
    {
        return $this->action instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->action;
    }

    /**
     * Setter for action
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CommunicationBarringRedirectingAction15sp2 $action
     * @return $this
     */
    public function setAction(\CWM\BroadWorksConnector\Ocip\Models\CommunicationBarringRedirectingAction15sp2 $action)
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
}

