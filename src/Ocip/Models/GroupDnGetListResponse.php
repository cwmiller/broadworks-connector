<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupDnGetListResponse
 *
 * Response to the GroupDnGetListRequest.
 *         The response contains the list of DNs assigned to the group.
 *
 * @see GroupDnGetListRequest
 * @Groups [{"id":"4b0e7857796c636464362260a2f8e5ee:5033","type":"sequence"}]
 */
class GroupDnGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName phoneNumber
     * @Type string
     * @Array
     * @Optional
     * @Group 4b0e7857796c636464362260a2f8e5ee:5033
     * @MinLength 1
     * @MaxLength 23
     * @var string[]
     */
    protected $phoneNumber = [
        
    ];

    /**
     * Getter for phoneNumber
     *
     * @return string[]
     */
    public function getPhoneNumber()
    {
        return $this->phoneNumber instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->phoneNumber;
    }

    /**
     * Setter for phoneNumber
     *
     * @param string[] $phoneNumber
     * @return $this
     */
    public function setPhoneNumber(array $phoneNumber)
    {
        $this->phoneNumber = $phoneNumber;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetPhoneNumber()
    {
        $this->phoneNumber = null;
        return $this;
    }

    /**
     * Adder for phoneNumber
     *
     * @param string $phoneNumber
     * @return $this
     */
    public function addPhoneNumber(string $phoneNumber)
    {
        $this->phoneNumber[] = $phoneNumber;
        return $this;
    }
}

