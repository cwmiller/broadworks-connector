<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemBroadWorksAnywhereModifyRequest
 *
 * Modify the BroadWorks Anywhere system parameters.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *         
 *         The following elements are only used in AS data mode:
 *           enableTransferNotification
 *           
 *         The following elements are only used in XS data mode:
 *           blockProvisioningOfDNAsBALocationEnabled
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"f39163d0e42e05c4a1692a62f625df9f:254","type":"sequence"}]
 */
class SystemBroadWorksAnywhereModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName enableTransferNotification
     * @Type bool
     * @Optional
     * @Group f39163d0e42e05c4a1692a62f625df9f:254
     * @var bool|null
     */
    protected $enableTransferNotification = null;

    /**
     * @ElementName blockProvisioningOfDNAsBALocation
     * @Type bool
     * @Optional
     * @Group f39163d0e42e05c4a1692a62f625df9f:254
     * @var bool|null
     */
    protected $blockProvisioningOfDNAsBALocation = null;

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

    /**
     * Getter for blockProvisioningOfDNAsBALocation
     *
     * @return bool
     */
    public function getBlockProvisioningOfDNAsBALocation()
    {
        return $this->blockProvisioningOfDNAsBALocation instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->blockProvisioningOfDNAsBALocation;
    }

    /**
     * Setter for blockProvisioningOfDNAsBALocation
     *
     * @param bool $blockProvisioningOfDNAsBALocation
     * @return $this
     */
    public function setBlockProvisioningOfDNAsBALocation($blockProvisioningOfDNAsBALocation)
    {
        $this->blockProvisioningOfDNAsBALocation = $blockProvisioningOfDNAsBALocation;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetBlockProvisioningOfDNAsBALocation()
    {
        $this->blockProvisioningOfDNAsBALocation = null;
        return $this;
    }
}

