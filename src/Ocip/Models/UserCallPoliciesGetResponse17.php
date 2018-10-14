<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserCallPoliciesGetResponse17
 *
 * Response to UserCallPoliciesGetRequest17.
 *         
 *         Replaced by: UserCallPoliciesGetResponse19sp1 in AS data mode
 *
 * @see UserCallPoliciesGetRequest17
 * @see UserCallPoliciesGetResponse19sp1
 */
class UserCallPoliciesGetResponse17 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

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


}

