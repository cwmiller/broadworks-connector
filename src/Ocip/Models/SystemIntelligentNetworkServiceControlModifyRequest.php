<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemIntelligentNetworkServiceControlModifyRequest
 *
 * Modify the system level data associated with Intelligent Network Service
 * Control.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemIntelligentNetworkServiceControlModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName preAnswerActionTimeoutSeconds
     * @var int|null
     */
    private $preAnswerActionTimeoutSeconds = null;

    /**
     * @ElementName msgRejectNoVoiceMail
     * @var string|null
     */
    private $msgRejectNoVoiceMail = null;

    /**
     * @ElementName msgRejectVoiceMail
     * @var string|null
     */
    private $msgRejectVoiceMail = null;

    /**
     * @ElementName msgPreAnswerWait
     * @var string|null
     */
    private $msgPreAnswerWait = null;

    /**
     * @ElementName msgBusy
     * @var string|null
     */
    private $msgBusy = null;

    /**
     * @ElementName msgRelease
     * @var string|null
     */
    private $msgRelease = null;

    /**
     * @ElementName msgNoAnswer
     * @var string|null
     */
    private $msgNoAnswer = null;

    /**
     * @ElementName msgOCPReject
     * @var string|null
     */
    private $msgOCPReject = null;

    /**
     * @ElementName msgForwardLoop
     * @var string|null
     */
    private $msgForwardLoop = null;

    /**
     * @ElementName msgTemporarilyUnavailable
     * @var string|null
     */
    private $msgTemporarilyUnavailable = null;

    /**
     * Getter for preAnswerActionTimeoutSeconds
     *
     * @ElementName preAnswerActionTimeoutSeconds
     * @return int|null
     */
    public function getPreAnswerActionTimeoutSeconds()
    {
        return $this->preAnswerActionTimeoutSeconds;
    }

    /**
     * Setter for preAnswerActionTimeoutSeconds
     *
     * @ElementName preAnswerActionTimeoutSeconds
     * @param int|null $preAnswerActionTimeoutSeconds
     * @return $this
     */
    public function setPreAnswerActionTimeoutSeconds($preAnswerActionTimeoutSeconds)
    {
        $this->preAnswerActionTimeoutSeconds = $preAnswerActionTimeoutSeconds;
        return $this;
    }

    /**
     * Getter for msgRejectNoVoiceMail
     *
     * @ElementName msgRejectNoVoiceMail
     * @return string|null
     */
    public function getMsgRejectNoVoiceMail()
    {
        return $this->msgRejectNoVoiceMail;
    }

    /**
     * Setter for msgRejectNoVoiceMail
     *
     * @ElementName msgRejectNoVoiceMail
     * @param string|null $msgRejectNoVoiceMail
     * @return $this
     */
    public function setMsgRejectNoVoiceMail($msgRejectNoVoiceMail)
    {
        $this->msgRejectNoVoiceMail = $msgRejectNoVoiceMail;
        return $this;
    }

    /**
     * Getter for msgRejectVoiceMail
     *
     * @ElementName msgRejectVoiceMail
     * @return string|null
     */
    public function getMsgRejectVoiceMail()
    {
        return $this->msgRejectVoiceMail;
    }

    /**
     * Setter for msgRejectVoiceMail
     *
     * @ElementName msgRejectVoiceMail
     * @param string|null $msgRejectVoiceMail
     * @return $this
     */
    public function setMsgRejectVoiceMail($msgRejectVoiceMail)
    {
        $this->msgRejectVoiceMail = $msgRejectVoiceMail;
        return $this;
    }

    /**
     * Getter for msgPreAnswerWait
     *
     * @ElementName msgPreAnswerWait
     * @return string|null
     */
    public function getMsgPreAnswerWait()
    {
        return $this->msgPreAnswerWait;
    }

    /**
     * Setter for msgPreAnswerWait
     *
     * @ElementName msgPreAnswerWait
     * @param string|null $msgPreAnswerWait
     * @return $this
     */
    public function setMsgPreAnswerWait($msgPreAnswerWait)
    {
        $this->msgPreAnswerWait = $msgPreAnswerWait;
        return $this;
    }

    /**
     * Getter for msgBusy
     *
     * @ElementName msgBusy
     * @return string|null
     */
    public function getMsgBusy()
    {
        return $this->msgBusy;
    }

    /**
     * Setter for msgBusy
     *
     * @ElementName msgBusy
     * @param string|null $msgBusy
     * @return $this
     */
    public function setMsgBusy($msgBusy)
    {
        $this->msgBusy = $msgBusy;
        return $this;
    }

    /**
     * Getter for msgRelease
     *
     * @ElementName msgRelease
     * @return string|null
     */
    public function getMsgRelease()
    {
        return $this->msgRelease;
    }

    /**
     * Setter for msgRelease
     *
     * @ElementName msgRelease
     * @param string|null $msgRelease
     * @return $this
     */
    public function setMsgRelease($msgRelease)
    {
        $this->msgRelease = $msgRelease;
        return $this;
    }

    /**
     * Getter for msgNoAnswer
     *
     * @ElementName msgNoAnswer
     * @return string|null
     */
    public function getMsgNoAnswer()
    {
        return $this->msgNoAnswer;
    }

    /**
     * Setter for msgNoAnswer
     *
     * @ElementName msgNoAnswer
     * @param string|null $msgNoAnswer
     * @return $this
     */
    public function setMsgNoAnswer($msgNoAnswer)
    {
        $this->msgNoAnswer = $msgNoAnswer;
        return $this;
    }

    /**
     * Getter for msgOCPReject
     *
     * @ElementName msgOCPReject
     * @return string|null
     */
    public function getMsgOCPReject()
    {
        return $this->msgOCPReject;
    }

    /**
     * Setter for msgOCPReject
     *
     * @ElementName msgOCPReject
     * @param string|null $msgOCPReject
     * @return $this
     */
    public function setMsgOCPReject($msgOCPReject)
    {
        $this->msgOCPReject = $msgOCPReject;
        return $this;
    }

    /**
     * Getter for msgForwardLoop
     *
     * @ElementName msgForwardLoop
     * @return string|null
     */
    public function getMsgForwardLoop()
    {
        return $this->msgForwardLoop;
    }

    /**
     * Setter for msgForwardLoop
     *
     * @ElementName msgForwardLoop
     * @param string|null $msgForwardLoop
     * @return $this
     */
    public function setMsgForwardLoop($msgForwardLoop)
    {
        $this->msgForwardLoop = $msgForwardLoop;
        return $this;
    }

    /**
     * Getter for msgTemporarilyUnavailable
     *
     * @ElementName msgTemporarilyUnavailable
     * @return string|null
     */
    public function getMsgTemporarilyUnavailable()
    {
        return $this->msgTemporarilyUnavailable;
    }

    /**
     * Setter for msgTemporarilyUnavailable
     *
     * @ElementName msgTemporarilyUnavailable
     * @param string|null $msgTemporarilyUnavailable
     * @return $this
     */
    public function setMsgTemporarilyUnavailable($msgTemporarilyUnavailable)
    {
        $this->msgTemporarilyUnavailable = $msgTemporarilyUnavailable;
        return $this;
    }


}

