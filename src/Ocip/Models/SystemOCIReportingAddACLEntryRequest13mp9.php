<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemOCIReportingAddACLEntryRequest13mp9
 *
 * Add an entry to the OCI Reporting Access Control List.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"610f84d3e188f0477c3ae1a82ee036da:11898","type":"sequence"}]
 */
class SystemOCIReportingAddACLEntryRequest13mp9 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName netAddress
     * @Type string
     * @Group 610f84d3e188f0477c3ae1a82ee036da:11898
     * @var string|null
     */
    private $netAddress = null;

    /**
     * @ElementName description
     * @Type string
     * @Optional
     * @Group 610f84d3e188f0477c3ae1a82ee036da:11898
     * @var string|null
     */
    private $description = null;

    /**
     * @ElementName restrictMessages
     * @Type bool
     * @Group 610f84d3e188f0477c3ae1a82ee036da:11898
     * @var bool|null
     */
    private $restrictMessages = null;

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
     * Getter for description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->description;
    }

    /**
     * Setter for description
     *
     * @param string $description
     * @return $this
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDescription()
    {
        $this->description = null;
        return $this;
    }

    /**
     * Getter for restrictMessages
     *
     * @return bool
     */
    public function getRestrictMessages()
    {
        return $this->restrictMessages instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->restrictMessages;
    }

    /**
     * Setter for restrictMessages
     *
     * @param bool $restrictMessages
     * @return $this
     */
    public function setRestrictMessages($restrictMessages)
    {
        $this->restrictMessages = $restrictMessages;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetRestrictMessages()
    {
        $this->restrictMessages = null;
        return $this;
    }


}

