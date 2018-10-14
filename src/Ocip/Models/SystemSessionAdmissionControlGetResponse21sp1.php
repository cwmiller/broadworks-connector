<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemSessionAdmissionControlGetResponse21sp1
 *
 * Response to the SystemSessionAdmissionControlGetRequest21sp1.
 *         The response contains the session admission control settings for the
 * system.
 *         
 *         Replaced by: SystemSessionAdmissionControlGetResponse22.
 *
 * @see SystemSessionAdmissionControlGetRequest21sp1
 * @see SystemSessionAdmissionControlGetResponse22
 */
class SystemSessionAdmissionControlGetResponse21sp1 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName countLongConnectionsToMediaServer
     * @var bool|null
     */
    private $countLongConnectionsToMediaServer = null;

    /**
     * @ElementName sacHandlingForMoH
     * @var \CWM\BroadWorksConnector\Ocip\Models\SessionAdmissionControlForMusicOnHoldType|null
     */
    private $sacHandlingForMoH = null;

    /**
     * @ElementName blockVMDepositDueToSACLimits
     * @var bool|null
     */
    private $blockVMDepositDueToSACLimits = null;

    /**
     * @ElementName sacCodecSelectionPolicy
     * @var \CWM\BroadWorksConnector\Ocip\Models\SessionAdmissionControlCodecSelectionPolicyType|null
     */
    private $sacCodecSelectionPolicy = null;

    /**
     * Getter for countLongConnectionsToMediaServer
     *
     * @ElementName countLongConnectionsToMediaServer
     * @return bool|null
     */
    public function getCountLongConnectionsToMediaServer()
    {
        return $this->countLongConnectionsToMediaServer;
    }

    /**
     * Setter for countLongConnectionsToMediaServer
     *
     * @ElementName countLongConnectionsToMediaServer
     * @param bool|null $countLongConnectionsToMediaServer
     * @return $this
     */
    public function setCountLongConnectionsToMediaServer($countLongConnectionsToMediaServer)
    {
        $this->countLongConnectionsToMediaServer = $countLongConnectionsToMediaServer;
        return $this;
    }

    /**
     * Getter for sacHandlingForMoH
     *
     * @ElementName sacHandlingForMoH
     * @return \CWM\BroadWorksConnector\Ocip\Models\SessionAdmissionControlForMusicOnHoldType|null
     */
    public function getSacHandlingForMoH()
    {
        return $this->sacHandlingForMoH;
    }

    /**
     * Setter for sacHandlingForMoH
     *
     * @ElementName sacHandlingForMoH
     * @param \CWM\BroadWorksConnector\Ocip\Models\SessionAdmissionControlForMusicOnHoldType|null $sacHandlingForMoH
     * @return $this
     */
    public function setSacHandlingForMoH(\CWM\BroadWorksConnector\Ocip\Models\SessionAdmissionControlForMusicOnHoldType $sacHandlingForMoH)
    {
        $this->sacHandlingForMoH = $sacHandlingForMoH;
        return $this;
    }

    /**
     * Getter for blockVMDepositDueToSACLimits
     *
     * @ElementName blockVMDepositDueToSACLimits
     * @return bool|null
     */
    public function getBlockVMDepositDueToSACLimits()
    {
        return $this->blockVMDepositDueToSACLimits;
    }

    /**
     * Setter for blockVMDepositDueToSACLimits
     *
     * @ElementName blockVMDepositDueToSACLimits
     * @param bool|null $blockVMDepositDueToSACLimits
     * @return $this
     */
    public function setBlockVMDepositDueToSACLimits($blockVMDepositDueToSACLimits)
    {
        $this->blockVMDepositDueToSACLimits = $blockVMDepositDueToSACLimits;
        return $this;
    }

    /**
     * Getter for sacCodecSelectionPolicy
     *
     * @ElementName sacCodecSelectionPolicy
     * @return \CWM\BroadWorksConnector\Ocip\Models\SessionAdmissionControlCodecSelectionPolicyType|null
     */
    public function getSacCodecSelectionPolicy()
    {
        return $this->sacCodecSelectionPolicy;
    }

    /**
     * Setter for sacCodecSelectionPolicy
     *
     * @ElementName sacCodecSelectionPolicy
     * @param \CWM\BroadWorksConnector\Ocip\Models\SessionAdmissionControlCodecSelectionPolicyType|null $sacCodecSelectionPolicy
     * @return $this
     */
    public function setSacCodecSelectionPolicy(\CWM\BroadWorksConnector\Ocip\Models\SessionAdmissionControlCodecSelectionPolicyType $sacCodecSelectionPolicy)
    {
        $this->sacCodecSelectionPolicy = $sacCodecSelectionPolicy;
        return $this;
    }


}

