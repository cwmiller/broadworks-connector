<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserCallPoliciesGetResponse
 *
 * Response to UserCallPoliciesGetRequest.
 *
 * @see UserCallPoliciesGetRequest
 */
class UserCallPoliciesGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName redirectedCallsCOLPPrivacy
     * @var string|null
     */
    private $redirectedCallsCOLPPrivacy = null;

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


}

