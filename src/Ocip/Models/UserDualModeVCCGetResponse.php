<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserDualModeVCCGetResponse
 *
 * Response to UserDualModeVCCGetRequest
 */
class UserDualModeVCCGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName subscriberUserName
     * @var string|null
     */
    private $subscriberUserName = null;

    /**
     * Getter for subscriberUserName
     *
     * @ElementName subscriberUserName
     * @return string|null
     */
    public function getSubscriberUserName()
    {
        return $this->subscriberUserName;
    }

    /**
     * Setter for subscriberUserName
     *
     * @ElementName subscriberUserName
     * @param string|null $subscriberUserName
     * @return $this
     */
    public function setSubscriberUserName($subscriberUserName)
    {
        $this->subscriberUserName = $subscriberUserName;
        return $this;
    }


}

