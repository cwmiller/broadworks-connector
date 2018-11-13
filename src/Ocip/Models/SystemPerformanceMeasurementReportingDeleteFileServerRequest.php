<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemPerformanceMeasurementReportingDeleteFileServerRequest
 *
 * Delete a performance measurements reporting ftp server.
 *         The response is either SuccessResponse or ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 */
class SystemPerformanceMeasurementReportingDeleteFileServerRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName ftpHostNetAddress
     * @Type string
     * @var string|null
     */
    private $ftpHostNetAddress = null;

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


}

