<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemCommunicationBarringIncomingGetResponse
 *
 * Response to a SystemCommunicationBarringIncomingGetRequest.
 *         Contains a list of Communication Barring Incoming system parameters.
 *
 * @see SystemCommunicationBarringIncomingGetRequest
 * @Groups [{"id":"da582a1f8028404e70d260cf1f891033:6425","type":"sequence"}]
 */
class SystemCommunicationBarringIncomingGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName SIP603PlusAnalyticsReasonProtocol
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SIP603PlusAnalyticsReasonProtocol
     * @Group da582a1f8028404e70d260cf1f891033:6425
     * @var \CWM\BroadWorksConnector\Ocip\Models\SIP603PlusAnalyticsReasonProtocol|null
     */
    protected $SIP603PlusAnalyticsReasonProtocol = null;

    /**
     * @ElementName SIP603PlusAnalyticsTextRedressUrl
     * @Type string
     * @Group da582a1f8028404e70d260cf1f891033:6425
     * @MinLength 1
     * @MaxLength 256
     * @var string|null
     */
    protected $SIP603PlusAnalyticsTextRedressUrl = null;

    /**
     * @ElementName SIP603PlusAnalyticsTextRedressTel
     * @Type string
     * @Group da582a1f8028404e70d260cf1f891033:6425
     * @MinLength 1
     * @MaxLength 23
     * @var string|null
     */
    protected $SIP603PlusAnalyticsTextRedressTel = null;

    /**
     * @ElementName SIP603PlusAnalyticsTextRedressEmail
     * @Type string
     * @Group da582a1f8028404e70d260cf1f891033:6425
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    protected $SIP603PlusAnalyticsTextRedressEmail = null;

    /**
     * @ElementName SIP603PlusAnalyticsTextId
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SIP603PlusAnalyticsTextIdentifier
     * @Group da582a1f8028404e70d260cf1f891033:6425
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
     * @return string
     */
    public function getSIP603PlusAnalyticsTextRedressUrl()
    {
        return $this->SIP603PlusAnalyticsTextRedressUrl instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->SIP603PlusAnalyticsTextRedressUrl;
    }

    /**
     * Setter for SIP603PlusAnalyticsTextRedressUrl
     *
     * @param string $SIP603PlusAnalyticsTextRedressUrl
     * @return $this
     */
    public function setSIP603PlusAnalyticsTextRedressUrl($SIP603PlusAnalyticsTextRedressUrl)
    {
        $this->SIP603PlusAnalyticsTextRedressUrl = $SIP603PlusAnalyticsTextRedressUrl;
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
     * @return string
     */
    public function getSIP603PlusAnalyticsTextRedressTel()
    {
        return $this->SIP603PlusAnalyticsTextRedressTel instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->SIP603PlusAnalyticsTextRedressTel;
    }

    /**
     * Setter for SIP603PlusAnalyticsTextRedressTel
     *
     * @param string $SIP603PlusAnalyticsTextRedressTel
     * @return $this
     */
    public function setSIP603PlusAnalyticsTextRedressTel($SIP603PlusAnalyticsTextRedressTel)
    {
        $this->SIP603PlusAnalyticsTextRedressTel = $SIP603PlusAnalyticsTextRedressTel;
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
     * @return string
     */
    public function getSIP603PlusAnalyticsTextRedressEmail()
    {
        return $this->SIP603PlusAnalyticsTextRedressEmail instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->SIP603PlusAnalyticsTextRedressEmail;
    }

    /**
     * Setter for SIP603PlusAnalyticsTextRedressEmail
     *
     * @param string $SIP603PlusAnalyticsTextRedressEmail
     * @return $this
     */
    public function setSIP603PlusAnalyticsTextRedressEmail($SIP603PlusAnalyticsTextRedressEmail)
    {
        $this->SIP603PlusAnalyticsTextRedressEmail = $SIP603PlusAnalyticsTextRedressEmail;
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

