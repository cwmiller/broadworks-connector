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
     * @var string|null
     */
    private $lineType = null;

    /**
     * @ElementName matchAction
     * @var string|null
     */
    private $matchAction = null;

    /**
     * @ElementName noMatchAction
     * @var string|null
     */
    private $noMatchAction = null;

    /**
     * Getter for lineType
     *
     * @ElementName lineType
     * @return string|null
     */
    public function getLineType()
    {
        return $this->lineType;
    }

    /**
     * Setter for lineType
     *
     * @ElementName lineType
     * @param string|null $lineType
     * @return $this
     */
    public function setLineType($lineType)
    {
        $this->lineType = $lineType;
        return $this;
    }

    /**
     * Getter for matchAction
     *
     * @ElementName matchAction
     * @return string|null
     */
    public function getMatchAction()
    {
        return $this->matchAction;
    }

    /**
     * Setter for matchAction
     *
     * @ElementName matchAction
     * @param string|null $matchAction
     * @return $this
     */
    public function setMatchAction($matchAction)
    {
        $this->matchAction = $matchAction;
        return $this;
    }

    /**
     * Getter for noMatchAction
     *
     * @ElementName noMatchAction
     * @return string|null
     */
    public function getNoMatchAction()
    {
        return $this->noMatchAction;
    }

    /**
     * Setter for noMatchAction
     *
     * @ElementName noMatchAction
     * @param string|null $noMatchAction
     * @return $this
     */
    public function setNoMatchAction($noMatchAction)
    {
        $this->noMatchAction = $noMatchAction;
        return $this;
    }


}

