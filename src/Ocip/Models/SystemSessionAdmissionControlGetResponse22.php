<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemSessionAdmissionControlGetResponse22
 *
 * Response to the SystemSessionAdmissionControlGetRequest22.
 *         The response contains the session admission control settings for the system.
 *
 * @see SystemSessionAdmissionControlGetRequest22
 * @Groups [{"id":"7f663d5135470c33ca64b0eed3c3aa0c:15111","type":"sequence"}]
 */
class SystemSessionAdmissionControlGetResponse22 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName countLongConnectionsToMediaServer
     * @Type bool
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:15111
     * @var bool|null
     */
    private $countLongConnectionsToMediaServer = null;

    /**
     * @ElementName sacHandlingForMoH
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SessionAdmissionControlForMusicOnHoldType
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:15111
     * @var \CWM\BroadWorksConnector\Ocip\Models\SessionAdmissionControlForMusicOnHoldType|null
     */
    private $sacHandlingForMoH = null;

    /**
     * @ElementName blockVMDepositDueToSACLimits
     * @Type bool
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:15111
     * @var bool|null
     */
    private $blockVMDepositDueToSACLimits = null;

    /**
     * @ElementName sacCodecSelectionPolicy
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SessionAdmissionControlCodecSelectionPolicyType
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:15111
     * @var \CWM\BroadWorksConnector\Ocip\Models\SessionAdmissionControlCodecSelectionPolicyType|null
     */
    private $sacCodecSelectionPolicy = null;

    /**
     * @ElementName countCallToMobileNumberForSACSubscriber
     * @Type bool
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:15111
     * @var bool|null
     */
    private $countCallToMobileNumberForSACSubscriber = null;

    /**
     * @ElementName countBWAnywhereForSACSubscriber
     * @Type bool
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:15111
     * @var bool|null
     */
    private $countBWAnywhereForSACSubscriber = null;

    /**
     * @ElementName countROForSACSubscriber
     * @Type bool
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:15111
     * @var bool|null
     */
    private $countROForSACSubscriber = null;

    /**
     * @ElementName excludeBWMobilityForSACSubscriber
     * @Type bool
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:15111
     * @var bool|null
     */
    private $excludeBWMobilityForSACSubscriber = null;

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

    /**
     * Getter for sacCodecSelectionPolicy
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\SessionAdmissionControlCodecSelectionPolicyType
     */
    public function getSacCodecSelectionPolicy()
    {
        return $this->sacCodecSelectionPolicy instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->sacCodecSelectionPolicy;
    }

    /**
     * Setter for sacCodecSelectionPolicy
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SessionAdmissionControlCodecSelectionPolicyType $sacCodecSelectionPolicy
     * @return $this
     */
    public function setSacCodecSelectionPolicy(\CWM\BroadWorksConnector\Ocip\Models\SessionAdmissionControlCodecSelectionPolicyType $sacCodecSelectionPolicy)
    {
        $this->sacCodecSelectionPolicy = $sacCodecSelectionPolicy;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSacCodecSelectionPolicy()
    {
        $this->sacCodecSelectionPolicy = null;
        return $this;
    }

    /**
     * Getter for countCallToMobileNumberForSACSubscriber
     *
     * @return bool
     */
    public function getCountCallToMobileNumberForSACSubscriber()
    {
        return $this->countCallToMobileNumberForSACSubscriber instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->countCallToMobileNumberForSACSubscriber;
    }

    /**
     * Setter for countCallToMobileNumberForSACSubscriber
     *
     * @param bool $countCallToMobileNumberForSACSubscriber
     * @return $this
     */
    public function setCountCallToMobileNumberForSACSubscriber($countCallToMobileNumberForSACSubscriber)
    {
        $this->countCallToMobileNumberForSACSubscriber = $countCallToMobileNumberForSACSubscriber;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetCountCallToMobileNumberForSACSubscriber()
    {
        $this->countCallToMobileNumberForSACSubscriber = null;
        return $this;
    }

    /**
     * Getter for countBWAnywhereForSACSubscriber
     *
     * @return bool
     */
    public function getCountBWAnywhereForSACSubscriber()
    {
        return $this->countBWAnywhereForSACSubscriber instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->countBWAnywhereForSACSubscriber;
    }

    /**
     * Setter for countBWAnywhereForSACSubscriber
     *
     * @param bool $countBWAnywhereForSACSubscriber
     * @return $this
     */
    public function setCountBWAnywhereForSACSubscriber($countBWAnywhereForSACSubscriber)
    {
        $this->countBWAnywhereForSACSubscriber = $countBWAnywhereForSACSubscriber;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetCountBWAnywhereForSACSubscriber()
    {
        $this->countBWAnywhereForSACSubscriber = null;
        return $this;
    }

    /**
     * Getter for countROForSACSubscriber
     *
     * @return bool
     */
    public function getCountROForSACSubscriber()
    {
        return $this->countROForSACSubscriber instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->countROForSACSubscriber;
    }

    /**
     * Setter for countROForSACSubscriber
     *
     * @param bool $countROForSACSubscriber
     * @return $this
     */
    public function setCountROForSACSubscriber($countROForSACSubscriber)
    {
        $this->countROForSACSubscriber = $countROForSACSubscriber;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetCountROForSACSubscriber()
    {
        $this->countROForSACSubscriber = null;
        return $this;
    }

    /**
     * Getter for excludeBWMobilityForSACSubscriber
     *
     * @return bool
     */
    public function getExcludeBWMobilityForSACSubscriber()
    {
        return $this->excludeBWMobilityForSACSubscriber instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->excludeBWMobilityForSACSubscriber;
    }

    /**
     * Setter for excludeBWMobilityForSACSubscriber
     *
     * @param bool $excludeBWMobilityForSACSubscriber
     * @return $this
     */
    public function setExcludeBWMobilityForSACSubscriber($excludeBWMobilityForSACSubscriber)
    {
        $this->excludeBWMobilityForSACSubscriber = $excludeBWMobilityForSACSubscriber;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetExcludeBWMobilityForSACSubscriber()
    {
        $this->excludeBWMobilityForSACSubscriber = null;
        return $this;
    }


}

