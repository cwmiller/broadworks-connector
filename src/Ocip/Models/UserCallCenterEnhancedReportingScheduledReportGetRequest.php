<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserCallCenterEnhancedReportingScheduledReportGetRequest
 *
 * Request to get a call center reporting scheduled report created by supervisor.
 *         The response is either a UserCallCenterEnhancedReportingScheduledReportGetResponse or an ErrorResponse.
 *
 * @see UserCallCenterEnhancedReportingScheduledReportGetResponse
 * @see ErrorResponse
 * @Groups [{"id":"4d65d3449061c568639c8cc1e2492285:6809","type":"sequence"}]
 */
class UserCallCenterEnhancedReportingScheduledReportGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName supervisorUserId
     * @Type string
     * @Group 4d65d3449061c568639c8cc1e2492285:6809
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    protected $supervisorUserId = null;

    /**
     * @ElementName name
     * @Type string
     * @Group 4d65d3449061c568639c8cc1e2492285:6809
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    protected $name = null;

    /**
     * Getter for supervisorUserId
     *
     * @return string
     */
    public function getSupervisorUserId()
    {
        return $this->supervisorUserId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->supervisorUserId;
    }

    /**
     * Setter for supervisorUserId
     *
     * @param string $supervisorUserId
     * @return $this
     */
    public function setSupervisorUserId($supervisorUserId)
    {
        $this->supervisorUserId = $supervisorUserId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSupervisorUserId()
    {
        $this->supervisorUserId = null;
        return $this;
    }

    /**
     * Getter for name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->name;
    }

    /**
     * Setter for name
     *
     * @param string $name
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetName()
    {
        $this->name = null;
        return $this;
    }
}

