<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemNetworkClassOfServiceGetResponse19sp1
 *
 * Response to the SystemNetworkClassOfServiceGetRequest19sp1.
 *         The response contains the Network Class of Service information.
 */
class SystemNetworkClassOfServiceGetResponse19sp1 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName description
     * @var string|null
     */
    private $description = null;

    /**
     * @ElementName communicationBarringProfile0
     * @var \CWM\BroadWorksConnector\Ocip\Models\NetworkClassOfServiceCommunicationBarringProfile|null
     */
    private $communicationBarringProfile0 = null;

    /**
     * @ElementName communicationBarringProfile1
     * @var \CWM\BroadWorksConnector\Ocip\Models\NetworkClassOfServiceCommunicationBarringProfile|null
     */
    private $communicationBarringProfile1 = null;

    /**
     * @ElementName communicationBarringProfile2
     * @var \CWM\BroadWorksConnector\Ocip\Models\NetworkClassOfServiceCommunicationBarringProfile|null
     */
    private $communicationBarringProfile2 = null;

    /**
     * @ElementName communicationBarringProfile3
     * @var \CWM\BroadWorksConnector\Ocip\Models\NetworkClassOfServiceCommunicationBarringProfile|null
     */
    private $communicationBarringProfile3 = null;

    /**
     * @ElementName communicationBarringProfile4
     * @var \CWM\BroadWorksConnector\Ocip\Models\NetworkClassOfServiceCommunicationBarringProfile|null
     */
    private $communicationBarringProfile4 = null;

    /**
     * @ElementName communicationBarringProfile5
     * @var \CWM\BroadWorksConnector\Ocip\Models\NetworkClassOfServiceCommunicationBarringProfile|null
     */
    private $communicationBarringProfile5 = null;

    /**
     * @ElementName communicationBarringProfile6
     * @var \CWM\BroadWorksConnector\Ocip\Models\NetworkClassOfServiceCommunicationBarringProfile|null
     */
    private $communicationBarringProfile6 = null;

    /**
     * @ElementName communicationBarringProfile7
     * @var \CWM\BroadWorksConnector\Ocip\Models\NetworkClassOfServiceCommunicationBarringProfile|null
     */
    private $communicationBarringProfile7 = null;

    /**
     * @ElementName communicationBarringProfile8
     * @var \CWM\BroadWorksConnector\Ocip\Models\NetworkClassOfServiceCommunicationBarringProfile|null
     */
    private $communicationBarringProfile8 = null;

    /**
     * @ElementName communicationBarringProfile9
     * @var \CWM\BroadWorksConnector\Ocip\Models\NetworkClassOfServiceCommunicationBarringProfile|null
     */
    private $communicationBarringProfile9 = null;

    /**
     * @ElementName networkTranslationIndex
     * @var string|null
     */
    private $networkTranslationIndex = null;

    /**
     * @ElementName callProcessingPolicyProfileName
     * @var string|null
     */
    private $callProcessingPolicyProfileName = null;

    /**
     * Getter for description
     *
     * @ElementName description
     * @return string|null
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Setter for description
     *
     * @ElementName description
     * @param string|null $description
     * @return $this
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * Getter for communicationBarringProfile0
     *
     * @ElementName communicationBarringProfile0
     * @return \CWM\BroadWorksConnector\Ocip\Models\NetworkClassOfServiceCommunicationBarringProfile|null
     */
    public function getCommunicationBarringProfile0()
    {
        return $this->communicationBarringProfile0;
    }

    /**
     * Setter for communicationBarringProfile0
     *
     * @ElementName communicationBarringProfile0
     * @param \CWM\BroadWorksConnector\Ocip\Models\NetworkClassOfServiceCommunicationBarringProfile|null $communicationBarringProfile0
     * @return $this
     */
    public function setCommunicationBarringProfile0($communicationBarringProfile0)
    {
        $this->communicationBarringProfile0 = $communicationBarringProfile0;
        return $this;
    }

    /**
     * Getter for communicationBarringProfile1
     *
     * @ElementName communicationBarringProfile1
     * @return \CWM\BroadWorksConnector\Ocip\Models\NetworkClassOfServiceCommunicationBarringProfile|null
     */
    public function getCommunicationBarringProfile1()
    {
        return $this->communicationBarringProfile1;
    }

    /**
     * Setter for communicationBarringProfile1
     *
     * @ElementName communicationBarringProfile1
     * @param \CWM\BroadWorksConnector\Ocip\Models\NetworkClassOfServiceCommunicationBarringProfile|null $communicationBarringProfile1
     * @return $this
     */
    public function setCommunicationBarringProfile1($communicationBarringProfile1)
    {
        $this->communicationBarringProfile1 = $communicationBarringProfile1;
        return $this;
    }

    /**
     * Getter for communicationBarringProfile2
     *
     * @ElementName communicationBarringProfile2
     * @return \CWM\BroadWorksConnector\Ocip\Models\NetworkClassOfServiceCommunicationBarringProfile|null
     */
    public function getCommunicationBarringProfile2()
    {
        return $this->communicationBarringProfile2;
    }

    /**
     * Setter for communicationBarringProfile2
     *
     * @ElementName communicationBarringProfile2
     * @param \CWM\BroadWorksConnector\Ocip\Models\NetworkClassOfServiceCommunicationBarringProfile|null $communicationBarringProfile2
     * @return $this
     */
    public function setCommunicationBarringProfile2($communicationBarringProfile2)
    {
        $this->communicationBarringProfile2 = $communicationBarringProfile2;
        return $this;
    }

    /**
     * Getter for communicationBarringProfile3
     *
     * @ElementName communicationBarringProfile3
     * @return \CWM\BroadWorksConnector\Ocip\Models\NetworkClassOfServiceCommunicationBarringProfile|null
     */
    public function getCommunicationBarringProfile3()
    {
        return $this->communicationBarringProfile3;
    }

    /**
     * Setter for communicationBarringProfile3
     *
     * @ElementName communicationBarringProfile3
     * @param \CWM\BroadWorksConnector\Ocip\Models\NetworkClassOfServiceCommunicationBarringProfile|null $communicationBarringProfile3
     * @return $this
     */
    public function setCommunicationBarringProfile3($communicationBarringProfile3)
    {
        $this->communicationBarringProfile3 = $communicationBarringProfile3;
        return $this;
    }

    /**
     * Getter for communicationBarringProfile4
     *
     * @ElementName communicationBarringProfile4
     * @return \CWM\BroadWorksConnector\Ocip\Models\NetworkClassOfServiceCommunicationBarringProfile|null
     */
    public function getCommunicationBarringProfile4()
    {
        return $this->communicationBarringProfile4;
    }

    /**
     * Setter for communicationBarringProfile4
     *
     * @ElementName communicationBarringProfile4
     * @param \CWM\BroadWorksConnector\Ocip\Models\NetworkClassOfServiceCommunicationBarringProfile|null $communicationBarringProfile4
     * @return $this
     */
    public function setCommunicationBarringProfile4($communicationBarringProfile4)
    {
        $this->communicationBarringProfile4 = $communicationBarringProfile4;
        return $this;
    }

    /**
     * Getter for communicationBarringProfile5
     *
     * @ElementName communicationBarringProfile5
     * @return \CWM\BroadWorksConnector\Ocip\Models\NetworkClassOfServiceCommunicationBarringProfile|null
     */
    public function getCommunicationBarringProfile5()
    {
        return $this->communicationBarringProfile5;
    }

    /**
     * Setter for communicationBarringProfile5
     *
     * @ElementName communicationBarringProfile5
     * @param \CWM\BroadWorksConnector\Ocip\Models\NetworkClassOfServiceCommunicationBarringProfile|null $communicationBarringProfile5
     * @return $this
     */
    public function setCommunicationBarringProfile5($communicationBarringProfile5)
    {
        $this->communicationBarringProfile5 = $communicationBarringProfile5;
        return $this;
    }

    /**
     * Getter for communicationBarringProfile6
     *
     * @ElementName communicationBarringProfile6
     * @return \CWM\BroadWorksConnector\Ocip\Models\NetworkClassOfServiceCommunicationBarringProfile|null
     */
    public function getCommunicationBarringProfile6()
    {
        return $this->communicationBarringProfile6;
    }

    /**
     * Setter for communicationBarringProfile6
     *
     * @ElementName communicationBarringProfile6
     * @param \CWM\BroadWorksConnector\Ocip\Models\NetworkClassOfServiceCommunicationBarringProfile|null $communicationBarringProfile6
     * @return $this
     */
    public function setCommunicationBarringProfile6($communicationBarringProfile6)
    {
        $this->communicationBarringProfile6 = $communicationBarringProfile6;
        return $this;
    }

    /**
     * Getter for communicationBarringProfile7
     *
     * @ElementName communicationBarringProfile7
     * @return \CWM\BroadWorksConnector\Ocip\Models\NetworkClassOfServiceCommunicationBarringProfile|null
     */
    public function getCommunicationBarringProfile7()
    {
        return $this->communicationBarringProfile7;
    }

    /**
     * Setter for communicationBarringProfile7
     *
     * @ElementName communicationBarringProfile7
     * @param \CWM\BroadWorksConnector\Ocip\Models\NetworkClassOfServiceCommunicationBarringProfile|null $communicationBarringProfile7
     * @return $this
     */
    public function setCommunicationBarringProfile7($communicationBarringProfile7)
    {
        $this->communicationBarringProfile7 = $communicationBarringProfile7;
        return $this;
    }

    /**
     * Getter for communicationBarringProfile8
     *
     * @ElementName communicationBarringProfile8
     * @return \CWM\BroadWorksConnector\Ocip\Models\NetworkClassOfServiceCommunicationBarringProfile|null
     */
    public function getCommunicationBarringProfile8()
    {
        return $this->communicationBarringProfile8;
    }

    /**
     * Setter for communicationBarringProfile8
     *
     * @ElementName communicationBarringProfile8
     * @param \CWM\BroadWorksConnector\Ocip\Models\NetworkClassOfServiceCommunicationBarringProfile|null $communicationBarringProfile8
     * @return $this
     */
    public function setCommunicationBarringProfile8($communicationBarringProfile8)
    {
        $this->communicationBarringProfile8 = $communicationBarringProfile8;
        return $this;
    }

    /**
     * Getter for communicationBarringProfile9
     *
     * @ElementName communicationBarringProfile9
     * @return \CWM\BroadWorksConnector\Ocip\Models\NetworkClassOfServiceCommunicationBarringProfile|null
     */
    public function getCommunicationBarringProfile9()
    {
        return $this->communicationBarringProfile9;
    }

    /**
     * Setter for communicationBarringProfile9
     *
     * @ElementName communicationBarringProfile9
     * @param \CWM\BroadWorksConnector\Ocip\Models\NetworkClassOfServiceCommunicationBarringProfile|null $communicationBarringProfile9
     * @return $this
     */
    public function setCommunicationBarringProfile9($communicationBarringProfile9)
    {
        $this->communicationBarringProfile9 = $communicationBarringProfile9;
        return $this;
    }

    /**
     * Getter for networkTranslationIndex
     *
     * @ElementName networkTranslationIndex
     * @return string|null
     */
    public function getNetworkTranslationIndex()
    {
        return $this->networkTranslationIndex;
    }

    /**
     * Setter for networkTranslationIndex
     *
     * @ElementName networkTranslationIndex
     * @param string|null $networkTranslationIndex
     * @return $this
     */
    public function setNetworkTranslationIndex($networkTranslationIndex)
    {
        $this->networkTranslationIndex = $networkTranslationIndex;
        return $this;
    }

    /**
     * Getter for callProcessingPolicyProfileName
     *
     * @ElementName callProcessingPolicyProfileName
     * @return string|null
     */
    public function getCallProcessingPolicyProfileName()
    {
        return $this->callProcessingPolicyProfileName;
    }

    /**
     * Setter for callProcessingPolicyProfileName
     *
     * @ElementName callProcessingPolicyProfileName
     * @param string|null $callProcessingPolicyProfileName
     * @return $this
     */
    public function setCallProcessingPolicyProfileName($callProcessingPolicyProfileName)
    {
        $this->callProcessingPolicyProfileName = $callProcessingPolicyProfileName;
        return $this;
    }


}

