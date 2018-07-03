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
     * @var string|null
     */
    private $ftpHostNetAddress = null;

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


}

