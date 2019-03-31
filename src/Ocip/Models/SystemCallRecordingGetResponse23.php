<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemCallRecordingGetResponse23
 *
 * Response to SystemCallRecordingGetRequest23.
 *
 * @see SystemCallRecordingGetRequest23
 * @Groups [{"id":"9741e074fbfeb4c7312bfa4dfbaee3d3:291","type":"sequence"}]
 */
class SystemCallRecordingGetResponse23 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName continueCallAfterRecordingFailure
     * @Type bool
     * @Group 9741e074fbfeb4c7312bfa4dfbaee3d3:291
     * @var bool|null
     */
    private $continueCallAfterRecordingFailure = null;

    /**
     * @ElementName maxResponseWaitTimeMilliseconds
     * @Type int
     * @Group 9741e074fbfeb4c7312bfa4dfbaee3d3:291
     * @MinInclusive 1000
     * @MaxInclusive 10000
     * @var int|null
     */
    private $maxResponseWaitTimeMilliseconds = null;

    /**
     * @ElementName continueCallAfterVideoRecordingFailure
     * @Type bool
     * @Group 9741e074fbfeb4c7312bfa4dfbaee3d3:291
     * @var bool|null
     */
    private $continueCallAfterVideoRecordingFailure = null;

    /**
     * @ElementName useContinueCallAfterRecordingFailureForOnDemandMode
     * @Type bool
     * @Group 9741e074fbfeb4c7312bfa4dfbaee3d3:291
     * @var bool|null
     */
    private $useContinueCallAfterRecordingFailureForOnDemandMode = null;

    /**
     * @ElementName useContinueCallAfterRecordingFailureForOnDemandUserInitiatedStartMode
     * @Type bool
     * @Group 9741e074fbfeb4c7312bfa4dfbaee3d3:291
     * @var bool|null
     */
    private $useContinueCallAfterRecordingFailureForOnDemandUserInitiatedStartMode = null;

    /**
     * @ElementName restrictCallRecordingProvisioningAccess
     * @Type bool
     * @Group 9741e074fbfeb4c7312bfa4dfbaee3d3:291
     * @var bool|null
     */
    private $restrictCallRecordingProvisioningAccess = null;

    /**
     * Getter for continueCallAfterRecordingFailure
     *
     * @return bool
     */
    public function getContinueCallAfterRecordingFailure()
    {
        return $this->continueCallAfterRecordingFailure instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->continueCallAfterRecordingFailure;
    }

    /**
     * Setter for continueCallAfterRecordingFailure
     *
     * @param bool $continueCallAfterRecordingFailure
     * @return $this
     */
    public function setContinueCallAfterRecordingFailure($continueCallAfterRecordingFailure)
    {
        $this->continueCallAfterRecordingFailure = $continueCallAfterRecordingFailure;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetContinueCallAfterRecordingFailure()
    {
        $this->continueCallAfterRecordingFailure = null;
        return $this;
    }

    /**
     * Getter for maxResponseWaitTimeMilliseconds
     *
     * @return int
     */
    public function getMaxResponseWaitTimeMilliseconds()
    {
        return $this->maxResponseWaitTimeMilliseconds instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->maxResponseWaitTimeMilliseconds;
    }

    /**
     * Setter for maxResponseWaitTimeMilliseconds
     *
     * @param int $maxResponseWaitTimeMilliseconds
     * @return $this
     */
    public function setMaxResponseWaitTimeMilliseconds($maxResponseWaitTimeMilliseconds)
    {
        $this->maxResponseWaitTimeMilliseconds = $maxResponseWaitTimeMilliseconds;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMaxResponseWaitTimeMilliseconds()
    {
        $this->maxResponseWaitTimeMilliseconds = null;
        return $this;
    }

    /**
     * Getter for continueCallAfterVideoRecordingFailure
     *
     * @return bool
     */
    public function getContinueCallAfterVideoRecordingFailure()
    {
        return $this->continueCallAfterVideoRecordingFailure instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->continueCallAfterVideoRecordingFailure;
    }

    /**
     * Setter for continueCallAfterVideoRecordingFailure
     *
     * @param bool $continueCallAfterVideoRecordingFailure
     * @return $this
     */
    public function setContinueCallAfterVideoRecordingFailure($continueCallAfterVideoRecordingFailure)
    {
        $this->continueCallAfterVideoRecordingFailure = $continueCallAfterVideoRecordingFailure;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetContinueCallAfterVideoRecordingFailure()
    {
        $this->continueCallAfterVideoRecordingFailure = null;
        return $this;
    }

    /**
     * Getter for useContinueCallAfterRecordingFailureForOnDemandMode
     *
     * @return bool
     */
    public function getUseContinueCallAfterRecordingFailureForOnDemandMode()
    {
        return $this->useContinueCallAfterRecordingFailureForOnDemandMode instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->useContinueCallAfterRecordingFailureForOnDemandMode;
    }

    /**
     * Setter for useContinueCallAfterRecordingFailureForOnDemandMode
     *
     * @param bool $useContinueCallAfterRecordingFailureForOnDemandMode
     * @return $this
     */
    public function setUseContinueCallAfterRecordingFailureForOnDemandMode($useContinueCallAfterRecordingFailureForOnDemandMode)
    {
        $this->useContinueCallAfterRecordingFailureForOnDemandMode = $useContinueCallAfterRecordingFailureForOnDemandMode;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUseContinueCallAfterRecordingFailureForOnDemandMode()
    {
        $this->useContinueCallAfterRecordingFailureForOnDemandMode = null;
        return $this;
    }

    /**
     * Getter for useContinueCallAfterRecordingFailureForOnDemandUserInitiatedStartMode
     *
     * @return bool
     */
    public function getUseContinueCallAfterRecordingFailureForOnDemandUserInitiatedStartMode()
    {
        return $this->useContinueCallAfterRecordingFailureForOnDemandUserInitiatedStartMode instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->useContinueCallAfterRecordingFailureForOnDemandUserInitiatedStartMode;
    }

    /**
     * Setter for useContinueCallAfterRecordingFailureForOnDemandUserInitiatedStartMode
     *
     * @param bool $useContinueCallAfterRecordingFailureForOnDemandUserInitiatedStartMode
     * @return $this
     */
    public function setUseContinueCallAfterRecordingFailureForOnDemandUserInitiatedStartMode($useContinueCallAfterRecordingFailureForOnDemandUserInitiatedStartMode)
    {
        $this->useContinueCallAfterRecordingFailureForOnDemandUserInitiatedStartMode = $useContinueCallAfterRecordingFailureForOnDemandUserInitiatedStartMode;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUseContinueCallAfterRecordingFailureForOnDemandUserInitiatedStartMode()
    {
        $this->useContinueCallAfterRecordingFailureForOnDemandUserInitiatedStartMode = null;
        return $this;
    }

    /**
     * Getter for restrictCallRecordingProvisioningAccess
     *
     * @return bool
     */
    public function getRestrictCallRecordingProvisioningAccess()
    {
        return $this->restrictCallRecordingProvisioningAccess instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->restrictCallRecordingProvisioningAccess;
    }

    /**
     * Setter for restrictCallRecordingProvisioningAccess
     *
     * @param bool $restrictCallRecordingProvisioningAccess
     * @return $this
     */
    public function setRestrictCallRecordingProvisioningAccess($restrictCallRecordingProvisioningAccess)
    {
        $this->restrictCallRecordingProvisioningAccess = $restrictCallRecordingProvisioningAccess;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetRestrictCallRecordingProvisioningAccess()
    {
        $this->restrictCallRecordingProvisioningAccess = null;
        return $this;
    }


}

