<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupSessionAdmissionControlModifyRequest
 *
 * Request to modify session admission control capacity for the group.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"f3a93cf15de4abd7903673e44ee3e07b:8245","type":"sequence"}]
 */
class GroupSessionAdmissionControlModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group f3a93cf15de4abd7903673e44ee3e07b:8245
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    private $serviceProviderId = null;

    /**
     * @ElementName groupId
     * @Type string
     * @Group f3a93cf15de4abd7903673e44ee3e07b:8245
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    private $groupId = null;

    /**
     * @ElementName restrictAggregateSessions
     * @Type bool
     * @Optional
     * @Group f3a93cf15de4abd7903673e44ee3e07b:8245
     * @var bool|null
     */
    private $restrictAggregateSessions = null;

    /**
     * @ElementName maxSessions
     * @Type int
     * @Nillable
     * @Optional
     * @Group f3a93cf15de4abd7903673e44ee3e07b:8245
     * @MinInclusive 0
     * @var int|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $maxSessions = null;

    /**
     * @ElementName maxUserOriginatingSessions
     * @Type int
     * @Nillable
     * @Optional
     * @Group f3a93cf15de4abd7903673e44ee3e07b:8245
     * @MinInclusive 0
     * @var int|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $maxUserOriginatingSessions = null;

    /**
     * @ElementName maxUserTerminatingSessions
     * @Type int
     * @Nillable
     * @Optional
     * @Group f3a93cf15de4abd7903673e44ee3e07b:8245
     * @MinInclusive 0
     * @var int|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $maxUserTerminatingSessions = null;

    /**
     * @ElementName countIntraGroupSessions
     * @Type bool
     * @Optional
     * @Group f3a93cf15de4abd7903673e44ee3e07b:8245
     * @var bool|null
     */
    private $countIntraGroupSessions = null;

    /**
     * Getter for serviceProviderId
     *
     * @return string
     */
    public function getServiceProviderId()
    {
        return $this->serviceProviderId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->serviceProviderId;
    }

    /**
     * Setter for serviceProviderId
     *
     * @param string $serviceProviderId
     * @return $this
     */
    public function setServiceProviderId($serviceProviderId)
    {
        $this->serviceProviderId = $serviceProviderId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetServiceProviderId()
    {
        $this->serviceProviderId = null;
        return $this;
    }

    /**
     * Getter for groupId
     *
     * @return string
     */
    public function getGroupId()
    {
        return $this->groupId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->groupId;
    }

    /**
     * Setter for groupId
     *
     * @param string $groupId
     * @return $this
     */
    public function setGroupId($groupId)
    {
        $this->groupId = $groupId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetGroupId()
    {
        $this->groupId = null;
        return $this;
    }

    /**
     * Getter for restrictAggregateSessions
     *
     * @return bool
     */
    public function getRestrictAggregateSessions()
    {
        return $this->restrictAggregateSessions instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->restrictAggregateSessions;
    }

    /**
     * Setter for restrictAggregateSessions
     *
     * @param bool $restrictAggregateSessions
     * @return $this
     */
    public function setRestrictAggregateSessions($restrictAggregateSessions)
    {
        $this->restrictAggregateSessions = $restrictAggregateSessions;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetRestrictAggregateSessions()
    {
        $this->restrictAggregateSessions = null;
        return $this;
    }

    /**
     * Getter for maxSessions
     *
     * @return int|null
     */
    public function getMaxSessions()
    {
        return $this->maxSessions instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->maxSessions;
    }

    /**
     * Setter for maxSessions
     *
     * @param int|null $maxSessions
     * @return $this
     */
    public function setMaxSessions($maxSessions = null)
    {
        if ($maxSessions === null) {
            $this->maxSessions = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->maxSessions = $maxSessions;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMaxSessions()
    {
        $this->maxSessions = null;
        return $this;
    }

    /**
     * Getter for maxUserOriginatingSessions
     *
     * @return int|null
     */
    public function getMaxUserOriginatingSessions()
    {
        return $this->maxUserOriginatingSessions instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->maxUserOriginatingSessions;
    }

    /**
     * Setter for maxUserOriginatingSessions
     *
     * @param int|null $maxUserOriginatingSessions
     * @return $this
     */
    public function setMaxUserOriginatingSessions($maxUserOriginatingSessions = null)
    {
        if ($maxUserOriginatingSessions === null) {
            $this->maxUserOriginatingSessions = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->maxUserOriginatingSessions = $maxUserOriginatingSessions;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMaxUserOriginatingSessions()
    {
        $this->maxUserOriginatingSessions = null;
        return $this;
    }

    /**
     * Getter for maxUserTerminatingSessions
     *
     * @return int|null
     */
    public function getMaxUserTerminatingSessions()
    {
        return $this->maxUserTerminatingSessions instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->maxUserTerminatingSessions;
    }

    /**
     * Setter for maxUserTerminatingSessions
     *
     * @param int|null $maxUserTerminatingSessions
     * @return $this
     */
    public function setMaxUserTerminatingSessions($maxUserTerminatingSessions = null)
    {
        if ($maxUserTerminatingSessions === null) {
            $this->maxUserTerminatingSessions = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->maxUserTerminatingSessions = $maxUserTerminatingSessions;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMaxUserTerminatingSessions()
    {
        $this->maxUserTerminatingSessions = null;
        return $this;
    }

    /**
     * Getter for countIntraGroupSessions
     *
     * @return bool
     */
    public function getCountIntraGroupSessions()
    {
        return $this->countIntraGroupSessions instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->countIntraGroupSessions;
    }

    /**
     * Setter for countIntraGroupSessions
     *
     * @param bool $countIntraGroupSessions
     * @return $this
     */
    public function setCountIntraGroupSessions($countIntraGroupSessions)
    {
        $this->countIntraGroupSessions = $countIntraGroupSessions;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetCountIntraGroupSessions()
    {
        $this->countIntraGroupSessions = null;
        return $this;
    }


}

