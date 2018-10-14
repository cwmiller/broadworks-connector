<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupAccountAuthorizationCodesGetResponse
 *
 * Response to GroupAccountAuthorizationCodesGetRequest.
 *         The tables has the following column headings:
 *         "User Id", "Last Name", "First Name", "Hiragana Last Name", "Hiragana
 * First Name",
 *         "Phone Number", "Extension", "Department", "Email Address".
 *
 * @see GroupAccountAuthorizationCodesGetRequest
 */
class GroupAccountAuthorizationCodesGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName type
     * @var \CWM\BroadWorksConnector\Ocip\Models\AccountAuthorizationCodeType|null
     */
    private $type = null;

    /**
     * @ElementName numberOfDigits
     * @var int|null
     */
    private $numberOfDigits = null;

    /**
     * @ElementName allowLocalAndTollFreeCalls
     * @var bool|null
     */
    private $allowLocalAndTollFreeCalls = null;

    /**
     * @ElementName mandatoryUsageUserTable
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $mandatoryUsageUserTable = null;

    /**
     * @ElementName optionalUsageUserTable
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $optionalUsageUserTable = null;

    /**
     * Getter for type
     *
     * @ElementName type
     * @return \CWM\BroadWorksConnector\Ocip\Models\AccountAuthorizationCodeType|null
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Setter for type
     *
     * @ElementName type
     * @param \CWM\BroadWorksConnector\Ocip\Models\AccountAuthorizationCodeType|null $type
     * @return $this
     */
    public function setType(\CWM\BroadWorksConnector\Ocip\Models\AccountAuthorizationCodeType $type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Getter for numberOfDigits
     *
     * @ElementName numberOfDigits
     * @return int|null
     */
    public function getNumberOfDigits()
    {
        return $this->numberOfDigits;
    }

    /**
     * Setter for numberOfDigits
     *
     * @ElementName numberOfDigits
     * @param int|null $numberOfDigits
     * @return $this
     */
    public function setNumberOfDigits($numberOfDigits)
    {
        $this->numberOfDigits = $numberOfDigits;
        return $this;
    }

    /**
     * Getter for allowLocalAndTollFreeCalls
     *
     * @ElementName allowLocalAndTollFreeCalls
     * @return bool|null
     */
    public function getAllowLocalAndTollFreeCalls()
    {
        return $this->allowLocalAndTollFreeCalls;
    }

    /**
     * Setter for allowLocalAndTollFreeCalls
     *
     * @ElementName allowLocalAndTollFreeCalls
     * @param bool|null $allowLocalAndTollFreeCalls
     * @return $this
     */
    public function setAllowLocalAndTollFreeCalls($allowLocalAndTollFreeCalls)
    {
        $this->allowLocalAndTollFreeCalls = $allowLocalAndTollFreeCalls;
        return $this;
    }

    /**
     * Getter for mandatoryUsageUserTable
     *
     * @ElementName mandatoryUsageUserTable
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    public function getMandatoryUsageUserTable()
    {
        return $this->mandatoryUsageUserTable;
    }

    /**
     * Setter for mandatoryUsageUserTable
     *
     * @ElementName mandatoryUsageUserTable
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null $mandatoryUsageUserTable
     * @return $this
     */
    public function setMandatoryUsageUserTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $mandatoryUsageUserTable)
    {
        $this->mandatoryUsageUserTable = $mandatoryUsageUserTable;
        return $this;
    }

    /**
     * Getter for optionalUsageUserTable
     *
     * @ElementName optionalUsageUserTable
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    public function getOptionalUsageUserTable()
    {
        return $this->optionalUsageUserTable;
    }

    /**
     * Setter for optionalUsageUserTable
     *
     * @ElementName optionalUsageUserTable
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null $optionalUsageUserTable
     * @return $this
     */
    public function setOptionalUsageUserTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $optionalUsageUserTable)
    {
        $this->optionalUsageUserTable = $optionalUsageUserTable;
        return $this;
    }


}

