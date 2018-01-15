<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderSessionAdmissionControlGetResponse
 *
 * Response to the ServiceProviderSessionAdmissionControlGetRequest.
 *         The response contains the session admission control capacity allocated
 * for the service provider.
 */
class ServiceProviderSessionAdmissionControlGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName restrictAggregateSessions
     * @var bool|null
     */
    private $restrictAggregateSessions = null;

    /**
     * @ElementName maxSessions
     * @var int|null
     */
    private $maxSessions = null;

    /**
     * @ElementName maxUserOriginatingSessions
     * @var int|null
     */
    private $maxUserOriginatingSessions = null;

    /**
     * @ElementName maxUserTerminatingSessions
     * @var int|null
     */
    private $maxUserTerminatingSessions = null;

    /**
     * @ElementName countIntraServiceProviderSessions
     * @var bool|null
     */
    private $countIntraServiceProviderSessions = null;

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
     * @return int|null
     */
    public function getMaxSessions()
    {
        return $this->maxSessions;
    }

    /**
     * Setter for maxSessions
     *
     * @ElementName maxSessions
     * @param int|null $maxSessions
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
     * @return int|null
     */
    public function getMaxUserOriginatingSessions()
    {
        return $this->maxUserOriginatingSessions;
    }

    /**
     * Setter for maxUserOriginatingSessions
     *
     * @ElementName maxUserOriginatingSessions
     * @param int|null $maxUserOriginatingSessions
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
     * @return int|null
     */
    public function getMaxUserTerminatingSessions()
    {
        return $this->maxUserTerminatingSessions;
    }

    /**
     * Setter for maxUserTerminatingSessions
     *
     * @ElementName maxUserTerminatingSessions
     * @param int|null $maxUserTerminatingSessions
     * @return $this
     */
    public function setMaxUserTerminatingSessions($maxUserTerminatingSessions)
    {
        $this->maxUserTerminatingSessions = $maxUserTerminatingSessions;
        return $this;
    }

    /**
     * Getter for countIntraServiceProviderSessions
     *
     * @ElementName countIntraServiceProviderSessions
     * @return bool|null
     */
    public function getCountIntraServiceProviderSessions()
    {
        return $this->countIntraServiceProviderSessions;
    }

    /**
     * Setter for countIntraServiceProviderSessions
     *
     * @ElementName countIntraServiceProviderSessions
     * @param bool|null $countIntraServiceProviderSessions
     * @return $this
     */
    public function setCountIntraServiceProviderSessions($countIntraServiceProviderSessions)
    {
        $this->countIntraServiceProviderSessions = $countIntraServiceProviderSessions;
        return $this;
    }


}

