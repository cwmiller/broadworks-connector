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
 */
class GroupSessionAdmissionControlModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @var string|null
     */
    private $serviceProviderId = null;

    /**
     * @ElementName groupId
     * @var string|null
     */
    private $groupId = null;

    /**
     * @ElementName restrictAggregateSessions
     * @var bool|null
     */
    private $restrictAggregateSessions = null;

    /**
     * @ElementName maxSessions
     * @Nillable
     * @var int|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $maxSessions = null;

    /**
     * @ElementName maxUserOriginatingSessions
     * @Nillable
     * @var int|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $maxUserOriginatingSessions = null;

    /**
     * @ElementName maxUserTerminatingSessions
     * @Nillable
     * @var int|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $maxUserTerminatingSessions = null;

    /**
     * @ElementName countIntraGroupSessions
     * @var bool|null
     */
    private $countIntraGroupSessions = null;

    /**
     * Getter for serviceProviderId
     *
     * @ElementName serviceProviderId
     * @return string|null
     */
    public function getServiceProviderId()
    {
        return $this->serviceProviderId;
    }

    /**
     * Setter for serviceProviderId
     *
     * @ElementName serviceProviderId
     * @param string|null $serviceProviderId
     * @return $this
     */
    public function setServiceProviderId($serviceProviderId)
    {
        $this->serviceProviderId = $serviceProviderId;
        return $this;
    }

    /**
     * Getter for groupId
     *
     * @ElementName groupId
     * @return string|null
     */
    public function getGroupId()
    {
        return $this->groupId;
    }

    /**
     * Setter for groupId
     *
     * @ElementName groupId
     * @param string|null $groupId
     * @return $this
     */
    public function setGroupId($groupId)
    {
        $this->groupId = $groupId;
        return $this;
    }

    /**
     * Getter for restrictAggregateSessions
     *
     * @ElementName restrictAggregateSessions
     * @return bool|null
     */
    public function getRestrictAggregateSessions()
    {
        return $this->restrictAggregateSessions;
    }

    /**
     * Setter for restrictAggregateSessions
     *
     * @ElementName restrictAggregateSessions
     * @param bool|null $restrictAggregateSessions
     * @return $this
     */
    public function setRestrictAggregateSessions($restrictAggregateSessions)
    {
        $this->restrictAggregateSessions = $restrictAggregateSessions;
        return $this;
    }

    /**
     * Getter for maxSessions
     *
     * @ElementName maxSessions
     * @Nillable
     * @return int|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getMaxSessions()
    {
        return $this->maxSessions;
    }

    /**
     * Setter for maxSessions
     *
     * @ElementName maxSessions
     * @Nillable
     * @param int|null|\CWM\BroadWorksConnector\Ocip\Nil $maxSessions
     * @return $this
     */
    public function setMaxSessions($maxSessions)
    {
        $this->maxSessions = $maxSessions;
        return $this;
    }

    /**
     * Getter for maxUserOriginatingSessions
     *
     * @ElementName maxUserOriginatingSessions
     * @Nillable
     * @return int|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getMaxUserOriginatingSessions()
    {
        return $this->maxUserOriginatingSessions;
    }

    /**
     * Setter for maxUserOriginatingSessions
     *
     * @ElementName maxUserOriginatingSessions
     * @Nillable
     * @param int|null|\CWM\BroadWorksConnector\Ocip\Nil $maxUserOriginatingSessions
     * @return $this
     */
    public function setMaxUserOriginatingSessions($maxUserOriginatingSessions)
    {
        $this->maxUserOriginatingSessions = $maxUserOriginatingSessions;
        return $this;
    }

    /**
     * Getter for maxUserTerminatingSessions
     *
     * @ElementName maxUserTerminatingSessions
     * @Nillable
     * @return int|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getMaxUserTerminatingSessions()
    {
        return $this->maxUserTerminatingSessions;
    }

    /**
     * Setter for maxUserTerminatingSessions
     *
     * @ElementName maxUserTerminatingSessions
     * @Nillable
     * @param int|null|\CWM\BroadWorksConnector\Ocip\Nil $maxUserTerminatingSessions
     * @return $this
     */
    public function setMaxUserTerminatingSessions($maxUserTerminatingSessions)
    {
        $this->maxUserTerminatingSessions = $maxUserTerminatingSessions;
        return $this;
    }

    /**
     * Getter for countIntraGroupSessions
     *
     * @ElementName countIntraGroupSessions
     * @return bool|null
     */
    public function getCountIntraGroupSessions()
    {
        return $this->countIntraGroupSessions;
    }

    /**
     * Setter for countIntraGroupSessions
     *
     * @ElementName countIntraGroupSessions
     * @param bool|null $countIntraGroupSessions
     * @return $this
     */
    public function setCountIntraGroupSessions($countIntraGroupSessions)
    {
        $this->countIntraGroupSessions = $countIntraGroupSessions;
        return $this;
    }


}

