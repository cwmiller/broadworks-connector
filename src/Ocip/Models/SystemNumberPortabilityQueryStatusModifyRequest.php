<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemNumberPortabilityQueryStatusModifyRequest
 *
 * Modify the system number portability status information.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemNumberPortabilityQueryStatusModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName statusName
     * @var string|null
     */
    private $statusName = null;

    /**
     * @ElementName newStatusName
     * @var string|null
     */
    private $newStatusName = null;

    /**
     * @ElementName treatmentFileName
     * @var string|null
     */
    private $treatmentFileName = null;

    /**
     * Getter for statusName
     *
     * @ElementName statusName
     * @return string|null
     */
    public function getStatusName()
    {
        return $this->statusName;
    }

    /**
     * Setter for statusName
     *
     * @ElementName statusName
     * @param string|null $statusName
     * @return $this
     */
    public function setStatusName($statusName)
    {
        $this->statusName = $statusName;
        return $this;
    }

    /**
     * Getter for newStatusName
     *
     * @ElementName newStatusName
     * @return string|null
     */
    public function getNewStatusName()
    {
        return $this->newStatusName;
    }

    /**
     * Setter for newStatusName
     *
     * @ElementName newStatusName
     * @param string|null $newStatusName
     * @return $this
     */
    public function setNewStatusName($newStatusName)
    {
        $this->newStatusName = $newStatusName;
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

