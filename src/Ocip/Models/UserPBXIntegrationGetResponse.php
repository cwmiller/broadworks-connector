<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserPBXIntegrationGetResponse
 *
 * Response to UserPBXIntegrationGetRequest.
 *
 * @see UserPBXIntegrationGetRequest
 * @Groups [{"id":"53d18cc797d03d802cbc411ad821f1d4:2755","type":"sequence"}]
 */
class UserPBXIntegrationGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName proxyToHeaderFromNetwork
     * @Type bool
     * @Group 53d18cc797d03d802cbc411ad821f1d4:2755
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

