<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserAutomaticCollectCallGetResponse
 *
 * Response to the UserAutomaticCollectCallGetRequest.
 *         Returns user Automatic Collect Call service settings.
 *
 * @see UserAutomaticCollectCallGetRequest
 * @Groups [{"id":"0d5db1a19a0aeda6f13d1f1c609efa0a:176","type":"sequence"}]
 */
class UserAutomaticCollectCallGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName enableAutomaticCollectCall
     * @Type bool
     * @Group 0d5db1a19a0aeda6f13d1f1c609efa0a:176
     * @var bool|null
     */
    protected $enableAutomaticCollectCall = null;

    /**
     * Getter for enableAutomaticCollectCall
     *
     * @return bool
     */
    public function getEnableAutomaticCollectCall()
    {
        return $this->enableAutomaticCollectCall instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->enableAutomaticCollectCall;
    }

    /**
     * Setter for enableAutomaticCollectCall
     *
     * @param bool $enableAutomaticCollectCall
     * @return $this
     */
    public function setEnableAutomaticCollectCall($enableAutomaticCollectCall)
    {
        $this->enableAutomaticCollectCall = $enableAutomaticCollectCall;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEnableAutomaticCollectCall()
    {
        $this->enableAutomaticCollectCall = null;
        return $this;
    }
}

