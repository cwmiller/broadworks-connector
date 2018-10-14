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
 */
class UserCallPoliciesModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @var string|null
     */
    private $userId = null;

    /**
     * @ElementName redirectedCallsCOLPPrivacy
     * @var \CWM\BroadWorksConnector\Ocip\Models\ConnectedLineIdentificationPrivacyOnRedirectedCalls|null
     */
    private $redirectedCallsCOLPPrivacy = null;

    /**
     * @ElementName callBeingForwardedResponseCallType
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallBeingForwardedResponseCallType|null
     */
    private $callBeingForwardedResponseCallType = null;

    /**
     * @ElementName callingLineIdentityForRedirectedCalls
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallingLineIdentityForRedirectedCalls|null
     */
    private $callingLineIdentityForRedirectedCalls = null;

    /**
     * Getter for userId
     *
     * @ElementName userId
     * @return string|null
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * Setter for userId
     *
     * @ElementName userId
     * @param string|null $userId
     * @return $this
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
        return $this;
    }

    /**
     * Getter for redirectedCallsCOLPPrivacy
     *
     * @ElementName redirectedCallsCOLPPrivacy
     * @return \CWM\BroadWorksConnector\Ocip\Models\ConnectedLineIdentificationPrivacyOnRedirectedCalls|null
     */
    public function getRedirectedCallsCOLPPrivacy()
    {
        return $this->redirectedCallsCOLPPrivacy;
    }

    /**
     * Setter for redirectedCallsCOLPPrivacy
     *
     * @ElementName redirectedCallsCOLPPrivacy
     * @param \CWM\BroadWorksConnector\Ocip\Models\ConnectedLineIdentificationPrivacyOnRedirectedCalls|null $redirectedCallsCOLPPrivacy
     * @return $this
     */
    public function setRedirectedCallsCOLPPrivacy(\CWM\BroadWorksConnector\Ocip\Models\ConnectedLineIdentificationPrivacyOnRedirectedCalls $redirectedCallsCOLPPrivacy)
    {
        $this->redirectedCallsCOLPPrivacy = $redirectedCallsCOLPPrivacy;
        return $this;
    }

    /**
     * Getter for callBeingForwardedResponseCallType
     *
     * @ElementName callBeingForwardedResponseCallType
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallBeingForwardedResponseCallType|null
     */
    public function getCallBeingForwardedResponseCallType()
    {
        return $this->callBeingForwardedResponseCallType;
    }

    /**
     * Setter for callBeingForwardedResponseCallType
     *
     * @ElementName callBeingForwardedResponseCallType
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallBeingForwardedResponseCallType|null $callBeingForwardedResponseCallType
     * @return $this
     */
    public function setCallBeingForwardedResponseCallType(\CWM\BroadWorksConnector\Ocip\Models\CallBeingForwardedResponseCallType $callBeingForwardedResponseCallType)
    {
        $this->callBeingForwardedResponseCallType = $callBeingForwardedResponseCallType;
        return $this;
    }

    /**
     * Getter for callingLineIdentityForRedirectedCalls
     *
     * @ElementName callingLineIdentityForRedirectedCalls
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallingLineIdentityForRedirectedCalls|null
     */
    public function getCallingLineIdentityForRedirectedCalls()
    {
        return $this->callingLineIdentityForRedirectedCalls;
    }

    /**
     * Setter for callingLineIdentityForRedirectedCalls
     *
     * @ElementName callingLineIdentityForRedirectedCalls
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallingLineIdentityForRedirectedCalls|null $callingLineIdentityForRedirectedCalls
     * @return $this
     */
    public function setCallingLineIdentityForRedirectedCalls(\CWM\BroadWorksConnector\Ocip\Models\CallingLineIdentityForRedirectedCalls $callingLineIdentityForRedirectedCalls)
    {
        $this->callingLineIdentityForRedirectedCalls = $callingLineIdentityForRedirectedCalls;
        return $this;
    }


}

