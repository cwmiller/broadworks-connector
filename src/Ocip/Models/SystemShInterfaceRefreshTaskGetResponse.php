<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemShInterfaceRefreshTaskGetResponse
 *
 * Response to SystemShInterfaceRefreshTaskGetRequest.  Provides the status of the system refresh task.  If isRunning is false, numberPublicIdentityRefreshStarted and numberPublicIdentities are omitted.  If isRunning is true, numberPublicIdentities indicates the total number of public identities in the system that will be refreshed by the system refresh task; numberPublicIdentityRefreshesStarted indicates the total number of public identities for which a refresh has been started.
 *
 * @see SystemShInterfaceRefreshTaskGetRequest
 * @Groups [{"id":"da582a1f8028404e70d260cf1f891033:16672","type":"sequence"}]
 */
class SystemShInterfaceRefreshTaskGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName isRunning
     * @Type bool
     * @Group da582a1f8028404e70d260cf1f891033:16672
     * @var bool|null
     */
    protected $isRunning = null;

    /**
     * @ElementName numberPublicIdentityRefreshesStarted
     * @Type int
     * @Optional
     * @Group da582a1f8028404e70d260cf1f891033:16672
     * @var int|null
     */
    protected $numberPublicIdentityRefreshesStarted = null;

    /**
     * @ElementName numberPublicIdentities
     * @Type int
     * @Optional
     * @Group da582a1f8028404e70d260cf1f891033:16672
     * @var int|null
     */
    protected $numberPublicIdentities = null;

    /**
     * Getter for isRunning
     *
     * @return bool
     */
    public function getIsRunning()
    {
        return $this->isRunning instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->isRunning;
    }

    /**
     * Setter for isRunning
     *
     * @param bool $isRunning
     * @return $this
     */
    public function setIsRunning($isRunning)
    {
        $this->isRunning = $isRunning;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetIsRunning()
    {
        $this->isRunning = null;
        return $this;
    }

    /**
     * Getter for numberPublicIdentityRefreshesStarted
     *
     * @return int
     */
    public function getNumberPublicIdentityRefreshesStarted()
    {
        return $this->numberPublicIdentityRefreshesStarted instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->numberPublicIdentityRefreshesStarted;
    }

    /**
     * Setter for numberPublicIdentityRefreshesStarted
     *
     * @param int $numberPublicIdentityRefreshesStarted
     * @return $this
     */
    public function setNumberPublicIdentityRefreshesStarted($numberPublicIdentityRefreshesStarted)
    {
        $this->numberPublicIdentityRefreshesStarted = $numberPublicIdentityRefreshesStarted;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetNumberPublicIdentityRefreshesStarted()
    {
        $this->numberPublicIdentityRefreshesStarted = null;
        return $this;
    }

    /**
     * Getter for numberPublicIdentities
     *
     * @return int
     */
    public function getNumberPublicIdentities()
    {
        return $this->numberPublicIdentities instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->numberPublicIdentities;
    }

    /**
     * Setter for numberPublicIdentities
     *
     * @param int $numberPublicIdentities
     * @return $this
     */
    public function setNumberPublicIdentities($numberPublicIdentities)
    {
        $this->numberPublicIdentities = $numberPublicIdentities;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetNumberPublicIdentities()
    {
        $this->numberPublicIdentities = null;
        return $this;
    }
}

