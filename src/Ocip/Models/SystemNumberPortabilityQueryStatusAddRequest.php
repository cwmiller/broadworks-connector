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
 */
class SystemNumberPortabilityQueryStatusAddRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName status
     * @var string|null
     */
    private $status = null;

    /**
     * @ElementName treatmentFileName
     * @var string|null
     */
    private $treatmentFileName = null;

    /**
     * Getter for status
     *
     * @ElementName status
     * @return string|null
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Setter for status
     *
     * @ElementName status
     * @param string|null $status
     * @return $this
     */
    public function setStatus($status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * Getter for treatmentFileName
     *
     * @ElementName treatmentFileName
     * @return string|null
     */
    public function getTreatmentFileName()
    {
        return $this->treatmentFileName;
    }

    /**
     * Setter for treatmentFileName
     *
     * @ElementName treatmentFileName
     * @param string|null $treatmentFileName
     * @return $this
     */
    public function setTreatmentFileName($treatmentFileName)
    {
        $this->treatmentFileName = $treatmentFileName;
        return $this;
    }


}

