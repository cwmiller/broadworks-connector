<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemPerformanceMeasurementReportingModifyFileServerRequest
 *
 * Modify a performance measurements reporting ftp server.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class SystemPerformanceMeasurementReportingModifyFileServerRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName ftpHostNetAddress
     * @var string|null
     */
    private $ftpHostNetAddress = null;

    /**
     * @ElementName passiveFTP
     * @var bool|null
     */
    private $passiveFTP = null;

    /**
     * Getter for ftpHostNetAddress
     *
     * @ElementName ftpHostNetAddress
     * @return string|null
     */
    public function getFtpHostNetAddress()
    {
        return $this->ftpHostNetAddress;
    }

    /**
     * Setter for ftpHostNetAddress
     *
     * @ElementName ftpHostNetAddress
     * @param string|null $ftpHostNetAddress
     * @return $this
     */
    public function setFtpHostNetAddress($ftpHostNetAddress)
    {
        $this->ftpHostNetAddress = $ftpHostNetAddress;
        return $this;
    }

    /**
     * Getter for passiveFTP
     *
     * @ElementName passiveFTP
     * @return bool|null
     */
    public function getPassiveFTP()
    {
        return $this->passiveFTP;
    }

    /**
     * Setter for passiveFTP
     *
     * @ElementName passiveFTP
     * @param bool|null $passiveFTP
     * @return $this
     */
    public function setPassiveFTP($passiveFTP)
    {
        $this->passiveFTP = $passiveFTP;
        return $this;
    }


}

