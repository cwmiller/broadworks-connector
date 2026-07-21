<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemCommunicationBarringIncomingModifyRequest
 *
 * Request to modify Communication Barring Incoming system parameters.
 *         The response is either SuccessResponse or ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"da582a1f8028404e70d260cf1f891033:6445","type":"sequence"}]
 */
class SystemCommunicationBarringIncomingModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName SIP603PlusAnalyticsReasonProtocol
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SIP603PlusAnalyticsReasonProtocol
     * @Optional
     * @Group da582a1f8028404e70d260cf1f891033:6445
     * @var \CWM\BroadWorksConnector\Ocip\Models\SIP603PlusAnalyticsReasonProtocol|null
     */
    protected $SIP603PlusAnalyticsReasonProtocol = null;

    /**
     * @ElementName SIP603PlusAnalyticsTextRedressUrl
     * @Type string
     * @Nillable
     * @Optional
     * @Group da582a1f8028404e70d260cf1f891033:6445
     * @MinLength 1
     * @MaxLength 256
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $SIP603PlusAnalyticsTextRedressUrl = null;

    /**
     * @ElementName SIP603PlusAnalyticsTextRedressTel
     * @Type string
     * @Nillable
     * @Optional
     * @Group da582a1f8028404e70d260cf1f891033:6445
     * @MinLength 1
     * @MaxLength 23
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $SIP603PlusAnalyticsTextRedressTel = null;

    /**
     * @ElementName SIP603PlusAnalyticsTextRedressEmail
     * @Type string
     * @Nillable
     * @Optional
     * @Group da582a1f8028404e70d260cf1f891033:6445
     * @MinLength 1
     * @MaxLength 80
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $SIP603PlusAnalyticsTextRedressEmail = null;

    /**
     * @ElementName SIP603PlusAnalyticsTextId
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SIP603PlusAnalyticsTextIdentifier
     * @Optional
     * @Group da582a1f8028404e70d260cf1f891033:6445
     * @var \CWM\BroadWorksConnector\Ocip\Models\SIP603PlusAnalyticsTextIdentifier|null
     */
    protected $SIP603PlusAnalyticsTextId = null;

    /**
     * Getter for SIP603PlusAnalyticsReasonProtocol
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\SIP603PlusAnalyticsReasonProtocol
     */
    public function getSIP603PlusAnalyticsReasonProtocol()
    {
        return $this->SIP603PlusAnalyticsReasonProtocol instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->SIP603PlusAnalyticsReasonProtocol;
    }

    /**
     * Setter for SIP603PlusAnalyticsReasonProtocol
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SIP603PlusAnalyticsReasonProtocol $SIP603PlusAnalyticsReasonProtocol
     * @return $this
     */
    public function setSIP603PlusAnalyticsReasonProtocol(\CWM\BroadWorksConnector\Ocip\Models\SIP603PlusAnalyticsReasonProtocol $SIP603PlusAnalyticsReasonProtocol)
    {
        $this->SIP603PlusAnalyticsReasonProtocol = $SIP603PlusAnalyticsReasonProtocol;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSIP603PlusAnalyticsReasonProtocol()
    {
        $this->SIP603PlusAnalyticsReasonProtocol = null;
        return $this;
    }

    /**
     * Getter for SIP603PlusAnalyticsTextRedressUrl
     *
     * @return string|null
     */
    public function getSIP603PlusAnalyticsTextRedressUrl()
    {
        return $this->SIP603PlusAnalyticsTextRedressUrl instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->SIP603PlusAnalyticsTextRedressUrl;
    }

    /**
     * Setter for SIP603PlusAnalyticsTextRedressUrl
     *
     * @param string|null $SIP603PlusAnalyticsTextRedressUrl
     * @return $this
     */
    public function setSIP603PlusAnalyticsTextRedressUrl($SIP603PlusAnalyticsTextRedressUrl = null)
    {
        if ($SIP603PlusAnalyticsTextRedressUrl === null) {
            $this->SIP603PlusAnalyticsTextRedressUrl = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->SIP603PlusAnalyticsTextRedressUrl = $SIP603PlusAnalyticsTextRedressUrl;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSIP603PlusAnalyticsTextRedressUrl()
    {
        $this->SIP603PlusAnalyticsTextRedressUrl = null;
        return $this;
    }

    /**
     * Getter for SIP603PlusAnalyticsTextRedressTel
     *
     * @return string|null
     */
    public function getSIP603PlusAnalyticsTextRedressTel()
    {
        return $this->SIP603PlusAnalyticsTextRedressTel instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->SIP603PlusAnalyticsTextRedressTel;
    }

    /**
     * Setter for SIP603PlusAnalyticsTextRedressTel
     *
     * @param string|null $SIP603PlusAnalyticsTextRedressTel
     * @return $this
     */
    public function setSIP603PlusAnalyticsTextRedressTel($SIP603PlusAnalyticsTextRedressTel = null)
    {
        if ($SIP603PlusAnalyticsTextRedressTel === null) {
            $this->SIP603PlusAnalyticsTextRedressTel = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->SIP603PlusAnalyticsTextRedressTel = $SIP603PlusAnalyticsTextRedressTel;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSIP603PlusAnalyticsTextRedressTel()
    {
        $this->SIP603PlusAnalyticsTextRedressTel = null;
        return $this;
    }

    /**
     * Getter for SIP603PlusAnalyticsTextRedressEmail
     *
     * @return string|null
     */
    public function getSIP603PlusAnalyticsTextRedressEmail()
    {
        return $this->SIP603PlusAnalyticsTextRedressEmail instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->SIP603PlusAnalyticsTextRedressEmail;
    }

    /**
     * Setter for SIP603PlusAnalyticsTextRedressEmail
     *
     * @param string|null $SIP603PlusAnalyticsTextRedressEmail
     * @return $this
     */
    public function setSIP603PlusAnalyticsTextRedressEmail($SIP603PlusAnalyticsTextRedressEmail = null)
    {
        if ($SIP603PlusAnalyticsTextRedressEmail === null) {
            $this->SIP603PlusAnalyticsTextRedressEmail = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->SIP603PlusAnalyticsTextRedressEmail = $SIP603PlusAnalyticsTextRedressEmail;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSIP603PlusAnalyticsTextRedressEmail()
    {
        $this->SIP603PlusAnalyticsTextRedressEmail = null;
        return $this;
    }

    /**
     * Getter for SIP603PlusAnalyticsTextId
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\SIP603PlusAnalyticsTextIdentifier
     */
    public function getSIP603PlusAnalyticsTextId()
    {
        return $this->SIP603PlusAnalyticsTextId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->SIP603PlusAnalyticsTextId;
    }

    /**
     * Setter for SIP603PlusAnalyticsTextId
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SIP603PlusAnalyticsTextIdentifier $SIP603PlusAnalyticsTextId
     * @return $this
     */
    public function setSIP603PlusAnalyticsTextId(\CWM\BroadWorksConnector\Ocip\Models\SIP603PlusAnalyticsTextIdentifier $SIP603PlusAnalyticsTextId)
    {
        $this->SIP603PlusAnalyticsTextId = $SIP603PlusAnalyticsTextId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSIP603PlusAnalyticsTextId()
    {
        $this->SIP603PlusAnalyticsTextId = null;
        return $this;
    }
}

