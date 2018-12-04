<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * OutgoingCallingPlanTransferNumbersModify
 *
 * Outgoing Calling Plan transfer numbers.
 *
 * @Groups [{"id":"8366f5f5d1fbfb9742236aba282c1dab:2221","type":"sequence"}]
 */
class OutgoingCallingPlanTransferNumbersModify
{

    /**
     * @ElementName phoneNumber01
     * @Type string
     * @Nillable
     * @Optional
     * @Group 8366f5f5d1fbfb9742236aba282c1dab:2221
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $phoneNumber01 = null;

    /**
     * @ElementName phoneNumber02
     * @Type string
     * @Nillable
     * @Optional
     * @Group 8366f5f5d1fbfb9742236aba282c1dab:2221
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $phoneNumber02 = null;

    /**
     * @ElementName phoneNumber03
     * @Type string
     * @Nillable
     * @Optional
     * @Group 8366f5f5d1fbfb9742236aba282c1dab:2221
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $phoneNumber03 = null;

    /**
     * Getter for phoneNumber01
     *
     * @return string|null
     */
    public function getPhoneNumber01()
    {
        return $this->phoneNumber01 instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->phoneNumber01;
    }

    /**
     * Setter for phoneNumber01
     *
     * @param string|null $phoneNumber01
     * @return $this
     */
    public function setPhoneNumber01($phoneNumber01)
    {
        if ($phoneNumber01 === null) {
            $this->phoneNumber01 = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->phoneNumber01 = $phoneNumber01;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetPhoneNumber01()
    {
        $this->phoneNumber01 = null;
        return $this;
    }

    /**
     * Getter for phoneNumber02
     *
     * @return string|null
     */
    public function getPhoneNumber02()
    {
        return $this->phoneNumber02 instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->phoneNumber02;
    }

    /**
     * Setter for phoneNumber02
     *
     * @param string|null $phoneNumber02
     * @return $this
     */
    public function setPhoneNumber02($phoneNumber02)
    {
        if ($phoneNumber02 === null) {
            $this->phoneNumber02 = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->phoneNumber02 = $phoneNumber02;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetPhoneNumber02()
    {
        $this->phoneNumber02 = null;
        return $this;
    }

    /**
     * Getter for phoneNumber03
     *
     * @return string|null
     */
    public function getPhoneNumber03()
    {
        return $this->phoneNumber03 instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->phoneNumber03;
    }

    /**
     * Setter for phoneNumber03
     *
     * @param string|null $phoneNumber03
     * @return $this
     */
    public function setPhoneNumber03($phoneNumber03)
    {
        if ($phoneNumber03 === null) {
            $this->phoneNumber03 = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->phoneNumber03 = $phoneNumber03;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetPhoneNumber03()
    {
        $this->phoneNumber03 = null;
        return $this;
    }


}

