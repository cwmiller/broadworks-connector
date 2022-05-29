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
 * @Groups [{"id":"7f663d5135470c33ca64b0eed3c3aa0c:13706","type":"sequence","children":[{"id":"7f663d5135470c33ca64b0eed3c3aa0c:13708","type":"choice"}]}]
 */
class SystemOCIReportingDeleteMessageNameListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName netAddress
     * @Type string
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:13706
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    protected $netAddress = null;

    /**
     * @ElementName deleteAllMessageNames
     * @Type bool
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:13708
     * @var bool|null
     */
    protected $deleteAllMessageNames = null;

    /**
     * @ElementName messageNameStartsWith
     * @Type string
     * @Array
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:13708
     * @MinLength 1
     * @MaxLength 256
     * @var string[]
     */
    protected $messageNameStartsWith = array(
        
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

