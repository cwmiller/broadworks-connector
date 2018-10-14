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
 */
class SystemInterceptUserDeleteDnListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName phoneNumbers
     * @var string[]
     */
    private $phoneNumbers = array(
        
    );

    /**
     * Getter for phoneNumbers
     *
     * @ElementName phoneNumbers
     * @return string[]
     */
    public function getPhoneNumbers()
    {
        return $this->phoneNumbers;
    }

    /**
     * Setter for phoneNumbers
     *
     * @ElementName phoneNumbers
     * @param string[] $phoneNumbers
     * @return $this
     */
    public function setPhoneNumbers(array $phoneNumbers)
    {
        $this->phoneNumbers = $phoneNumbers;
        return $this;
    }

    /**
     * Adder for phoneNumbers
     *
     * @ElementName phoneNumbers
     * @param string $phoneNumbers
     * @return $this
     */
    public function addPhoneNumbers(string $phoneNumbers)
    {
        $this->phoneNumbers []= $phoneNumbers;
        return $this;
    }


}

