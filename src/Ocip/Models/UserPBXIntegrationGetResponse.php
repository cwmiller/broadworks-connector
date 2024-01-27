<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserPBXIntegrationGetResponse
 *
 * Response to UserPBXIntegrationGetRequest.
 *
 * @see UserPBXIntegrationGetRequest
 * @Groups [{"id":"fb73488c2ef4ac4400ab213b637d79a9:2760","type":"sequence"}]
 */
class UserPBXIntegrationGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName proxyToHeaderFromNetwork
     * @Type bool
     * @Group fb73488c2ef4ac4400ab213b637d79a9:2760
     * @var bool|null
     */
    protected $proxyToHeaderFromNetwork = null;

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

