<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemAdviceOfChargeGetResponse25
 *
 * Response to SystemAdviceOfChargeGetRequest25.
 *         Contains a list of system Advice of Charge parameters.
 *
 * @see SystemAdviceOfChargeGetRequest25
 * @Groups [{"id":"9975efc7f5883a0595f811ee72ba4df5:248","type":"sequence"}]
 */
class SystemAdviceOfChargeGetResponse25 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName delayBetweenNotificationSeconds
     * @Type int
     * @Group 9975efc7f5883a0595f811ee72ba4df5:248
     * @MinInclusive 5
     * @MaxInclusive 1800
     * @var int|null
     */
    protected $delayBetweenNotificationSeconds = null;

    /**
     * @ElementName incomingAocHandling
     * @Type \CWM\BroadWorksConnector\Ocip\Models\AdviceOfChargeIncomingAocHandling
     * @Group 9975efc7f5883a0595f811ee72ba4df5:248
     * @var \CWM\BroadWorksConnector\Ocip\Models\AdviceOfChargeIncomingAocHandling|null
     */
    protected $incomingAocHandling = null;

    /**
     * @ElementName useOCSEnquiry
     * @Type bool
     * @Group 9975efc7f5883a0595f811ee72ba4df5:248
     * @var bool|null
     */
    protected $useOCSEnquiry = null;

    /**
     * @ElementName OCSEnquiryType
     * @Type \CWM\BroadWorksConnector\Ocip\Models\AdviceOfChargeOCSEnquiryType
     * @Group 9975efc7f5883a0595f811ee72ba4df5:248
     * @var \CWM\BroadWorksConnector\Ocip\Models\AdviceOfChargeOCSEnquiryType|null
     */
    protected $OCSEnquiryType = null;

    /**
     * @ElementName proxyAoCBody
     * @Type bool
     * @Group 9975efc7f5883a0595f811ee72ba4df5:248
     * @var bool|null
     */
    protected $proxyAoCBody = null;

    /**
     * Getter for delayBetweenNotificationSeconds
     *
     * @return int
     */
    public function getDelayBetweenNotificationSeconds()
    {
        return $this->delayBetweenNotificationSeconds instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->delayBetweenNotificationSeconds;
    }

    /**
     * Setter for delayBetweenNotificationSeconds
     *
     * @param int $delayBetweenNotificationSeconds
     * @return $this
     */
    public function setDelayBetweenNotificationSeconds($delayBetweenNotificationSeconds)
    {
        $this->delayBetweenNotificationSeconds = $delayBetweenNotificationSeconds;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDelayBetweenNotificationSeconds()
    {
        $this->delayBetweenNotificationSeconds = null;
        return $this;
    }

    /**
     * Getter for incomingAocHandling
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\AdviceOfChargeIncomingAocHandling
     */
    public function getIncomingAocHandling()
    {
        return $this->incomingAocHandling instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->incomingAocHandling;
    }

    /**
     * Setter for incomingAocHandling
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\AdviceOfChargeIncomingAocHandling $incomingAocHandling
     * @return $this
     */
    public function setIncomingAocHandling(\CWM\BroadWorksConnector\Ocip\Models\AdviceOfChargeIncomingAocHandling $incomingAocHandling)
    {
        $this->incomingAocHandling = $incomingAocHandling;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetIncomingAocHandling()
    {
        $this->incomingAocHandling = null;
        return $this;
    }

    /**
     * Getter for useOCSEnquiry
     *
     * @return bool
     */
    public function getUseOCSEnquiry()
    {
        return $this->useOCSEnquiry instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->useOCSEnquiry;
    }

    /**
     * Setter for useOCSEnquiry
     *
     * @param bool $useOCSEnquiry
     * @return $this
     */
    public function setUseOCSEnquiry($useOCSEnquiry)
    {
        $this->useOCSEnquiry = $useOCSEnquiry;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUseOCSEnquiry()
    {
        $this->useOCSEnquiry = null;
        return $this;
    }

    /**
     * Getter for OCSEnquiryType
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\AdviceOfChargeOCSEnquiryType
     */
    public function getOCSEnquiryType()
    {
        return $this->OCSEnquiryType instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->OCSEnquiryType;
    }

    /**
     * Setter for OCSEnquiryType
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\AdviceOfChargeOCSEnquiryType $OCSEnquiryType
     * @return $this
     */
    public function setOCSEnquiryType(\CWM\BroadWorksConnector\Ocip\Models\AdviceOfChargeOCSEnquiryType $OCSEnquiryType)
    {
        $this->OCSEnquiryType = $OCSEnquiryType;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetOCSEnquiryType()
    {
        $this->OCSEnquiryType = null;
        return $this;
    }

    /**
     * Getter for proxyAoCBody
     *
     * @return bool
     */
    public function getProxyAoCBody()
    {
        return $this->proxyAoCBody instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->proxyAoCBody;
    }

    /**
     * Setter for proxyAoCBody
     *
     * @param bool $proxyAoCBody
     * @return $this
     */
    public function setProxyAoCBody($proxyAoCBody)
    {
        $this->proxyAoCBody = $proxyAoCBody;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetProxyAoCBody()
    {
        $this->proxyAoCBody = null;
        return $this;
    }
}

