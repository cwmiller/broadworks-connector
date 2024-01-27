<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupRoutePointDeleteDNISRequest
 *
 * Delete a route point's DNIS.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"e474d11df9a1d1d1041e589793e40de8:206","type":"sequence"}]
 */
class GroupRoutePointDeleteDNISRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName dnisKey
     * @Type \CWM\BroadWorksConnector\Ocip\Models\DNISKey
     * @Group e474d11df9a1d1d1041e589793e40de8:206
     * @var \CWM\BroadWorksConnector\Ocip\Models\DNISKey|null
     */
    protected $dnisKey = null;

    /**
     * Getter for dnisKey
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\DNISKey
     */
    public function getDnisKey()
    {
        return $this->dnisKey instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->dnisKey;
    }

    /**
     * Setter for dnisKey
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\DNISKey $dnisKey
     * @return $this
     */
    public function setDnisKey(\CWM\BroadWorksConnector\Ocip\Models\DNISKey $dnisKey)
    {
        $this->dnisKey = $dnisKey;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDnisKey()
    {
        $this->dnisKey = null;
        return $this;
    }
}

