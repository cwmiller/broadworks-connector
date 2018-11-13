<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemOCIReportingDeleteMessageNameListRequest
 *
 * Delete a list of reported messages from a host in the OCI Reporting
 *         Access Control List. The response is either a SuccessResponse or an
 *         ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 */
class SystemOCIReportingDeleteMessageNameListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName netAddress
     * @Type string
     * @var string|null
     */
    private $netAddress = null;

    /**
     * @ElementName deleteAllMessageNames
     * @Type bool
     * @var bool|null
     */
    private $deleteAllMessageNames = null;

    /**
     * @ElementName messageNameStartsWith
     * @Type string
     * @Array
     * @var string[]
     */
    private $messageNameStartsWith = array(
        
    );

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
     * Getter for deleteAllMessageNames
     *
     * @return bool
     */
    public function getDeleteAllMessageNames()
    {
        return $this->deleteAllMessageNames instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->deleteAllMessageNames;
    }

    /**
     * Setter for deleteAllMessageNames
     *
     * @param bool $deleteAllMessageNames
     * @return $this
     */
    public function setDeleteAllMessageNames($deleteAllMessageNames)
    {
        $this->deleteAllMessageNames = $deleteAllMessageNames;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDeleteAllMessageNames()
    {
        $this->deleteAllMessageNames = null;
        return $this;
    }

    /**
     * Getter for messageNameStartsWith
     *
     * @return string[]
     */
    public function getMessageNameStartsWith()
    {
        return $this->messageNameStartsWith instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->messageNameStartsWith;
    }

    /**
     * Setter for messageNameStartsWith
     *
     * @param string[] $messageNameStartsWith
     * @return $this
     */
    public function setMessageNameStartsWith(array $messageNameStartsWith)
    {
        $this->messageNameStartsWith = $messageNameStartsWith;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMessageNameStartsWith()
    {
        $this->messageNameStartsWith = null;
        return $this;
    }

    /**
     * Adder for messageNameStartsWith
     *
     * @param string $messageNameStartsWith
     * @return $this
     */
    public function addMessageNameStartsWith(string $messageNameStartsWith)
    {
        $this->messageNameStartsWith[] = $messageNameStartsWith;
        return $this;
    }


}

