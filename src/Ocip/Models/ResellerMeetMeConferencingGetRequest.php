<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ResellerMeetMeConferencingGetRequest
 *
 * Request the reseller level data associated with Meet-Me Conferencing functions.
 *         The response is either a ResellerMeetMeConferencingGetResponse or an
 *         ErrorResponse.
 *
 * @see ResellerMeetMeConferencingGetResponse
 * @see ErrorResponse
 * @Groups [{"id":"240b50f54d060859e5e275082fdf49f9:5129","type":"sequence"}]
 */
class ResellerMeetMeConferencingGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName resellerId
     * @Type string
     * @Group 240b50f54d060859e5e275082fdf49f9:5129
     * @MinLength 1
     * @MaxLength 36
     * @var string|null
     */
    protected $resellerId = null;

    /**
     * Getter for resellerId
     *
     * @return string
     */
    public function getResellerId()
    {
        return $this->resellerId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->resellerId;
    }

    /**
     * Setter for resellerId
     *
     * @param string $resellerId
     * @return $this
     */
    public function setResellerId($resellerId)
    {
        $this->resellerId = $resellerId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetResellerId()
    {
        $this->resellerId = null;
        return $this;
    }
}

