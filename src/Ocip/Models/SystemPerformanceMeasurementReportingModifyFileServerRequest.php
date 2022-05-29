<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemPerformanceMeasurementReportingModifyFileServerRequest
 *
 * Modify a performance measurements reporting ftp server.
 *         The response is either SuccessResponse or ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"ab0042aa512abc10edb3c55e4b416b0b:28401","type":"sequence"}]
 */
class SystemPerformanceMeasurementReportingModifyFileServerRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName ftpHostNetAddress
     * @Type string
     * @Group ab0042aa512abc10edb3c55e4b416b0b:28401
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    protected $ftpHostNetAddress = null;

    /**
     * @ElementName passiveFTP
     * @Type bool
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:28401
     * @var bool|null
     */
    protected $passiveFTP = null;

    /**
     * Getter for ftpHostNetAddress
     *
     * @return string
     */
    public function getFtpHostNetAddress()
    {
        return $this->ftpHostNetAddress instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->ftpHostNetAddress;
    }

    /**
     * Setter for ftpHostNetAddress
     *
     * @param string $ftpHostNetAddress
     * @return $this
     */
    public function setFtpHostNetAddress($ftpHostNetAddress)
    {
        $this->ftpHostNetAddress = $ftpHostNetAddress;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetFtpHostNetAddress()
    {
        $this->ftpHostNetAddress = null;
        return $this;
    }

    /**
     * Getter for passiveFTP
     *
     * @return bool
     */
    public function getPassiveFTP()
    {
        return $this->passiveFTP instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->passiveFTP;
    }

    /**
     * Setter for passiveFTP
     *
     * @param bool $passiveFTP
     * @return $this
     */
    public function setPassiveFTP($passiveFTP)
    {
        $this->passiveFTP = $passiveFTP;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetPassiveFTP()
    {
        $this->passiveFTP = null;
        return $this;
    }


}

