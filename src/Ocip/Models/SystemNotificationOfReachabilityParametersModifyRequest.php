<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemNotificationOfReachabilityParametersModifyRequest
 *
 * Request to modify the system Notification of Reachability parameters.
 *         The response is either SuccessResponse or ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"da582a1f8028404e70d260cf1f891033:13347","type":"sequence"}]
 */
class SystemNotificationOfReachabilityParametersModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName enableNoR
     * @Type bool
     * @Optional
     * @Group da582a1f8028404e70d260cf1f891033:13347
     * @var bool|null
     */
    protected $enableNoR = null;

    /**
     * @ElementName alwaysSendThirdPartyVMforUnreachable
     * @Type bool
     * @Optional
     * @Group da582a1f8028404e70d260cf1f891033:13347
     * @var bool|null
     */
    protected $alwaysSendThirdPartyVMforUnreachable = null;

    /**
     * @ElementName disableFACforThirdPartyVoiceMail
     * @Type bool
     * @Optional
     * @Group da582a1f8028404e70d260cf1f891033:13347
     * @var bool|null
     */
    protected $disableFACforThirdPartyVoiceMail = null;

    /**
     * Getter for enableNoR
     *
     * @return bool
     */
    public function getEnableNoR()
    {
        return $this->enableNoR instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->enableNoR;
    }

    /**
     * Setter for enableNoR
     *
     * @param bool $enableNoR
     * @return $this
     */
    public function setEnableNoR($enableNoR)
    {
        $this->enableNoR = $enableNoR;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEnableNoR()
    {
        $this->enableNoR = null;
        return $this;
    }

    /**
     * Getter for alwaysSendThirdPartyVMforUnreachable
     *
     * @return bool
     */
    public function getAlwaysSendThirdPartyVMforUnreachable()
    {
        return $this->alwaysSendThirdPartyVMforUnreachable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->alwaysSendThirdPartyVMforUnreachable;
    }

    /**
     * Setter for alwaysSendThirdPartyVMforUnreachable
     *
     * @param bool $alwaysSendThirdPartyVMforUnreachable
     * @return $this
     */
    public function setAlwaysSendThirdPartyVMforUnreachable($alwaysSendThirdPartyVMforUnreachable)
    {
        $this->alwaysSendThirdPartyVMforUnreachable = $alwaysSendThirdPartyVMforUnreachable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAlwaysSendThirdPartyVMforUnreachable()
    {
        $this->alwaysSendThirdPartyVMforUnreachable = null;
        return $this;
    }

    /**
     * Getter for disableFACforThirdPartyVoiceMail
     *
     * @return bool
     */
    public function getDisableFACforThirdPartyVoiceMail()
    {
        return $this->disableFACforThirdPartyVoiceMail instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->disableFACforThirdPartyVoiceMail;
    }

    /**
     * Setter for disableFACforThirdPartyVoiceMail
     *
     * @param bool $disableFACforThirdPartyVoiceMail
     * @return $this
     */
    public function setDisableFACforThirdPartyVoiceMail($disableFACforThirdPartyVoiceMail)
    {
        $this->disableFACforThirdPartyVoiceMail = $disableFACforThirdPartyVoiceMail;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDisableFACforThirdPartyVoiceMail()
    {
        $this->disableFACforThirdPartyVoiceMail = null;
        return $this;
    }
}

