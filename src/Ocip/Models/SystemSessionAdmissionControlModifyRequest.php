<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemSessionAdmissionControlModifyRequest
 *
 * Modify the session admission control settings for the system.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemSessionAdmissionControlModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName countLongConnectionsToMediaServer
     * @var bool|null
     */
    private $countLongConnectionsToMediaServer = null;

    /**
     * @ElementName sacHandlingForMoH
     * @var string|null
     */
    private $sacHandlingForMoH = null;

    /**
     * @ElementName blockVMDepositDueToSACLimits
     * @var bool|null
     */
    private $blockVMDepositDueToSACLimits = null;

    /**
     * @ElementName sacCodecSelectionPolicy
     * @var string|null
     */
    private $sacCodecSelectionPolicy = null;

    /**
     * @ElementName countCallToMobileNumberForSACSubscriber
     * @var bool|null
     */
    private $countCallToMobileNumberForSACSubscriber = null;

    /**
     * @ElementName countBWAnywhereForSACSubscriber
     * @var bool|null
     */
    private $countBWAnywhereForSACSubscriber = null;

    /**
     * @ElementName countROForSACSubscriber
     * @var bool|null
     */
    private $countROForSACSubscriber = null;

    /**
     * @ElementName excludeBWMobilityForSACSubscriber
     * @var bool|null
     */
    private $excludeBWMobilityForSACSubscriber = null;

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
     * @return string|null
     */
    public function getSacHandlingForMoH()
    {
        return $this->sacHandlingForMoH;
    }

    /**
     * Setter for sacHandlingForMoH
     *
     * @ElementName sacHandlingForMoH
     * @param string|null $sacHandlingForMoH
     * @return $this
     */
    public function setSacHandlingForMoH($sacHandlingForMoH)
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
     * @return string|null
     */
    public function getSacCodecSelectionPolicy()
    {
        return $this->sacCodecSelectionPolicy;
    }

    /**
     * Setter for sacCodecSelectionPolicy
     *
     * @ElementName sacCodecSelectionPolicy
     * @param string|null $sacCodecSelectionPolicy
     * @return $this
     */
    public function setSacCodecSelectionPolicy($sacCodecSelectionPolicy)
    {
        $this->sacCodecSelectionPolicy = $sacCodecSelectionPolicy;
        return $this;
    }

    /**
     * Getter for countCallToMobileNumberForSACSubscriber
     *
     * @ElementName countCallToMobileNumberForSACSubscriber
     * @return bool|null
     */
    public function getCountCallToMobileNumberForSACSubscriber()
    {
        return $this->countCallToMobileNumberForSACSubscriber;
    }

    /**
     * Setter for countCallToMobileNumberForSACSubscriber
     *
     * @ElementName countCallToMobileNumberForSACSubscriber
     * @param bool|null $countCallToMobileNumberForSACSubscriber
     * @return $this
     */
    public function setCountCallToMobileNumberForSACSubscriber($countCallToMobileNumberForSACSubscriber)
    {
        $this->countCallToMobileNumberForSACSubscriber = $countCallToMobileNumberForSACSubscriber;
        return $this;
    }

    /**
     * Getter for countBWAnywhereForSACSubscriber
     *
     * @ElementName countBWAnywhereForSACSubscriber
     * @return bool|null
     */
    public function getCountBWAnywhereForSACSubscriber()
    {
        return $this->countBWAnywhereForSACSubscriber;
    }

    /**
     * Setter for countBWAnywhereForSACSubscriber
     *
     * @ElementName countBWAnywhereForSACSubscriber
     * @param bool|null $countBWAnywhereForSACSubscriber
     * @return $this
     */
    public function setCountBWAnywhereForSACSubscriber($countBWAnywhereForSACSubscriber)
    {
        $this->countBWAnywhereForSACSubscriber = $countBWAnywhereForSACSubscriber;
        return $this;
    }

    /**
     * Getter for countROForSACSubscriber
     *
     * @ElementName countROForSACSubscriber
     * @return bool|null
     */
    public function getCountROForSACSubscriber()
    {
        return $this->countROForSACSubscriber;
    }

    /**
     * Setter for countROForSACSubscriber
     *
     * @ElementName countROForSACSubscriber
     * @param bool|null $countROForSACSubscriber
     * @return $this
     */
    public function setCountROForSACSubscriber($countROForSACSubscriber)
    {
        $this->countROForSACSubscriber = $countROForSACSubscriber;
        return $this;
    }

    /**
     * Getter for excludeBWMobilityForSACSubscriber
     *
     * @ElementName excludeBWMobilityForSACSubscriber
     * @return bool|null
     */
    public function getExcludeBWMobilityForSACSubscriber()
    {
        return $this->excludeBWMobilityForSACSubscriber;
    }

    /**
     * Setter for excludeBWMobilityForSACSubscriber
     *
     * @ElementName excludeBWMobilityForSACSubscriber
     * @param bool|null $excludeBWMobilityForSACSubscriber
     * @return $this
     */
    public function setExcludeBWMobilityForSACSubscriber($excludeBWMobilityForSACSubscriber)
    {
        $this->excludeBWMobilityForSACSubscriber = $excludeBWMobilityForSACSubscriber;
        return $this;
    }


}

