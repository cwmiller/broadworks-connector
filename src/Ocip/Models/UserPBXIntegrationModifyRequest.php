<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserPBXIntegrationModifyRequest
 *
 * Modify the user level data associated with PBX Integration service.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"53d18cc797d03d802cbc411ad821f1d4:2771","type":"sequence"}]
 */
class UserPBXIntegrationModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @Type string
     * @Group 53d18cc797d03d802cbc411ad821f1d4:2771
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    private $userId = null;

    /**
     * @ElementName proxyToHeaderFromNetwork
     * @Type bool
     * @Optional
     * @Group 53d18cc797d03d802cbc411ad821f1d4:2771
     * @var bool|null
     */
    private $proxyToHeaderFromNetwork = null;

    /**
     * Getter for userId
     *
     * @return string
     */
    public function getUserId()
    {
        return $this->userId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->userId;
    }

    /**
     * Setter for userId
     *
     * @param string $userId
     * @return $this
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUserId()
    {
        $this->userId = null;
        return $this;
    }

    /**
     * Getter for proxyToHeaderFromNetwork
     *
     * @return bool
     */
    public function getProxyToHeaderFromNetwork()
    {
        return $this->proxyToHeaderFromNetwork instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->proxyToHeaderFromNetwork;
    }

    /**
     * Setter for proxyToHeaderFromNetwork
     *
     * @param bool $proxyToHeaderFromNetwork
     * @return $this
     */
    public function setProxyToHeaderFromNetwork($proxyToHeaderFromNetwork)
    {
        $this->proxyToHeaderFromNetwork = $proxyToHeaderFromNetwork;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetProxyToHeaderFromNetwork()
    {
        $this->proxyToHeaderFromNetwork = null;
        return $this;
    }


}

