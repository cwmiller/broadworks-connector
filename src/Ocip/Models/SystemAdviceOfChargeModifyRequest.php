<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemAdviceOfChargeModifyRequest
 *
 * Request to modify Advice of Charge system parameters.
 *         The response is either SuccessResponse or ErrorResponse.
 *         
 *         Replaced by: SystemAdviceOfChargeModifyRequest19sp1
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @see SystemAdviceOfChargeModifyRequest19sp1
 */
class SystemAdviceOfChargeModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
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
     * @Nillable
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
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
     * @Nillable
     * @return string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getCostInformationSource()
    {
        return $this->costInformationSource;
    }

    /**
     * Setter for costInformationSource
     *
     * @ElementName costInformationSource
     * @Nillable
     * @param string|null|\CWM\BroadWorksConnector\Ocip\Nil $costInformationSource
     * @return $this
     */
    public function setCostInformationSource($costInformationSource)
    {
        $this->costInformationSource = $costInformationSource;
        return $this;
    }


}

