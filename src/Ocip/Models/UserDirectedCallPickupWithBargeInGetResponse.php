<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserDirectedCallPickupWithBargeInGetResponse
 *
 * Response to UserDirectedCallPickupWithBargeInGetRequest.
 *
 * @see UserDirectedCallPickupWithBargeInGetRequest
 * @Groups [{"id":"d8f04177e438f303b41c211e518706bf:42945","type":"sequence"}]
 */
class UserDirectedCallPickupWithBargeInGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName enableBargeInWarningTone
     * @Type bool
     * @Group d8f04177e438f303b41c211e518706bf:42945
     * @var bool|null
     */
    protected $enableBargeInWarningTone = null;

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

