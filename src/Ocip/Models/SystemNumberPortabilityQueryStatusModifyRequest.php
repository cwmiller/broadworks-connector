<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemNumberPortabilityQueryStatusModifyRequest
 *
 * Modify the system number portability status information.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"7f663d5135470c33ca64b0eed3c3aa0c:11736","type":"sequence"}]
 */
class SystemNumberPortabilityQueryStatusModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName statusName
     * @Type string
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:11736
     * @var string|null
     */
    private $statusName = null;

    /**
     * @ElementName newStatusName
     * @Type string
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:11736
     * @var string|null
     */
    private $newStatusName = null;

    /**
     * @ElementName treatmentFileName
     * @Type string
     * @Nillable
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:11736
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $treatmentFileName = null;

    /**
     * Getter for statusName
     *
     * @return string
     */
    public function getStatusName()
    {
        return $this->statusName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->statusName;
    }

    /**
     * Setter for statusName
     *
     * @param string $statusName
     * @return $this
     */
    public function setStatusName($statusName)
    {
        $this->statusName = $statusName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetStatusName()
    {
        $this->statusName = null;
        return $this;
    }

    /**
     * Getter for newStatusName
     *
     * @return string
     */
    public function getNewStatusName()
    {
        return $this->newStatusName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->newStatusName;
    }

    /**
     * Setter for newStatusName
     *
     * @param string $newStatusName
     * @return $this
     */
    public function setNewStatusName($newStatusName)
    {
        $this->newStatusName = $newStatusName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetNewStatusName()
    {
        $this->newStatusName = null;
        return $this;
    }

    /**
     * Getter for treatmentFileName
     *
     * @return string|null
     */
    public function getTreatmentFileName()
    {
        return $this->treatmentFileName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->treatmentFileName;
    }

    /**
     * Setter for treatmentFileName
     *
     * @param string|null $treatmentFileName
     * @return $this
     */
    public function setTreatmentFileName($treatmentFileName)
    {
        if ($treatmentFileName === null) {
            $this->treatmentFileName = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->treatmentFileName = $treatmentFileName;
        }
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

