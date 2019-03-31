<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemBusyLampFieldGetResponse23
 *
 * Response to SystemBusyLampFieldGetRequest23.
 *         
 *         The following elements are only used in AS data mode:
 *          forceUseOfTCP
 *          enableRedundancy, value "false" is returned in XS data mode
 *          redundancyTaskDelayMilliseconds, value "10000" is returned in Amplify and XS data mode
 *          redundancyTaskIntervalMilliseconds, value of "1000" is returned in Amplify and XS data mode
 *          maxNumberOfSubscriptionsPerRedundancyTaskInterval, value of "50" is returned in Amplify and XS data mode
 *
 * @see SystemBusyLampFieldGetRequest23
 * @Groups [{"id":"4faeca417998d23ce2ff6b0b43212aa6:98","type":"sequence"}]
 */
class SystemBusyLampFieldGetResponse23 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName displayLocalUserIdentityLastNameFirst
     * @Type bool
     * @Group 4faeca417998d23ce2ff6b0b43212aa6:98
     * @var bool|null
     */
    private $displayLocalUserIdentityLastNameFirst = null;

    /**
     * @ElementName forceUseOfTCP
     * @Type bool
     * @Group 4faeca417998d23ce2ff6b0b43212aa6:98
     * @var bool|null
     */
    private $forceUseOfTCP = null;

    /**
     * @ElementName enableRedundancy
     * @Type bool
     * @Group 4faeca417998d23ce2ff6b0b43212aa6:98
     * @var bool|null
     */
    private $enableRedundancy = null;

    /**
     * @ElementName redundancyTaskDelayMilliseconds
     * @Type int
     * @Group 4faeca417998d23ce2ff6b0b43212aa6:98
     * @MinInclusive 10000
     * @MaxInclusive 180000
     * @var int|null
     */
    private $redundancyTaskDelayMilliseconds = null;

    /**
     * @ElementName redundancyTaskIntervalMilliseconds
     * @Type int
     * @Group 4faeca417998d23ce2ff6b0b43212aa6:98
     * @MinInclusive 50
     * @MaxInclusive 20000
     * @var int|null
     */
    private $redundancyTaskIntervalMilliseconds = null;

    /**
     * @ElementName maxNumberOfSubscriptionsPerRedundancyTaskInterval
     * @Type int
     * @Group 4faeca417998d23ce2ff6b0b43212aa6:98
     * @MinInclusive 1
     * @MaxInclusive 50000
     * @var int|null
     */
    private $maxNumberOfSubscriptionsPerRedundancyTaskInterval = null;

    /**
     * Getter for displayLocalUserIdentityLastNameFirst
     *
     * @return bool
     */
    public function getDisplayLocalUserIdentityLastNameFirst()
    {
        return $this->displayLocalUserIdentityLastNameFirst instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->displayLocalUserIdentityLastNameFirst;
    }

    /**
     * Setter for displayLocalUserIdentityLastNameFirst
     *
     * @param bool $displayLocalUserIdentityLastNameFirst
     * @return $this
     */
    public function setDisplayLocalUserIdentityLastNameFirst($displayLocalUserIdentityLastNameFirst)
    {
        $this->displayLocalUserIdentityLastNameFirst = $displayLocalUserIdentityLastNameFirst;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDisplayLocalUserIdentityLastNameFirst()
    {
        $this->displayLocalUserIdentityLastNameFirst = null;
        return $this;
    }

    /**
     * Getter for forceUseOfTCP
     *
     * @return bool
     */
    public function getForceUseOfTCP()
    {
        return $this->forceUseOfTCP instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->forceUseOfTCP;
    }

    /**
     * Setter for forceUseOfTCP
     *
     * @param bool $forceUseOfTCP
     * @return $this
     */
    public function setForceUseOfTCP($forceUseOfTCP)
    {
        $this->forceUseOfTCP = $forceUseOfTCP;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetForceUseOfTCP()
    {
        $this->forceUseOfTCP = null;
        return $this;
    }

    /**
     * Getter for enableRedundancy
     *
     * @return bool
     */
    public function getEnableRedundancy()
    {
        return $this->enableRedundancy instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->enableRedundancy;
    }

    /**
     * Setter for enableRedundancy
     *
     * @param bool $enableRedundancy
     * @return $this
     */
    public function setEnableRedundancy($enableRedundancy)
    {
        $this->enableRedundancy = $enableRedundancy;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEnableRedundancy()
    {
        $this->enableRedundancy = null;
        return $this;
    }

    /**
     * Getter for redundancyTaskDelayMilliseconds
     *
     * @return int
     */
    public function getRedundancyTaskDelayMilliseconds()
    {
        return $this->redundancyTaskDelayMilliseconds instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->redundancyTaskDelayMilliseconds;
    }

    /**
     * Setter for redundancyTaskDelayMilliseconds
     *
     * @param int $redundancyTaskDelayMilliseconds
     * @return $this
     */
    public function setRedundancyTaskDelayMilliseconds($redundancyTaskDelayMilliseconds)
    {
        $this->redundancyTaskDelayMilliseconds = $redundancyTaskDelayMilliseconds;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetRedundancyTaskDelayMilliseconds()
    {
        $this->redundancyTaskDelayMilliseconds = null;
        return $this;
    }

    /**
     * Getter for redundancyTaskIntervalMilliseconds
     *
     * @return int
     */
    public function getRedundancyTaskIntervalMilliseconds()
    {
        return $this->redundancyTaskIntervalMilliseconds instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->redundancyTaskIntervalMilliseconds;
    }

    /**
     * Setter for redundancyTaskIntervalMilliseconds
     *
     * @param int $redundancyTaskIntervalMilliseconds
     * @return $this
     */
    public function setRedundancyTaskIntervalMilliseconds($redundancyTaskIntervalMilliseconds)
    {
        $this->redundancyTaskIntervalMilliseconds = $redundancyTaskIntervalMilliseconds;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetRedundancyTaskIntervalMilliseconds()
    {
        $this->redundancyTaskIntervalMilliseconds = null;
        return $this;
    }

    /**
     * Getter for maxNumberOfSubscriptionsPerRedundancyTaskInterval
     *
     * @return int
     */
    public function getMaxNumberOfSubscriptionsPerRedundancyTaskInterval()
    {
        return $this->maxNumberOfSubscriptionsPerRedundancyTaskInterval instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->maxNumberOfSubscriptionsPerRedundancyTaskInterval;
    }

    /**
     * Setter for maxNumberOfSubscriptionsPerRedundancyTaskInterval
     *
     * @param int $maxNumberOfSubscriptionsPerRedundancyTaskInterval
     * @return $this
     */
    public function setMaxNumberOfSubscriptionsPerRedundancyTaskInterval($maxNumberOfSubscriptionsPerRedundancyTaskInterval)
    {
        $this->maxNumberOfSubscriptionsPerRedundancyTaskInterval = $maxNumberOfSubscriptionsPerRedundancyTaskInterval;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMaxNumberOfSubscriptionsPerRedundancyTaskInterval()
    {
        $this->maxNumberOfSubscriptionsPerRedundancyTaskInterval = null;
        return $this;
    }


}

