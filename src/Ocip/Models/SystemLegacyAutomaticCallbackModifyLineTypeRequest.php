<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemLegacyAutomaticCallbackModifyLineTypeRequest
 *
 * Modifies the system's legacy automatic callback line type attributes.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 */
class SystemLegacyAutomaticCallbackModifyLineTypeRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName lineType
     * @var \CWM\BroadWorksConnector\Ocip\Models\LegacyAutomaticCallbackLineType|null
     */
    private $lineType = null;

    /**
     * @ElementName matchAction
     * @var \CWM\BroadWorksConnector\Ocip\Models\LegacyAutomaticCallbackLineMatchAction|null
     */
    private $matchAction = null;

    /**
     * @ElementName noMatchAction
     * @var \CWM\BroadWorksConnector\Ocip\Models\LegacyAutomaticCallbackLineMatchAction|null
     */
    private $noMatchAction = null;

    /**
     * Getter for lineType
     *
     * @ElementName lineType
     * @return \CWM\BroadWorksConnector\Ocip\Models\LegacyAutomaticCallbackLineType|null
     */
    public function getLineType()
    {
        return $this->lineType;
    }

    /**
     * Setter for lineType
     *
     * @ElementName lineType
     * @param \CWM\BroadWorksConnector\Ocip\Models\LegacyAutomaticCallbackLineType|null $lineType
     * @return $this
     */
    public function setLineType(\CWM\BroadWorksConnector\Ocip\Models\LegacyAutomaticCallbackLineType $lineType)
    {
        $this->lineType = $lineType;
        return $this;
    }

    /**
     * Getter for matchAction
     *
     * @ElementName matchAction
     * @return \CWM\BroadWorksConnector\Ocip\Models\LegacyAutomaticCallbackLineMatchAction|null
     */
    public function getMatchAction()
    {
        return $this->matchAction;
    }

    /**
     * Setter for matchAction
     *
     * @ElementName matchAction
     * @param \CWM\BroadWorksConnector\Ocip\Models\LegacyAutomaticCallbackLineMatchAction|null $matchAction
     * @return $this
     */
    public function setMatchAction(\CWM\BroadWorksConnector\Ocip\Models\LegacyAutomaticCallbackLineMatchAction $matchAction)
    {
        $this->matchAction = $matchAction;
        return $this;
    }

    /**
     * Getter for noMatchAction
     *
     * @ElementName noMatchAction
     * @return \CWM\BroadWorksConnector\Ocip\Models\LegacyAutomaticCallbackLineMatchAction|null
     */
    public function getNoMatchAction()
    {
        return $this->noMatchAction;
    }

    /**
     * Setter for noMatchAction
     *
     * @ElementName noMatchAction
     * @param \CWM\BroadWorksConnector\Ocip\Models\LegacyAutomaticCallbackLineMatchAction|null $noMatchAction
     * @return $this
     */
    public function setNoMatchAction(\CWM\BroadWorksConnector\Ocip\Models\LegacyAutomaticCallbackLineMatchAction $noMatchAction)
    {
        $this->noMatchAction = $noMatchAction;
        return $this;
    }


}

