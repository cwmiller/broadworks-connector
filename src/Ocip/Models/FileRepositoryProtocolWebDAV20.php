<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * FileRepositoryProtocolWebDAV20
 *
 * Attributes of the WebDav protocol when the file repository interface is using WebDav.
 *
 * @Groups [{"id":"7f663d5135470c33ca64b0eed3c3aa0c:19913","type":"sequence"}]
 */
class FileRepositoryProtocolWebDAV20
{

    /**
     * @ElementName secure
     * @Type bool
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:19913
     * @var bool|null
     */
    private $secure = null;

    /**
     * @ElementName netAddress
     * @Type string
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:19913
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    private $netAddress = null;

    /**
     * @ElementName extendedFileCaptureSupport
     * @Type bool
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:19913
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

