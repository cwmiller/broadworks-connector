<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemShInterfaceRefreshTaskGetResponse
 *
 * Response to SystemShInterfaceRefreshTaskGetRequest.  Provides the status of the
 * system refresh task.  If isRunning is false, numberPublicIdentityRefreshStarted
 * and numberPublicIdentities are omitted.  If isRunning is true,
 * numberPublicIdentities indicates the total number of public identities in the
 * system that will be refreshed by the system refresh task;
 * numberPublicIdentityRefreshesStarted indicates the total number of public
 * identities for which a refresh has been started.
 */
class SystemShInterfaceRefreshTaskGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName isRunning
     * @var bool|null
     */
    private $isRunning = null;

    /**
     * @ElementName numberPublicIdentityRefreshesStarted
     * @var int|null
     */
    private $numberPublicIdentityRefreshesStarted = null;

    /**
     * @ElementName numberPublicIdentities
     * @var int|null
     */
    private $numberPublicIdentities = null;

    /**
     * Getter for isRunning
     *
     * @ElementName isRunning
     * @return bool|null
     */
    public function getIsRunning()
    {
        return $this->isRunning;
    }

    /**
     * Setter for isRunning
     *
     * @ElementName isRunning
     * @param bool|null $isRunning
     * @return $this
     */
    public function setIsRunning($isRunning)
    {
        $this->isRunning = $isRunning;
        return $this;
    }

    /**
     * Getter for numberPublicIdentityRefreshesStarted
     *
     * @ElementName numberPublicIdentityRefreshesStarted
     * @return int|null
     */
    public function getNumberPublicIdentityRefreshesStarted()
    {
        return $this->numberPublicIdentityRefreshesStarted;
    }

    /**
     * Setter for numberPublicIdentityRefreshesStarted
     *
     * @ElementName numberPublicIdentityRefreshesStarted
     * @param int|null $numberPublicIdentityRefreshesStarted
     * @return $this
     */
    public function setNumberPublicIdentityRefreshesStarted($numberPublicIdentityRefreshesStarted)
    {
        $this->numberPublicIdentityRefreshesStarted = $numberPublicIdentityRefreshesStarted;
        return $this;
    }

    /**
     * Getter for numberPublicIdentities
     *
     * @ElementName numberPublicIdentities
     * @return int|null
     */
    public function getNumberPublicIdentities()
    {
        return $this->numberPublicIdentities;
    }

    /**
     * Setter for numberPublicIdentities
     *
     * @ElementName numberPublicIdentities
     * @param int|null $numberPublicIdentities
     * @return $this
     */
    public function setNumberPublicIdentities($numberPublicIdentities)
    {
        $this->numberPublicIdentities = $numberPublicIdentities;
        return $this;
    }


}

