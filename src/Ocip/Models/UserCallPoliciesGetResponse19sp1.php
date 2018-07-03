<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserCallPoliciesGetResponse19sp1
 *
 * Response to UserCallPoliciesGetRequest19sp1.
 *
 * @see UserCallPoliciesGetRequest19sp1
 */
class UserCallPoliciesGetResponse19sp1 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName redirectedCallsCOLPPrivacy
     * @var string|null
     */
    private $redirectedCallsCOLPPrivacy = null;

    /**
     * @ElementName callBeingForwardedResponseCallType
     * @var string|null
     */
    private $callBeingForwardedResponseCallType = null;

    /**
     * @ElementName callingLineIdentityForRedirectedCalls
     * @var string|null
     */
    private $callingLineIdentityForRedirectedCalls = null;

    /**
     * Getter for redirectedCallsCOLPPrivacy
     *
     * @ElementName redirectedCallsCOLPPrivacy
     * @return string|null
     */
    public function getRedirectedCallsCOLPPrivacy()
    {
        return $this->redirectedCallsCOLPPrivacy;
    }

    /**
     * Setter for redirectedCallsCOLPPrivacy
     *
     * @ElementName redirectedCallsCOLPPrivacy
     * @param string|null $redirectedCallsCOLPPrivacy
     * @return $this
     */
    public function setRedirectedCallsCOLPPrivacy($redirectedCallsCOLPPrivacy)
    {
        $this->redirectedCallsCOLPPrivacy = $redirectedCallsCOLPPrivacy;
        return $this;
    }

    /**
     * Getter for callBeingForwardedResponseCallType
     *
     * @ElementName callBeingForwardedResponseCallType
     * @return string|null
     */
    public function getCallBeingForwardedResponseCallType()
    {
        return $this->callBeingForwardedResponseCallType;
    }

    /**
     * Setter for callBeingForwardedResponseCallType
     *
     * @ElementName callBeingForwardedResponseCallType
     * @param string|null $callBeingForwardedResponseCallType
     * @return $this
     */
    public function setCallBeingForwardedResponseCallType($callBeingForwardedResponseCallType)
    {
        $this->callBeingForwardedResponseCallType = $callBeingForwardedResponseCallType;
        return $this;
    }

    /**
     * Getter for callingLineIdentityForRedirectedCalls
     *
     * @ElementName callingLineIdentityForRedirectedCalls
     * @return string|null
     */
    public function getCallingLineIdentityForRedirectedCalls()
    {
        return $this->callingLineIdentityForRedirectedCalls;
    }

    /**
     * Setter for callingLineIdentityForRedirectedCalls
     *
     * @ElementName callingLineIdentityForRedirectedCalls
     * @param string|null $callingLineIdentityForRedirectedCalls
     * @return $this
     */
    public function setCallingLineIdentityForRedirectedCalls($callingLineIdentityForRedirectedCalls)
    {
        $this->callingLineIdentityForRedirectedCalls = $callingLineIdentityForRedirectedCalls;
        return $this;
    }


}

