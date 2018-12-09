<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserCallPoliciesModifyRequest
 *
 * Modify the user level data associated with Call Policies.
 *         The following elements are only used in AS data mode:
 *           callingLineIdentityForRedirectedCalls
 *           
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"ee3830ce42f01a3ef2a105d473fc3b17:733","type":"sequence"}]
 */
class UserCallPoliciesModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @Type string
     * @Group ee3830ce42f01a3ef2a105d473fc3b17:733
     * @var string|null
     */
    private $userId = null;

    /**
     * @ElementName redirectedCallsCOLPPrivacy
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ConnectedLineIdentificationPrivacyOnRedirectedCalls
     * @Optional
     * @Group ee3830ce42f01a3ef2a105d473fc3b17:733
     * @var \CWM\BroadWorksConnector\Ocip\Models\ConnectedLineIdentificationPrivacyOnRedirectedCalls|null
     */
    private $redirectedCallsCOLPPrivacy = null;

    /**
     * @ElementName callBeingForwardedResponseCallType
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CallBeingForwardedResponseCallType
     * @Optional
     * @Group ee3830ce42f01a3ef2a105d473fc3b17:733
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallBeingForwardedResponseCallType|null
     */
    private $callBeingForwardedResponseCallType = null;

    /**
     * @ElementName callingLineIdentityForRedirectedCalls
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CallingLineIdentityForRedirectedCalls
     * @Optional
     * @Group ee3830ce42f01a3ef2a105d473fc3b17:733
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallingLineIdentityForRedirectedCalls|null
     */
    private $callingLineIdentityForRedirectedCalls = null;

    /**
     * Getter for userId
     *
     * @return string
     */
    public function getUserId()
    {
        return $this->userId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->userId;
    }

    /**
     * Setter for userId
     *
     * @param string $userId
     * @return $this
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUserId()
    {
        $this->userId = null;
        return $this;
    }

    /**
     * Getter for redirectedCallsCOLPPrivacy
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\ConnectedLineIdentificationPrivacyOnRedirectedCalls
     */
    public function getRedirectedCallsCOLPPrivacy()
    {
        return $this->redirectedCallsCOLPPrivacy instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->redirectedCallsCOLPPrivacy;
    }

    /**
     * Setter for redirectedCallsCOLPPrivacy
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\ConnectedLineIdentificationPrivacyOnRedirectedCalls $redirectedCallsCOLPPrivacy
     * @return $this
     */
    public function setRedirectedCallsCOLPPrivacy(\CWM\BroadWorksConnector\Ocip\Models\ConnectedLineIdentificationPrivacyOnRedirectedCalls $redirectedCallsCOLPPrivacy)
    {
        $this->redirectedCallsCOLPPrivacy = $redirectedCallsCOLPPrivacy;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetRedirectedCallsCOLPPrivacy()
    {
        $this->redirectedCallsCOLPPrivacy = null;
        return $this;
    }

    /**
     * Getter for callBeingForwardedResponseCallType
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallBeingForwardedResponseCallType
     */
    public function getCallBeingForwardedResponseCallType()
    {
        return $this->callBeingForwardedResponseCallType instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->callBeingForwardedResponseCallType;
    }

    /**
     * Setter for callBeingForwardedResponseCallType
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallBeingForwardedResponseCallType $callBeingForwardedResponseCallType
     * @return $this
     */
    public function setCallBeingForwardedResponseCallType(\CWM\BroadWorksConnector\Ocip\Models\CallBeingForwardedResponseCallType $callBeingForwardedResponseCallType)
    {
        $this->callBeingForwardedResponseCallType = $callBeingForwardedResponseCallType;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetCallBeingForwardedResponseCallType()
    {
        $this->callBeingForwardedResponseCallType = null;
        return $this;
    }

    /**
     * Getter for callingLineIdentityForRedirectedCalls
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallingLineIdentityForRedirectedCalls
     */
    public function getCallingLineIdentityForRedirectedCalls()
    {
        return $this->callingLineIdentityForRedirectedCalls instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->callingLineIdentityForRedirectedCalls;
    }

    /**
     * Setter for callingLineIdentityForRedirectedCalls
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallingLineIdentityForRedirectedCalls $callingLineIdentityForRedirectedCalls
     * @return $this
     */
    public function setCallingLineIdentityForRedirectedCalls(\CWM\BroadWorksConnector\Ocip\Models\CallingLineIdentityForRedirectedCalls $callingLineIdentityForRedirectedCalls)
    {
        $this->callingLineIdentityForRedirectedCalls = $callingLineIdentityForRedirectedCalls;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetCallingLineIdentityForRedirectedCalls()
    {
        $this->callingLineIdentityForRedirectedCalls = null;
        return $this;
    }


}

