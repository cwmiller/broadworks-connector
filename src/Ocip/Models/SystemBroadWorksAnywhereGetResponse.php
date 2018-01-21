<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemBroadWorksAnywhereGetResponse
 *
 * The response to a SystemBroadWorksAnywhereGetRequest.
 */
class SystemBroadWorksAnywhereGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName enableTransferNotification
     * @var bool|null
     */
    private $enableTransferNotification = null;

    /**
     * Getter for enableTransferNotification
     *
     * @ElementName enableTransferNotification
     * @return bool|null
     */
    public function getEnableTransferNotification()
    {
        return $this->enableTransferNotification;
    }

    /**
     * Setter for enableTransferNotification
     *
     * @ElementName enableTransferNotification
     * @param bool|null $enableTransferNotification
     * @return $this
     */
    public function setEnableTransferNotification($enableTransferNotification)
    {
        $this->enableTransferNotification = $enableTransferNotification;
        return $this;
    }


}

