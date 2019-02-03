<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemTreatmentMappingInternalReleaseCauseModifyRequest
 *
 * Modify the fields for an Internal Release Cause mapping.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"7f663d5135470c33ca64b0eed3c3aa0c:17772","type":"sequence"}]
 */
class SystemTreatmentMappingInternalReleaseCauseModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName internalReleaseCause
     * @Type \CWM\BroadWorksConnector\Ocip\Models\InternalReleaseCause16
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:17772
     * @var \CWM\BroadWorksConnector\Ocip\Models\InternalReleaseCause16|null
     */
    private $internalReleaseCause = null;

    /**
     * @ElementName treatmentId
     * @Type string
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:17772
     * @var string|null
     */
    private $treatmentId = null;

    /**
     * Getter for internalReleaseCause
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\InternalReleaseCause16
     */
    public function getInternalReleaseCause()
    {
        return $this->internalReleaseCause instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->internalReleaseCause;
    }

    /**
     * Setter for internalReleaseCause
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\InternalReleaseCause16 $internalReleaseCause
     * @return $this
     */
    public function setInternalReleaseCause(\CWM\BroadWorksConnector\Ocip\Models\InternalReleaseCause16 $internalReleaseCause)
    {
        $this->internalReleaseCause = $internalReleaseCause;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetInternalReleaseCause()
    {
        $this->internalReleaseCause = null;
        return $this;
    }

    /**
     * Getter for treatmentId
     *
     * @return string
     */
    public function getTreatmentId()
    {
        return $this->treatmentId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->treatmentId;
    }

    /**
     * Setter for treatmentId
     *
     * @param string $treatmentId
     * @return $this
     */
    public function setTreatmentId($treatmentId)
    {
        $this->treatmentId = $treatmentId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetTreatmentId()
    {
        $this->treatmentId = null;
        return $this;
    }


}

