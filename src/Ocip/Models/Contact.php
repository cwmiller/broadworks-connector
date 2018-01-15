<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * Contact
 *
 * Contact information.
 */
class Contact
{

    /**
     * @ElementName contactName
     * @var string|null
     */
    private $contactName = null;

    /**
     * @ElementName contactNumber
     * @var string|null
     */
    private $contactNumber = null;

    /**
     * @ElementName contactEmail
     * @var string|null
     */
    private $contactEmail = null;

    /**
     * Getter for contactName
     *
     * @ElementName contactName
     * @return string|null
     */
    public function getContactName()
    {
        return $this->contactName;
    }

    /**
     * Setter for contactName
     *
     * @ElementName contactName
     * @param string|null $contactName
     * @return $this
     */
    public function setContactName($contactName)
    {
        $this->contactName = $contactName;
        return $this;
    }

    /**
     * Getter for contactNumber
     *
     * @ElementName contactNumber
     * @return string|null
     */
    public function getContactNumber()
    {
        return $this->contactNumber;
    }

    /**
     * Setter for contactNumber
     *
     * @ElementName contactNumber
     * @param string|null $contactNumber
     * @return $this
     */
    public function setContactNumber($contactNumber)
    {
        $this->contactNumber = $contactNumber;
        return $this;
    }

    /**
     * Getter for contactEmail
     *
     * @ElementName contactEmail
     * @return string|null
     */
    public function getContactEmail()
    {
        return $this->contactEmail;
    }

    /**
     * Setter for contactEmail
     *
     * @ElementName contactEmail
     * @param string|null $contactEmail
     * @return $this
     */
    public function setContactEmail($contactEmail)
    {
        $this->contactEmail = $contactEmail;
        return $this;
    }


}

