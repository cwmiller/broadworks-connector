<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemSessionAdmissionControlGetResponse
 *
 * Response to the SystemSessionAdmissionControlGetRequest.
 *         The response contains the session admission control settings for the system.
 *         
 *         Replaced by: SystemSessionAdmissionControlGetResponse21sp1.
 *
 * @see SystemSessionAdmissionControlGetRequest
 * @see SystemSessionAdmissionControlGetResponse21sp1
 * @Groups [{"id":"ab0042aa512abc10edb3c55e4b416b0b:29188","type":"sequence"}]
 */
class SystemSessionAdmissionControlGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName countLongConnectionsToMediaServer
     * @Type bool
     * @Group ab0042aa512abc10edb3c55e4b416b0b:29188
     * @var bool|null
     */
    private $countLongConnectionsToMediaServer = null;

    /**
     * @ElementName sacHandlingForMoH
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SessionAdmissionControlForMusicOnHoldType
     * @Group ab0042aa512abc10edb3c55e4b416b0b:29188
     * @var \CWM\BroadWorksConnector\Ocip\Models\SessionAdmissionControlForMusicOnHoldType|null
     */
    private $sacHandlingForMoH = null;

    /**
     * @ElementName blockVMDepositDueToSACLimits
     * @Type bool
     * @Group ab0042aa512abc10edb3c55e4b416b0b:29188
     * @var bool|null
     */
    private $blockVMDepositDueToSACLimits = null;

    /**
     * Getter for countLongConnectionsToMediaServer
     *
     * @return bool
     */
    public function getCountLongConnectionsToMediaServer()
    {
        return $this->countLongConnectionsToMediaServer instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->countLongConnectionsToMediaServer;
    }

    /**
     * Setter for countLongConnectionsToMediaServer
     *
     * @param bool $countLongConnectionsToMediaServer
     * @return $this
     */
    public function setCountLongConnectionsToMediaServer($countLongConnectionsToMediaServer)
    {
        $this->countLongConnectionsToMediaServer = $countLongConnectionsToMediaServer;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetCountLongConnectionsToMediaServer()
    {
        $this->countLongConnectionsToMediaServer = null;
        return $this;
    }

    /**
     * Getter for sacHandlingForMoH
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\SessionAdmissionControlForMusicOnHoldType
     */
    public function getSacHandlingForMoH()
    {
        return $this->sacHandlingForMoH instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->sacHandlingForMoH;
    }

    /**
     * Setter for sacHandlingForMoH
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SessionAdmissionControlForMusicOnHoldType $sacHandlingForMoH
     * @return $this
     */
    public function setSacHandlingForMoH(\CWM\BroadWorksConnector\Ocip\Models\SessionAdmissionControlForMusicOnHoldType $sacHandlingForMoH)
    {
        $this->sacHandlingForMoH = $sacHandlingForMoH;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSacHandlingForMoH()
    {
        $this->sacHandlingForMoH = null;
        return $this;
    }

    /**
     * Getter for blockVMDepositDueToSACLimits
     *
     * @return bool
     */
    public function getBlockVMDepositDueToSACLimits()
    {
        return $this->blockVMDepositDueToSACLimits instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->blockVMDepositDueToSACLimits;
    }

    /**
     * Setter for blockVMDepositDueToSACLimits
     *
     * @param bool $blockVMDepositDueToSACLimits
     * @return $this
     */
    public function setBlockVMDepositDueToSACLimits($blockVMDepositDueToSACLimits)
    {
        $this->blockVMDepositDueToSACLimits = $blockVMDepositDueToSACLimits;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetBlockVMDepositDueToSACLimits()
    {
        $this->blockVMDepositDueToSACLimits = null;
        return $this;
    }


}

