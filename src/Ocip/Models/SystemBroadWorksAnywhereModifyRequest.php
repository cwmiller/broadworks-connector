<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemBroadWorksAnywhereModifyRequest
 *
 * Modify the BroadWorks Anywhere system parameters.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 */
class SystemBroadWorksAnywhereModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
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

