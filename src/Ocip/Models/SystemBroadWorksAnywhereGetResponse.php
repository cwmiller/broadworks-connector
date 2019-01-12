<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemBroadWorksAnywhereGetResponse
 *
 * The response to a SystemBroadWorksAnywhereGetRequest.
 *
 * @see SystemBroadWorksAnywhereGetRequest
 * @Groups [{"id":"72f634ecc58842ce9d362ca629a47ea9:231","type":"sequence"}]
 */
class SystemBroadWorksAnywhereGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName enableTransferNotification
     * @Type bool
     * @Group 72f634ecc58842ce9d362ca629a47ea9:231
     * @var bool|null
     */
    private $enableTransferNotification = null;

    /**
     * Getter for enableTransferNotification
     *
     * @return bool
     */
    public function getEnableTransferNotification()
    {
        return $this->enableTransferNotification instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->enableTransferNotification;
    }

    /**
     * Setter for enableTransferNotification
     *
     * @param bool $enableTransferNotification
     * @return $this
     */
    public function setEnableTransferNotification($enableTransferNotification)
    {
        $this->enableTransferNotification = $enableTransferNotification;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEnableTransferNotification()
    {
        $this->enableTransferNotification = null;
        return $this;
    }


}

