<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemRoutingProfileGetListRequest
 *
 * Request to get the list of system routing profiles.
 *         
 *         If resellerId is specified, the routing profiles assigned to the given reseller are returned. If reseller administrator sends the request, resellerId is not specified, the administrator’s resellerId is used.
 *         If system or provisioning administrator sends the request, resellerId is not specified, all system routing profiles are returned.
 *         
 *         The response is either a SystemRoutingProfileGetListResponse or an ErrorResponse.
 *
 * @see SystemRoutingProfileGetListResponse
 * @see ErrorResponse
 * @Groups [{"id":"7f663d5135470c33ca64b0eed3c3aa0c:14399","type":"sequence"}]
 */
class SystemRoutingProfileGetListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName resellerId
     * @Type string
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:14399
     * @MinLength 1
     * @MaxLength 30
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

