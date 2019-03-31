<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemFaxMessagingGetResponse
 *
 * Response to SystemFAXMessagingGetRequest.
 *
 *         The following elements are only used in AS data mode:
 *            statusDurationHours
 *            statusAuditIntervalHours
 *
 * @see SystemFAXMessagingGetRequest
 * @Groups [{"id":"f46f967f937c7dc89ddb3db423383aa4:60","type":"sequence"}]
 */
class SystemFaxMessagingGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName statusDurationHours
     * @Type int
     * @Group f46f967f937c7dc89ddb3db423383aa4:60
     * @MinInclusive 1
     * @MaxInclusive 24
     * @var int|null
     */
    private $statusDurationHours = null;

    /**
     * @ElementName statusAuditIntervalHours
     * @Type int
     * @Group f46f967f937c7dc89ddb3db423383aa4:60
     * @MinInclusive 1
     * @MaxInclusive 24
     * @var int|null
     */
    private $statusAuditIntervalHours = null;

    /**
     * @ElementName maximumConcurrentFaxesPerUser
     * @Type int
     * @Group f46f967f937c7dc89ddb3db423383aa4:60
     * @MinInclusive 1
     * @MaxInclusive 10
     * @var int|null
     */
    private $maximumConcurrentFaxesPerUser = null;

    /**
     * Getter for statusDurationHours
     *
     * @return int
     */
    public function getStatusDurationHours()
    {
        return $this->statusDurationHours instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->statusDurationHours;
    }

    /**
     * Setter for statusDurationHours
     *
     * @param int $statusDurationHours
     * @return $this
     */
    public function setStatusDurationHours($statusDurationHours)
    {
        $this->statusDurationHours = $statusDurationHours;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetStatusDurationHours()
    {
        $this->statusDurationHours = null;
        return $this;
    }

    /**
     * Getter for statusAuditIntervalHours
     *
     * @return int
     */
    public function getStatusAuditIntervalHours()
    {
        return $this->statusAuditIntervalHours instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->statusAuditIntervalHours;
    }

    /**
     * Setter for statusAuditIntervalHours
     *
     * @param int $statusAuditIntervalHours
     * @return $this
     */
    public function setStatusAuditIntervalHours($statusAuditIntervalHours)
    {
        $this->statusAuditIntervalHours = $statusAuditIntervalHours;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetStatusAuditIntervalHours()
    {
        $this->statusAuditIntervalHours = null;
        return $this;
    }

    /**
     * Getter for maximumConcurrentFaxesPerUser
     *
     * @return int
     */
    public function getMaximumConcurrentFaxesPerUser()
    {
        return $this->maximumConcurrentFaxesPerUser instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->maximumConcurrentFaxesPerUser;
    }

    /**
     * Setter for maximumConcurrentFaxesPerUser
     *
     * @param int $maximumConcurrentFaxesPerUser
     * @return $this
     */
    public function setMaximumConcurrentFaxesPerUser($maximumConcurrentFaxesPerUser)
    {
        $this->maximumConcurrentFaxesPerUser = $maximumConcurrentFaxesPerUser;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMaximumConcurrentFaxesPerUser()
    {
        $this->maximumConcurrentFaxesPerUser = null;
        return $this;
    }


}

