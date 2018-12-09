<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * FileRepositoryProtocolWebDAV20
 *
 * Attributes of the WebDav protocol when the file repository interface is using WebDav.
 *
 * @Groups [{"id":"b5f5416d9e71f8e4246cda16c4723744:17366","type":"sequence"}]
 */
class FileRepositoryProtocolWebDAV20
{

    /**
     * @ElementName secure
     * @Type bool
     * @Group b5f5416d9e71f8e4246cda16c4723744:17366
     * @var bool|null
     */
    private $secure = null;

    /**
     * @ElementName netAddress
     * @Type string
     * @Group b5f5416d9e71f8e4246cda16c4723744:17366
     * @var string|null
     */
    private $netAddress = null;

    /**
     * @ElementName extendedFileCaptureSupport
     * @Type bool
     * @Group b5f5416d9e71f8e4246cda16c4723744:17366
     * @var bool|null
     */
    private $extendedFileCaptureSupport = null;

    /**
     * Getter for secure
     *
     * @return bool
     */
    public function getSecure()
    {
        return $this->secure instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->secure;
    }

    /**
     * Setter for secure
     *
     * @param bool $secure
     * @return $this
     */
    public function setSecure($secure)
    {
        $this->secure = $secure;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSecure()
    {
        $this->secure = null;
        return $this;
    }

    /**
     * Getter for netAddress
     *
     * @return string
     */
    public function getNetAddress()
    {
        return $this->netAddress instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->netAddress;
    }

    /**
     * Setter for netAddress
     *
     * @param string $netAddress
     * @return $this
     */
    public function setNetAddress($netAddress)
    {
        $this->netAddress = $netAddress;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetNetAddress()
    {
        $this->netAddress = null;
        return $this;
    }

    /**
     * Getter for extendedFileCaptureSupport
     *
     * @return bool
     */
    public function getExtendedFileCaptureSupport()
    {
        return $this->extendedFileCaptureSupport instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->extendedFileCaptureSupport;
    }

    /**
     * Setter for extendedFileCaptureSupport
     *
     * @param bool $extendedFileCaptureSupport
     * @return $this
     */
    public function setExtendedFileCaptureSupport($extendedFileCaptureSupport)
    {
        $this->extendedFileCaptureSupport = $extendedFileCaptureSupport;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetExtendedFileCaptureSupport()
    {
        $this->extendedFileCaptureSupport = null;
        return $this;
    }


}

