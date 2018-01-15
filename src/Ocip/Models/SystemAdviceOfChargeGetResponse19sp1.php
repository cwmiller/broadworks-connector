<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemAdviceOfChargeGetResponse19sp1
 *
 * Response to SystemAdviceOfChargeGetRequest.
 *         Contains a list of system Advice of Charge parameters.
 */
class SystemAdviceOfChargeGetResponse19sp1 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName delayBetweenNotificationSeconds
     * @var int|null
     */
    private $delayBetweenNotificationSeconds = null;

    /**
     * @ElementName incomingAocHandling
     * @var string|null
     */
    private $incomingAocHandling = null;

    /**
     * @ElementName useOCSEnquiry
     * @var bool|null
     */
    private $useOCSEnquiry = null;

    /**
     * @ElementName OCSEnquiryType
     * @var string|null
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
     * @return string|null
     */
    public function getIncomingAocHandling()
    {
        return $this->incomingAocHandling;
    }

    /**
     * Setter for incomingAocHandling
     *
     * @ElementName incomingAocHandling
     * @param string|null $incomingAocHandling
     * @return $this
     */
    public function setIncomingAocHandling($incomingAocHandling)
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
     * @return string|null
     */
    public function getOCSEnquiryType()
    {
        return $this->OCSEnquiryType;
    }

    /**
     * Setter for OCSEnquiryType
     *
     * @ElementName OCSEnquiryType
     * @param string|null $OCSEnquiryType
     * @return $this
     */
    public function setOCSEnquiryType($OCSEnquiryType)
    {
        $this->OCSEnquiryType = $OCSEnquiryType;
        return $this;
    }


}

