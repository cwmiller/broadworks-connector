<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserDirectedCallPickupWithBargeInGetResponse
 *
 * Response to UserDirectedCallPickupWithBargeInGetRequest.
 *
 * @see UserDirectedCallPickupWithBargeInGetRequest
 */
class UserDirectedCallPickupWithBargeInGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName enableBargeInWarningTone
     * @var bool|null
     */
    private $enableBargeInWarningTone = null;

    /**
     * Getter for enableBargeInWarningTone
     *
     * @ElementName enableBargeInWarningTone
     * @return bool|null
     */
    public function getEnableBargeInWarningTone()
    {
        return $this->enableBargeInWarningTone;
    }

    /**
     * Setter for enableBargeInWarningTone
     *
     * @ElementName enableBargeInWarningTone
     * @param bool|null $enableBargeInWarningTone
     * @return $this
     */
    public function setEnableBargeInWarningTone($enableBargeInWarningTone)
    {
        $this->enableBargeInWarningTone = $enableBargeInWarningTone;
        return $this;
    }


}

