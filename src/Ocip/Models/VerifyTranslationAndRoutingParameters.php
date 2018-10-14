<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * VerifyTranslationAndRoutingParameters
 *
 * Verification Translation and Routing parameters
 *         for creating a Verify Translation and Routing request from
 *         parameters.
 */
class VerifyTranslationAndRoutingParameters
{

    /**
     * @ElementName origination
     * @var \CWM\BroadWorksConnector\Ocip\Models\VerifyTranslationAndRoutingOrigination|null
     */
    private $origination = null;

    /**
     * @ElementName destination
     * @var string|null
     */
    private $destination = null;

    /**
     * @ElementName contact
     * @var string|null
     */
    private $contact = null;

    /**
     * @ElementName diversion
     * @var string|null
     */
    private $diversion = null;

    /**
     * Getter for origination
     *
     * @ElementName origination
     * @return \CWM\BroadWorksConnector\Ocip\Models\VerifyTranslationAndRoutingOrigination|null
     */
    public function getOrigination()
    {
        return $this->origination;
    }

    /**
     * Setter for origination
     *
     * @ElementName origination
     * @param \CWM\BroadWorksConnector\Ocip\Models\VerifyTranslationAndRoutingOrigination|null $origination
     * @return $this
     */
    public function setOrigination(\CWM\BroadWorksConnector\Ocip\Models\VerifyTranslationAndRoutingOrigination $origination)
    {
        $this->origination = $origination;
        return $this;
    }

    /**
     * Getter for destination
     *
     * @ElementName destination
     * @return string|null
     */
    public function getDestination()
    {
        return $this->destination;
    }

    /**
     * Setter for destination
     *
     * @ElementName destination
     * @param string|null $destination
     * @return $this
     */
    public function setDestination($destination)
    {
        $this->destination = $destination;
        return $this;
    }

    /**
     * Getter for contact
     *
     * @ElementName contact
     * @return string|null
     */
    public function getContact()
    {
        return $this->contact;
    }

    /**
     * Setter for contact
     *
     * @ElementName contact
     * @param string|null $contact
     * @return $this
     */
    public function setContact($contact)
    {
        $this->contact = $contact;
        return $this;
    }

    /**
     * Getter for diversion
     *
     * @ElementName diversion
     * @return string|null
     */
    public function getDiversion()
    {
        return $this->diversion;
    }

    /**
     * Setter for diversion
     *
     * @ElementName diversion
     * @param string|null $diversion
     * @return $this
     */
    public function setDiversion($diversion)
    {
        $this->diversion = $diversion;
        return $this;
    }


}

