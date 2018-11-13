<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemBroadWorksAnywhereGetResponse
 *
 * The response to a SystemBroadWorksAnywhereGetRequest.
 *
 * @see SystemBroadWorksAnywhereGetRequest
 */
class SystemBroadWorksAnywhereGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName enableTransferNotification
     * @Type bool
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

