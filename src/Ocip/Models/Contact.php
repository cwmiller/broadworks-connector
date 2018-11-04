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
     * @Nillable
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $contactName = null;

    /**
     * @ElementName contactNumber
     * @Nillable
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $contactNumber = null;

    /**
     * @ElementName contactEmail
     * @Nillable
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $contactEmail = null;

    /**
     * Getter for contactName
     *
     * @ElementName contactName
     * @Nillable
     * @return string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getContactName()
    {
        return $this->contactName;
    }

    /**
     * Setter for contactName
     *
     * @ElementName contactName
     * @Nillable
     * @param string|null|\CWM\BroadWorksConnector\Ocip\Nil $contactName
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
     * @Nillable
     * @return string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getContactNumber()
    {
        return $this->contactNumber;
    }

    /**
     * Setter for contactNumber
     *
     * @ElementName contactNumber
     * @Nillable
     * @param string|null|\CWM\BroadWorksConnector\Ocip\Nil $contactNumber
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
     * @Nillable
     * @return string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getContactEmail()
    {
        return $this->contactEmail;
    }

    /**
     * Setter for contactEmail
     *
     * @ElementName contactEmail
     * @Nillable
     * @param string|null|\CWM\BroadWorksConnector\Ocip\Nil $contactEmail
     * @return $this
     */
    public function setContactEmail($contactEmail)
    {
        $this->contactEmail = $contactEmail;
        return $this;
    }


}

