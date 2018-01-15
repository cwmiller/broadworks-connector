<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemOCIReportingDeleteMessageNameListRequest
 *
 * Delete a list of reported messages from a host in the OCI Reporting
 *         Access Control List. The response is either a SuccessResponse or an
 *         ErrorResponse.
 */
class SystemOCIReportingDeleteMessageNameListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName netAddress
     * @var string|null
     */
    private $netAddress = null;

    /**
     * @ElementName deleteAllMessageNames
     * @var bool|null
     */
    private $deleteAllMessageNames = null;

    /**
     * @ElementName messageNameStartsWith
     * @var string[]
     */
    private $messageNameStartsWith = array(
        
    );

    /**
     * Getter for netAddress
     *
     * @ElementName netAddress
     * @return string|null
     */
    public function getNetAddress()
    {
        return $this->netAddress;
    }

    /**
     * Setter for netAddress
     *
     * @ElementName netAddress
     * @param string|null $netAddress
     * @return $this
     */
    public function setNetAddress($netAddress)
    {
        $this->netAddress = $netAddress;
        return $this;
    }

    /**
     * Getter for deleteAllMessageNames
     *
     * @ElementName deleteAllMessageNames
     * @return bool|null
     */
    public function getDeleteAllMessageNames()
    {
        return $this->deleteAllMessageNames;
    }

    /**
     * Setter for deleteAllMessageNames
     *
     * @ElementName deleteAllMessageNames
     * @param bool|null $deleteAllMessageNames
     * @return $this
     */
    public function setDeleteAllMessageNames($deleteAllMessageNames)
    {
        $this->deleteAllMessageNames = $deleteAllMessageNames;
        return $this;
    }

    /**
     * Getter for messageNameStartsWith
     *
     * @ElementName messageNameStartsWith
     * @return string[]
     */
    public function getMessageNameStartsWith()
    {
        return $this->messageNameStartsWith;
    }

    /**
     * Setter for messageNameStartsWith
     *
     * @ElementName messageNameStartsWith
     * @param string[] $messageNameStartsWith
     * @return $this
     */
    public function setMessageNameStartsWith($messageNameStartsWith)
    {
        $this->messageNameStartsWith = $messageNameStartsWith;
        return $this;
    }

    /**
     * Adder for messageNameStartsWith
     *
     * @ElementName messageNameStartsWith
     * @param string $messageNameStartsWith
     * @return $this
     */
    public function addMessageNameStartsWith($messageNameStartsWith)
    {
        $this->messageNameStartsWith []= $messageNameStartsWith;
        return $this;
    }


}

