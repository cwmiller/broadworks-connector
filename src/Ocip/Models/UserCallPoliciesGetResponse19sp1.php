<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserCallPoliciesGetResponse19sp1
 *
 * Response to UserCallPoliciesGetRequest19sp1.
 *
 * @see UserCallPoliciesGetRequest19sp1
 * @Groups [{"id":"53d18cc797d03d802cbc411ad821f1d4:908","type":"sequence"}]
 */
class UserCallPoliciesGetResponse19sp1 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName redirectedCallsCOLPPrivacy
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ConnectedLineIdentificationPrivacyOnRedirectedCalls
     * @Group 53d18cc797d03d802cbc411ad821f1d4:908
     * @var \CWM\BroadWorksConnector\Ocip\Models\ConnectedLineIdentificationPrivacyOnRedirectedCalls|null
     */
    protected $redirectedCallsCOLPPrivacy = null;

    /**
     * @ElementName callBeingForwardedResponseCallType
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CallBeingForwardedResponseCallType
     * @Group 53d18cc797d03d802cbc411ad821f1d4:908
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallBeingForwardedResponseCallType|null
     */
    protected $callBeingForwardedResponseCallType = null;

    /**
     * @ElementName callingLineIdentityForRedirectedCalls
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CallingLineIdentityForRedirectedCalls
     * @Group 53d18cc797d03d802cbc411ad821f1d4:908
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallingLineIdentityForRedirectedCalls|null
     */
    protected $callingLineIdentityForRedirectedCalls = null;

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

