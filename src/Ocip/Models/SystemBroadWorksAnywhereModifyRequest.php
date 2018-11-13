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

