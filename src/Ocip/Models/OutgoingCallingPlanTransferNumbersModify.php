<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * OutgoingCallingPlanTransferNumbersModify
 *
 * Outgoing Calling Plan transfer numbers.
 */
class OutgoingCallingPlanTransferNumbersModify
{

    /**
     * @ElementName phoneNumber01
     * @var string|null
     */
    private $phoneNumber01 = null;

    /**
     * @ElementName phoneNumber02
     * @var string|null
     */
    private $phoneNumber02 = null;

    /**
     * @ElementName phoneNumber03
     * @var string|null
     */
    private $phoneNumber03 = null;

    /**
     * Getter for phoneNumber01
     *
     * @ElementName phoneNumber01
     * @return string|null
     */
    public function getPhoneNumber01()
    {
        return $this->phoneNumber01;
    }

    /**
     * Setter for phoneNumber01
     *
     * @ElementName phoneNumber01
     * @param string|null $phoneNumber01
     * @return $this
     */
    public function setPhoneNumber01($phoneNumber01)
    {
        $this->phoneNumber01 = $phoneNumber01;
        return $this;
    }

    /**
     * Getter for phoneNumber02
     *
     * @ElementName phoneNumber02
     * @return string|null
     */
    public function getPhoneNumber02()
    {
        return $this->phoneNumber02;
    }

    /**
     * Setter for phoneNumber02
     *
     * @ElementName phoneNumber02
     * @param string|null $phoneNumber02
     * @return $this
     */
    public function setPhoneNumber02($phoneNumber02)
    {
        $this->phoneNumber02 = $phoneNumber02;
        return $this;
    }

    /**
     * Getter for phoneNumber03
     *
     * @ElementName phoneNumber03
     * @return string|null
     */
    public function getPhoneNumber03()
    {
        return $this->phoneNumber03;
    }

    /**
     * Setter for phoneNumber03
     *
     * @ElementName phoneNumber03
     * @param string|null $phoneNumber03
     * @return $this
     */
    public function setPhoneNumber03($phoneNumber03)
    {
        $this->phoneNumber03 = $phoneNumber03;
        return $this;
    }


}

