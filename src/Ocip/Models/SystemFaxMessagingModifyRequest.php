<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemFaxMessagingModifyRequest
 *
 * Modify the system level data associated with Fax Messaging.
 *         The following elements are only used in AS data mode and ignored in XS data mode:
 *           statusDurationHours
 *           statusAuditIntervalHours
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"b2249333b9e085ee149c29960c00214e:81","type":"sequence"}]
 */
class SystemFaxMessagingModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName statusDurationHours
     * @Type int
     * @Optional
     * @Group b2249333b9e085ee149c29960c00214e:81
     * @MinInclusive 1
     * @MaxInclusive 24
     * @var int|null
     */
    protected $statusDurationHours = null;

    /**
     * @ElementName statusAuditIntervalHours
     * @Type int
     * @Optional
     * @Group b2249333b9e085ee149c29960c00214e:81
     * @MinInclusive 1
     * @MaxInclusive 24
     * @var int|null
     */
    protected $statusAuditIntervalHours = null;

    /**
     * @ElementName maximumConcurrentFaxesPerUser
     * @Type int
     * @Optional
     * @Group b2249333b9e085ee149c29960c00214e:81
     * @MinInclusive 1
     * @MaxInclusive 10
     * @var int|null
     */
    protected $maximumConcurrentFaxesPerUser = null;

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

