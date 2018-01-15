<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserCallCenterEnhancedReportingScheduledReportGetRequest
 *
 * Request to get a call center reporting scheduled report created by supervisor.
 *         The response is either a
 * UserCallCenterEnhancedReportingScheduledReportGetResponse or an ErrorResponse.
 */
class UserCallCenterEnhancedReportingScheduledReportGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName supervisorUserId
     * @var string|null
     */
    private $supervisorUserId = null;

    /**
     * @ElementName name
     * @var string|null
     */
    private $name = null;

    /**
     * Getter for supervisorUserId
     *
     * @ElementName supervisorUserId
     * @return string|null
     */
    public function getSupervisorUserId()
    {
        return $this->supervisorUserId;
    }

    /**
     * Setter for supervisorUserId
     *
     * @ElementName supervisorUserId
     * @param string|null $supervisorUserId
     * @return $this
     */
    public function setSupervisorUserId($supervisorUserId)
    {
        $this->supervisorUserId = $supervisorUserId;
        return $this;
    }

    /**
     * Getter for name
     *
     * @ElementName name
     * @return string|null
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Setter for name
     *
     * @ElementName name
     * @param string|null $name
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }


}

