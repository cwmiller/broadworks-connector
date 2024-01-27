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
 * @Groups [{"id":"da582a1f8028404e70d260cf1f891033:13470","type":"sequence"}]
 */
class SystemNumberPortabilityQueryStatusModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName statusName
     * @Type string
     * @Group da582a1f8028404e70d260cf1f891033:13470
     * @MinLength 1
     * @MaxLength 40
     * @var string|null
     */
    protected $statusName = null;

    /**
     * @ElementName newStatusName
     * @Type string
     * @Optional
     * @Group da582a1f8028404e70d260cf1f891033:13470
     * @MinLength 1
     * @MaxLength 40
     * @var string|null
     */
    protected $newStatusName = null;

    /**
     * @ElementName treatmentFileName
     * @Type string
     * @Nillable
     * @Optional
     * @Group da582a1f8028404e70d260cf1f891033:13470
     * @MinLength 1
     * @MaxLength 256
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $treatmentFileName = null;

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
    public function setTreatmentFileName($treatmentFileName = null)
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

