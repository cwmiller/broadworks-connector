<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemAdviceOfChargeGetResponse
 *
 * Response to SystemAdviceOfChargeGetRequest.
 *         Contains a list of system Advice of Charge parameters.
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
     * @var string|null
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
