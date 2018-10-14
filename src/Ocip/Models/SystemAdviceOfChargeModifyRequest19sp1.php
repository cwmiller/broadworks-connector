<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemAdviceOfChargeModifyRequest19sp1
 *
 * Request to modify Advice of Charge system parameters.
 *         The response is either SuccessResponse or ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 */
class SystemAdviceOfChargeModifyRequest19sp1 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName delayBetweenNotificationSeconds
     * @var int|null
     */
    private $delayBetweenNotificationSeconds = null;

    /**
     * @ElementName incomingAocHandling
     * @var \CWM\BroadWorksConnector\Ocip\Models\AdviceOfChargeIncomingAocHandling|null
     */
    private $incomingAocHandling = null;

    /**
     * @ElementName useOCSEnquiry
     * @var bool|null
     */
    private $useOCSEnquiry = null;

    /**
     * @ElementName OCSEnquiryType
     * @var \CWM\BroadWorksConnector\Ocip\Models\AdviceOfChargeOCSEnquiryType|null
     */
    private $OCSEnquiryType = null;

    /**
     * Getter for delayBetweenNotificationSeconds
     *
     * @ElementName delayBetweenNotificationSeconds
     * @return int|null
     */
    public function getDelayBetweenNotificationSeconds()
    {
        return $this->delayBetweenNotificationSeconds;
    }

    /**
     * Setter for delayBetweenNotificationSeconds
     *
     * @ElementName delayBetweenNotificationSeconds
     * @param int|null $delayBetweenNotificationSeconds
     * @return $this
     */
    public function setDelayBetweenNotificationSeconds($delayBetweenNotificationSeconds)
    {
        $this->delayBetweenNotificationSeconds = $delayBetweenNotificationSeconds;
        return $this;
    }

    /**
     * Getter for incomingAocHandling
     *
     * @ElementName incomingAocHandling
     * @return \CWM\BroadWorksConnector\Ocip\Models\AdviceOfChargeIncomingAocHandling|null
     */
    public function getIncomingAocHandling()
    {
        return $this->incomingAocHandling;
    }

    /**
     * Setter for incomingAocHandling
     *
     * @ElementName incomingAocHandling
     * @param \CWM\BroadWorksConnector\Ocip\Models\AdviceOfChargeIncomingAocHandling|null $incomingAocHandling
     * @return $this
     */
    public function setIncomingAocHandling(\CWM\BroadWorksConnector\Ocip\Models\AdviceOfChargeIncomingAocHandling $incomingAocHandling)
    {
        $this->incomingAocHandling = $incomingAocHandling;
        return $this;
    }

    /**
     * Getter for useOCSEnquiry
     *
     * @ElementName useOCSEnquiry
     * @return bool|null
     */
    public function getUseOCSEnquiry()
    {
        return $this->useOCSEnquiry;
    }

    /**
     * Setter for useOCSEnquiry
     *
     * @ElementName useOCSEnquiry
     * @param bool|null $useOCSEnquiry
     * @return $this
     */
    public function setUseOCSEnquiry($useOCSEnquiry)
    {
        $this->useOCSEnquiry = $useOCSEnquiry;
        return $this;
    }

    /**
     * Getter for OCSEnquiryType
     *
     * @ElementName OCSEnquiryType
     * @return \CWM\BroadWorksConnector\Ocip\Models\AdviceOfChargeOCSEnquiryType|null
     */
    public function getOCSEnquiryType()
    {
        return $this->OCSEnquiryType;
    }

    /**
     * Setter for OCSEnquiryType
     *
     * @ElementName OCSEnquiryType
     * @param \CWM\BroadWorksConnector\Ocip\Models\AdviceOfChargeOCSEnquiryType|null $OCSEnquiryType
     * @return $this
     */
    public function setOCSEnquiryType(\CWM\BroadWorksConnector\Ocip\Models\AdviceOfChargeOCSEnquiryType $OCSEnquiryType)
    {
        $this->OCSEnquiryType = $OCSEnquiryType;
        return $this;
    }


}

