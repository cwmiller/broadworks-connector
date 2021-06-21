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
 * @Groups [{"id":"ab0042aa512abc10edb3c55e4b416b0b:19752","type":"sequence"}]
 */
class SystemAdviceOfChargeGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName delayBetweenNotificationSeconds
     * @Type int
     * @Group ab0042aa512abc10edb3c55e4b416b0b:19752
     * @MinInclusive 5
     * @MaxInclusive 1800
     * @var int|null
     */
    private $delayBetweenNotificationSeconds = null;

    /**
     * @ElementName incomingAocHandling
     * @Type \CWM\BroadWorksConnector\Ocip\Models\AdviceOfChargeIncomingAocHandling
     * @Group ab0042aa512abc10edb3c55e4b416b0b:19752
     * @var \CWM\BroadWorksConnector\Ocip\Models\AdviceOfChargeIncomingAocHandling|null
     */
    private $incomingAocHandling = null;

    /**
     * @ElementName costInformationSource
     * @Type string
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:19752
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    private $costInformationSource = null;

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
     * Getter for costInformationSource
     *
     * @return string
     */
    public function getCostInformationSource()
    {
        return $this->costInformationSource instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->costInformationSource;
    }

    /**
     * Setter for costInformationSource
     *
     * @param string $costInformationSource
     * @return $this
     */
    public function setCostInformationSource($costInformationSource)
    {
        $this->costInformationSource = $costInformationSource;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetCostInformationSource()
    {
        $this->costInformationSource = null;
        return $this;
    }


}

