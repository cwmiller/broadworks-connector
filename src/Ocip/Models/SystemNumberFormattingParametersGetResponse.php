<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemNumberFormattingParametersGetResponse
 *
 * Response to SystemNumberFormattingParametersGetRequest.
 *         Contains the system number formatting parameter.
 *
 * @see SystemNumberFormattingParametersGetRequest
 * @Groups [{"id":"da582a1f8028404e70d260cf1f891033:13179","type":"sequence"}]
 */
class SystemNumberFormattingParametersGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName applyFormattingToE164Numbers
     * @Type bool
     * @Group da582a1f8028404e70d260cf1f891033:13179
     * @var bool|null
     */
    protected $applyFormattingToE164Numbers = null;

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

