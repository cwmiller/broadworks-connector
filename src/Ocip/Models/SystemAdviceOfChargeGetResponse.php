<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemAdviceOfChargeGetResponse
 *
 * Response to SystemAdviceOfChargeGetRequest.
 *         Contains a list of system Advice of Charge parameters.
 *         
 *         Replaced by: SystemAdviceOfChargeGetResponse19sp1
 *
 * @see SystemAdviceOfChargeGetRequest
 * @see SystemAdviceOfChargeGetResponse19sp1
 */
class SystemAdviceOfChargeGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
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
     * @ElementName costInformationSource
     * @var string|null
     */
    private $costInformationSource = null;

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
     * Getter for costInformationSource
     *
     * @ElementName costInformationSource
     * @return string|null
     */
    public function getCostInformationSource()
    {
        return $this->costInformationSource;
    }

    /**
     * Setter for costInformationSource
     *
     * @ElementName costInformationSource
     * @param string|null $costInformationSource
     * @return $this
     */
    public function setCostInformationSource($costInformationSource)
    {
        $this->costInformationSource = $costInformationSource;
        return $this;
    }


}

