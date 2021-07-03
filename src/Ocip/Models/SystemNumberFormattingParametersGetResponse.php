<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemNumberFormattingParametersGetResponse
 *
 * Response to SystemNumberFormattingParametersGetRequest.
 *         Contains the system number formatting parameter.
 *
 * @see SystemNumberFormattingParametersGetRequest
 * @Groups [{"id":"7f663d5135470c33ca64b0eed3c3aa0c:13009","type":"sequence"}]
 */
class SystemNumberFormattingParametersGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName applyFormattingToE164Numbers
     * @Type bool
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:13009
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

