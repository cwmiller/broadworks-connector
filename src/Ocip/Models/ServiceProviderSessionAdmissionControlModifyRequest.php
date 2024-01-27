<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderSessionAdmissionControlModifyRequest
 *
 * Request to modify session admission control capacity for the service provider.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"e19a9072c2dad499e9f28837da5768db:6741","type":"sequence"}]
 */
class ServiceProviderSessionAdmissionControlModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group e19a9072c2dad499e9f28837da5768db:6741
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    protected $serviceProviderId = null;

    /**
     * @ElementName restrictAggregateSessions
     * @Type bool
     * @Optional
     * @Group e19a9072c2dad499e9f28837da5768db:6741
     * @var bool|null
     */
    protected $restrictAggregateSessions = null;

    /**
     * @ElementName maxSessions
     * @Type int
     * @Nillable
     * @Optional
     * @Group e19a9072c2dad499e9f28837da5768db:6741
     * @MinInclusive 0
     * @var int|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $maxSessions = null;

    /**
     * @ElementName maxUserOriginatingSessions
     * @Type int
     * @Nillable
     * @Optional
     * @Group e19a9072c2dad499e9f28837da5768db:6741
     * @MinInclusive 0
     * @var int|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $maxUserOriginatingSessions = null;

    /**
     * @ElementName maxUserTerminatingSessions
     * @Type int
     * @Nillable
     * @Optional
     * @Group e19a9072c2dad499e9f28837da5768db:6741
     * @MinInclusive 0
     * @var int|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $maxUserTerminatingSessions = null;

    /**
     * @ElementName countIntraServiceProviderSessions
     * @Type bool
     * @Optional
     * @Group e19a9072c2dad499e9f28837da5768db:6741
     * @var bool|null
     */
    protected $countIntraServiceProviderSessions = null;

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
     * Getter for countIntraServiceProviderSessions
     *
     * @return bool
     */
    public function getCountIntraServiceProviderSessions()
    {
        return $this->countIntraServiceProviderSessions instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->countIntraServiceProviderSessions;
    }

    /**
     * Setter for countIntraServiceProviderSessions
     *
     * @param bool $countIntraServiceProviderSessions
     * @return $this
     */
    public function setCountIntraServiceProviderSessions($countIntraServiceProviderSessions)
    {
        $this->countIntraServiceProviderSessions = $countIntraServiceProviderSessions;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetCountIntraServiceProviderSessions()
    {
        $this->countIntraServiceProviderSessions = null;
        return $this;
    }
}

