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
 * @Groups [{"id":"fb73488c2ef4ac4400ab213b637d79a9:2776","type":"sequence"}]
 */
class UserPBXIntegrationModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName userId
     * @Type string
     * @Group fb73488c2ef4ac4400ab213b637d79a9:2776
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    protected $userId = null;

    /**
     * @ElementName proxyToHeaderFromNetwork
     * @Type bool
     * @Optional
     * @Group fb73488c2ef4ac4400ab213b637d79a9:2776
     * @var bool|null
     */
    protected $proxyToHeaderFromNetwork = null;

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

