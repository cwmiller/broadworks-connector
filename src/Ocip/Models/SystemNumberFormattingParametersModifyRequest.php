<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemNumberFormattingParametersModifyRequest
 *
 * Request to modify the system number formatting parameters.
 *         The response is either SuccessResponse or ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"7f663d5135470c33ca64b0eed3c3aa0c:13025","type":"sequence"}]
 */
class SystemNumberFormattingParametersModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName applyFormattingToE164Numbers
     * @Type bool
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:13025
     * @var bool|null
     */
    private $applyFormattingToE164Numbers = null;

    /**
     * Getter for applyFormattingToE164Numbers
     *
     * @return bool
     */
    public function getApplyFormattingToE164Numbers()
    {
        return $this->applyFormattingToE164Numbers instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->applyFormattingToE164Numbers;
    }

    /**
     * Setter for applyFormattingToE164Numbers
     *
     * @param bool $applyFormattingToE164Numbers
     * @return $this
     */
    public function setApplyFormattingToE164Numbers($applyFormattingToE164Numbers)
    {
        $this->applyFormattingToE164Numbers = $applyFormattingToE164Numbers;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetApplyFormattingToE164Numbers()
    {
        $this->applyFormattingToE164Numbers = null;
        return $this;
    }


}

