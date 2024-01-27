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
 * @Groups [{"id":"fb73488c2ef4ac4400ab213b637d79a9:925","type":"sequence"}]
 */
class UserCallPoliciesModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName userId
     * @Type string
     * @Group fb73488c2ef4ac4400ab213b637d79a9:925
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    protected $userId = null;

    /**
     * @ElementName redirectedCallsCOLPPrivacy
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ConnectedLineIdentificationPrivacyOnRedirectedCalls
     * @Optional
     * @Group fb73488c2ef4ac4400ab213b637d79a9:925
     * @var \CWM\BroadWorksConnector\Ocip\Models\ConnectedLineIdentificationPrivacyOnRedirectedCalls|null
     */
    protected $redirectedCallsCOLPPrivacy = null;

    /**
     * @ElementName callBeingForwardedResponseCallType
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CallBeingForwardedResponseCallType
     * @Optional
     * @Group fb73488c2ef4ac4400ab213b637d79a9:925
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallBeingForwardedResponseCallType|null
     */
    protected $callBeingForwardedResponseCallType = null;

    /**
     * @ElementName callingLineIdentityForRedirectedCalls
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CallingLineIdentityForRedirectedCalls
     * @Optional
     * @Group fb73488c2ef4ac4400ab213b637d79a9:925
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallingLineIdentityForRedirectedCalls|null
     */
    protected $callingLineIdentityForRedirectedCalls = null;

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

