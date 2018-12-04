<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemNumberPortabilityQueryStatusAddRequest
 *
 * Add a system number portability status information.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"610f84d3e188f0477c3ae1a82ee036da:11449","type":"sequence"}]
 */
class SystemNumberPortabilityQueryStatusAddRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName status
     * @Type string
     * @Group 610f84d3e188f0477c3ae1a82ee036da:11449
     * @var string|null
     */
    private $status = null;

    /**
     * @ElementName treatmentFileName
     * @Type string
     * @Optional
     * @Group 610f84d3e188f0477c3ae1a82ee036da:11449
     * @var string|null
     */
    private $treatmentFileName = null;

    /**
     * Getter for status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->status instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->status;
    }

    /**
     * Setter for status
     *
     * @param string $status
     * @return $this
     */
    public function setStatus($status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetStatus()
    {
        $this->status = null;
        return $this;
    }

    /**
     * Getter for treatmentFileName
     *
     * @return string
     */
    public function getTreatmentFileName()
    {
        return $this->treatmentFileName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->treatmentFileName;
    }

    /**
     * Setter for treatmentFileName
     *
     * @param string $treatmentFileName
     * @return $this
     */
    public function setTreatmentFileName($treatmentFileName)
    {
        $this->treatmentFileName = $treatmentFileName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetTreatmentFileName()
    {
        $this->treatmentFileName = null;
        return $this;
    }


}

