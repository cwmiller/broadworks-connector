<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserDirectedCallPickupWithBargeInGetResponse
 *
 * Response to UserDirectedCallPickupWithBargeInGetRequest.
 *
 * @see UserDirectedCallPickupWithBargeInGetRequest
 * @Groups [{"id":"ab0042aa512abc10edb3c55e4b416b0b:6914","type":"sequence"}]
 */
class UserDirectedCallPickupWithBargeInGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName enableBargeInWarningTone
     * @Type bool
     * @Group ab0042aa512abc10edb3c55e4b416b0b:6914
     * @var bool|null
     */
    private $enableBargeInWarningTone = null;

    /**
     * Getter for enableBargeInWarningTone
     *
     * @return bool
     */
    public function getEnableBargeInWarningTone()
    {
        return $this->enableBargeInWarningTone instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->enableBargeInWarningTone;
    }

    /**
     * Setter for enableBargeInWarningTone
     *
     * @param bool $enableBargeInWarningTone
     * @return $this
     */
    public function setEnableBargeInWarningTone($enableBargeInWarningTone)
    {
        $this->enableBargeInWarningTone = $enableBargeInWarningTone;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEnableBargeInWarningTone()
    {
        $this->enableBargeInWarningTone = null;
        return $this;
    }


}

