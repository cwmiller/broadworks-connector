<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupDnGetAvailableRangesListResponse
 *
 * Response to the GroupDnGetAvailableRangesListRequest.
 *         The response contains the list of group DNs that are not assigned to user, service instances or IMRN pool.
 *         The Dns are returned in a list of DNs or DN ranges and formated in E164 format for display.
 *
 * @see GroupDnGetAvailableRangesListRequest
 * @Groups [{"id":"4b0e7857796c636464362260a2f8e5ee:4958","type":"sequence"}]
 */
class GroupDnGetAvailableRangesListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName phoneNumber
     * @Type string
     * @Array
     * @Optional
     * @Group 4b0e7857796c636464362260a2f8e5ee:4958
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

