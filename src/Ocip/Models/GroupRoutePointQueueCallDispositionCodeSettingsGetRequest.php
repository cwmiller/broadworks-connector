<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupRoutePointQueueCallDispositionCodeSettingsGetRequest
 *
 * Request the queue level data associated with Route Point Call Disposition Code Settings.
 *         The response is either an GroupRoutePointQueueCallDispositionCodeSettingsGetResponse or an
 *         ErrorResponse.
 *
 * @see GroupRoutePointQueueCallDispositionCodeSettingsGetResponse
 * @see ErrorResponse
 * @Groups [{"id":"e474d11df9a1d1d1041e589793e40de8:1162","type":"sequence"}]
 */
class GroupRoutePointQueueCallDispositionCodeSettingsGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName serviceUserId
     * @Type string
     * @Group e474d11df9a1d1d1041e589793e40de8:1162
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    protected $serviceUserId = null;

    /**
     * Getter for serviceUserId
     *
     * @return string
     */
    public function getServiceUserId()
    {
        return $this->serviceUserId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->serviceUserId;
    }

    /**
     * Setter for serviceUserId
     *
     * @param string $serviceUserId
     * @return $this
     */
    public function setServiceUserId($serviceUserId)
    {
        $this->serviceUserId = $serviceUserId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetServiceUserId()
    {
        $this->serviceUserId = null;
        return $this;
    }
}

