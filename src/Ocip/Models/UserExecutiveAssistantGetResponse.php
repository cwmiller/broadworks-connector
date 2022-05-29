<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserExecutiveAssistantGetResponse
 *
 * Response to the UserExecutiveAssistantGetRequest.
 *         Contains the executive assistant setting and a table of executives this assistant has been assigned to.
 *         The criteria table's column headings are: "User Id", "Last Name", "First Name", ", "Hiragana Last Name", 
 *         "Hiragana First Name", "Phone Number", "Extension", "Department", "Email Address", 
 *         "Assistant Opt-in Status" and "Executive Allow Opt-in".
 *         The possible values for "Assistant Opt-in Status" and "Executive Allow Opt-in" columns are "true" and "false".
 *
 * @see UserExecutiveAssistantGetRequest
 * @Groups [{"id":"edd49e38c60ed5c00d394f2a35697c84:62","type":"sequence"}]
 */
class UserExecutiveAssistantGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName enableDivert
     * @Type bool
     * @Group edd49e38c60ed5c00d394f2a35697c84:62
     * @var bool|null
     */
    protected $enableDivert = null;

    /**
     * @ElementName divertToPhoneNumber
     * @Type string
     * @Optional
     * @Group edd49e38c60ed5c00d394f2a35697c84:62
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    protected $divertToPhoneNumber = null;

    /**
     * @ElementName executiveTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group edd49e38c60ed5c00d394f2a35697c84:62
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    protected $executiveTable = null;

    /**
     * Getter for enableDivert
     *
     * @return bool
     */
    public function getEnableDivert()
    {
        return $this->enableDivert instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->enableDivert;
    }

    /**
     * Setter for enableDivert
     *
     * @param bool $enableDivert
     * @return $this
     */
    public function setEnableDivert($enableDivert)
    {
        $this->enableDivert = $enableDivert;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEnableDivert()
    {
        $this->enableDivert = null;
        return $this;
    }

    /**
     * Getter for divertToPhoneNumber
     *
     * @return string
     */
    public function getDivertToPhoneNumber()
    {
        return $this->divertToPhoneNumber instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->divertToPhoneNumber;
    }

    /**
     * Setter for divertToPhoneNumber
     *
     * @param string $divertToPhoneNumber
     * @return $this
     */
    public function setDivertToPhoneNumber($divertToPhoneNumber)
    {
        $this->divertToPhoneNumber = $divertToPhoneNumber;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDivertToPhoneNumber()
    {
        $this->divertToPhoneNumber = null;
        return $this;
    }

    /**
     * Getter for executiveTable
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     */
    public function getExecutiveTable()
    {
        return $this->executiveTable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->executiveTable;
    }

    /**
     * Setter for executiveTable
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable $executiveTable
     * @return $this
     */
    public function setExecutiveTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $executiveTable)
    {
        $this->executiveTable = $executiveTable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetExecutiveTable()
    {
        $this->executiveTable = null;
        return $this;
    }


}

