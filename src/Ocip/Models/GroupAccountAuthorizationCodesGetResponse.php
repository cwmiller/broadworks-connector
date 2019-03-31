<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupAccountAuthorizationCodesGetResponse
 *
 * Response to GroupAccountAuthorizationCodesGetRequest.
 *         The tables has the following column headings:
 *         "User Id", "Last Name", "First Name", "Hiragana Last Name", "Hiragana First Name",
 *         "Phone Number", "Extension", "Department", "Email Address".
 *
 * @see GroupAccountAuthorizationCodesGetRequest
 * @Groups [{"id":"65df37199ec43e5d21a187db39d63158:176","type":"sequence"}]
 */
class GroupAccountAuthorizationCodesGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName type
     * @Type \CWM\BroadWorksConnector\Ocip\Models\AccountAuthorizationCodeType
     * @Group 65df37199ec43e5d21a187db39d63158:176
     * @var \CWM\BroadWorksConnector\Ocip\Models\AccountAuthorizationCodeType|null
     */
    private $type = null;

    /**
     * @ElementName numberOfDigits
     * @Type int
     * @Group 65df37199ec43e5d21a187db39d63158:176
     * @MinInclusive 2
     * @MaxInclusive 14
     * @var int|null
     */
    private $numberOfDigits = null;

    /**
     * @ElementName allowLocalAndTollFreeCalls
     * @Type bool
     * @Group 65df37199ec43e5d21a187db39d63158:176
     * @var bool|null
     */
    private $allowLocalAndTollFreeCalls = null;

    /**
     * @ElementName mandatoryUsageUserTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group 65df37199ec43e5d21a187db39d63158:176
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $mandatoryUsageUserTable = null;

    /**
     * @ElementName optionalUsageUserTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group 65df37199ec43e5d21a187db39d63158:176
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $optionalUsageUserTable = null;

    /**
     * Getter for type
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\AccountAuthorizationCodeType
     */
    public function getType()
    {
        return $this->type instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->type;
    }

    /**
     * Setter for type
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\AccountAuthorizationCodeType $type
     * @return $this
     */
    public function setType(\CWM\BroadWorksConnector\Ocip\Models\AccountAuthorizationCodeType $type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetType()
    {
        $this->type = null;
        return $this;
    }

    /**
     * Getter for numberOfDigits
     *
     * @return int
     */
    public function getNumberOfDigits()
    {
        return $this->numberOfDigits instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->numberOfDigits;
    }

    /**
     * Setter for numberOfDigits
     *
     * @param int $numberOfDigits
     * @return $this
     */
    public function setNumberOfDigits($numberOfDigits)
    {
        $this->numberOfDigits = $numberOfDigits;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetNumberOfDigits()
    {
        $this->numberOfDigits = null;
        return $this;
    }

    /**
     * Getter for allowLocalAndTollFreeCalls
     *
     * @return bool
     */
    public function getAllowLocalAndTollFreeCalls()
    {
        return $this->allowLocalAndTollFreeCalls instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->allowLocalAndTollFreeCalls;
    }

    /**
     * Setter for allowLocalAndTollFreeCalls
     *
     * @param bool $allowLocalAndTollFreeCalls
     * @return $this
     */
    public function setAllowLocalAndTollFreeCalls($allowLocalAndTollFreeCalls)
    {
        $this->allowLocalAndTollFreeCalls = $allowLocalAndTollFreeCalls;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAllowLocalAndTollFreeCalls()
    {
        $this->allowLocalAndTollFreeCalls = null;
        return $this;
    }

    /**
     * Getter for mandatoryUsageUserTable
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     */
    public function getMandatoryUsageUserTable()
    {
        return $this->mandatoryUsageUserTable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->mandatoryUsageUserTable;
    }

    /**
     * Setter for mandatoryUsageUserTable
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable $mandatoryUsageUserTable
     * @return $this
     */
    public function setMandatoryUsageUserTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $mandatoryUsageUserTable)
    {
        $this->mandatoryUsageUserTable = $mandatoryUsageUserTable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMandatoryUsageUserTable()
    {
        $this->mandatoryUsageUserTable = null;
        return $this;
    }

    /**
     * Getter for optionalUsageUserTable
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     */
    public function getOptionalUsageUserTable()
    {
        return $this->optionalUsageUserTable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->optionalUsageUserTable;
    }

    /**
     * Setter for optionalUsageUserTable
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable $optionalUsageUserTable
     * @return $this
     */
    public function setOptionalUsageUserTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $optionalUsageUserTable)
    {
        $this->optionalUsageUserTable = $optionalUsageUserTable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetOptionalUsageUserTable()
    {
        $this->optionalUsageUserTable = null;
        return $this;
    }


}

