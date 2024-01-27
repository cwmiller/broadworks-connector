<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserCallPoliciesGetResponse
 *
 * Response to UserCallPoliciesGetRequest.
 *
 * @see UserCallPoliciesGetRequest
 * @Groups [{"id":"d8f04177e438f303b41c211e518706bf:41596","type":"sequence"}]
 */
class UserCallPoliciesGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName redirectedCallsCOLPPrivacy
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ConnectedLineIdentificationPrivacyOnRedirectedCalls
     * @Group d8f04177e438f303b41c211e518706bf:41596
     * @var \CWM\BroadWorksConnector\Ocip\Models\ConnectedLineIdentificationPrivacyOnRedirectedCalls|null
     */
    protected $redirectedCallsCOLPPrivacy = null;

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
}

