<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemSMDIParametersGetResponse
 *
 * Response to SystemSMDIParametersGetListRequest.
 *         Contains a list of system SMDI parameters.
 *
 * @see SystemSMDIParametersGetListRequest
 * @Groups [{"id":"da582a1f8028404e70d260cf1f891033:17943","type":"sequence"}]
 */
class SystemSMDIParametersGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName enableSMDI
     * @Type bool
     * @Group da582a1f8028404e70d260cf1f891033:17943
     * @var bool|null
     */
    protected $enableSMDI = null;

    /**
     * @ElementName listeningPort
     * @Type int
     * @Group da582a1f8028404e70d260cf1f891033:17943
     * @MinInclusive 1025
     * @MaxInclusive 65535
     * @var int|null
     */
    protected $listeningPort = null;

    /**
     * @ElementName maxConnections
     * @Type int
     * @Group da582a1f8028404e70d260cf1f891033:17943
     * @MinInclusive 0
     * @MaxInclusive 64
     * @var int|null
     */
    protected $maxConnections = null;

    /**
     * Getter for enableSMDI
     *
     * @return bool
     */
    public function getEnableSMDI()
    {
        return $this->enableSMDI instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->enableSMDI;
    }

    /**
     * Setter for enableSMDI
     *
     * @param bool $enableSMDI
     * @return $this
     */
    public function setEnableSMDI($enableSMDI)
    {
        $this->enableSMDI = $enableSMDI;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEnableSMDI()
    {
        $this->enableSMDI = null;
        return $this;
    }

    /**
     * Getter for listeningPort
     *
     * @return int
     */
    public function getListeningPort()
    {
        return $this->listeningPort instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->listeningPort;
    }

    /**
     * Setter for listeningPort
     *
     * @param int $listeningPort
     * @return $this
     */
    public function setListeningPort($listeningPort)
    {
        $this->listeningPort = $listeningPort;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetListeningPort()
    {
        $this->listeningPort = null;
        return $this;
    }

    /**
     * Getter for maxConnections
     *
     * @return int
     */
    public function getMaxConnections()
    {
        return $this->maxConnections instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->maxConnections;
    }

    /**
     * Setter for maxConnections
     *
     * @param int $maxConnections
     * @return $this
     */
    public function setMaxConnections($maxConnections)
    {
        $this->maxConnections = $maxConnections;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMaxConnections()
    {
        $this->maxConnections = null;
        return $this;
    }
}

