<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ResellerCallRecordingGetRequest
 *
 * Get the Call Recording attribute for a reseller.
 *         The response is either a ResellerCallRecordingGetResponse or an ErrorResponse.
 *
 * @see ResellerCallRecordingGetResponse
 * @see ErrorResponse
 * @Groups [{"id":"9741e074fbfeb4c7312bfa4dfbaee3d3:159","type":"sequence"}]
 */
class ResellerCallRecordingGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName resellerId
     * @Type string
     * @Group 9741e074fbfeb4c7312bfa4dfbaee3d3:159
     * @MinLength 1
     * @MaxLength 36
     * @var string|null
     */
    private $resellerId = null;

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

