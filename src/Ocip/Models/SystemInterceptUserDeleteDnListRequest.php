<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemInterceptUserDeleteDnListRequest
 *
 * Request to delete an Intercept User number(s) from the system.
 *          The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"88893c72abbbb9aaf5aecca970191d94:159","type":"sequence"}]
 */
class SystemInterceptUserDeleteDnListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName phoneNumbers
     * @Type string
     * @Array
     * @Group 88893c72abbbb9aaf5aecca970191d94:159
     * @var string[]
     */
    private $phoneNumbers = array(
        
    );

    /**
     * Getter for phoneNumbers
     *
     * @return string[]
     */
    public function getPhoneNumbers()
    {
        return $this->phoneNumbers instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->phoneNumbers;
    }

    /**
     * Setter for phoneNumbers
     *
     * @param string[] $phoneNumbers
     * @return $this
     */
    public function setPhoneNumbers(array $phoneNumbers)
    {
        $this->phoneNumbers = $phoneNumbers;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetPhoneNumbers()
    {
        $this->phoneNumbers = null;
        return $this;
    }

    /**
     * Adder for phoneNumbers
     *
     * @param string $phoneNumbers
     * @return $this
     */
    public function addPhoneNumbers(string $phoneNumbers)
    {
        $this->phoneNumbers[] = $phoneNumbers;
        return $this;
    }


}

